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

class BmsProcurementPurchasesOrderStatus extends ObjectModel
{

    public $id;

    /** @var string value */
    public $name;

    /**
     *
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'bms_procurement_purchase_order_status',
        'primary' => 'id_bms_procurement_purchase_order_status',
        'multilang' => false,
        'multilang_shop' => false,
        'fields' => array(

            'name' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isGenericName'
            )
        )
    );

    /**
     * Return list of statuses
     *
     *
     * @return array|false BmsProcurementPurchasesOrderStatuses or false
     */
    public static function getStatuses()
    {
        $collection = Db::getInstance()->executeS('
			SELECT `id_bms_procurement_purchase_order_status` as id_status, `name`
			FROM `' . _DB_PREFIX_ . self::$definition['table'] . '` ORDER BY `id_bms_procurement_purchase_order_status` ASC
		');

        for ($i = 0; $i < count($collection); $i ++) {
            $collection[$i]['name'] = self::l($collection[$i]['name']);
        }

        return $collection;
    }

    public static function getExpectedStatuses()
    {
        $collection = Db::getInstance()->executeS('
			SELECT `id_bms_procurement_purchase_order_status` as id_status, `name`
			FROM `' . _DB_PREFIX_ . self::$definition['table'] . '`
			WHERE expected = 1
			ORDER BY `id_bms_procurement_purchase_order_status` ASC
		');

        for ($i = 0; $i < count($collection); $i ++) {
            $collection[$i]['name'] = self::l($collection[$i]['name']);
        }

        return $collection;
    }

    public static function getExpectedStatusIds()
    {
        $ids = array();

        foreach(self::getExpectedStatuses() as $status)
        {
            $ids[] = $status['id_bms_procurement_purchase_order_status'];
        }

        return array();
    }

    /**
     * Rearranged translate method to make it work with this class....
     *
     * @param
     *            $string
     * @return mixed
     */
    public static function l($string)
    {
        return Translate::getModuleTranslation('bmsprocurement', $string, 'procurementpurchasesorderstatus');
    }

    /**
     * Dummy method to add translation in prestashop tool
     *
     * @return array
     */
    public function getStatusesTranslations()
    {
        $all = array();

        $all[] = $this->l('Draft');
        $all[] = $this->l('Pending internal approval');
        $all[] = $this->l('Pending payment');
        $all[] = $this->l('Pending supplier confirmation');
        $all[] = $this->l('Expected');
        $all[] = $this->l('Partially received');
        $all[] = $this->l('Received');
        $all[] = $this->l('Finished');
        $all[] = $this->l('Canceled');

        return $all;
    }
}
