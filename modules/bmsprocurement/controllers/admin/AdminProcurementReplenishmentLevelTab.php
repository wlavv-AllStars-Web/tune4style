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

require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementProduct.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Helper/Compatibility.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/SalesHistory.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementStorage.php';

class AdminProcurementReplenishmentLevelTabController extends ModuleAdminController
{

    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'product';
        $this->className = 'Product';

        $this->display_header = false;
        $this->display_header_javascript = true;
        $this->display_footer = false;
        $this->content_only = false;
        $this->lite_display = true;
        $this->lang = false;

        parent::__construct();
        $this->list_no_link = true;
        $this->override_folder = 'replenishment_level/';

        $suppliers = Supplier::getSuppliers();
        $this->context->smarty->assign("arrSuppliers", $suppliers);

        $this->suppliers_array = array();
        foreach ($suppliers as $supplier) {
            $this->suppliers_array[$supplier['id_supplier']] = $supplier['name'];
        }

        $this->fields_list = array(
            'image' => array(
                'title' => $this->l('Image'),
                'image' => 'p',
                'align' => 'center',
                'search' => false,
                'orderby' => false,
                'filter' => false
            ),
            'supplier' => array(
                'title' => $this->l('Supplier'),
                'align' => 'center',
                'search' => true,
                'list' => $this->suppliers_array,
                'filter_key' => 'a!id_supplier',
                'filter_type' => 'int',
                'type' => 'select'
            ),
            'ref' => array(
                'title' => $this->l('Sku'),
                'align' => 'center',
                'filter_key' => 'a!reference'
            ),
            'productName' => array(
                'title' => $this->l('Product'),
                'align' => 'left',
                'filter_key' => 'pl!name',
                'search' => true,
                'orderby' => true,
                'callback' => 'getProductName'
            ),
            'stockLevel' => array(
                'title' => $this->l('Stock level'),
                'align' => 'center',
                'filter_key' => 'sa!quantity',
                'search' => true,
                'orderby' => true
            ),
            'sales_history' => array(
                'title' => $this->l('Sales history'),
                'callback' => 'getSalesHistory',
                'search' => false,
                'orderby' => false,
                'class' => 'fixed-width-lg'
            ),
            'params_warning_stock_level' => array(
                'title' => $this->l('Warning stock level'),
                'align' => 'left',
                'search' => true,
                'orderby' => true,
                'callback' => 'getWarningStockLevel'
            ),
            'params_ideal_stock_level' => array(
                'title' => $this->l('Ideal stock level'),
                'align' => 'left',
                'search' => true,
                'orderby' => true,
                'callback' => 'getIdealStockLevel'
            )
        );
    }

    public function initContent()
    {
        parent::initContent();
        $this->setBmsMedia();
    }

    public function getSalesHistory($id_product, $object)
    {
        $tpl = $this->createTemplate('../common/sales_history.tpl');

        $stats = SalesHistory::getForOneProduct($id_product, $object['id_product_attribute'], $object['stockLevel']);


        $tpl->assign('id_product', $id_product);
        $tpl->assign('id_attribute', ($object['id_product_attribute'] ? $object['id_product_attribute'] : 0));

        $tpl->assign('hasSales', $stats['has_sales']);
        $tpl->assign('ranges', $stats['periods']);
        $tpl->assign('avg', $stats['average_sales_per_day']);
        $tpl->assign('runout', $stats['runout']);

        return $tpl->fetch();
    }

    public function getWarningStockLevel($id_product, $object)
    {
        $tpl = $this->createTemplate('warning_stock_level.tpl');

        $tpl->assign('id_product', $object['id_product']);
        $tpl->assign('id_attribute', ($object['id_product_attribute'] ? $object['id_product_attribute'] : 0));
        $tpl->assign('use_default_warning_stock_level', $object['use_default_warning_stock_level']);
        $tpl->assign('warning_stock_level', $object['params_warning_stock_level']);
        $tpl->assign('default_warning_stock_level', Configuration::get('BMS_WARNING_STOCK_LEVEL'));

        return $tpl->fetch();
    }

    public function getIdealStockLevel($id_product, $object)
    {
        $tpl = $this->createTemplate('ideal_stock_level.tpl');

        $tpl->assign('id_product', $object['id_product']);
        $tpl->assign('id_attribute', ($object['id_product_attribute'] ? $object['id_product_attribute'] : 0));
        $tpl->assign('use_default_ideal_stock_level', $object['use_default_ideal_stock_level']);
        $tpl->assign('ideal_stock_level', $object['params_ideal_stock_level']);
        $tpl->assign('default_ideal_stock_level', Configuration::get('BMS_IDEAL_STOCK_LEVEL'));

        return $tpl->fetch();
    }

    public function getProductName($id_product, $object)
    {
        return Compatibility::getProductName($object['id_product'], $object['id_product_attribute'], (int) $this->context->language->id);
    }

    public function initPageHeaderToolbar()
    {
        $this->context->smarty->assign('help_link', null);
    }

    public function renderList()
    {
        $this->tpl_list_vars['title'] = $this->l('Stock replenishment levels');

        $warning_stock_level = 'IF( IFNULL(pp.`use_default_warning_stock_level`,1) = 1,"' . Configuration::get('BMS_WARNING_STOCK_LEVEL') . '",pp.`warning_stock_level`)';
        $ideal_stock_level = 'IF( IFNULL(pp.`use_default_ideal_stock_level`,1) = 1,"' . Configuration::get('BMS_IDEAL_STOCK_LEVEL') . '",pp.`ideal_stock_level`)';

        $this->_select = 'id_image, a.id_product, ' . 'IF(pa.`reference` IS NULL OR pa.`reference` = "" ,a.`reference`,pa.`reference`) as ref,' . 'a.`id_product` as productName,' . 'pa.`id_product_attribute`,' . 'sa.`quantity` as stockLevel,' . 'supplier.`name` as supplier,' . $ideal_stock_level . ' as params_ideal_stock_level,' . $warning_stock_level . ' as params_warning_stock_level,' . 'a.`id_product` as qty_purchase' . ', use_default_warning_stock_level, warning_stock_level, use_default_ideal_stock_level, ideal_stock_level, a.`id_product` as sales_history';

        $this->_join =  'LEFT JOIN `' . _DB_PREFIX_ . 'product_attribute` pa on (a.`id_product` = pa.`id_product`) ' .
                        'LEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON (a.`id_product` = pl.id_product and id_shop = '.$this->context->shop->id.' and id_lang = '.$this->context->language->id.') ' .
                        'LEFT JOIN `' . _DB_PREFIX_ . 'supplier` supplier ON (supplier.`id_supplier` = a.`id_supplier`) ' .
                        'LEFT JOIN `' . _DB_PREFIX_ . 'bms_procurement_product` pp ON ( a.`id_product` = pp.`prestashop_id` AND IFNULL(pa.`id_product_attribute`,0) = pp.`prestashop_attribute_id`) ' .
                        'INNER JOIN `' . _DB_PREFIX_ . 'stock_available` sa ON (a.`id_product` = sa.`id_product` AND IFNULL(pa.`id_product_attribute`,0) = sa.`id_product_attribute`' . StockAvailable::addSqlShopRestriction(null, null, 'sa') . ') ' .
                        'LEFT JOIN `' . _DB_PREFIX_ . 'image_shop` image_shop ON (image_shop.`id_product` = a.`id_product` AND image_shop.`cover` = 1 AND image_shop.id_shop = ' . $this->context->shop->id . ') ';


        if (Configuration::get('BMS_EXCLUDE_DISABLED_PRODUCTS')) {
            $this->_where .= ' AND a.`active` = 1 ';
        }

        $data = BmsProcurementStorage::loadForCurrentUser()->getParam('productQtyNeed');

        if (isset($data[0]) && empty($data[0])) {
            $data[0] = array();
        }
        Media::addJsDef(array(
            'qtyData' => isset($data[0]) ? json_encode($data[0]) : '',
            'ajaxAddQtyLink' => $this->context->link->getAdminLink('AdminProcurementPurchaseOrder', true),
            'id_po' => 0
        ));

        return parent::renderList();
    }

    protected function getWhereClause()
    {
        $whereShop = '';
        if ($this->shopLinkType) {
            $whereShop = Shop::addSqlRestriction($this->shopShareDatas, 'a', $this->shopLinkType);
        }
        $whereClause = ' WHERE 1 ' . (isset($this->_where) ? $this->_where . ' ' : '') . ($this->deleted ? 'AND a.`deleted` = 0 ' : '') . (isset($this->_filter) ? $this->_filter : '') . $whereShop . "\n" . (isset($this->_group) ? $this->_group . ' ' : '') . "\n" . $this->getHavingClause();

        if (! empty($this->newParams)) {
            foreach ($this->newParams as $key => $value) {
                $whereClause = str_replace($key, $value, $whereClause);
            }
        }

        return $whereClause;
    }

    public function setBmsMedia()
    {
        Media::addJsDef(array(
            'ajaxSaveReplenishmentLevelUrl' => $this->context->link->getAdminLink('AdminProcurementReplenishmentLevelTab', true)
        ));

        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/tools.js');
        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/replenishmentLevels.js');
    }

    public function ajaxPreProcess()
    {
        $result = array('result' => false);

        if (Tools::getValue('method') == 'saveField')
        {
            $id_product = (int) Tools::getValue('id_product');
            $id_attribute = (int) Tools::getValue('id_attribute', 0);
            $field = Tools::getValue('field', null);
            $value = Tools::getValue('value', null);

            $obj = BmsProcurementProduct::getProductByPrestashopProduct($id_product, $id_attribute, true);
            $obj->$field = $value;
            $obj->save();

            $result['result'] = true;
            $result['message'] = 'Field '.$field.' updated to '.$value.' for product #'.$id_product.' and attribute #'.$id_attribute;
        }

        die(json_encode($result));
    }
}
