<?php
/**
 * 2007-2022 Boostmyshop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2022 Boostmyshop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

class SalesHistory
{
    public static function getForOneProduct($productId, $attributeId, $stock)
    {
        $stats = array();

        $stats['periods'] = self::getSalesPeriods($productId, $attributeId);
        $stats['average_sales_per_day'] = self::getAverageSalesPerDay($stats['periods']);
        $stats['runout'] = self::getRunOutInDays($stats['periods'], $stock);
        $stats['has_sales'] = self::getHasSales($stats['periods']);

        //sort months
        usort($stats['periods'],     function ($a, $b)
        {
            $a = date_parse($a['label']);
            $b = date_parse($b['label']);
            if ($a == $b) return 0;
            return ($a < $b) ? -1 : 1;
        });

        return $stats;
    }


    public static function getSalesPeriods($productId, $attributeId)
    {
        if (!$attributeId)
            $attributeId = 0;

        $states = Configuration::get('BMS_SALES_HISTORY_STATUSES');
        if (!$states)
            $states = '-1';

        $sql = '
            select
                SUM(product_quantity) as sales_count,
                '.self::getDateGroupBy().' as period,
                '.self::getDateGroupByLabel().' as label
            from
                '._DB_PREFIX_.'orders o
                inner join '._DB_PREFIX_.'order_detail od on (od.id_order = o.id_order)
            where
                product_id = '.$productId.'
                and product_attribute_id = '.$attributeId.'
                and o.date_add >= "'.self::getFrom().'"
                and o.current_state in ('.$states.')
            group by
                '.self::getDateGroupBy().'
            order by
                '.self::getDateGroupBy().'
        ';

        $data =  Db::getInstance()->executeS($sql);

        $data = self::hydateDataWithMissingPeriods($data);

        return $data;
    }

    protected static function getDateGroupBy($field = 'date_add')
    {
        $code = '';

        switch(Configuration::get('BMS_SALES_HISTORY_RANGE'))
        {
            case 'y':
                $code = '%Y';
                break;
            case 'q':
                $code = '%Y';
                break;
            case 'm':
                $code = '%y %M';
                break;
            case 'w':
                $code = '%y %u';
                break;
            case 'd':
                $code = '%y %m %d';
                break;
        }

        return 'DATE_FORMAT('.$field.', "'.$code.'")';
    }

    protected static function getDateGroupByLabel($field = 'date_add')
    {
        $code = '';

        switch(Configuration::get('BMS_SALES_HISTORY_RANGE'))
        {
            case 'y':
                $code = '%y';
                break;
            case 'q':
                $code = '%y';
                break;
            case 'm':
                $code = '%M';
                break;
            case 'w':
                $code = '%u';
                break;
            case 'd':
                $code = '%m %d';
                break;
        }

        return 'SUBSTRING(DATE_FORMAT('.$field.', "'.$code.'"), 1, 3)';
    }

    protected static function getFrom()
    {
        $count = Configuration::get('BMS_SALES_HISTORY_RANGE_COUNT');

        $multiplicator = self::getDaysForPeriod();

        $from = time() - 3600 * 24 * $multiplicator * $count;
        return  date('Y-m-01 00:00:00', strtotime('+1 month', $from));
    }

    protected static function hydateDataWithMissingPeriods($data)
    {
        $sql = '
            select
                ""  as sales_count,
                '.self::getDateGroupBy('jour').' as period,
                '.self::getDateGroupByLabel('jour').' as label
            from
                '._DB_PREFIX_.'bms_procurement_date
            where
                jour >= "'.self::getFrom().'"
                and jour <= "'.date('Y-m-d').'"
            group by
                '.self::getDateGroupBy('jour').'
            order by
                '.self::getDateGroupBy('jour').'
        ';
        $allKeys =  Db::getInstance()->executeS($sql);

        $dataWithKey = array();
        foreach($data as $item)
        {
            $dataWithKey[$item['period']] = $item;
        }

        $newData = array();
        foreach($allKeys as $keyItem)
        {
            if (isset($dataWithKey[$keyItem['period']]))
                $newData[] = $dataWithKey[$keyItem['period']];
            else
                $newData[] = $keyItem;
        }

        return $newData;
    }

    protected static function getAverageSalesPerDay($ranges)
    {
        $salesCount = 0;
        $totalDays = 0;

        foreach($ranges as $range)
        {
            $salesCount += (int)$range['sales_count'];
            if($range['label'] == date("M"))
                $totalDays += (int)date("d");
            else
                $totalDays += self::getDaysForPeriod();
        }
        if($salesCount == 0 && $totalDays == 0 )
        {
        return 0;
        }else
        {
        return number_format(($salesCount / $totalDays), 2, '.', '');
        }
    }

    protected static function getRunOutInDays($data, $stock)
    {
        $salesPerDay = self::getAverageSalesPerDay($data);

        if ($salesPerDay > 0)
            return (int)($stock / $salesPerDay);

        return false;
    }

    protected static function getHasSales($data)
    {
        foreach($data as $item)
        {
            if ($item['sales_count'] > 0)
                return true;
        }

        return false;
    }

    protected static function getDaysForPeriod()
    {
        $days = 1;
        switch(Configuration::get('BMS_SALES_HISTORY_RANGE'))
        {
            case 'y':
                $days = 365;
                break;
            case 'q':
                $days = 91;
                break;
            case 'm':
                $days = 30;
                break;
            case 'w':
                $days = 7;
                break;
            case 'd':
                $days = 1;
                break;
        }
        return $days;
    }

}