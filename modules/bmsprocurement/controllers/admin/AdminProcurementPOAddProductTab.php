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

require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchaseOrder.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/SalesHistory.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementStorage.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/HtmlHelper.php';

class AdminProcurementPOAddProductTabController extends ModuleAdminController
{

    public $po = null;

    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'product';
        $this->className = 'Product';
        $this->context = Context::getContext();
        $this->default_form_language = $this->context->language->id;
        $this->list_no_link = true;
        parent::__construct();

        $this->setFieldsListe();
        $this->override_folder = 'purchaseOrderAddProducts/';
    }

    public function init()
    {
        parent::init();
        if ((int) Tools::getValue('id_po')) {
            $str_ids = '&id_po=' . (int) Tools::getValue('id_po');
            self::$currentIndex .= $str_ids;

            $this->po = new BmsProcurementPurchaseOrder((int) Tools::getValue('id_po'));
        }
    }
    
    public function initContent()
    {
        parent::initContent();
        $this->setBmsMedia();
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
            'qtyTo' => array(
                'title' => $this->l('Qty to add'),
                'align' => 'center',
                'callback' => 'getAddContent',
                'search' => false,
                'class' => 'tds',
                'style' => 'width: 99px;',
                'orderby' => false
            ),
            'image' => array(
                'title' => $this->l('Image'),
                'image' => 'p',
                'align' => 'center',
                'search' => false,
                'orderby' => false,
                'class' => 'tds',
                'filter' => false
            ),
            'reference' => array(
                'title' => $this->l('Reference'),
                'align' => 'center',
                'search' => true,
                'class' => 'tds',
                'orderby' => true
            ),
            'product_supplier_reference' => array(
                'title' => $this->l('Supplier Sku'),
                'align' => 'center',
                'search' => true,
                'class' => 'tds',
                'orderby' => true
            ),
            'name' => array(
                'title' => $this->l('Name'),
                'align' => 'center',
                'filter_key' => 'pl!name',
                'search' => true,
                'class' => 'tds',
                'orderby' => true
            ),
            'wholesale_price' => array(
                'title' => $this->l('Wholesale price'),
                'align' => 'center',
                'search' => false,
                'orderby' => false,
                'class' => 'tds',
                'callback' => 'getWholesalePrice'
                
            ),
            'stockLevel' => array(
                'title' => $this->l('Stock level'),
                'align' => 'center',
                'search' => true,
                'orderby' => true,
                                'class' => 'tds',

                'filter_key' => 'stockLevel'
            ),
            'warning_stock_level' => array(
                'title' => $this->l('Warning stock level'),
                'align' => 'center',
                'search' => true,
                'class' => 'tds',
                'orderby' => true
            ),
            'ideal_stock_level' => array(
                'title' => $this->l('Ideal stock level'),
                'align' => 'center',
                'search' => true,
                'class' => 'tds',
                'orderby' => true
            ),
            'sales_history' => array(
                'title' => $this->l('Sales history'),
                'callback' => 'getSalesHistory',
                'search' => false,
                'orderby' => false,
                'class' => 'fixed-width-lg'
            ),
            'supplier_name' => array(
                'title' => $this->l('Supplier'),
                'align' => 'left',
                'search' => false,
                'orderby' => false,
                'callback' => 'suppliersCallback',
                  'class' => 'tds'
            )
        );
    }

    public function suppliersCallback($id_product, $object)
    {
        $suppliers = array();

        $sql = 'select
                  name,
                  product_supplier_price_te,
                  if(p.id_supplier = s.id_supplier, 1, 0) as is_default_supplier
                from
                    ' . _DB_PREFIX_ . 'product_supplier ps
                    inner join ' . _DB_PREFIX_ . 'supplier s on ps.id_supplier = s.id_supplier
                    inner join ' . _DB_PREFIX_ . 'product p on ps.id_product = p.id_product
                where
                    ps.id_product = '.pSQL($object['id_product']).'
                    and ps.id_product_attribute = 0
                order by
                    name';

        $collection = Db::getInstance()->executeS($sql);
        foreach($collection as $item)
        {
            $price = ($item['product_supplier_price_te'] > 0 ? '('.number_format((float)$item['product_supplier_price_te'], 2, '.', '').')' : '');
            $color = ($item['is_default_supplier'] ? 'green' : 'black');
            $suppliers[] = '<font color="'.$color.'">'.$item['name'].' '.$price.'</font>';
        }

        return implode('<br>', $suppliers);
    }

    public function getAddContent($id_product, $objet)
    {
        $tmpProduct = new Product((int) $id_product);
        $hasAttributes = $tmpProduct->hasAttributes();

        $link = Context::getContext()->link->getAdminLink('AdminProcurementPOAddProductAttributes', true) . "&id_product=" . $id_product . "&id_po=" . (int) Tools::getValue('id_po') . "&liteDisplaying=1";

        $tpl = $this->createTemplate('add_qty.tpl');

        $tpl->assign('link', $link);
        $tpl->assign('id_product', $id_product);
        $tpl->assign('hasAttributes', $hasAttributes);

        return $tpl->fetch();
    }

    public function getWholesalePrice($id_product, $objet)
    {
        return BmsProcurementProduct::getWholesalePrice($id_product, 0, (int) $this->po->supplier_id);
    }

    public function getSalesHistory($id_product, $object)
    {
        $tpl = $this->createTemplate('../common/sales_history.tpl');

        $stats = SalesHistory::getForOneProduct($id_product, 0, $object['stockLevel']);

        $tpl->assign('id_product', $id_product);
        $tpl->assign('id_attribute', 0);

        $tpl->assign('hasSales', $stats['has_sales']);
        $tpl->assign('ranges', $stats['periods']);
        $tpl->assign('avg', $stats['average_sales_per_day']);
        $tpl->assign('runout', $stats['runout']);

        return $tpl->fetch();
    }

    public function renderList()
    {
        $this->tpl_list_vars['title'] = $this->l('ADD Products');

        $this->toolbar_btn = array();

        $this->_select = 'id_image, pl.name, supplier.`name` as supplier_name, a.`id_product` as productName, a.id_product,' . 'product_supplier.`product_supplier_reference` as product_supplier_reference, ' . 'sa.`quantity` as stockLevel,' . 'pp.`warning_stock_level`,' . 'pp.`ideal_stock_level`,' . 'a.`id_product` as qtyTo,' . 'a.`id_product` as wholesale_price, a.`id_product` as sales_history';

        $supplierIdFilter = null;
        if (((int) Configuration::get("BMS_PREVENT_ADD_PRODUCT") != 1))
            $supplierIdFilter = BmsProcurementStorage::loadForCurrentUser()->getParam('current_supplier_id');

        $liaison = 'LEFT JOIN';
        if (((int) Configuration::get("BMS_PREVENT_ADD_PRODUCT") == 1) || ($supplierIdFilter)) {
            $liaison = 'INNER JOIN';
        }

        $this->_join = $liaison . '`' . _DB_PREFIX_ . 'product_supplier` product_supplier ON ( a.`id_product` = product_supplier.`id_product` and product_supplier.`id_product_attribute` = 0 AND product_supplier.`id_supplier` = ' . (int) ($supplierIdFilter ? $supplierIdFilter : $this->po->supplier_id) . ') ' .
                        'LEFT JOIN `' . _DB_PREFIX_ . 'supplier` supplier ON (IFNULL(product_supplier.`id_supplier`,a.`id_supplier`) = supplier.`id_supplier`) ' .
                        'LEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON (a.`id_product` = pl.id_product and id_shop = '.$this->context->shop->id.' and id_lang = '.$this->context->language->id.') ' .
                        'LEFT JOIN `' . _DB_PREFIX_ . 'bms_procurement_product` pp ON (a.`id_product` = pp.`prestashop_id` AND pp.`prestashop_attribute_id`=0) ' . 'LEFT JOIN `' . _DB_PREFIX_ . 'image_shop` image_shop ON (image_shop.`id_product` = a.`id_product` AND image_shop.`cover` = 1 AND image_shop.id_shop = ' . $this->context->shop->id . ') ' .
                        'INNER JOIN `' . _DB_PREFIX_ . 'stock_available` sa ON (a.`id_product` = sa.`id_product`  AND sa.`id_product_attribute` = 0 ' . StockAvailable::addSqlShopRestriction(null, null, 'sa') . ') ';

        // restrict list to no already added products
        if ((int) Tools::getValue('id_po')) {
            $this->_where .= ' AND NOT EXISTS (' . 'SELECT `po_id` from `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_product` spo  where`po_id` = ' . (int) Tools::getValue('id_po') . ' and spo.`product_id` = a.`id_product` and spo.`product_attribute_id` = 0' . ')';
        }

        $this->_groupBy = 'a.`id_product`, a.`id_product_attribute`';

        $data = BmsProcurementStorage::loadForCurrentUser()->getParam('productQty');
        if (isset($data[$this->po->id]) && empty($data[$this->po->id])) {
            $data[$this->po->id] = array();
        }
        Media::addJsDef(array(
            'qtyData' => isset($data[$this->po->id]) ? json_encode($data[$this->po->id]) : '',
            'ajaxAddQtyLink' => $this->context->link->getAdminLink('AdminProcurementPurchaseOrder', true),
            'id_po' => $this->po->id
        ));

        if ((int) Configuration::get("BMS_PREVENT_ADD_PRODUCT") != 1) {
            $topToolBar = $this->createTemplate('topToolBar.tpl');
            $suppliers = Supplier::getSuppliers();
            $topToolBar->assign("arrSuppliers", $suppliers);
            $this->context->smarty->assign("currentSupplierId", (int)BmsProcurementStorage::loadForCurrentUser()->getParam('current_supplier_id'));
            return HtmlHelper::getNotifIconWrapperDiv().$topToolBar->fetch() . parent::renderList();
        }
        else
        {
            $html = parent::renderList();

            //fix for JS issue with gamification module
            $html .= HtmlHelper::getNotifIconWrapperDiv();

            return $html;
        }

    }

    public function initPageHeaderToolbar()
    {
        $this->page_header_toolbar_title = $this->l('Purchase Order');
        parent::initPageHeaderToolbar();

    }

    public function setBmsMedia()
    {
        parent::setMedia();
        $this->addCSS(_PS_MODULE_DIR_ . $this->module->name . '/views/css/css-prc.css');
        $this->addJS(_PS_MODULE_DIR_ . 'bmsprocurement/views/js/iframe.js');
        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/poAddProduct.js');
        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/poAddQty.js');
    }
}
