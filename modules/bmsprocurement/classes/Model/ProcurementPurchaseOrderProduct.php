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

require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementProduct.php';
class BmsProcurementPurchaseOrderProduct extends ObjectModel
{

    public $id;

    public $po_id;

    public $product_id;

    public $product_attribute_id;

    public $name;

    public $sku;

    public $supplier_sku;

    public $qty_ordered;

    public $qty_received;

    public $qty_expected;

    public $price;

    public $price_base;

    public $tax_rate;

    public $extended_cost;

    public $extended_cost_base;

    protected $_po = null;

    /**
     *
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'bms_procurement_purchase_order_product',
        'primary' => 'id_bms_procurement_purchase_order_product',
        'multilang' => false,
        'multilang_shop' => false,
        'fields' => array(

            'po_id' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isUnsignedId'
            ),
            'product_id' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isUnsignedId'
            ),
            'product_attribute_id' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isUnsignedId',
                'required' => false
            ),
            'name' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isString',
                'size' => 200
            ),
            'sku' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isString',
                'size' => 50
            ),
            'supplier_sku' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isString',
                'size' => 64
            ),
            'qty_ordered' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt'
            ),
            'qty_received' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt'
            ),
            'qty_expected' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt'
            ),
            'price' => array(
                'type' => self::TYPE_FLOAT,
                'validate' => 'isFloat'
            ),
            'price_base' => array(
                'type' => self::TYPE_FLOAT,
                'validate' => 'isFloat'
            ),
            'tax_rate' => array(
                'type' => self::TYPE_FLOAT,
                'validate' => 'isFloat'
            ),
            'extended_cost' => array(
                'type' => self::TYPE_FLOAT,
                'validate' => 'isFloat'
            ),
            'extended_cost_base' => array(
                'type' => self::TYPE_FLOAT,
                'validate' => 'isFloat'
            )
        )
    );

    /**
     *
     * @param int $id_po
     * @param int $id_product
     * @param number $id_product_attribute
     * @return boolean|BmsProcurementPurchaseOrderProduct
     */
    public static function getByKeys($id_po, $id_product, $id_product_attribute = 0)
    {
        $sql =  'SELECT  id_bms_procurement_purchase_order_product as id' . ' ' .
                'FROM    `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_product`' . ' ' .
                'WHERE   product_id = ' . pSQL($id_product) . ' ' . 'AND   product_attribute_id = ' . pSQL((int) $id_product_attribute) . ' ' . 'AND   po_id = ' . pSQL((int) $id_po);

        $id = Db::getInstance()->getValue($sql);

        $pop = new BmsProcurementPurchaseOrderProduct((int) $id);
        if (! $pop->id) {
            return false;
        }
        return $pop;
    }

    public static function getSubTotal($po_id)
    {
        $sql = 'select SUM(price*qty_ordered) from `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_product` where po_id=' . pSQL((int) $po_id);

        return DB::getInstance()->getValue($sql);
    }

    public static function getSubTotalTaxed($po_id)
    {
        $sql = 'select SUM(price*qty_ordered*tax_rate/100) from `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_product` where po_id=' . pSQL((int) $po_id);

        return DB::getInstance()->getValue($sql);
    }

    public function updateQtyReceived($qty)
    {
        $this->qty_received += (int) $qty;
        $this->qty_expected = ($this->qty_ordered - $this->qty_received);
        $this->update();
        $product = BmsProcurementProduct::getProductByPrestashopProduct($this->product_id, $this->product_attribute_id);
        $product->updateQtyInPo();
    }

    /**
     *
     * @param unknown $changeRate
     */
    public function updateBaseFields($changeRate)
    {
        $changeRate = ($changeRate > 0) ? $changeRate : 1;
        $this->price_base = $this->price * $changeRate;
        $this->extended_cost_base = $this->extended_cost * $changeRate;
        $this->update();
    }

    public static function searchByCodeBare($id_po, $sku)
    {
        $sql = new DbQuery();
        $where = self::buildBarcodeWhereCondition($sku);

        $sql->select('id_bms_procurement_purchase_order_product as id_pop');
        $sql->from('product_attribute', 'pa');

        $sql->innerJoin('bms_procurement_purchase_order_product', 'pop', 'pop.product_attribute_id = pa.id_product_attribute');
        $sql->where($where . ' AND po_id=' . (int) $id_po);
        $result = Db::getInstance()->getValue($sql);

        if (! $result) {
            $sql = new DbQuery();
            $sql->select('id_bms_procurement_purchase_order_product as id_pop');
            $sql->from('product', 'p');
            $sql->where($where . ' AND po_id=' . (int) $id_po);
            $sql->innerJoin('bms_procurement_purchase_order_product', 'pop', 'pop.product_id = p.id_product and product_attribute_id=0');

            $result = Db::getInstance()->getValue($sql);
            if (! $result) {
                return false;
            }
        }

        return $result;
    }

    public static function buildBarcodeWhereCondition($sku)
    {
        if (version_compare(_PS_VERSION_, '1.7', '<')){
            return '(`ean13` = "' . pSQL($sku) . '"' . ' OR `upc` = "' . pSQL($sku) . '"' . ' OR `reference` = "' . pSQL($sku) . '")';
        }

        return '(`ean13` = "' . pSQL($sku) . '"' . ' OR `isbn` = "' . pSQL($sku) . '"' . ' OR `upc` = "' . pSQL($sku) . '"' . ' OR `reference` = "' . pSQL($sku) . '")';
    }

    public function getPo()
    {
        if ($this->_po == null)
        {
            $this->_po = new BmsProcurementPurchaseOrder($this->po_id);
        }
        return $this->_po;
    }
}
