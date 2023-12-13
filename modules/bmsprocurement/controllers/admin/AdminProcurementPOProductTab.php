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
 * @copyright 2007-2020 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchaseOrderProduct.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchaseOrder.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementProduct.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementStorage.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Helper/Compatibility.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/HtmlHelper.php';

use Symfony\Component\HttpKernel\HttpKernelInterface;

class AdminProcurementPOProductTabController extends ModuleAdminController
{

    public $po;

    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'bms_procurement_purchase_order_product';
        $this->className = 'BmsProcurementPurchaseOrderProduct';
        $this->identifier = 'id_bms_procurement_purchase_order_product';
        $this->lang = false;
        $this->addRowAction('delete');

        parent::__construct();

        $this->override_folder = 'product/';
    }

    public function init()
    {
        parent::init();

        $this->po = new BmsProcurementPurchaseOrder((int) Tools::getValue('id_po'));
        if (! $this->po || ! $this->po->id) {
            throw new PrestaShopException($this->l('Undefine Purchase Order'));
        }

        $this->setFieldsListe();

        $str_ids = '&id_po=' . (int) $this->po->id;
        self::$currentIndex .= $str_ids;
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

    public function processDelete()
    {
        $poProduct = $this->loadObject();
        if (! $poProduct || ! $poProduct->id) {
            throw new PrestaShopException($this->l('Undefine Purchase Order Product'));
        }

        $result = parent::processDelete();
        if (! $result) {
            return $result;
        }
        //$this->redirect_after = $this->context->link->getAdminLink("AdminProcurementPurchaseOrder", true) . '&conf=4&updatebms_procurement_purchase_order&id_bms_procurement_purchase_order=' . (int) $poProduct->po_id . '#tabActive=product';

        try
        {
            BmsProcurementPurchaseOrder::afterDeleteProduct($poProduct);

            //update Qty & ETA for deleted item
            $pp = BmsProcurementProduct::getProductByPrestashopProduct($poProduct->product_id, $poProduct->product_attribute_id);
            $pp->updateQtyInPo();
            $pp->updateNextPoETA();

        } catch (PrestaShopException $e) {
            return true;
        }

        return true;
    }

    protected function setFieldsListe()
    {
        $this->list_no_link = true;

        $this->fields_list = array(
            'product_id' => array(
                'title' => $this->l('Product ID'),
                'align' => 'center',
                'search' => true
            ),
            'image' => array(
                'title' => $this->l('Image'),
                'image' => 'p',
                'image_id' => 'id_image',
                'align' => 'center',
                'search' => false,
                'orderby' => false,
                'filter' => false
            ),
            'sku' => array(
                'title' => $this->l('Sku'),
                'align' => 'center',
                'search' => true
            ),
            'supplier_sku' => array(
                'title' => $this->l('Supplier sku'),
                'align' => 'center',
                'search' => true,
                'callback' => 'getSupplierSkuContent'
            ),
            'name' => array(
                'title' => $this->l('Product'),
                'align' => 'center',
                'search' => true,
                'callback' => 'getProductLink'
            ),
            'qty_ordered' => array(
                'title' => $this->l('Qty ordered'),
                'align' => 'center',
                'search' => true,
                'callback' => 'getQtyOrderer'
            ),
            'qty_received' => array(
                'title' => $this->l('Qty received'),
                'align' => 'center',
                'search' => true
            ),
            'qty_expected' => array(
                'title' => $this->l('Qty to receive'),
                'align' => 'center',
                'search' => true
            ),
            'price' => array(
                'title' => $this->l('Buying price').' ('.$this->po->getCurrencySign().')',
                'align' => 'center',
                'search' => true,
                'callback' => 'getBuyingPrice'
            ),
            'total_cost' => array(
                'title' => $this->l('Full price'),
                'suffix' => $this->po->getCurrencySign(),
                'align' => 'center',
                'search' => true
            ),
            'tax_rate' => array(
                'title' => $this->l('Tax rate'),
                'align' => 'center',
                'search' => true,
                'callback' => 'getTaxeRate'
            )
        );

        $this->_select = "`id_image`, IF(`qty_ordered` - `qty_received` >= 0, `qty_ordered` - `qty_received`, 0) as qty_expected, ((price * qty_ordered) + extended_cost) as total_cost";
      
        $this->_join = 'LEFT JOIN `' . _DB_PREFIX_ . 'image_shop` image_shop ON (image_shop.`id_product` = a.`product_id` AND image_shop.`cover` = 1 AND image_shop.id_shop = ' . $this->context->shop->id . ') ';

        $sql_critere = 0;

        // On n'affiche que les produits qui ne sont pas encore ajouté
        if ((int) Tools::getValue('id_po')) {
            $sql_critere = (int) Tools::getValue('id_po');
        }

        $this->_where = ' AND a.`po_id` = ' . $sql_critere;
    }

    public function getProductLink($name, $objet)
    {
        $linkUrl = Compatibility::getProductLink($objet['product_id'], $this->context);

        $tpl = $this->createTemplate('productLink.tpl');
        $tpl->assign('name', $name);
        $tpl->assign('linkUrl', $linkUrl);


        return $tpl->fetch();
    }
    public function getSupplierSkuContent($supplierSku, $objet)
    {
        $tpl = $this->createTemplate('supplierSku.tpl');
        $tpl->assign('supplierSku', $supplierSku);
        $tpl->assign('id_product', $objet['product_id']);
        $tpl->assign('id_attribute', $objet['product_attribute_id']);

        return $tpl->fetch();
    }

    public function getQtyOrderer($qtyOrderer, $objet)
    {
        $tpl = $this->createTemplate('qtyOrderer.tpl');
        $tpl->assign('qtyOrderer', $qtyOrderer);
        $tpl->assign('id_product', $objet['product_id']);
        $tpl->assign('id_attribute', $objet['product_attribute_id']);

        return $tpl->fetch();
    }

    public function getBuyingPrice($buyingPrice, $objet)
    {
        $tpl = $this->createTemplate('buyingPrice.tpl');
        $tpl->assign('buyingPrice', $buyingPrice);
        $tpl->assign('id_product', $objet['product_id']);
        $tpl->assign('id_attribute', $objet['product_attribute_id']);

        return $tpl->fetch();
    }

    public function getTaxeRate($taxeRate, $objet)
    {
        $tpl = $this->createTemplate('taxeRate.tpl');
        $tpl->assign('taxeRate', $taxeRate);
        $tpl->assign('id_product', $objet['product_id']);
        $tpl->assign('id_attribute', $objet['product_attribute_id']);

        return $tpl->fetch();
    }

    public function ajaxPreProcess()
    {
        if (Tools::getIsset('method')) {
            switch (Tools::getValue('method')) {
                case "addProductQty":
                    if (Tools::getIsset('id_product')) {
                        $id_product = (int) Tools::getValue('id_product');
                        $id_attribute = (int) Tools::getValue('id_attribute', 0);

                        if (BmsProcurementStorage::loadForCurrentUser()->getParam('productQty')) {
                            $data = BmsProcurementStorage::loadForCurrentUser()->getParam('productQty');
                        } else {
                            $data = array();
                        }

                        $data[$id_product][$id_attribute] = array(
                            'id_product' => $id_product,
                            'id_attribute' => $id_attribute,
                            'value' => (int) Tools::getValue('value', 0)
                        );

                        BmsProcurementStorage::loadForCurrentUser()->setParam('productQty', $data);

                        die(json_encode(array(
                            'result' => true,
                            'data' => $data
                        )));
                    }
                    break;
            }
        }
        die(json_encode(array(
            'result' => false,
            'data' => $data
        )));
    }

    public function renderList()
    {
        $this->toolbar_btn = array();
        $this->tpl_list_vars['title'] = $this->l('Products');

        $html = parent::renderList();

        //fix for JS issue with gamification module
        $html .= HtmlHelper::getNotifIconWrapperDiv();

        return $html;
    }

    public function initPageHeaderToolbar()
    {
        $this->page_header_toolbar_title = $this->l('Purchase Order');
        parent::initPageHeaderToolbar();
    }

    public function setBmsMedia()
    {
        $this->addJS(_PS_MODULE_DIR_ . 'bmsprocurement/views/js/iframe.js');
        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/productTab.js');
        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/poProduct.js');
        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/poAddQty.js');

        $data = BmsProcurementStorage::loadForCurrentUser()->getParam('product');

        if (isset($data[$this->po->id]) && empty($data[$this->po->id])) {
            $data[$this->po->id] = array();
        }
        Media::addJsDef(array(
            'qtyData' => isset($data[$this->po->id]) ? json_encode($data[$this->po->id]) : '',
            'ajaxAddQtyLink' => $this->context->link->getAdminLink('AdminProcurementPurchaseOrder', true),
            'id_po' => $this->po->id
        ));
    }
}
