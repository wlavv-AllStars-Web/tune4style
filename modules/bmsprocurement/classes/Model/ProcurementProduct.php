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

require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchaseOrder.php';

class BmsProcurementProduct extends ObjectModel
{

    public $id;

    public $prestashop_id;

    public $prestashop_attribute_id;

    public $warning_stock_level;

    public $use_default_warning_stock_level;

    public $ideal_stock_level;

    public $use_default_ideal_stock_level;

    public $qty_in_po;

    public $next_po_eta;

    /**
     *
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'bms_procurement_product',
        'primary' => 'id_bms_procurement_product',
        'multilang' => false,
        'multilang_shop' => false,
        'fields' => array(
            'prestashop_id' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt',
                'required' => true
            ),
            'prestashop_attribute_id' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt',
                'required' => true
            ),
            'warning_stock_level' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt',
                'required' => false
            ),
            'use_default_warning_stock_level' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt',
                'required' => false
            ),
            'ideal_stock_level' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt',
                'required' => false
            ),
            'use_default_ideal_stock_level' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt',
                'required' => false
            ),
            'qty_in_po' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt',
                'required' => false
            ),
            'next_po_eta' => array(
                'type' => self::TYPE_DATE,
                'required' => false
            )
        )
    );

    /**
     * Met à jour la QtyInPo ainsi que la date NextPoETA
     *
     * @param int $po_id
     * @param int $id_product
     * @param number $id_attribute
     * @throws PrestaShopException
     */
    public static function updateCalculatedData($po_id, $id_product, $id_attribute = 0)
    {
        $procurementProduct = BmsProcurementProduct::getProductByPrestashopProduct($id_product, $id_attribute);
        $procurementProduct->updateQtyInPo(false);

        if (BmsProcurementPurchaseOrder::isOpenedStatut($po_id)) {
            $procurementProduct->updateNextPoETA(false);
        }
        return $procurementProduct->save();
    }

    /**
     *
     * @param string $isUpdate
     */
    public function updateQtyInPo($isUpdate = true)
    {
        $this->qty_in_po = self::getProductQtyExpected($this->prestashop_id, $this->prestashop_attribute_id);
        if ($isUpdate) {
            return $this->save();
        }
        return true;
    }

    public function updateNextPoETA($isUpdate = true)
    {
        $this->next_po_eta = self::getEarliestProductEta($this->prestashop_id, $this->prestashop_attribute_id);
        if ($isUpdate) {
            return $this->save();
        }
        return true;
    }

    /**
     *
     * @param int $id_product
     * @param int $id_attribute
     * @return string|false|NULL
     */
    public static function getProductQtyExpected($id_product, $id_attribute = 0)
    {
        $sql_po = 'SELECT id_bms_procurement_purchase_order as id_po FROM `' . _DB_PREFIX_ . 'bms_procurement_purchase_order` po ' .'WHERE (status_id = 5 or  status_id=6)'; // expected or partially

        $sql =  '  SELECT
                      (SUM(qty_ordered-qty_received))
                    FROM
                      `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_product` pop
                    WHERE
                        pop.product_id = ' . pSQL($id_product) . ' AND pop.product_attribute_id =' . pSQL($id_attribute) . ' AND  po_id in (' . pSQL($sql_po) . ')';

        return DB::getInstance()->getValue($sql);
    }

    /**
     * retourne la prochaine date de reception d'un produit pour les commandes ouverte
     *
     * @param int $id_product
     * @param number $id_attribute
     * @return string|false|NULL
     */
    public static function getEarliestProductEta($id_product, $id_attribute = 0)
    {
        $sql = 'SELECT min(eta)
                from `' . _DB_PREFIX_ . 'bms_procurement_purchase_order`
                INNER JOIN `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_product` on (po_id = id_bms_procurement_purchase_order and product_id=' . pSQL($id_product) . ' and product_attribute_id=' . pSQL($id_attribute) . ' and (qty_ordered-qty_received) >0)
                WHERE (status_id = 5 or  status_id=6)';

        return DB::getInstance()->getValue($sql);
    }

