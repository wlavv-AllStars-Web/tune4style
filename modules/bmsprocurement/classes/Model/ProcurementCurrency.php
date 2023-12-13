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

class BmsProcurementCurrency extends ObjectModel
{

    public $id;

    /** @var string Name */
    public $name;

    /** @var string Name */
    public $iso_code;

    /**
     *
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'bms_procurement_currency',
        'primary' => 'id_bms_procurement_currency',
        'multilang' => false,
        'multilang_shop' => false,
        'fields' => array(
            'name' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isGenericName'
            ),
            'iso_code' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isGenericName'
            )
        )
    )
    ;

    /**
     * Return list of statuses
     *
     *
     * @return array|false BmsProcurementCurrency or false
     */
    public static function getCurrencies()
    {
        return Db::getInstance()->executeS('
			SELECT `id_bms_procurement_currency` as id_currency,name,iso_code
			FROM `' . _DB_PREFIX_ . self::$definition['table'] . '` ORDER BY `name` ASC
		');
    }

    /**
     * Return ISO code from ID
     *
     * @param $currencyId
     * @return string
     */
    public static function getCurrencyCode($currencyId)
    {
        if (!$currencyId)
            return "";

        $sql = '
                    SELECT
                       iso_code
                    FROM
                        `' . _DB_PREFIX_ .'bms_procurement_currency`
                    WHERE
                        id_bms_procurement_currency = '.pSQL($currencyId).'
                ';
        return Db::getInstance()->getValue($sql);
    }
}
