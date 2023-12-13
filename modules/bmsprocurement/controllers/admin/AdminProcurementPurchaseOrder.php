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
 * @copyright 2007-2022 Boostmyshop SA
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 *          International Registered Trademark & Property of PrestaShop SA
 */

require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchasesOrderStatus.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementCurrency.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPaymentTerm.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPaymentMethod.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchasesOrderPaymentStatus.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchaseOrderProduct.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchaseOrder.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementSupplier.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementSupplierContact.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementStorage.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/HTMLTemplatePo.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Helper/Compatibility.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/PurchaseOrder/CsvExport.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/HtmlHelper.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/HtmlHelper.php';

class AdminProcurementPurchaseOrderController extends ModuleAdminController
{

    public $id_po;

    public $po;

    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'bms_procurement_purchase_order';
        $this->className = 'BmsProcurementPurchaseOrder';
        $this->identifier = 'id_bms_procurement_purchase_order';

        parent::__construct();
        $this->setFieldsListe();
        $this->override_folder = 'purchaseOrder/';
        $this->default_form_language = $this->context->language->id;
        $this->show_form_cancel_button = false;
    }

    public function initProcess()
    {
        parent::initProcess();

        /**
         * Si on est en liste alors mode iframe
         */
        if (Tools::getValue("liteDisplay") && ! $this->display) { // renderListe
            $this->display_header = false;
            $this->display_header_javascript = true;
            $this->display_footer = false;
            $this->content_only = false;
            $this->lite_display = true;
        }
    }

    public function init()
    {
        if (Tools::getIsset('createPO') && Tools::getIsset('supplier_id')) {
            $isFromSupplyNeeds = Tools::getIsset('isFromSuppplyNeeds');

            // if supplierId is provided, that's a new PO creation
            $supplierId = (int) Tools::getValue("supplier_id", null);
            $this->po = BmsProcurementPurchaseOrder::create($supplierId);

            if ($this->po)
            {
                $this->object = $this->po;
                $this->id_po = $this->po->id;

                if ($isFromSupplyNeeds) {
                    $this->addProductPo('productQtyNeed');
                    BmsProcurementPurchaseOrder::updatePo($this->po);
                }

            }
        } else {
            $this->id_po = (int) Tools::getValue('id_bms_procurement_purchase_order', null);
            if ($this->id_po) {
                $this->po = new BmsProcurementPurchaseOrder($this->id_po);
                $this->object = $this->po;
            }
        }

        $this->arrSuppliers = Supplier::getSuppliers();
        if (! empty($this->po->supplier_id)) {
            $this->supplier = new Supplier($this->po->supplier_id);
        }
        parent::init();

        //if (Tools::getIsset('liteDisplay')) {
            $str_ids = '&liteDisplay=1';
            self::$currentIndex .= $str_ids;
        //}
    }

    public function initContent()
    {
        parent::initContent();
        $this->setBmsMedia();
    }

    public function ajaxPreProcess()
    {
        $methode = Tools::getValue('method');
        $arrMethode = array(
            'product',
            'productQty',
            'productQtyNeed',
            'saveCurrentSupplierId'
        );

        $id_po = (int) Tools::getValue('id_po', 0);
        $id_product = (int) Tools::getValue('id_product');
        $id_attribute = (int) Tools::getValue('id_attribute', 0);
        $fieldName = Tools::getValue('fieldName', null);

        if ($id_product && (empty($methode) || ! in_array($methode, $arrMethode))) {
            die(json_encode(array(
                'result' => false
            )));
        }
        if (BmsProcurementStorage::loadForCurrentUser()->getParam($methode)) {
            $data = BmsProcurementStorage::loadForCurrentUser()->getParam($methode);
        } else {
            $data = array();
        }

        $value = (int) Tools::getValue('value', 0);

        switch ($methode) {
            case 'saveCurrentSupplierId':
                BmsProcurementStorage::loadForCurrentUser()->setParam('current_supplier_id', Tools::getValue('supplier_id', 0));
                $data['supplyneeds_current_supplier_id'] = BmsProcurementStorage::loadForCurrentUser()->getParam('current_supplier_id');
                break;
            case 'saveCurrentSupplierIdForAddProducts':
                BmsProcurementStorage::loadForCurrentUser()->setParam('current_supplier_id', Tools::getValue('supplier_id', 0));
                $data['addproduct_current_supplier_id'] = BmsProcurementStorage::loadForCurrentUser()->getParam('current_supplier_id');
                break;
            case "product":
                $value = Tools::getValue('value', null);

                $data[$id_po][$id_product][$id_attribute][$fieldName] = array(
                    'id_product' => $id_product,
                    'id_attribute' => $id_attribute,
                    'value' => Tools::getValue('value', 0),
                    'fieldName' => $fieldName
                );

                break;
            default:
                if ($value <= 0) {
                    unset($data[$id_po][$id_product][$id_attribute]);
                } else {
                    $data[$id_po][$id_product][$id_attribute] = array(
                        'id_product' => $id_product,
                        'id_attribute' => $id_attribute,
                        'value' => Tools::getValue('value', 0)
                    );
                }
        }

        BmsProcurementStorage::loadForCurrentUser()->setParam($methode, $data);

        die(json_encode(array(
            'result' => true,
            'data' => BmsProcurementStorage::loadForCurrentUser()->getParam($methode)
        )));
    }

    public function processWac()
    {
        BmsProcurementPurchaseOrder::updateWAC(Tools::getValue("id_bms_procurement_purchase_order"));
    }

    /**
     * Notify supplier
     *
     * @return bool
     */
    public function processNotify()
    {
        $this->display = 'edit';
        $po = new BmsProcurementPurchaseOrder((int) Tools::getValue('id_bms_procurement_purchase_order'));
        $supplier = new Supplier($po->supplier_id);
        $contacts = BmsProcurementSupplierContact::getContactsBySupplierId($supplier->id);
        $to = null;

        foreach ($contacts as $contact) {
            if ($contact['type'] == 'Sales' && $contact['email'] != '') {
                $to = $contact['email'];
                break;
            }
        }
        if (! $to) {
            $this->errors[] = $this->l('Email supplier not found');

            return false;
        }
        $template = 'Po';
        $pdf = new PDF($po, $template, Context::getContext()->smarty);
        $pdfFile = $pdf->render(false);

        $idLang = $this->context->language->id;
        $template = 'notify';
        $subject = $this->l('Purchase Order') . ' ' . $po->reference . ' ' . $this->l('From') . ' ' . Configuration::get('PS_SHOP_NAME');
        $path = _PS_MODULE_DIR_ . $this->module->name . '/mails/';

        Mail::Send($idLang, $template, $subject, array(), $to, null, null, null, array(
            'content' => $pdfFile,
            'name' => 'purchaseOrder.pdf',
            'mime' => 'application/pdf'
        ), null, $path);

        $this->confirmations[] = $this->l('The message was successfully sent to the supplier');
    }

    /**
     * Delete the PO
     *
     * @return bool
     * @throws Exception
     */
    public function processDelete()
    {
        $id_po = Tools::getValue('id_po');
        if (! $id_po) {
            return false;
        }
        $po = new BmsProcurementPurchaseOrder($id_po);

        $this->redirect_after = $this->context->link->getAdminLink("AdminProcurementHome") . "&conf=4#tabActive=order";

        $result = $po->delete();

        BmsProcurementPurchaseOrder::updateQtyProducts($po->id);
        BmsProcurementPurchaseOrder::updateETAProducts($po->id);
        BmsProcurementPurchaseOrder::updateExtendedCostsProducts($po->id, $po->change_rate, ($po->shipping_cost + $po->additional_cost), Configuration::get('BMS_ADDITIONAL_COST_METHOD'));

        return $result;
    }

    /**
     * Save a PO
     *
     * @return bool
     */
    public function processSave()
    {
        $newStatus = Tools::getValue("status_id");
        $newEta = Tools::getValue('eta');

        if ($this->id_object) {
            $this->object = $this->loadObject();

            $oldStatus = $this->object->status_id;
            $oldEat = $this->object->eta;

            $po = $this->processUpdate();
        } else {
            $po = $this->processAdd();
        }

        if (! $po) {
            return $po;
        }
        $this->addProductPo();
        $this->updateProductPo();

        BmsProcurementPurchaseOrder::updatePo($po);

        return true;
    }

    /**
     * Add products stored in session
     *
     * @param string $method
     * @return bool
     */
    protected function addProductPo($method = 'productQty')
    {
        $key = ($method == 'productQty' ? $this->po->id : 0);

        if (BmsProcurementStorage::loadForCurrentUser()->getParam($method)) {
            $data = BmsProcurementStorage::loadForCurrentUser()->getParam($method);
            if (! is_array($data) || empty($data[$key])) {
                return false;
            }
            $result = BmsProcurementPurchaseOrder::saveAddProduct($this->object->id, $this->object->supplier_id, $data[$key]);

            unset($data[$key]);
            BmsProcurementStorage::loadForCurrentUser()->setParam($method, $data);

            if ($result !== true) {
                $this->errors = array_merge($this->errors, $result);
                $this->redirect_after = null;
                $this->display = "edit";
                return false;
            }
        }
        return true;
    }

    protected function updateProductPo()
    {
        $key = $this->po->id;

        if (BmsProcurementStorage::loadForCurrentUser()->getParam('product')) {
            $data = BmsProcurementStorage::loadForCurrentUser()->getParam('product');
            if (! is_array($data) || empty($data[$key])) {
                return false;
            }
            BmsProcurementPurchaseOrder::updateProduct($this->object->id, $this->object->supplier_id, $data[$key]);

            unset($data[$key]);
            BmsProcurementStorage::loadForCurrentUser()->setParam('product', $data);
        }
        return true;
    }

    public function renderForm()
    {
        if ($this->id_po) {
            $this->context->smarty->assign('id_po', $this->id_po);
        }

        $this->context->smarty->assign('controller_template', _PS_MODULE_DIR_ . $this->module->name . '/views/templates/admin/purchaseOrder/edit/');

        $tpl = $this->createTemplate('edit.tpl');

        $this->fields_form = array(
            'tabs' => array(
                'general' => $this->l('General'),
                'costs' => $this->l('Costs'),
                'shipping' => $this->l('Shipping'),
                'commercial' => $this->l('Commercial')
            ),
            'input' => array(),
            'submit' => array(
                'title' => $this->l('Save')
            )
        );

        $this->setGeneralTab();
        $this->setMiscTabCosts();
        $this->setMiscTabShipping();
        $this->setMiscTabCommercial();

        $this->setFormsValues();

        $this->context->smarty->assign('po', $this->object);
        $this->context->smarty->assign('status', $this->status_array[$this->object->status_id]);
        $this->context->smarty->assign('paiement_status', $this->arrPaymentStatuses[$this->object->supplier_payment_status_id]['name']);

        return $tpl->fetch() . parent::renderForm();
    }

    protected function setFormsValues()
    {
        // si renseigné alors on est en ajout sur un formulaire vierge
        $supplierId = (int) Tools::getValue("supplier_id", Tools::getValue('supplier_id', null));

        if ($this->object->eta == "0000-00-00")
            $this->fields_value['eta'] = '';
        if ($this->object->supplier_invoice_date == "0000-00-00")
            $this->fields_value['supplier_invoice_date'] = '';
        if ($this->object->supplier_invoice_due_date == "0000-00-00")
            $this->fields_value['supplier_invoice_due_date'] = '';
        if ($this->object->supplier_payment_date == "0000-00-00")
            $this->fields_value['supplier_payment_date'] = '';


        if ($supplierId) {
            $supplier = new BmsProcurementSupplier($supplierId);

            $this->fields_value = array(
                'date_add' => Tools::displayDate(date('Y-m-d')),
                'date_upd' => Tools::displayDate(date('Y-m-d'))
            );

            $this->fields_value['supplier_id'] = $supplierId;
            $this->fields_value['status_id'] = 1;
            $this->fields_value['supplier_payment_status_id'] = 1;
            $this->fields_value['employee_id'] = $this->context->employee->id;

            $this->fields_value['currency_id'] = $supplier->getDefaultCurrency();
            $this->fields_value['change_rate'] = ($supplier->default_currency_change_rate ? $supplier->default_currency_change_rate : 1);
            $this->fields_value['taxe_rate'] = ($supplier->default_tax_class ? $supplier->default_tax_class : 1);
        }
    }

    protected function afterAdd($object)
    {
        if (parent::afterAdd($object)) {
            $this->redirect_after = self::$currentIndex . '&' . $this->identifier . '=' . $object->id . '&conf=3&update' . $this->table . '&token=' . $this->token;
        }
        return true;
    }

    protected function afterUpdate($object)
    {
        if (parent::afterUpdate($object)) {
            $this->redirect_after = self::$currentIndex . '&' . $this->identifier . '=' . $this->object->id . '&conf=4&update' . $this->table . '&token=' . $this->token;
        }
        return true;
    }

    protected function setFieldsListe()
    {
        $this->suppliers_array = array();
        $suppliers = Supplier::getSuppliers();
        foreach ($suppliers as $supplier) {
            $this->suppliers_array[$supplier['id_supplier']] = $supplier['name'];
        }

        $arr_employee = Employee::getEmployees(false);
        foreach ($arr_employee as $employee) {
            $this->arr_employee[$employee['id_employee']] = $employee['firstname'] . ' ' . $employee['lastname'];
        }

        $arr_status = BmsProcurementPurchasesOrderStatus::getStatuses();
        foreach ($arr_status as $status) {
            $this->status_array[$status['id_status']] = $this->l($status['name']);
        }

        $arr_status = BmsProcurementPurchasesOrderPaymentStatus::getStatuses();
        foreach ($arr_status as $status) {
            $this->payment_status_array[$status['id_payment_status']] = $this->l($status['name']);
        }
        $this->fields_list = array(
            'id_bms_procurement_purchase_order' => array(
                'title' => $this->l('ID')
            ),
            'date_add' => array(
                'title' => $this->l('Date'),
                'type' => 'date',
                'filter_key' => 'a!date_add',
            ),
            'supplier' => array(
                'title' => $this->l('Supplier'),
                'align' => 'center',
                'search' => true,
                'list' => $this->suppliers_array,
                'filter_key' => 'a!supplier_id',
                'filter_type' => 'int',
                'type' => 'select'
            ),
            'eta' => array(
                'title' => $this->l('ETA'),
                'type' => 'date'
            ),
            'reference' => array(
                'title' => $this->l('Reference')
            ),
            'status' => array(
                'title' => $this->l('Status '),
                'search' => true,
                'list' => $this->status_array,
                'filter_key' => 'a!status_id',
                'filter_type' => 'int',
                'type' => 'select',
                'callback' => 'translateStatus'
            ),
            'payment' => array(
                'title' => $this->l('Payment'),
                'search' => true,
                'list' => $this->payment_status_array,
                'filter_key' => 'a!supplier_payment_status_id',
                'filter_type' => 'int',
                'type' => 'select',
                'callback' => 'translatePaymentStatus'
            ),
            'manager' => array(
                'title' => $this->l('Manager'),
                'list' => $this->arr_employee,
                'filter_key' => 'a!employee_id',
                'filter_type' => 'int',
                'type' => 'select'
            ),
            'total' => array(
                'title' => $this->l('Total'),
                'align' => 'right'
            ),
            'iso_code' => array(
                'title' => $this->l('Currency'),
                'align' => 'center'
            ),
            'products_count' => array(
                'title' => $this->l('Products Count'),
                'align' => 'right'
            ),
            'reception_progress' => array(
                'title' => $this->l('Reception Progress'),
                'align' => 'right'
            )
        );
    }

    public static function translateStatus($status)
    {
        return BmsProcurementPurchasesOrderStatus::l($status);
    }

    public static function translatePaymentStatus($status)
    {
        return BmsProcurementPurchasesOrderPaymentStatus::l($status);
    }

    public function renderList()
    {
        $this->toolbar_btn = array();
        $this->_select = ' CONCAT(employee.firstname, " ",employee.lastname) as manager,iso_code,supplier.name as supplier,sum(qty_ordered) as products_count,sta.`name` as status, pay.name as payment';
        $this->_join =  'LEFT JOIN `' . _DB_PREFIX_ . 'supplier` supplier ON (supplier.`id_supplier` = a.`supplier_id`)' . ' ' .
                        'LEFT JOIN `' . _DB_PREFIX_ . 'employee` employee ON (employee.`id_employee` = a.`employee_id`)' . ' ' .
                        'LEFT JOIN `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_product` pop ON (`po_id` = a.`id_bms_procurement_purchase_order`)' . ' ' .
                        'LEFT JOIN `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_status` sta ON (`id_bms_procurement_purchase_order_status` = a.`status_id`) ' .
                        'LEFT JOIN `' . _DB_PREFIX_ . 'bms_procurement_currency` cur ON (`currency_id` = id_bms_procurement_currency) ' .
                        'LEFT JOIN `' . _DB_PREFIX_ . 'bms_procurement_payment_status` pay ON (`id_bms_procurement_payment_status` = supplier_payment_status_id)' .

        '';
        $this->_group = 'GROUP BY `id_bms_procurement_purchase_order`';

        $this->_orderBy = 'id_bms_procurement_purchase_order';
        $this->_orderWay = 'DESC';

        $html = parent::renderList();

        //fix for JS issue with gamification module
        $html .= HtmlHelper::getNotifIconWrapperDiv();

        return $html;
    }

    protected function setMiscTabCommercial()
    {
        $arrPaymentTerms = BmsProcurementPaymentTerm::getPaymentTerms();
        array_unshift($arrPaymentTerms, array(
            'id_payment_term' => 0,
            'name' => $this->l("None")
        ));

        $arrPaymentMethods = BmsProcurementPaymentMethod::getPaymentMethods();
        array_unshift($arrPaymentMethods, array(
            'id_payment_method' => 0,
            'name' => $this->l("None")
        ));

        $this->arrPaymentStatuses = BmsProcurementPurchasesOrderPaymentStatus::getStatuses();

        array_push($this->fields_form['input'], array(
            'type' => 'text',
            'name' => 'supplier_po_reference',
            'label' => $this->l('Supplier PO #'),
            'required' => false,
            'col' => 2,
            'tab' => 'commercial'
        ), array(
            'type' => 'text',
            'name' => 'supplier_invoice_reference',
            'label' => $this->l('Supplier Invoice #'),
            'required' => false,
            'col' => 2,
            'tab' => 'commercial'
        ), array(
            'type' => 'date',
            'label' => $this->l('Invoice date'),
            'name' => 'supplier_invoice_date',
            'required' => false,
            'col' => 5,
            'tab' => 'commercial'
        ), array(
            'type' => 'date',
            'label' => $this->l('Invoice due date '),
            'name' => 'supplier_invoice_due_date',
            'required' => false,
            'col' => 5,
            'tab' => 'commercial'
        ), array(
            'type' => 'select',
            'label' => $this->l('Payment terms'),
            'name' => 'supplier_payment_terms_id',
            'options' => array(
                'query' => $arrPaymentTerms,
                'id' => 'id_payment_term',
                'name' => 'name'
            ),
            'tab' => 'commercial'
        ), array(
            'type' => 'date',
            'label' => $this->l('Payment date'),
            'name' => 'supplier_payment_date',
            'required' => false,
            'col' => 5,
            'tab' => 'commercial'
        ), array(
            'type' => 'select',
            'label' => $this->l('Payment method'),
            'name' => 'supplier_payment_method_id',
            'options' => array(
                'query' => $arrPaymentMethods,
                'id' => 'id_payment_method',
                'name' => 'name'
            ),
            'tab' => 'commercial'
        ), array(
            'type' => 'select',
            'label' => $this->l('Payment status'),
            'name' => 'supplier_payment_status_id',
            'options' => array(
                'query' => $this->arrPaymentStatuses,
                'id' => 'id_payment_status',
                'name' => 'name'
            ),
            'tab' => 'commercial'
        ));
    }

    protected function setMiscTabShipping()
    {
        array_push($this->fields_form['input'], array(
            'type' => 'text',
            'name' => 'shipping_tracking',
            'label' => $this->l('Shipping Tracking'),
            'required' => false,
            'col' => 2,
            'tab' => 'shipping'
        ), array(
            'type' => 'text',
            'name' => 'shipping_carrier',
            'label' => $this->l('Shipping carrier'),
            'required' => false,
            'col' => 2,
            'tab' => 'shipping'
        ));
    }

    protected function setMiscTabCosts()
    {
        $arrCurrency = BmsProcurementCurrency::getCurrencies();
        foreach ($arrCurrency as &$currency) {
            $currency["name"] = $currency['name'] . ' (' . $currency['iso_code'] . ')';
        }

        ;
        array_push($this->fields_form['input'], array(
            'type' => 'select',
            'label' => $this->l('Currency'),
            'name' => 'currency_id',
            'options' => array(
                'query' => $arrCurrency,
                'id' => 'id_currency',
                'name' => 'name'
            ),
            'tab' => 'costs'
        ), array(
            'type' => 'text',
            'name' => 'change_rate',
            'label' => $this->l('Change Rate'),
            'validation' => 'isFloat',
            'cast' => 'floatval',
            'required' => false,
            'col' => 2,
            'tab' => 'costs'
        ), array(
            'type' => 'text',
            'name' => 'shipping_cost',
            'label' => $this->l('Shipping Cost'),
            'suffix' => $this->po->getCurrencySign(),
            'validation' => 'isFloat',
            'cast' => 'floatval',
            'required' => false,
            'col' => 2,
            'tab' => 'costs'
        ), array(
            'type' => 'text',
            'name' => 'additional_cost',
            'label' => $this->l('Additional Cost'),
            'suffix' => $this->po->getCurrencySign(),
            'validation' => 'isFloat',
            'cast' => 'floatval',
            'required' => false,
            'col' => 2,
            'tab' => 'costs'
        ), array(
            'type' => 'text',
            'name' => 'taxe_rate',
            'label' => $this->l('Taxe Rate'),
            'validation' => 'isFloat',
            'cast' => 'floatval',
            'required' => false,
            'col' => 2,
            'tab' => 'costs'
        ));
    }

    protected function setGeneralTab()
    {
        $arrStatuses = BmsProcurementPurchasesOrderStatus::getStatuses();

        $arrEmployee = Employee::getEmployees(true);
        foreach ($arrEmployee as &$employee) {
            $employee["name"] = $employee['lastname'] . ' ' . $employee['firstname'];
        }
        array_unshift($arrEmployee, array(
            'id_employee' => 0,
            'name' => $this->l("None")
        ));

        array_push($this->fields_form['input'], array(
            'type' => 'text',
            'label' => $this->l('Created at'),
            'name' => 'date_add',
            'disabled' => true,
            'col' => 2,
            'tab' => 'general'
        ), array(
            'type' => 'text',
            'label' => $this->l('Updated at'),
            'name' => 'date_upd',
            'disabled' => true,
            'col' => 2,
            'tab' => 'general'
        ), array(
            'type' => 'select',
            'label' => $this->l('Supplier'),
            'name' => 'supplier_id',
            'disabled' => true,
            'options' => array(
                'query' => $this->arrSuppliers,
                'id' => 'id_supplier',
                'name' => 'name'
            ),
            'tab' => 'general'
        ), array(
            'type' => 'hidden',
            'label' => $this->l('Supplier'),
            'name' => 'supplier_id',
            'tab' => 'general'
        ), array(
            'type' => 'select',
            'label' => $this->l('Status'),
            'name' => 'status_id',
            'options' => array(
                'query' => $arrStatuses,
                'id' => 'id_status',
                'name' => 'name'
            ),
            'tab' => 'general'
        ), array(
            'type' => 'select',
            'label' => $this->l('Manager'),
            'name' => 'employee_id',
            'options' => array(
                'query' => $arrEmployee,
                'id' => 'id_employee',
                'name' => 'name'
            ),
            'tab' => 'general'
        ), array(
            'type' => 'text',
            'label' => $this->l('Reference'),
            'name' => 'reference',
            'required' => true,
            'col' => 2,
            'tab' => 'general'
        ), array(
            'type' => 'date',
            'label' => $this->l('ETA'),
            'name' => 'eta',
            'required' => true,
            'col' => 5,
            'tab' => 'general'
        ), array(
            'type' => 'textarea',
            'label' => $this->l('Public Comment'),
            'name' => 'comments_public',
            'required' => false,
            'autoload_rte' => false,
            'tab' => 'general'
        ), array(
            'type' => 'textarea',
            'label' => $this->l('Private Comment'),
            'name' => 'comments_private',
            'required' => false,
            'autoload_rte' => false,
            'tab' => 'general'
        ));

        $warehouses = $this->getWarehouses();
        if ($warehouses)
        {
            $this->fields_form['input'][] = array(
                                                'type' => 'select',
                                                'label' => $this->l('Warehouse'),
                                                'name' => 'warehouse_id',
                                                'options' => array(
                                                    'query' => $warehouses,
                                                    'id' => 'id_warehouse',
                                                    'name' => 'name'
                                                ),
                                                'tab' => 'general'
                                            );
        }


    }

    public function getWarehouses()
    {
        return Compatibility::getWarehouses();
    }

    public function initPageHeaderToolbar()
    {
        parent::initPageHeaderToolbar();

        $poReference = ($this->po ? $this->po->reference : $this->id_po);
        $this->page_header_toolbar_title = $this->l('Purchase Order') . ' #' . $poReference . ' ('. (! empty($this->supplier->name) ? $this->supplier->name : '').')';

        $this->page_header_toolbar_btn['Notify'] = array(
            'href' => $this->context->link->getAdminLink('AdminProcurementPurchaseOrder') . '&action=notify&id_bms_procurement_purchase_order=' . $this->id_po,
            'desc' => $this->l('Notify'),
            'icon' => 'process-icon-new'
        );
        $this->page_header_toolbar_btn['Print'] = array(
            'href' => ($this->id_po ? $this->context->link->getAdminLink('AdminProcurementPurchaseOrder') . '&action=print&id_po=' . $this->id_po : '#'),
            'desc' => $this->l('Print'),
            'icon' => 'process-icon-print icon-print'
        );
        $this->page_header_toolbar_btn['Receive'] = array(
            'href' => ($this->id_po ? $this->context->link->getAdminLink('AdminProcurementReceptionProduct') . '&id_po=' . $this->id_po : '#'),
            'desc' => $this->l('Receive'),
            'icon' => 'process-icon-new',
            'class' => (! $this->id_po ? 'disabled' : '')
        );
        $this->page_header_toolbar_btn['Export'] = array(
            'href' => ($this->id_po ? $this->context->link->getAdminLink('AdminProcurementPurchaseOrder') . '&action=export&id_po=' . $this->id_po : '#'),
            'desc' => $this->l('Export'),
            'icon' => 'process-icon-export icon-export'
        );
        $this->page_header_toolbar_btn['Delete'] = array(
            'href' => 'javascript:if( confirm("' . $this->l('Are your sure?') . '") ){ location.href="' . $this->context->link->getAdminLink('AdminProcurementPurchaseOrder') . '&action=delete&id_po=' . $this->id_po . '";}',

            'desc' => $this->l('Delete'),
            'icon' => 'process-icon-trash icon-trash'
        );

        $this->context->smarty->assign('help_link', null);
    }

    public function setBmsMedia()
    {
        Media::addJsDef(array(
            'AdminProcurementPOProductTabLabel' => $this->l('Products'),
            'AdminProcurementPOProductTabUrl' => $this->context->link->getAdminLink('AdminProcurementPOProductTab') . ($this->id_po ? '&id_po=' . $this->id_po : ''),
            'AdminProcurementPOAddProductTabLabel' => $this->l('Add Products'),
            'AdminProcurementPOAddProductTabUrl' => $this->context->link->getAdminLink('AdminProcurementPOAddProductTab') . ($this->id_po ? '&id_po=' . (int) $this->id_po : ''),
            'AdminProcurementPOReceptionTabLabel' => $this->l('Receptions'),
            'AdminProcurementPOReceptionTabUrl' => $this->context->link->getAdminLink('AdminProcurementPOReceptionTab') . ($this->id_po ? '&id_po=' . (int) $this->id_po : ''),
            'dateFormat' => Tools::displayDate(date('Y-m-d')),
            'id_po' => $this->id_po
        ));
        $this->addJquery();
        $this->addJqueryUi('ui.tabs');
        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/tabs.js');
        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/iframe.js');
        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/purchaseOrder.js');
        $this->addCSS(_PS_MODULE_DIR_ . $this->module->name . '/views/css/tab.css');
    }

    public function processPrint()
    {
        $id = Tools::getValue('id_po');

        $po = new BmsProcurementPurchaseOrder($id);

        $template = 'Po';
        $pdf = new PDF($po, $template, Context::getContext()->smarty);
        $pdf->filename = $po->reference.'.pdf';
        $pdf->render();
    }

    public function processExport($dummy = "")
    {
        $id = Tools::getValue('id_po');
        $po = new BmsProcurementPurchaseOrder($id);

        $objExport = new BmsProcurement_PurchaseOrder_CsvExport();
        $objExport->export($po);
        die();
    }
}
