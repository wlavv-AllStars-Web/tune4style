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

class BmsProcurementSupplierContact extends ObjectModel
{

    public $id;

    public $supplier_id;

    public $type;

    public $contact;

    public $email;

    public $telephone;

    public $notes;

    /**
     *
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'bms_procurement_supplier_contact',
        'primary' => 'id_bms_procurement_supplier_contact',
        'multilang' => false,
        'multilang_shop' => false,
        'fields' => array(

            'supplier_id' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isUnsignedId'
            ),
            'type' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isString'
            ),
            'contact' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isString',
                'size' => 100
            ),
            'email' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isEmail',
                'size' => 200,
                'required' => false
            ),
            'telephone' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isString',
                'size' => 50,
                'required' => false
            ),
            'notes' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isCleanHtml',
                'required' => false
            )
        )
    )
    ;

    /**
     *
     * @param int $id_supplier
     * @return array[BmsProcurementSupplierContact]
     */
    public static function getContactsBySupplierId($id_supplier)
    {
        $query = new DbQuery();
        $query->select('*');
        $query->from('bms_procurement_supplier_contact');
        $query->where('supplier_id = ' . (int) $id_supplier);

        return Db::getInstance()->executeS($query);
    }
}
