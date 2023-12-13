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
 * @author PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 *          International Registered Trademark & Property of PrestaShop SA
 */

require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementProduct.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementSupplier.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchaseOrderReception.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchaseOrder.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementCurrency.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Helper/Compatibility.php';

class BmsProcurementPurchaseOrder extends ObjectModel
{

    public $id;

    public $date_add;

    public $date_upd;

    public $reference;

    public $supplier_id;

    public $eta;

    public $status_id;

    public $employee_id;

    public $currency_id;

    public $change_rate;

    public $shipping_cost;

    public $shipping_cost_base;

    public $shipping_tax_rate;

    public $additional_cost;

    public $additional_cost_base;

    public $additional_tax_rate;

    public $total;

    public $total_base;

    public $products_count;

    public $reception_progress;

    public $comments_private;

    public $comments_public;

    public $shipping_tracking;

    public $shipping_carrier;

    public $supplier_po_reference;

    public $supplier_invoice_reference;

    public $supplier_invoice_date;

    public $supplier_invoice_due_date;

    public $supplier_payment_terms_id;

    public $supplier_payment_date;

    public $supplier_payment_method_id;

    public $supplier_payment_status_id;

    public $taxe_rate;

    public $warehouse_id;

    /**
     *
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'bms_procurement_purchase_order',
        'primary' => 'id_bms_procurement_purchase_order',
        'multilang' => false,
        'multilang_shop' => false,
        'fields' => array(

            'date_add' => array(
                'type' => self::TYPE_DATE,
                'validate' => 'isDate',
                'required' => false
            ),
            'date_upd' => array(
                'type' => self::TYPE_DATE,
                'validate' => 'isDate',
                'required' => false
            ),
            'reference' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isString',
                'required' => true
            ),
            'supplier_id' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isUnsignedId'
            ),
            'eta' => array(
                'type' => self::TYPE_DATE,
                'validate' => 'isdate',
                'required' => true
            ),
            'status_id' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isUnsignedId'
            ),
            'employee_id' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isUnsignedId'
            ),
            'currency_id' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isUnsignedId'
            ),
            'change_rate' => array(
                'type' => self::TYPE_FLOAT,
                'validate' => 'isFloat'
            ),
            'shipping_cost' => array(
                'type' => self::TYPE_FLOAT,
                'validate' => 'isFloat'
            ),
            'shipping_cost_base' => array(
                'type' => self::TYPE_FLOAT,
                'validate' => 'isFloat'
            ),
            'shipping_tax_rate' => array(
                'type' => self::TYPE_FLOAT,
                'validate' => 'isFloat'
            ),
            'additional_cost' => array(
                'type' => self::TYPE_FLOAT,
                'validate' => 'isFloat'
            ),
            'additional_cost_base' => array(
                'type' => self::TYPE_FLOAT,
                'validate' => 'isFloat'
            ),
            'additional_tax_rate' => array(
                'type' => self::TYPE_FLOAT,
                'validate' => 'isFloat'
            ),
            'total' => array(
                'type' => self::TYPE_FLOAT,
                'validate' => 'isFloat'
            ),
            'total_base' => array(
                'type' => self::TYPE_FLOAT,
                'validate' => 'isFloat'
            ),
            'products_count' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt'
            ),
            'reception_progress' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt'
            ),
            'comments_private' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isCleanHtml'
            ),
            'comments_public' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isCleanHtml'
            ),
            'shipping_tracking' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isString',
                'size' => 50
            ),
            'shipping_carrier' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isString',
                'size' => 50
            ),
            'supplier_po_reference' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isString',
                'size' => 50
            ),
            'supplier_invoice_reference' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isString',
                'size' => 50
            ),
            'supplier_invoice_date' => array(
                'type' => self::TYPE_DATE,
                'validate' => 'isDate',
                'required' => false
            ),
            'supplier_invoice_due_date' => array(
                'type' => self::TYPE_DATE,
                'validate' => 'isDate',
                'required' => false
            ),
            'supplier_payment_terms_id' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isUnsignedId'
            ),
            'supplier_payment_date' => array(
                'type' => self::TYPE_DATE,
                'validate' => 'isDate',
                'required' => false
            ),
            'supplier_payment_method_id' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isUnsignedId'
            ),
            'supplier_payment_status_id' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isUnsignedId'
            ),
            'taxe_rate' => array(
                'type' => self::TYPE_FLOAT,
                'validate' => 'isFloat'
            ),
            'warehouse_id' => array(
                'type' => self::TYPE_INT,
                'required' => false
            )
        )
    );

    /**
     * Creer une Purchase Order
     *
     * @param int $supplierId
     * @return BmsProcurementPurchaseOrder
     */
    public static function create($supplierId)
    {
        self::$definition['fields']['reference']['required'] = false;
        self::$definition['fields']['eta']['required'] = false;

        $supplier = new BmsProcurementSupplier($supplierId);
        $default_currency = (int) ($supplier->getDefaultCurrency());
        $default_change_rate = (int) ($supplier->default_currency_change_rate > 0 ? $supplier->default_currency_change_rate : 1);
        $po = new BmsProcurementPurchaseOrder();
        $po->supplier_id = (int) $supplierId;
        $po->status_id = 1; // DRAFT
        $po->supplier_payment_status_id = 1; // Pending
        $po->employee_id = Context::getContext()->employee->id;
        $po->currency_id = $default_currency;
        $po->change_rate = $default_change_rate;
        $po->reference = self::generatePoNumber();
        $po->supplier_payment_method_id = (int) ($supplier->payment_method_id ? $supplier->payment_method_id : 0);
        $po->supplier_payment_terms_id = (int) ($supplier->payment_terms_id ? $supplier->payment_terms_id : 0);
        $po->reception_progress = 0;
        $po->total = 0;
        if ($supplier->lead_time > 0) {
            $po->eta = date("Y-m-d", strtotime("+" . $supplier->lead_time . " day"));
        } else {
            $po->eta = date("Y-m-d");
        }
        $po->add();

        return $po;
    }