    /**
     * Return a Procurement product according to a PrestaShop product
     *
     * @param int $id_product
     * @param int $id_product_attribute
     * @return BmsProcurementProduct
     */
    public static function getProductByPrestashopProduct($id_product, $id_product_attribute = 0)
    {
        $sql = 'SELECT  id_bms_procurement_product as id
            FROM    `' . _DB_PREFIX_ . 'bms_procurement_product`
			WHERE   prestashop_id = ' . pSQL($id_product) . '
			AND   prestashop_attribute_id = ' . pSQL($id_product_attribute);

        $id = Db::getInstance()->getValue($sql);

        $product = new BmsProcurementProduct((int) $id);
        if (! $product->id) {
            $product->prestashop_id = $id_product;
            $product->prestashop_attribute_id = $id_product_attribute;
            $product->use_default_warning_stock_level = 1;
            $product->warning_stock_level = Configuration::get('BMS_WARNING_STOCK_LEVEL');
            $product->ideal_stock_level = Configuration::get('BMS_IDEAL_STOCK_LEVEL');
            $product->use_default_ideal_stock_level = 1;
        }
        return $product;
    }

    public static function getWholesalePrice($id_product, $id_product_attribute = 0, $idSupplier = 0)
    {
        if ($idSupplier) {
            return ProductSupplier::getProductPrice($idSupplier, $id_product, $id_product_attribute);
        }

        return 0;
    }

    public static function getReference($id_product, $id_product_attribute = 0, $idSupplier = 0)
    {
        if ($idSupplier) {
            return ProductSupplier::getProductSupplierReference($id_product, $id_product_attribute, $idSupplier);
        }
        if ($id_product_attribute) {
            $sql = 'SELECT reference FROM  `' . _DB_PREFIX_ . 'product_attribute` where id_product_attribute = ' . pSQL($id_product_attribute);
            $ref = Db::getInstance()->getValue($sql);
            if (! empty($ref)) {
                return $ref;
            }
        }

        $sql = 'SELECT reference FROM  `' . _DB_PREFIX_ . 'product` where id_product = ' . pSQL($id_product);
        $ref = Db::getInstance()->getValue($sql);
        if (! empty($ref)) {
            return $ref;
        }

        return 0;
    }

    public static function updateProcurementProduct($id_product, $id_product_attribute, $id_product_procurement, $use_default_warning_level_stock, $use_default_ideal_level_stock, $bms_warning_stock_level, $bms_ideal_stock_level)
    {
        if ($id_product_procurement != 0) {
            $procurement_product = new BmsProcurementProduct($id_product_procurement);
        } else {
            $procurement_product = BmsProcurementProduct::getProductByPrestashopProduct($id_product, $id_product_attribute);
            if (! $procurement_product->id) {
                $procurement_product = new BmsProcurementProduct();
                $procurement_product->prestashop_id = $id_product;
                $procurement_product->prestashop_attribute_id = $id_product_attribute;
            }
        }

        if ($use_default_warning_level_stock == "on") {
            $procurement_product->use_default_warning_stock_level = 1;
        } else {
            $procurement_product->use_default_warning_stock_level = 0;
            if ($bms_warning_stock_level) {
                $procurement_product->warning_stock_level = $bms_warning_stock_level;
            }
        }
        if ($use_default_ideal_level_stock == "on") {
            $procurement_product->use_default_ideal_stock_level = 1;
        } else {
            $procurement_product->use_default_ideal_stock_level = 0;
            if ($bms_ideal_stock_level) {
                $procurement_product->ideal_stock_level = $bms_ideal_stock_level;
            }
        }

        $procurement_product->save();
    }

    /**
     * For a given id_product and id_product_attribute, gets its stock available
     *
     * @param int $id_product
     * @param int $id_product_attribute
     *            Optional
     * @param int $id_shop
     *            Optional : gets context by default
     * @return int Quantity
     */
    public static function getPhysicalQuantity($id_product = null, $id_product_attribute = null, $id_shop = null)
    {
        // if null, it's a product without attributes
        if ($id_product_attribute === null) {
            $id_product_attribute = 0;
        }

        $query = new DbQuery();
        $query->select('SUM(physical_quantity)');
        $query->from('stock_available');

        // if null, it's a product without attributes
        if ($id_product !== null) {
            $query->where('id_product = ' . pSQL($id_product));
        }

        $query->where('id_product_attribute = ' . pSQL($id_product_attribute));
        $query = StockAvailable::addSqlShopRestriction($query, $id_shop);
        $result = (int) Db::getInstance()->getValue($query);

        return $result;
    }

    public static function isProductSupplier($idProduct, $idSupplier)
    {
        // build query
        $query = new DbQuery();
        $query->select('ps.id_product');
        $query->from('product_supplier', 'ps');
        $query->where('ps.id_product = ' . pSQL($idProduct) . ' AND ps.id_supplier = ' . pSQL($idSupplier));

        $res = Db::getInstance()->getValue($query);

        return $res;
    }
}
