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

class BmsProcurementPurchaseOrderReceptionProduct extends ObjectModel
{

    public $id;

    /** @var int category ID */
    public $reception_id;

    /** @var string Name */
    public $product_id;

    /** @var string Description */
    public $product_attribute_id;

    /** @var string string used in rewrited URL */
    public $sku;

    /** @var string Name */
    public $name;

    /** @var  int category position */
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
                'validate' => 'isGenericName'
            ),
            'name' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isGenericName'
            ),
            'qty' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt'
            )
        )
    )
    ;
}