    public static function generatePoNumber()
    {
        $reference = 'PO-' . date('Ymd') . '-';

        $sql = 'select MAX(reference) as reference from ' . _DB_PREFIX_ . 'bms_procurement_purchase_order where reference like "' . pSQL($reference) . '%"';
        $maxRef = DB::getInstance()->executeS($sql);

        $suffix = '001';
        if (count($maxRef) > 0) {
            $maxRef = $maxRef[0]['reference'];
            $maxRef = str_replace($reference, "", $maxRef);
            $maxRef = ((int) $maxRef) + 1;
            $suffix = str_pad($maxRef, 3, '0', STR_PAD_LEFT);
        }

        $reference .= $suffix;

        return $reference;
    }

    public static function updatePo(BmsProcurementPurchaseOrder $po)
    {
        BmsProcurementPurchaseOrder::updateQtyProducts($po->id);
        BmsProcurementPurchaseOrder::updateETAProducts($po->id);
        BmsProcurementPurchaseOrder::updateExtendedCostsProducts(
            $po->id,
            $po->change_rate,
            ((float)$po->shipping_cost + (float)$po->additional_cost),
            Configuration::get('BMS_ADDITIONAL_COST_METHOD')
        );
        BmsProcurementPurchaseOrder::updateTotalStatic($po->id);
        if ($po->status_id == 8) {
            BmsProcurementPurchaseOrder::updateOnFinish($po->id, $po->supplier_id);
        }

        return true;
    }

    public static function getProductToReceive($id_product, $id_attribute)
    {
        $sql = 'SELECT
                    po.reference,pop.po_id,supplier.`name`,qty_ordered as qty,eta
                FROM `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_product` pop' . ' ' .
                'INNER JOIN `' . _DB_PREFIX_ . 'bms_procurement_purchase_order` po on (po.id_bms_procurement_purchase_order = pop.po_id)' . ' ' .
                'LEFT JOIN `' . _DB_PREFIX_ . 'supplier` supplier on (po.supplier_id =  supplier.id_supplier)' . ' ' .
                'WHERE ' . ' pop.product_id = ' . pSQL($id_product) . ' AND pop.product_attribute_id =' . pSQL($id_attribute). ' AND po.status_id NOT IN(7,8,9) AND pop.qty_expected > 0';

        return DB::getInstance()->executeS($sql);
    }

