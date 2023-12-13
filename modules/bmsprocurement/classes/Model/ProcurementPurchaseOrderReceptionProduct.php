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

require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Helper/Compatibility.php';

class BmsProcurementPurchaseOrderReceptionProduct extends ObjectModel
{

    public $id;

    public $reception_id;

    public $product_id;

    public $product_attribute_id;

    public $sku;

    public $name;

    public $qty;

    /**
     *
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'bms_procurement_purchase_order_reception_product',
        'primary' => 'id_bms_procurement_purchase_order_reception_product',
        'multilang' => false,
        'multilang_shop' => false,
        'fields' => array(
            
            'reception_id' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isUnsignedId'
            ),
            'product_id' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isUnsignedId'
            ),
            'product_attribute_id' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isUnsignedId'
            ),
            'sku' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isString',
                'size' => 50
            ),
            'name' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isString',
                'size' => 200
            ),
            'qty' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt'
            )
        )
    )
    ;

    public static function getReceiveProductListe($id_order_reception, $id_lang)
    {
        $sql =  'SELECT rc.`product_id`, rc.`product_attribute_id`,`qty`,`sku`' . ' ' .
                'FROM  `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_reception_product` rc' . ' ' .
                'WHERE rc.`reception_id` = ' . (int) $id_order_reception;
        
        $arrProducts = Db::getInstance()->executeS($sql);
        foreach ($arrProducts as &$product) {
            $product['name'] = Compatibility::getProductName($product['product_id'], $product['product_attribute_id'], $id_lang);
        }
        
        return $arrProducts;
    }
}
