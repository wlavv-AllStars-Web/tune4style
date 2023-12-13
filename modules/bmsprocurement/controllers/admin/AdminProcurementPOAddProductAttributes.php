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
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementProduct.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementStorage.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Helper/Compatibility.php';

class AdminProcurementPOAddProductAttributesController extends ModuleAdminController
{

    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'product_attribute';
        $this->className = 'Product';

        parent::__construct();

        $this->lang = false;

        $this->override_folder = 'product/';

        $this->setId();
        $this->setFieldsListe();
    }

    public function init()
    {
        parent::init();
        if ((int) Tools::getValue('id_product')) {
            $str_ids = '&id_product=' . (int) Tools::getValue('id_product') . '&id_po=' . (int) Tools::getValue('id_po');
            self::$currentIndex .= $str_ids;
        }
    }

    public function initContent()
    {
        parent::initContent();
        $this->setBmsMedia();
    }

    protected function setId()
    {
        $this->id_product = (int) Tools::getValue('id_product');

        if (! $this->id_product) {
            $this->errors[] = $this->l('The object cannot be loaded (or found)', array(), 'Admin.Notifications.Error');
            return false;
        }
        $this->object = new $this->className($this->id_product);

        if (! $this->object) {
            $this->errors[] = $this->l('The object cannot be loaded (or found)', array(), 'Admin.Notifications.Error');
            return false;
        }

        $this->po = new BmsProcurementPurchaseOrder((int) Tools::getValue('id_po'));
    }

    public function initProcess()
    {
        $this->display_header = false;
        $this->display_header_javascript = true;
        $this->display_footer = false;
        $this->content_only = false;
        $this->lite_display = true;

        parent::initProcess();
        $this->list_no_link = true;
    }

    protected function setFieldsListe()
    {
        $this->fields_list = array(
            'id_product' => array(
                'title' => $this->l('Qty to add PO'),
                'align' => 'center',
                'callback' => 'getAddContent',
                'search' => false,
                'orderby' => false
            ),
            'image' => array(
                'title' => $this->l('Image'),
                'image' => 'p',
                'align' => 'center',
                'search' => false,
                'orderby' => false,
                'filter' => false
            ),
            'reference' => array(
                'title' => $this->l('Reference'),
                'align' => 'center'
            ),
            'productName' => array(
                'title' => $this->l('Name'),
                'align' => 'left',
                'search' => false,
                'orderby' => false,
                'callback' => 'getProductName'
            ),

            'wholesale_price' => array(
                'title' => $this->l('wholesale price'),
                'type' => 'price',
                'align' => 'center',
                'search' => false,
                'orderby' => false,
                'callback' => 'getWholesalePrice'
            ),
            'stockLevel' => array(
                'title' => $this->l('Stock level'),
                'align' => 'center',
                'search' => true
            ),
            'warning_stock_level' => array(
                'title' => $this->l('Warning stock level'),
                'align' => 'center',
                'search' => true
            ),
            'ideal_stock_level' => array(
                'title' => $this->l('Ideal stock level'),
                'align' => 'center',
                'search' => true
            ),
            'supplier_name' => array(
                'title' => $this->l('Supplier'),
                'align' => 'left',
                'search' => false,
                'orderby' => false,
                'callback' => 'suppliersCallback',
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

    public function getWholesalePrice($id_product_attribute, $objet)
    {
        return BmsProcurementProduct::getWholesalePrice($this->object->id, $id_product_attribute, $this->po->supplier_id);
    }

    public function getProductName($id_product_attribute, $objet)
    {
        return Compatibility::getProductName($this->object->id, $id_product_attribute);
    }

    public function getAddContent($id_product, $objet)
    {
        $tpl = $this->createTemplate('add_qty_attrib.tpl');
        $tpl->assign('id_product', $id_product);
        $tpl->assign('id_attribute', $objet['id_product_attribute']);

        return $tpl->fetch();
    }

    public function renderList()
    {
        $this->tpl_list_vars['title'] = $this->l('ADD Product Attributs');

        $this->toolbar_btn = array(
            'back' => array(
                'desc' => $this->l('Back'),
                'href' => 'javascript:void(parent.$.fancybox.close())'
            )
        );

        $product = $this->object;

        $warning_stock_level = 'IF( IFNULL(pp.`use_default_warning_stock_level`,1) = 1,"' . Configuration::get('BMS_WARNING_STOCK_LEVEL') . '",pp.`warning_stock_level`)';
        $ideal_stock_level = 'IF( IFNULL(pp.`ideal_stock_level`,1) = 1,"' . Configuration::get('BMS_IDEAL_STOCK_LEVEL') . '",pp.`ideal_stock_level`)';

        $this->_select = 'image_shop.`id_image` as id_image, ' . 'supplier.`name` as supplier_name, ' . 'IF(ps.product_supplier_reference = "" OR ps.product_supplier_reference IS NULL,IF(`reference` <> "", `reference` , "' . $product->reference . '") ,ps.product_supplier_reference) as reference, ' . 'sa.`quantity` as stockLevel, ' . $warning_stock_level . 'as warning_stock_level, ' . $ideal_stock_level . 'as ideal_stock_level,' . 'a.`id_product_attribute` as productName,' . 'a.`id_product_attribute` as wholesale_price';

        $this->_join = 'LEFT JOIN `' . _DB_PREFIX_ . 'product_supplier` ps ON ( a.`id_product` = ps.`id_product` and ps.`id_product_attribute` = a.`id_product_attribute` AND ps.`id_supplier` = ' . (int) $this->po->supplier_id . ') ' . 'LEFT JOIN `' . _DB_PREFIX_ . 'bms_procurement_product` pp on ( a.`id_product_attribute` = pp.`prestashop_attribute_id`)' . 'INNER JOIN `' . _DB_PREFIX_ . 'stock_available` sa ON (a.`id_product_attribute` = sa.`id_product_attribute`  AND sa.`id_product_attribute` <> 0 ' . StockAvailable::addSqlShopRestriction(null, null, 'sa') . ') ' . 'LEFT JOIN `' . _DB_PREFIX_ . 'supplier` supplier ON (IFNULL(ps.`id_supplier`,' . $this->object->id_supplier . ') = supplier.`id_supplier`) ' . 'LEFT JOIN `' . _DB_PREFIX_ . 'image_shop` image_shop ON (image_shop.`id_product` = a.`id_product`  AND image_shop.`cover` = 1 AND image_shop.id_shop = ' . $this->context->shop->id . ') ' . ' ' .

        '';
        $this->_where = " AND a.`id_product` = " . (int) $product->id;

        //exclude products already added
        if ((int) Tools::getValue('id_po')) {
            $this->_where .= ' AND NOT EXISTS (' . 'SELECT `po_id` from `' . _DB_PREFIX_ . 'bms_procurement_purchase_order_product` spo  where`po_id` = ' . (int) Tools::getValue('id_po') . ' and spo.`product_id` = a.`id_product` and spo.`product_attribute_id` = a.`id_product_attribute`' . ')';
        }
        $data = BmsProcurementStorage::loadForCurrentUser()->getParam('productQty');
        if (empty($data[$this->po->id])) {
            $data[$this->po->id] = array();
        }
        Media::addJsDef(array(
            'qtyData' => json_encode($data[$this->po->id]),
            'ajaxAddQtyLink' => $this->context->link->getAdminLink('AdminProcurementPurchaseOrder', true)
        ));
        return parent::renderList();
    }

    public function initPageHeaderToolbar()
    {
        $this->page_header_toolbar_title = $this->l('Purchase Order');
        parent::initPageHeaderToolbar();
    }

    public function setBmsMedia()
    {
        $this->addJS(_PS_MODULE_DIR_ . 'bmsprocurement/views/js/iframe.js');
        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/poAddProductAttributes.js');
        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/poAddQty.js');

        Media::addJsDef(array(
            'id_po' => $this->po->id
        ));
    }
}
