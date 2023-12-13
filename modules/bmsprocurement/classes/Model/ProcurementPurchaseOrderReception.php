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

require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchaseOrderReception.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchaseOrderReceptionProduct.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchaseOrderProduct.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Helper/Compatibility.php';

class BmsProcurementPurchaseOrderReception extends ObjectModel
{

    public $id;

    public $po_id;

    public $date_add;

    public $user;

    public $products_count;

    protected $_po;

    /**
     *
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'bms_procurement_purchase_order_reception',
        'primary' => 'id_bms_procurement_purchase_order_reception',
        'multilang' => false,
        'multilang_shop' => false,
        'fields' => array(

            'po_id' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isUnsignedId'
            ),
            'date_add' => array(
                'type' => self::TYPE_DATE,
                'validate' => 'isdate',
                'required' => false
            ),
            'employee_id' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isUnsignedId'
            ),
            'products_count' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt'
            )
        )
    );

    public function delete()
    {
        Db::getInstance()->delete('bms_procurement_purchase_order_reception_product', 'reception_id=' . (int) $this->id);
        return parent::delete();
    }

    public function getPurchaseOrder()
    {
        if (!$this->_po)
            $this->_po = new BmsProcurementPurchaseOrder($this->po_id);
        return $this->_po;
    }

    /**
     * Ajoute un produit dans une reception
     *
     * @param int $id_po_product
     * @param int $qty
     * @param int $product_attribute_id
     * @return bool Insertion result
     */
    public function createLineReception($id_po_product, $qty, $product_attribute_id = 0)
    {
        $poProduct = new BmsProcurementPurchaseOrderProduct($id_po_product);
        $poProduct->updateQtyReceived($qty);

        BmsProcurementProduct::updateCalculatedData($poProduct->po_id, $poProduct->product_id, $poProduct->product_attribute_id);

        //update product wholesale price on reception
        if (Configuration::get('BMS_UPDATE_WAC_FROM_RECEPTION')) {
            $product = new Product($poProduct->product_id);
            $product->wholesale_price = abs($poProduct->price_base) + abs($poProduct->extended_cost_base);
            $product->save();
        }

        //update quantity
        $description = 'Reception for PO #'.$poProduct->getPo()->reference;
        Compatibility::receiveQuantity( $poProduct->product_id,
                                        $poProduct->product_attribute_id,
                                        (int) $qty,
                                        (float)$poProduct->price_base,
                                        $this->getPurchaseOrder()->warehouse_id,
                                        $description
                                        );

        $poLineReception = new BmsProcurementPurchaseOrderReceptionProduct();
        $poLineReception->reception_id = (int) $this->id;
        $poLineReception->product_id = (int) $poProduct->product_id;
        $poLineReception->product_attribute_id = (int) $poProduct->product_attribute_id;
        $poLineReception->qty = (int) $qty;
        $poLineReception->sku = $poProduct->sku;

        return $poLineReception->add();
    }

    /**
     * Creer une reception
     *
     * @return boolean|BmsProcurementPurchaseOrderReception
     */
    public static function createReception($po_id, $employee_id)
    {
        $poReception = new BmsProcurementPurchaseOrderReception();

        $poReception->po_id = $po_id;
        $poReception->employee_id = $employee_id;
        $poReception->save();

        if (!$poReception->id) {
            return false;
        }
        return $poReception;
    }

    public static function getProducts($id)
    {
        $sql = 'SELECT *
                 FROM `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_reception_product` re_po
                 WHERE re_po.reception_id = ' . (int) $id;

        $result = DB::getInstance()->executeS($sql);
        foreach ($result as &$product) {
            $product['name'] = Compatibility::getProductName($product['product_id'], $product['product_attribute_id']);
        }
        return $result;
    }

    public static function getReceptionQuantityTotalByProduct($id_product)
    {
        $query = new DbQuery();
        $query->select('SUM(qty)');
        $query->from('bms_procurement_purchase_order_reception_product');
        $query->where('product_id = ' . (int) $id_product);
        $result = (int) Db::getInstance()->getValue($query);
        return $result;
    }

    public static function getReceptionByPo($id_po)
    {
        $query = new DbQuery();
        $query->select('*');
        $query->from('bms_procurement_purchase_order_reception');
        $query->where('po_id = ' . (int) $id_po);

        return Db::getInstance()->executeS($query);
        ;
    }

    /**
     *
     * @param int $id_product
     * @return array
     */
    public static function getReceptionIdByProduct($id_product)
    {
        $query = new DbQuery();
        $query->select('reception_id');
        $query->from('bms_procurement_purchase_order_reception_product');
        $query->where('product_id = ' . (int) $id_product);
        $result = Db::getInstance()->executeS($query);
        $data = array();
        foreach ($result as $object) {
            $data[] = $object['reception_id'];
        }
        return array_unique($data);
    }

    /**
     * retourne un tableau d'identifiant de reception qui determinent le WAC
     *
     * @param int $physical_quantity_total
     */
    public static function getReceptionIdByQty($physical_quantity_total)
    {
        $query = new DbQuery();
        $query->select('reception_id,SUM(qty) as qty');
        $query->from('bms_procurement_purchase_order_reception_product', 'prp');
        $query->leftJoin('bms_procurement_purchase_order_reception', 'pr', 'prp.reception_id = pr.id_bms_procurement_purchase_order_reception');
        $query->groupBy('reception_id');
        $query->orderBy('date_add DESC');

        $offset = 50;
        $result = true;
        $qty = 0;
        $arrReceptionId = array();

        for ($i = 0; $result && $qty < $physical_quantity_total; $i ++) {
            $query->limit($offset, $offset * $i);
            $result = Db::getInstance()->executeS($query);

            foreach ($result as $data) {
                if ($qty <= $physical_quantity_total) {
                    $qty += $data['qty'];
                    $arrReceptionId[] = $data['reception_id'];
                } else {
                    break;
                }
            }
        }

        return $arrReceptionId;
    }

    public static function getReceptionIdUsedInWacByProduct($id_product)
    {
        $physical_quantity_total = BmsProcurementProduct::getPhysicalQuantity($id_product);
        $receptionQtyTotal = BmsProcurementPurchaseOrderReception::getReceptionQuantityTotalByProduct($id_product);
        $arrReceptionId = array();

        if ($receptionQtyTotal <= $physical_quantity_total) {
            $arrReceptionId[$id_product] = BmsProcurementPurchaseOrderReception::getReceptionIdByProduct($id_product);
        } else {
            $arrReceptionId[$id_product] = BmsProcurementPurchaseOrderReception::getReceptionIdByQty($physical_quantity_total);
        }

        return $arrReceptionId;
    }
}
