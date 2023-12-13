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

require_once _PS_MODULE_DIR_ . 'bmsprocurement/controllers/admin/AdminProcurementPurchaseOrder.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/controllers/admin/AdminProcurementSuppliers.php';

class AdminProcurementHomeController extends ModuleAdminController
{

    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'bms_procurement_purchase_order';
        $this->className = 'BmsProcurementPurchaseOrder';
        $this->identifier = 'id_bms_procurement_purchase_order';

        parent::__construct();

        $this->override_folder = 'homeProcurement/';
        $this->default_form_language = $this->context->language->id;
    }

    public function init()
    {
        $_GET['controller'] = 'AdminProcurementPurchaseOrder';
        parent::init();
    }

    public function initContent()
    {
        parent::initContent();
        $this->setBmsMedia();
    }

    public function initToolbarTitle()
    {
        parent::initToolbarTitle();
        $this->toolbar_title = $this->l('Procurement - Home');
    }

    public function renderList()
    {
        if (Tools::getvalue('home') == 1) {
            $str_ids = '&home=' . (int) Tools::getValue('home');
            self::$currentIndex .= $str_ids;

            $this->display_header = false;
            $this->display_header_javascript = true;
            $this->display_footer = false;
            $this->content_only = false;
            $this->lite_display = true;
            $this->list_simple_header = true;
            $this->_default_pagination = 10;

            $this->addCSS(_PS_MODULE_DIR_ . $this->module->name . '/views/css/lite_display.css');
            $tpl = $this->createTemplate('tabs/dashboard.tpl');
            $this->context->smarty->assign('expected_reception_table', $this->renderExpectedReceptions());
            $this->context->smarty->assign('po_to_track_table', $this->renderPurchaseOrderToTrack());

            return $tpl->fetch();
        } else {
            return $this->renderHome();
        }
    }

    public function renderExpectedReceptions()
    {
        $this->table = 'bms_procurement_purchase_order';
        $this->className = 'BmsProcurementPurchaseOrder';
        $this->identifier = 'id_bms_procurement_purchase_order';

        $this->explicitSelect = true;

        $this->fields_list = array(
            'eta' => array(
                'title' => $this->l('ETA'),
                'type' => 'string'
            ),
            'supplier' => array(
                'title' => $this->l('Supplier')
            ),

            'reference' => array(
                'title' => $this->l('PO #')
            ),
            'products_count' => array(
                'title' => $this->l('Products Count')
            )
        )
        ;
        $this->_select = 'id_bms_procurement_purchase_order,supplier.name as supplier,count(po_id) as products_count';
        $this->_join = 'LEFT JOIN `' . _DB_PREFIX_ . 'supplier` supplier ON (supplier.`id_supplier` = a.`supplier_id`)' . ' ' . 'LEFT JOIN `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_product` pop ON (`po_id` = a.`id_bms_procurement_purchase_order`)' . '';
        $this->_group = 'GROUP BY `id_bms_procurement_purchase_order`';
        $this->_orderBy = 'id_bms_procurement_purchase_order';
        $this->_where = 'AND `status_id` in (5, 6) ';

        $this->_default_pagination = 100;

        $this->tpl_list_vars['title'] = $this->l('Expected Receptions');
        $this->token = Tools::getAdminTokenLite('AdminProcurementPurchaseOrder');

        return parent::renderList();
    }

    public function renderPurchaseOrderToTrack()
    {
        $this->table = 'bms_procurement_purchase_order';
        $this->className = 'BmsProcurementPurchaseOrder';
        $this->identifier = 'id_bms_procurement_purchase_order';

        $this->fields_list = array(
            'eta' => array(
                'title' => $this->l('ETA'),
                'type' => 'date'
            ),
            'supplier' => array(
                'title' => $this->l('Supplier')
            ),

            'reference' => array(
                'title' => $this->l('PO #')
            ),
            'po_total' => array(
                'title' => $this->l('PO total')
            ),
            'status' => array(
                'title' => $this->l('Status'),
                'callback' => 'translateStatus'
            )
        )
        ;

        $this->_select = 'sta.`name` as status' . ',' . 'id_bms_procurement_purchase_order,supplier.name as supplier' . ', ' . '( `shipping_cost` + `shipping_tax_rate` + `additional_cost` + `additional_tax_rate` + SUM(pop.`qty_ordered` * ( pop.`price` + pop.`tax_rate` ) )) as po_total' . ',' . '';
        $this->_join = 'LEFT JOIN `' . _DB_PREFIX_ . 'supplier` supplier ON (supplier.`id_supplier` = a.`supplier_id`)' . ' ' . 'LEFT JOIN `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_status` sta ON (`id_bms_procurement_purchase_order_status` = a.`status_id`)' . 'LEFT JOIN `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_product` pop ON (`po_id` = a.`id_bms_procurement_purchase_order`)' . '';
        $this->_where = 'AND `status_id` < 4 '; // status different from expected / partially received / finished / canceled

        $this->_group = 'GROUP BY id_bms_procurement_purchase_order';
        $this->tpl_list_vars['title'] = $this->l('Purchase Orders To Track');
        $this->token = Tools::getAdminTokenLite('AdminProcurementPurchaseOrder');

        return parent::renderList();
    }

    public static function translateStatus($status)
    {
        return BmsProcurementPurchasesOrderStatus::l($status);
    }

    public function renderSupplyNeedsSummary()
    {
        $this->fields_list = array(
            'id_supplier' => array(
                'title' => $this->l('ID'),
                'align' => 'center',
                'class' => 'fixed-width-xs',
                'type' => 'int',
                'search' => false,
                'filter' => false
            ),
            'name' => array(
                'title' => $this->l('Name'),
                'search' => false,
                'filter' => false
            ),
            'date_add' => array(
                'title' => $this->l('Created at'),
                'type' => 'datetime',
                'search' => false,
                'filter' => false
            ),
            'country' => array(
                'title' => $this->l('Country'),
                'search' => false,
                'filter' => false
            ),
            'phone' => array(
                'title' => $this->l('Phone'),
                'search' => false,
                'filter' => false
            ),
            'enabled' => array(
                'title' => $this->l('Enabled'),
                'type' => 'bool',
                'align' => 'center',
                'search' => false,
                'filter' => false
            )
        );
        $this->table = 'bms_procurement_purchase_order';
        $this->className = 'BmsProcurementPurchaseOrder';
        $this->identifier = 'id_bms_procurement_purchase_order';
        $this->list_no_link = true;

        $this->_select = 'supplier.name as supplier';
        $this->_join = '
		  LEFT JOIN `' . _DB_PREFIX_ . 'supplier` supplier ON (supplier.`id_supplier` = a.`supplier_id`)
        ';
        $this->tpl_list_vars['title'] = $this->l('Supply Needs Summary');
        return parent::renderList();
    }

    public function renderHome()
    {
        $this->toolbar_btn = array();
        /**
         * Recupere la liste des fournisseurs
         *
         * @var Array $arrEmployee
         */
        $arrSuppliers = Supplier::getSuppliers();
        $this->context->smarty->assign('arrSuppliers', $arrSuppliers);
        $supplierSelectTempate = $this->context->smarty->fetch($this->getTemplatePath() . '/suppliers/select_template.tpl');
        $this->context->smarty->assign('supplierSelectTemplate', $supplierSelectTempate);
        $this->context->smarty->assign('module_template', $this->getTemplatePath());
        $tpl = $this->createTemplate('home.tpl');
        return $tpl->fetch();
    }

    public function setBmsMedia()
    {
        $this->addJquery();
        $this->addJqueryUi('ui.tabs');

        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/iframe.js');
        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/tabs.js');
        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/home.js');
    }

    public function initPageHeaderToolbar()
    {
        parent::initPageHeaderToolbar();

        $this->page_header_toolbar_btn['supplier'] = array(
            'href' => $this->context->link->getAdminLink('AdminProcurementSuppliers', true) . '&addsupplier',
            'desc' => $this->l('Create Supplier'),
            'icon' => 'process-icon-new'
        );
        $this->page_header_toolbar_btn['po'] = array(
            'href' => '#supplierSelect',
            'desc' => $this->l('Create Purchase Order'),
            'icon' => 'process-icon-new',
            'imgclass' => 'fancybox'
        );
        $this->page_header_toolbar_btn['setting'] = array(
            'href' => $this->context->link->getAdminLink('AdminModules', true) . '&configure=Administration&configure=bmsprocurement',
            'desc' => $this->l('Settings'),
            'icon' => 'process-icon-configure',
            'imgclass' => 'fancybox'
        );

        $this->context->smarty->assign('help_link', null);
    }

    public function initProcess()
    {

        /*
         * $this->display_header = false;
         * $this->display_header_javascript = true;
         * $this->display_footer = false;
         * $this->content_only = false;
         * $this->lite_display = true;
         */
        parent::initProcess();
    }
}
