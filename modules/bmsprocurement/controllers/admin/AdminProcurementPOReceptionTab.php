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
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchaseOrderReception.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchaseOrderReceptionProduct.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementProduct.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/HTMLTemplatePoReception.php';

class AdminProcurementPOReceptionTabController extends ModuleAdminController
{

    public $id_po;

    public $po;

    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'bms_procurement_purchase_order_reception';
        $this->className = 'BmsProcurementPurchaseOrderReception';
        $this->identifier = 'id_bms_procurement_purchase_order_reception';
        $this->lang = false;
        parent::__construct();
        $this->list_no_link = true;
        $this->override_folder = 'reception/';
        $this->setFieldsListe();
    }

    public function init()
    {
        $this->id_po = (int) Tools::getValue('id_po', null);

        if (! $this->id_po) {
            throw new PrestaShopException($this->l('The variable id_po cannot be loaded (or found)'));
        }

        $this->po = new BmsProcurementPurchaseOrder($this->id_po);

        if (! $this->po) {
            throw new PrestaShopException($this->l('The object Purchase Order cannot be loaded (or found)'));
        }

        parent::init();

        $str_ids = '&id_po=' . $this->id_po;
        self::$currentIndex .= $str_ids;
    }

    public function initProcess()
    {
        $this->display_header = false;
        $this->display_header_javascript = true;
        $this->display_footer = false;
        $this->content_only = false;
        $this->lite_display = true;

        parent::initProcess();
    }

    protected function setFieldsListe()
    {
        $this->fields_list = array(

            'date_add' => array(
                'title' => $this->l('Date'),
                'align' => 'center',
                'search' => true
            ),

            'employee' => array(
                'title' => $this->l('User'),
                'align' => 'center',
                'search' => true
            ),
            'Products' => array(
                'title' => $this->l('Products'),
                'align' => 'center',
                'search' => false,
                'orderby' => false,
                'callback' => 'getProduct'
            )
        )
        ;
        $this->addRowAction('print');
    }

    public function getProduct($id_order_reception, $object)
    {
        $list = BmsProcurementPurchaseOrderReceptionProduct::getReceiveProductListe($id_order_reception, $this->context->language->id);
        $tpl = $this->createTemplate('products_table.tpl');
        $tpl->assign('products', $list);
        return $tpl->fetch();
    }

    public function displayPrintLink($param, $id)
    {
        $link = $this->context->link->getAdminLink('AdminProcurementPOReceptionTab') . '&action=print&id_po=' . $this->id_po . '&id_reception=' . $id;
        $tpl = $this->createTemplate('print.tpl');
        $tpl->assign('link', $link);
        return $tpl->fetch();
    }

    public function renderList()
    {
        $this->addCSS(_PS_MODULE_DIR_ . $this->module->name . '/views/css/css-prc.css');
        $this->toolbar_btn = array();

        $this->tpl_list_vars['title'] = $this->l('Receptions');

        $this->_select = 'CONCAT(employee.`firstname`," ",employee.`lastname`) as employee' . ',' . 'id_bms_procurement_purchase_order_reception as Products' . '';
        $this->_join = '
		  LEFT JOIN `' . _DB_PREFIX_ . 'employee` employee ON (employee.`id_employee` = a.`employee_id`)
        ';
        $this->_where = ' AND a.`po_id` = ' . pSQL($this->id_po);
        return parent::renderList();
    }

    public function initPageHeaderToolbar()
    {
        parent::initPageHeaderToolbar();

        $this->context->smarty->assign('help_link', null);
    }

    public function processPrint()
    {
        $id = (int)Tools::getValue('id_reception');

        $object = new BmsProcurementPurchaseOrderReception($id);

        $template = 'PoReception';
        $pdf = new PDF($object, $template, Context::getContext()->smarty);
        $pdf->render();
    }
}
