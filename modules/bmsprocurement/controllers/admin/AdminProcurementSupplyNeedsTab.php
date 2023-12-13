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

require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Helper/Compatibility.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/SalesHistory.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementStorage.php';

class AdminProcurementSupplyNeedsTabController extends ModuleAdminController
{

    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'product';
        $this->className = 'BmsProcurementPurchaseOrderProduct';

        $this->display_header = false;
        $this->display_header_javascript = true;
        $this->display_footer = false;
        $this->content_only = false;
        $this->lite_display = true;
        $this->lang = false;

        parent::__construct();
        $this->list_no_link = true;
        $this->override_folder = 'supplyNeeds/';

        $suppliers = Supplier::getSuppliers();
        $this->context->smarty->assign("arrSuppliers", $suppliers);
        $this->context->smarty->assign("currentSupplierId", (int)BmsProcurementStorage::loadForCurrentUser()->getParam('current_supplier_id'));

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
                'class' => 'tds',
                'filter' => false
            ),
            'ref' => array(
                'title' => $this->l('Sku'),
                'align' => 'center',
                'filter_key' => 'a!reference',
                'class' => 'tds',
                'search' => true
            ),
            'productName' => array(
                'title' => $this->l('Name'),
                'align' => 'left',
                'filter_key' => 'pl!name',
                'search' => true,
                'orderby' => true,
                'class' => 'tds',
                'callback' => 'getProductName'
            ),
            'stockLevel' => array(
                'title' => $this->l('Stock level'),
                'align' => 'center',
                'filter_key' => 'sa!quantity',
                'search' => true,
                'class' => 'tds',
                'orderby' => true
            ),
            'params_warning_stock_level' => array(
                'title' => $this->l('Warning stock'),
                'align' => 'center',
                'class' => 'tds',
                'search' => false
            ),
            'params_ideal_stock_level' => array(
                'title' => $this->l('Ideal stock'),
                'align' => 'center',
                'orderby' => true,
                'class' => 'tds',
                'search' => false
            ),
            'qte_for_backorders' => array(
                'title' => $this->l('Qty backorders'),
                'align' => 'center',
                'search' => false,
                'class' => 'tds',
                'orderby' => true
            ),
            'for_low_stock' => array(
                'title' => $this->l('Qty low stock'),
                'align' => 'center',
                'search' => false,
                'class' => 'tds',
                'orderby' => true
            ),
            'qtyToReceive' => array(
                'title' => $this->l('Qty receive'),
                'align' => 'center',
                'search' => false,
                'class' => 'tds',
                'orderby' => true
            ),
            'qty_purchase' => array(
                'title' => $this->l('Qty to purchase'),
                'align' => 'center',
                'callback' => 'getQteTopurchase',
                'search' => false,
                'orderby' => true,
                'class' => 'fixed-width-lg tds'
            ),
            'sales_history' => array(
                'title' => $this->l('Sales history'),
                'callback' => 'getSalesHistory',
                'search' => false,
                'orderby' => false,
                'class' => 'fixed-width-lg'
            ),
            'supplier' => array(
                'title' => $this->l('Supplier'),
                'align' => 'left',
                'search' => false,
                'orderby' => false,
                'list' => $this->suppliers_array,
                'filter_key' => 'a!id_supplier',
                'filter_type' => 'int',
                'callback' => 'suppliersCallback',
                'class' => 'tds',
                'type' => 'select'
            ),

        );
    }

    public function initContent()
    {
        parent::initContent();
        $this->setBmsMedia();
    }

    public function getProductName($id_product, $object)
    {
        return Compatibility::getProductName($object['id_product'], $object['id_product_attribute'], (int) $this->context->language->id);
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

    public function getQteTopurchase($id_product, $object)
    {
        $tpl = $this->createTemplate('add_qty.tpl');
        $tpl->assign('id_product', $id_product);
        $tpl->assign('id_attribute', ($object['id_product_attribute'] ? $object['id_product_attribute'] : 0));
        $tpl->assign('qty_min', $object['qte_for_backorders']);
        $tpl->assign('qty_max', $object['for_low_stock']);

        return $tpl->fetch();
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

    public function initPageHeaderToolbar()
    {
        $this->context->smarty->assign('help_link', null);
    }

    public function renderList()
    {
        $this->tpl_list_vars['title'] = $this->l('Supply Needs');

        $qtyToReceive = '(
                            SELECT
                                IF(SUM(`qty_expected`) >= 0, SUM(`qty_expected`), 0)
                            FROM
                                `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_product` pop
                                inner join `' . _DB_PREFIX_ . 'bms_procurement_purchase_order` on id_bms_procurement_purchase_order = po_id
                                inner join `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_status` on id_bms_procurement_purchase_order_status = status_id
                            WHERE
                                a.`id_product` = pop.`product_id`
                                AND expected = 1
                                AND IFNULL(pa.`id_product_attribute`,0) = pop.`product_attribute_id`
                        )';


        if (Compatibility::advancedStockModuleIsInstalled()){
            $qte_for_backorders = ' tbl_backorder.product_backorder_qty ';
        } else{
            $qte_for_backorders = 'IF(
                                        sa.`quantity` < 0, 
                                        IF( ABS(sa.`quantity`) - ' . $qtyToReceive . ' > 0,
                                            ABS(sa.`quantity`) - ' . $qtyToReceive . ',
                                            0
                                        ),
                                        0
                                    )';
        }

        $warning_stock_level = 'IF( IFNULL(pp.`use_default_warning_stock_level`,1) = 1,"' . Configuration::get('BMS_WARNING_STOCK_LEVEL') . '",pp.`warning_stock_level`)';
        $ideal_stock_level = 'IF( IFNULL(pp.`use_default_ideal_stock_level`,1) = 1,"' . Configuration::get('BMS_IDEAL_STOCK_LEVEL') . '",pp.`ideal_stock_level`)';

        $for_low_stock = 'GREATEST(
                                    IF( sa.`quantity` < ' . $warning_stock_level . ', 
                                        IF( sa.`quantity` < 0, 
                                            ABS(sa.`quantity`) + '. $ideal_stock_level . ', 
                                            IF('. $ideal_stock_level .' - sa.`quantity` > 0 , '. $ideal_stock_level .' - sa.`quantity`, 0)
                                        ),
                                        0 
                                    ) -  ' . $qtyToReceive. ',
                                    0
                                )';

        $this->_select = 'id_image, pl.name, ' . 'IF(pa.`reference` IS NULL OR pa.`reference` = "" ,a.`reference`,pa.`reference`) as ref,' . 'a.`id_product` as productName,' . 'pa.`id_product_attribute`,' . 'sa.`quantity` as stockLevel,' . 'supplier.`name` as supplier,' . $ideal_stock_level . ' as params_ideal_stock_level,' . $warning_stock_level . ' as params_warning_stock_level,' . $qte_for_backorders . ' as qte_for_backorders,' . $for_low_stock . ' as for_low_stock,' . $qtyToReceive . ' as qtyToReceive,' . 'a.`id_product` as qty_purchase, a.`id_product` as sales_history' . '';

        $this->_join =  'LEFT JOIN `' . _DB_PREFIX_ . 'product_attribute` pa on (a.`id_product` = pa.`id_product`) ' .
                        'LEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON (a.`id_product` = pl.id_product and id_shop = '.$this->context->shop->id.' and id_lang = '.$this->context->language->id.') ' .
                        'LEFT JOIN `' . _DB_PREFIX_ . 'supplier` supplier ON (supplier.`id_supplier` = a.`id_supplier`) ' .
                        'LEFT JOIN `' . _DB_PREFIX_ . 'bms_procurement_product` pp ON ( a.`id_product` = pp.`prestashop_id` AND IFNULL(pa.`id_product_attribute`,0) = pp.`prestashop_attribute_id`) ';

        if (Compatibility::advancedStockModuleIsInstalled())
        {
            $this->_join .= '
                            LEFT JOIN (select wi_product_id, wi_attribute_id, if(SUM(wi_physical_quantity - wi_quantity_to_ship) < 0, -SUM(wi_physical_quantity - wi_quantity_to_ship), 0) as product_backorder_qty from ' . _DB_PREFIX_ . 'bms_advancedstock_warehouse_product group by wi_product_id, wi_attribute_id) tbl_backorder on ( a.`id_product` = tbl_backorder.`wi_product_id` AND IFNULL(pa.`id_product_attribute`,0) = tbl_backorder.`wi_attribute_id`)
                            ';
        }

        $this->_join .=  'INNER JOIN `' . _DB_PREFIX_ . 'stock_available` sa ON (a.`id_product` = sa.`id_product` AND IFNULL(pa.`id_product_attribute`,0) = sa.`id_product_attribute`' . StockAvailable::addSqlShopRestriction(null, null, 'sa') . ') ' .
                        'LEFT JOIN `' . _DB_PREFIX_ . 'image_shop` image_shop ON (image_shop.`id_product` = a.`id_product` AND image_shop.`cover` = 1 AND image_shop.id_shop = ' . $this->context->shop->id . ') ';


        $this->_where = 'AND (' . $qte_for_backorders . ' > 0 OR ' . $for_low_stock . ' >0)';
        if (Configuration::get('BMS_EXCLUDE_DISABLED_PRODUCTS')) {
            $this->_where .= ' AND a.`active` = 1 ';
        }

        $this->_where .= ' AND a.`is_virtual` = 0 ';

        if (BmsProcurementStorage::loadForCurrentUser()->getParam('current_supplier_id'))
            $this->_where .= ' AND (a.`id_product` in ('.$this->getProductIdsFromSupplierId(BmsProcurementStorage::loadForCurrentUser()->getParam('current_supplier_id')).')) ';


        if (isset($this->context->cookie->procurementsupplyneedstabproductFilter_qte_for_backorders)) {
            $this->newParams['`qte_for_backorders`'] = $qte_for_backorders;
        }
        if (isset($this->context->cookie->procurementsupplyneedstabproductFilter_params_warning_stock_level)) {
            $this->newParams['`params_warning_stock_level`'] = $warning_stock_level;
        }
        if (isset($this->context->cookie->procurementsupplyneedstabproductFilter_params_ideal_stock_level)) {
            $this->newParams['`params_ideal_stock_level`'] = $ideal_stock_level;
        }
        if (isset($this->context->cookie->procurementsupplyneedstabproductFilter_for_low_stock)) {
            $this->newParams['`for_low_stock`'] = $for_low_stock;
        }
        if (isset($this->context->cookie->procurementsupplyneedstabproductFilter_qtyToReceive)) {
            $this->newParams['`qtyToReceive`'] = $qtyToReceive;
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

        $topToolBar = $this->createTemplate('topToolBar.tpl');
        return $topToolBar->fetch() . parent::renderList();
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

    public function getProductIdsFromSupplierId($supplierId)
    {
        $productIds = array();
        $productIds[] = -1;

        if ($supplierId)
        {
            $sql = 'select distinct id_product from ' . _DB_PREFIX_ . 'product_supplier where id_supplier = '.pSQL($supplierId);
            $collection = Db::getInstance()->executeS($sql);
            foreach($collection as $item)
            {
                $productIds[] = $item['id_product'];
            }
        }

        return implode(',', $productIds);
    }

    public function setBmsMedia()
    {
       $this->addCSS(_PS_MODULE_DIR_ . $this->module->name . '/views/css/css-prc.css');
        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/tools.js');
        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/supplyNeeds.js');
        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/poAddQty.js');
    
    }
}