    /**
     * Retourn le pourcentage de progress de recpetion par rapport aux commandes
     *
     * @param int $po_id
     * @return string|false|NULL
     */
    public static function getPctOfReceptionProgress($po_id)
    {
        $sql = 'SELECT SUM(
                        CASE WHEN `qty_received` <= `qty_ordered`
                        THEN (`qty_received`)
                        ELSE (`qty_ordered`)
                        END
                        ) * 100 / SUM(`qty_ordered`)
                       as pct from `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_product` where `po_id`=' . pSQL($po_id);
        return DB::getInstance()->getValue($sql);
    }

    /**
     *
     * @param int $po_id
     * @param int $supplier_id
     * @param array $arrData
     */
    public static function updateProduct($po_id, $supplier_id, array $arrData)
    {
        $po = new BmsProcurementPurchaseOrder($po_id);
        $changeRate = $po->change_rate;
        $arrayOk = array(
            'supplier_sku',
            'qty_ordered',
            'price',
            'tax_rate'
        );

        foreach ($arrData as $id_product => $arrProducts) {
            foreach ($arrProducts as $id_attribute => $arrFields) {
                $pop = BmsProcurementPurchaseOrderProduct::getByKeys($po_id, $id_product, $id_attribute);
                if (! $pop) {
                    continue;
                }
                foreach ($arrFields as $name => $data) {
                    if (in_array($name, $arrayOk)) {
                        $pop->{$name} = $data['value'];
                        if($name=='price'){
                            $pop->updateBaseFields($po->change_rate);
                        }
                    }
                }
                $pop->qty_expected = $pop->qty_ordered - $pop->qty_received;
                if ($pop->save()) {
                    // calculé apres dans le sav po $pop->updateBaseFields($changeRate);
                    // calculé apres dans le sav po BmsProcurementProduct::updateCalculatedData($pop->po_id,$pop->product_id, $pop->product_attribute_id);
                }
            }
        }
    }

    /**
     * Ajoute tous les produits dans une commande
     *
     * @param int $po_id
     * @param int $supplier_id
     * @param array $arrData
     * @throws PrestaShopException
     * @return string[]|NULL[]|boolean
     */
    public static function saveAddProduct($po_id, $supplier_id, array $arrData)
    {
        $po = new BmsProcurementPurchaseOrder($po_id);
        $changeRate = $po->change_rate;

        $errors = array();
        foreach ($arrData as $id_product => $arrProducts) {
            foreach ($arrProducts as $id_attribute => $data) {
                // Declaration des objets
                $pop = new BmsProcurementPurchaseOrderProduct();
                $product = new Product($id_product);

                $supplierSku = ProductSupplier::getProductSupplierReference($id_product, $id_attribute, $supplier_id);
                $isProductSupplier = BmsProcurementProduct::isProductSupplier($id_product, $supplier_id);

                if ((int) Configuration::get("BMS_PREVENT_ADD_PRODUCT") == 1 && empty($isProductSupplier)) {
                    $errors[] = Translate::getAdminTranslation(" This product : " . $product->reference . " " . Product::getProductName($id_product, $id_attribute) . " does not depend on this supplier");
                    continue;
                }

                // initalisation des variables
                $sku = null;
                $value = (int) $data['value'];
                if (empty($value)) {
                    continue;
                }
                if ($id_attribute) {
                    $sku = BmsProcurementProduct::getReference($id_product, $id_attribute, 0);
                }

                if (! $sku) {
                    $sku = $product->reference;
                }
                $supplier = new BmsProcurementSupplier($supplier_id);
                $wholesalePrice = BmsProcurementProduct::getWholesalePrice($id_product, $id_attribute, $supplier_id);

                $pop->hydrate(array(
                    'po_id' => $po_id,
                    'product_id' => $id_product,
                    'product_attribute_id' => $id_attribute,
                    'name' => Compatibility::getProductName($id_product, $id_attribute),
                    'sku' => $sku,
                    'supplier_sku' => $supplierSku,
                    'price' => $wholesalePrice,
                    'qty_ordered' => $value,
                    'qty_expected' => $value,
                    'tax_rate' => $supplier->default_tax_class
                ));

                try {
                    if ($pop->save()) {
                        // calculé apres dans le sav po $pop->updateBaseFields($changeRate);

                        // calculé apres dans le sav po BmsProcurementProduct::updateCalculatedData($pop->po_id,$pop->product_id, $pop->product_attribute_id);
                    }
                } catch (Exception $e) {
                    $errors[] = $e->getMessage();
                }
            }
        }

        if (count($errors)) {
            return $errors;
        }

        return true;
    }

    /**
     * Retourn toutes les données des produits se trouvant dans cette commande
     *
     * @param int $id
     *            BmsProcurementPurchaseOrder::Id
     * @return false|NULL|mysqli_result|PDOStatement|resource
     */
    public static function getProducts($id)
    {
        $sql = 'SELECT *
                 FROM `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_product` pop
                 WHERE pop.po_id = ' . pSQL($id);

        return DB::getInstance()->executeS($sql);
    }

    /**
     * Met à jour la QtyToPo des produits
     *
     * @param int $id_po
     * @param int $oldIdStatus
     * @param int $newIdStatus
     * @return boolean|NULL[]
     */
    public static function updateQtyProducts($id_po)
    {

        $errors = array();
        $arrProducts = self::getProducts($id_po);
        foreach ($arrProducts as $product) {
            try {
                $pp = BmsProcurementProduct::getProductByPrestashopProduct($product['product_id'], $product['product_attribute_id']);
                $pp->updateQtyInPo();
            } catch (PrestaShopException $e) {
                $errors[] = $e->getMessage();
            }
        }

        if (count($errors)) {
            return $errors;
        }

        return true;
    }

    /**
     * Lors de la suppression d'un produit de la commande fournisseur
     *
     * @param BmsProcurementPurchaseOrderProduct $poProduct
     * @throws PrestaShopException
     * @return boolean
     */
    public static function afterDeleteProduct($poProduct)
    {
        $po = new BmsProcurementPurchaseOrder($poProduct->po_id);
        if (! $po || ! $po->id) {
            throw new PrestaShopException('Undefine Purchase Order');
        }
        BmsProcurementPurchaseOrder::updatePo($po);

        return true;
    }

    public static function isOpenedStatut($id_po = null, $statut = null)
    {
        if (! $id_po && ! $statut) {
            throw new PrestaShopException('po id ou po statut must specified');
        }
        if ($id_po && ! $statut) {
            $po = new BmsProcurementPurchaseOrder((int) $id_po);
            if (! $po || ! $po->id) {
                throw new PrestaShopException('Undefine Purchase Order');
            }
            $statut = $po->status_id;
        }

        if ($statut == 5 || $statut == 6) {
            return true;
        }
        return false;
    }

    public static function isStatutOkForUpdateETAProduct($oldIdStatus, $newIdStatus, $isETAAsChanged)
    {

        /**
         * On modifie l' EAT de product si on passe d'un statut fermé à ouvert (Expected ou Partially received)
         */
        if ($newIdStatus != 5 && $newIdStatus != 6) { // si le nouveau statut est fermé
            if ($oldIdStatus == 5 || $oldIdStatus == 6) { // si l'ancien était ouvert{
                return true;
            }
        } elseif ($isETAAsChanged === true) { // si la date de receptionde la commande a changée
            return true;
        }

        return false;
    }

    /**
     * Modifie le champs next_po_eta des produits de la commande
     *
     * @param int $id_po
     * @param int $oldIdStatus
     * @param int $newIdStatus
     * @param date $eta
     * @return boolean|NULL[]
     */
    public static function updateETAProducts($id_po)
    {

        $errors = array();
        $arrProducts = self::getProducts($id_po);
        foreach ($arrProducts as $product) {
            try {
                    $pp = BmsProcurementProduct::getProductByPrestashopProduct($product['product_id'], $product['product_attribute_id']);
                    $pp->updateNextPoETA();
            } catch (Exception $e) {
                $errors[] = $e->getMessage();
            }
        }

        if (count($errors)) {
            return $errors;
        }

        return true;
    }

    public static function updateExtendedCostsProducts($id_po, $change_rate, $totalCost, $additionalCostMethode)
    {
        $sumQty = 0;
        $sumPriceQty = 0;

        $arrProducts = self::getProducts($id_po);

        foreach ($arrProducts as $product) {
            $sumQty += $product['qty_ordered'];
            $sumPriceQty += ($product['price'] * $product['qty_ordered']);
        }

        foreach ($arrProducts as $product) {
            $pop = new BmsProcurementPurchaseOrderProduct($product['id_bms_procurement_purchase_order_product']);
            if (! $pop->id) {
                throw new Exception('undefined Purchasse Order Product');
            }
            if ($additionalCostMethode == 1) { // By quantity
                $pop->extended_cost = ($sumQty > 0 ? ($totalCost / $sumQty) : 0);
            } else {
                $pop->extended_cost = ($sumPriceQty > 0 ? ($totalCost / $sumPriceQty * $product['price']) : 0);
            }
            $pop->updateBaseFields($change_rate);
        }

        return true;
    }

    public static function updateOnFinish($id_po, $supplier_id)
    {
        $arrProducts = self::getProducts($id_po);
        foreach ($arrProducts as $product) {
            if (! $product['product_id']) {
                continue;
            }
            $sql = 'UPDATE `' . _DB_PREFIX_ . 'product_supplier`' . ' ' . 'SET `product_supplier_reference` = "' . pSQL($product['supplier_sku']) . '",`product_supplier_price_te` =' . pSQL($product['price']) . ' ' . 'WHERE `id_product` = ' . pSQL($product['product_id']) . ' ' . 'AND `id_product_attribute` = ' . pSQL((int) $product['product_attribute_id']) . ' ' . 'AND `id_supplier` = ' . pSQL($supplier_id);

            Db::getInstance()->execute($sql);
        }

        return true;
    }

    /**
     * Ajoute une nouvelle reception avec ses produits
     *
     * @param Array $dataToAdd
     * @throws PrestaShopException
     * @return boolean
     */
    public function addNewReception($dataToAdd)
    {
        $poReception = BmsProcurementPurchaseOrderReception::createReception($this->id, Context::getContext()->employee->id);
        if (!$poReception) {
            throw new PrestaShopException($this->l('Unable to create a new reception for the purchase order'));
        }

        foreach ($dataToAdd as $id_po_product => $po_data) {
            $result = $poReception->createLineReception($id_po_product, $po_data['value']);
            if (!$result) {
                throw new PrestaShopException($this->l('Unable to create a new reception line for the purchase order'));
            }
        }

        //manage delivery %
        $pctOfReceptionProgress = (float) self::getPctOfReceptionProgress($this->id);
        $this->reception_progress = (int) $pctOfReceptionProgress;
        if ($pctOfReceptionProgress < 100) {
            if ($this->status_id != 7 && $this->status_id != 8) { // not RECEIVED and NOT FINISHED
                $this->status_id = 6; // Partially received
            }
        } else {
            $this->status_id = 7; // Received
        }

        $this->checkDatesBeforeUpdate();
        $this->update();

        return true;
    }

    public function checkDatesBeforeUpdate()
    {
        if ($this->eta == "0000-00-00")
            $this->eta = '';
        if ($this->supplier_invoice_date == "0000-00-00")
            $this->supplier_invoice_date = '';
        if ($this->supplier_invoice_due_date == "0000-00-00")
            $this->supplier_invoice_due_date = '';
        if ($this->supplier_payment_date == "0000-00-00")
            $this->supplier_payment_date = '';
    }

    public static function updateWAC($id_po)
    {
        if (! Configuration::get('BMS_UPDATE_WAC_FROM_RECEPTION')) {
            return true;
        }
        $arrProducts = self::getProducts($id_po);
        $arrReceptionId = array();

        foreach ($arrProducts as $product) {
            $arrReceptionId = BmsProcurementPurchaseOrderReception::getReceptionIdUsedInWacByProduct($product['product_id']);
            $wac = self::getWACByReceptions($arrReceptionId);
            Tools::dieObject($arrReceptionId);
        }

        return true;
    }

    protected static function getWACByReceptions(array $arrReceptionId)
    {
        $query = new DbQuery();
        $query->select('SUM(qty) as wac');
        $query->from('bms_procurement_purchase_order', 'po');
        $query->innerJoin('bms_procurement_purchase_order_reception', 'pr', 'po.id_bms_procurement_purchase_order = pr.po_id');

        return true;
    }

    public function delete()
    {
        $arrProducts = self::getProducts($this->id);
        $arrReception = BmsProcurementPurchaseOrderReception::getReceptionByPo($this->id);

        //remove items
        foreach ($arrProducts as $dataProduct) {
            $product = new BmsProcurementPurchaseOrderProduct($dataProduct['id_bms_procurement_purchase_order_product']);
            $product->delete();

            //update qty in PO & ETA
            $pp = BmsProcurementProduct::getProductByPrestashopProduct($product->product_id, $product->product_attribute_id);
            $pp->updateQtyInPo();
            $pp->updateNextPoETA();
        }

        //remove receptions entries (but not stock movements)
        foreach ($arrReception as $dataReception) {
            $reception = new BmsProcurementPurchaseOrderReception($dataReception['id_bms_procurement_purchase_order_reception']);
            $reception->delete();
        }

        return parent::delete();
    }

    protected static function updateTotalStatic($poId)
    {
        $po = new BmsProcurementPurchaseOrder($poId);
        $arrProducts = self::getProducts($poId);

        //get po total
        $total = (float)$po->shipping_cost + (float)$po->shipping_tax_rate + (float)$po->additional_cost + (float)$po->additional_tax_rate;
        foreach ($arrProducts as $pop) {
            $total += $pop['qty_ordered'] * $pop['price'] * (1 + $pop['tax_rate'] / 100);
        }
        $changeRate = ((float)$po->change_rate > 0) ? (float)$po->change_rate : 1;
        $totalBase = (float)$total * $changeRate;

        $sql = 'UPDATE `'._DB_PREFIX_.'bms_procurement_purchase_order` SET total = "'.pSQL($total).'", total_base = "'.pSQL($totalBase).'" WHERE id_bms_procurement_purchase_order = '.pSQL($poId);
        Db::getInstance()->execute($sql);
    }

    protected function updateTotal($arrPop)
    {
        $total = (float)$this->shipping_cost + (float)$this->shipping_tax_rate + (float)$this->additional_cost + (float)$this->additional_tax_rate;
        foreach ($arrPop as $pop) {
            $total += $pop['qty_ordered'] * $pop['price'] * (1 + $pop['tax_rate'] / 100);
        }
        $this->total = $total;
    }

    protected function updateBaseFields()
    {
        $changeRate = (float)$this->change_rate;
        $this->shipping_cost_base = (float)$this->shipping_cost * $changeRate;
        $this->additional_cost_base = (float)$this->additional_cost * $changeRate;
        $this->total_base = (float)$this->total * $changeRate;
    }

    protected function updateTaxFields()
    {
        $taxeRate = $this->taxe_rate / 100;
        $this->shipping_tax_rate = (float)$this->shipping_cost * (float)$taxeRate;
        $this->additional_tax_rate = (float)$this->additional_cost * (float)$taxeRate;
    }

    public function getCurrencySign()
    {
        return BmsProcurementCurrency::getCurrencyCode($this->currency_id);
    }

    public function getWarehouseName()
    {
        $warehouseId = $this->warehouse_id;
        $warehouseName = Compatibility::getWarehouseName($warehouseId);
        return $warehouseName;
    }

    public function updateCalculatedFields()
    {
        $arrPop = self::getProducts($this->id);

        $this->updateTaxFields();
        $this->updateTotal($arrPop);
        $this->updateBaseFields();
        $this->update();
    }
}
