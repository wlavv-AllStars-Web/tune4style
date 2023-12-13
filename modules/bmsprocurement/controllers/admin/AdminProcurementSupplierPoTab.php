<?php
/**
 * 2007-2022 Boostmyshop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchaseOrder.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPaymentMethod.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchasesOrderPaymentStatus.php';

use Symfony\Component\HttpKernel\HttpKernelInterface;

class AdminProcurementSupplierPoTabController extends ModuleAdminController
{

    public $po;

    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'bms_procurement_purchase_order';
        $this->className = 'BmsProcurementPurchaseOrder';
        $this->identifier = 'id_bms_procurement_purchase_order';

        parent::__construct();

        $this->setFieldsListe();
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

    public function getSupplierId()
    {
        return Tools::getValue("id_supplier");
    }



    protected function setFieldsListe()
    {

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
            'date_add' => array(
                'title' => $this->l('Date'),
                'type' => 'date'
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
                'filter_key' => 'status_id',
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

        $this->_select = ' CONCAT(employee.firstname, " ",employee.lastname) as manager,iso_code,supplier.name as supplier,sum(qty_ordered) as products_count,sta.`name` as status, pay.name as payment';
        $this->_join =  'LEFT JOIN `' . _DB_PREFIX_ . 'supplier` supplier ON (supplier.`id_supplier` = a.`supplier_id`)' . ' ' .
            'LEFT JOIN `' . _DB_PREFIX_ . 'employee` employee ON (employee.`id_employee` = a.`employee_id`)' . ' ' .
            'LEFT JOIN `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_product` pop ON (`po_id` = a.`id_bms_procurement_purchase_order`)' . ' ' .
            'LEFT JOIN `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_status` sta ON (`id_bms_procurement_purchase_order_status` = a.`status_id`) ' .
            'LEFT JOIN `' . _DB_PREFIX_ . 'bms_procurement_currency` cur ON (`currency_id` = id_bms_procurement_currency) ' .
            'LEFT JOIN `' . _DB_PREFIX_ . 'bms_procurement_payment_status` pay ON (`id_bms_procurement_payment_status` = supplier_payment_status_id)' .

            '';
        $this->_group = 'GROUP BY `id_bms_procurement_purchase_order`';
        $this->_where = ' and supplier_id = ' . pSQL($this->getSupplierId());

        $this->_orderBy = 'id_bms_procurement_purchase_order';
        $this->_orderWay = 'DESC';

    }


    public function renderList()
    {
        $this->list_no_link = true;
        $this->toolbar_btn = array();
        $this->tpl_list_vars['title'] = $this->l('Purchase orders');
        $this->addCSS(_PS_MODULE_DIR_ . $this->module->name . '/views/css/css-prc.css');


        return parent::renderList();
    }

    public function initPageHeaderToolbar()
    {
        $this->page_header_toolbar_title = $this->l('Purchase Orders');
        parent::initPageHeaderToolbar();
    }

    public static function translateStatus($status)
    {
        return BmsProcurementPurchasesOrderStatus::l($status);
    }

    public static function translatePaymentStatus($status)
    {
        return BmsProcurementPurchasesOrderPaymentStatus::l($status);
    }

}
