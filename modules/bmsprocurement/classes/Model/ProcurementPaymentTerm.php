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

class BmsProcurementPaymentTerm extends ObjectModel
{

    public $id;

    /** @var string Name */
    public $name;

    /**
     *
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'bms_procurement_payment_term',
        'primary' => 'id_bms_procurement_payment_term',
        'multilang' => false,
        'multilang_shop' => false,
        'fields' => array(
            
            'name' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isGenericName',
                'required' => true
            )
        )
    )
    ;

    /**
     * Return list of statuses
     *
     *
     * @return array|false BmsProcurementPaymentTerm or false
     */
    public static function getPaymentTerms()
    {
        return Db::getInstance()->executeS('
			SELECT `id_bms_procurement_payment_term` as id_payment_term,name
			FROM `' . _DB_PREFIX_ . self::$definition['table'] . '` ORDER BY `name` ASC
		');
    }

    /**
     * Return payment term name from payment_termID
     * @var int id_bms_procurement_payment_term
     * @return BmsProcurementPaymentTerm or false
     */
    public static function getPaymentTermFromId($id_bms_procurement_payment_term)
    {
        return Db::getInstance()->getValue('
			SELECT `name` as name_payment_term
			FROM `' . _DB_PREFIX_ . self::$definition['table'] . '` WHERE `id_bms_procurement_payment_term` = ' . $id_bms_procurement_payment_term . '
		');
    }
}
