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
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchaseOrderProduct.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchaseOrder.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/HtmlHelper.php';

class AdminProcurementPurchaseOrderHistoryController extends ModuleAdminController
{
    public $id_product;

    public function __construct($id_product)
    {
        $this->bootstrap = true;
        $this->table = 'bms_procurement_purchase_order';
        $this->className = 'BmsProcurementPurchaseOrder';
        $this->identifier = 'id_bms_procurement_purchase_order';

        parent::__construct();
        $this->setFieldsList();
        $this->default_form_language = $this->context->language->id;
    }

    public function initProcess()
    {
        parent::initProcess();

        if (! $this->display) { // renderListe
            $this->display_header = false;
            $this->display_header_javascript = true;
            $this->display_footer = false;
            $this->content_only = false;
            $this->lite_display = true;
        }
    }

    public function init()
    {
        parent::init();
        if ($this->id_product = (int) Tools::getValue('id_product')) {
            $str_ids = '&id_product=' . (int) Tools::getValue('id_product');
            self::$currentIndex .= $str_ids;
        } else {
            throw new Exception('undefine id_product');
        }
    }

    public function initContent()
    {
        parent::initContent();
        $this->setBmsMedia();
    }

    protected function setFieldsList()
    {
        $suppliers = Supplier::getSuppliers();

        foreach ($suppliers as $supplier) {
            $this->suppliers_array[$supplier['id_supplier']] = $supplier['name'];
        }

        $arr_status = BmsProcurementPurchasesOrderStatus::getStatuses();
        $status_array = array();
        foreach ($arr_status as $status) {
            $status_array[$status['id_status']] = $status['name'];
        }

        $this->suppliers_array = array();
        $suppliers = Supplier::getSuppliers();
        foreach ($suppliers as $supplier) {
            $this->suppliers_array[$supplier['id_supplier']] = $supplier['name'];
        }

        $this->fields_list = array(
            'date_add' => array(
                'title' => $this->l('Date'),
                'type' => 'datetime',
                'filter_key' => 'a!date_add'
            ),
            'supplier' => array(
                'title' => $this->l('Supplier'),
                'list' => $this->suppliers_array,
                'filter_key' => 'a!supplier_id',
                'filter_type' => 'int',
                'type' => 'select'
            ),
            'reference' => array(
                'title' => $this->l('Reference')
            ),

            'status' => array(
                'title' => $this->l('Status '),
                'search' => true,
                'list' => $status_array,
                'filter_key' => 'a!status_id',
                'filter_type' => 'int',
                'type' => 'select',
                'callback'  => 'translateStatus'
            ),
            'price' => array(
                'title' => $this->l('Buying price'),
                'align' => 'right'
            ),
            'price_width_coast' => array(
                'title' => $this->l('Buying price with costs'),
                'havingFilter' => true,
                'align' => 'right'
            ),
            'iso_code' => array(
                'title' => $this->l('Currency'),
                'align' => 'center'
            ),
            'qty_ordered' => array(
                'title' => $this->l('Qty ordered'),
                'havingFilter' => true
            ),
            'qty_received' => array(
                'title' => $this->l('Qty received'),
                'havingFilter' => true
            ),
            'qty_to_receive' => array(
                'title' => $this->l('Qty to receive'),
                'havingFilter' => true
            )
        )
        ;
    }

    public static function translateStatus($status)
    {
        return BmsProcurementPurchasesOrderStatus::l($status);
    }

    public function renderList()
    {
        $this->tpl_list_vars['title'] = $this->l('Purchase orders');

        $this->list_no_link = false;
        $this->toolbar_btn = array();
        $price_width_coast = '( SUM(pop.price) + SUM(pop.extended_cost) )';
        $qty_to_receive = 'SUM(pop.qty_expected)';
        $qty_received = 'SUM(pop.qty_received)';
        $qty_ordered = 'SUM(pop.qty_ordered)';

        $this->_select = 'pop.price as price,a.reference, iso_code, supplier.name as supplier, ' . $price_width_coast . ' as price_width_coast, sta.`name` as status,' . $qty_to_receive . ' as qty_to_receive,' . $qty_received . ' as qty_received,' . $qty_ordered . ' as qty_ordered';
        $this->_join =  'INNER JOIN `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_product` pop ON (`po_id` = a.`id_bms_procurement_purchase_order`)' .
                        'INNER JOIN `' . _DB_PREFIX_ . 'product` prod ON (pop.`product_id` = prod.`id_product`)' .
                        'LEFT JOIN `' . _DB_PREFIX_ . 'supplier` supplier ON (supplier.`id_supplier` = a.`supplier_id`)' . ' ' .
                        'LEFT JOIN `' . _DB_PREFIX_ . 'bms_procurement_currency` cur ON (`currency_id` = id_bms_procurement_currency) ' .
                        'LEFT JOIN `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_status` sta ON (`id_bms_procurement_purchase_order_status` = a.`status_id`)' . '';

        $this->_where = 'AND pop.product_id = ' . (int) $this->id_product;
        $this->_group = 'GROUP BY a.id_bms_procurement_purchase_order,id_bms_procurement_purchase_order_status,price,a.reference,supplier.name,a.date_add';

        $this->_defaultOrderBy = 'date_add';
        $this->_defaultOrderWay = "DESC";

        //fix for JS issue with gamification module
        $html = parent::renderList();
        $html .= HtmlHelper::getNotifIconWrapperDiv();
        return $html;
    }

    public function setBmsMedia()
    {
        $this->addJS(_PS_MODULE_DIR_ . 'bmsprocurement/views/js/iframe.js');
        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/purchaseOrderHistory.js');
    }
}
