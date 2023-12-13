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
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchaseOrderProduct.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchaseOrderReception.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPurchaseOrderReceptionProduct.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementProduct.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementStorage.php';

class AdminProcurementReceptionProductController extends ModuleAdminController
{

    public $id_po;

    public $po;

    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'bms_procurement_purchase_order_product';
        $this->className = 'BmsProcurementPurchaseOrderProduct';
        $this->identifier = 'id_bms_procurement_purchase_order_product';
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

    public function initContent()
    {
        parent::initContent();
        $this->setBmsMedia();
    }

    public function initProcess()
    {
        parent::initProcess();
    }

    protected function setFieldsListe()
    {
        $this->fields_list = array(
            'image' => array(
                'title' => $this->l('Image'),
                'image' => 'p',
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

            'name' => array(
                'title' => $this->l('Product'),
                'align' => 'center',
                'search' => true
            ),
            'qty_ordered' => array(
                'title' => $this->l('Qty ordered'),
                'align' => 'center',
                'search' => true
            ),
            'qty_received' => array(
                'title' => $this->l('Qty received'),
                'align' => 'center',
                'search' => true
            ),
            'qty_pending' => array(
                'title' => $this->l('Qty pending'),
                'align' => 'center',
                'search' => false,
                'orderby' => false
            ),
            'qty_expected' => array(
                'title' => $this->l('Qty to receive'),
                'align' => 'center',
                'callback' => 'getQteToReceive',
                'search' => false,
                'orderby' => false,
                'class' => 'fixed-width-xl'
            )
        );
    }

    public function getQteToReceive($none, $object)
    {
        $tpl = $this->createTemplate('add_qty.tpl');

        $tpl->assign('id', $object['id_bms_procurement_purchase_order_product']);
        $tpl->assign('qty_ordered', $object['qty_ordered']);
        $tpl->assign('qty_received', $object['qty_received']);
        $tpl->assign('max', ($object['qty_ordered'] - $object['qty_received']));

        return $tpl->fetch();
    }

    public function ajaxPreProcess()
    {
        if (Tools::getValue('action') == 'barecode') {
            $product = null;
            $result = false;
            $message = false;
            $sku = Tools::getValue('sku');
            if (! empty($sku)) {
                $ip_pop = BmsProcurementPurchaseOrderProduct::searchByCodeBare($this->id_po, $sku);
                if (! empty($ip_pop)) {
                    $result = true;
                    $poItem = new BmsProcurementPurchaseOrderProduct($ip_pop);
                    $message = $this->l('Product scanned').': '.$poItem->name;
                }
            }
            die(json_encode(array(
                'result' => $result,
                'message' => $message,
                'ip_pop' => $ip_pop
            )));
        } else {
            if (Tools::getIsset('id_po_product')) {
                $id = (int) Tools::getValue('id_po_product');

                if (BmsProcurementStorage::loadForCurrentUser()->getParam('productReceiveQty')) {
                    $data = BmsProcurementStorage::loadForCurrentUser()->getParam('productReceiveQty');
                } else {
                    $data = array();
                }
                $value = (int) Tools::getValue('value', 0);
                if ($value && $value > 0) {
                    $data[$this->id_po][$id] = array(
                        'id' => $id,
                        'value' => $value
                    );
                } else {
                    unset($data[$this->id_po][$id]);
                }

                BmsProcurementStorage::loadForCurrentUser()->setParam('productReceiveQty', $data);

                die(json_encode(array(
                    'result' => true,
                    'data' => $data[$this->id_po]
                )));
            }

            die(json_encode(array(
                'result' => false,
                'data' => null,
                'message' => 'Missing parameter'
            )));
        }
    }

    public function renderList()
    {
        $this->toolbar_btn = array();
        $this->_select = '`id_image`, (qty_ordered - qty_received) as qty_pending';

        $this->tpl_list_vars['title'] = $this->l('Receives');

        $this->toolbar_btn = array(
            'back' => array(
                'desc' => $this->l('Back'),
                'href' => $this->context->link->getAdminLink('AdminProcurementPurchaseOrder', true) . "&updatebms_procurement_purchase_order&id_bms_procurement_purchase_order=" . $this->id_po,
                'icon' => 'process-icon-back '
            )
        );
        $this->_join = 'LEFT JOIN `' . _DB_PREFIX_ . 'image_shop` image_shop ON (image_shop.`id_product` = a.`product_id` AND image_shop.`cover` = 1 AND image_shop.id_shop = ' . $this->context->shop->id . ') ';

        $this->_where = ' AND a.`po_id` = ' . $this->id_po;

        $data = BmsProcurementStorage::loadForCurrentUser()->getParam('productReceiveQty');
        if (isset($data[$this->id_po]) && empty($data[$this->id_po])) {
            $data[$this->id_po] = array();
        }
        Media::addJsDef(array(
            'qtyData' => isset($data[$this->id_po]) ? json_encode($data[$this->id_po]) : '',
            'ajaxAddQtyLink' => $this->context->link->getAdminLink('AdminProcurementReceptionProduct', true),
            'id_po' => $this->id_po
        ));

        $topToolBar = $this->createTemplate('topToolBar.tpl');
        $topToolBar->assign('audioCorrectUrl', Context::getContext()->shop->getBaseURL(true) . 'modules/bmsprocurement/views/media/correct.mp3');
        $topToolBar->assign('audioWrongUrl', Context::getContext()->shop->getBaseURL(true) . 'modules/bmsprocurement/views/media/wrong.mp3');

        return $topToolBar->fetch() . parent::renderList();
    }

    public function processSubmit()
    {
        $data = BmsProcurementStorage::loadForCurrentUser()->getParam('productReceiveQty');
        if (! is_array($data) || empty($data[$this->id_po])) {
            $this->errors[] = $this->l('No data at reception');
            return false;
        }
        $data = $data[$this->id_po];

        $this->po->addNewReception($data);

        $info = BmsProcurementStorage::loadForCurrentUser()->getParam('productReceiveQty');
        unset($info[$this->id_po]);

        BmsProcurementStorage::loadForCurrentUser()->setParam('productReceiveQty', $info);

        $this->redirect_after = $this->context->link->getAdminLink("AdminProcurementPurchaseOrder", true) . '&updatebms_procurement_purchase_order&id_bms_procurement_purchase_order=' . (int) $this->id_po . '#tabActive=reception';
    }

    public function initPageHeaderToolbar()
    {
        $this->page_header_toolbar_title = $this->l('Receive Purchase Order ') . ' #' . $this->po->reference;
        if ($this->po->warehouse_id)
        {
            $warehouseName = Compatibility::getWarehouseName($this->po->warehouse_id);
            $this->page_header_toolbar_title .= ' ' . $this->l('in warehouse'). ' "' . $warehouseName . '"';
        }

        parent::initPageHeaderToolbar();

        $this->page_header_toolbar_btn['commit'] = array(
            'href' => 'javascript:if( confirm("' . $this->l('Are your sure?') . '") ){ location.href="' . $this->context->link->getAdminLink('AdminProcurementReceptionProduct') . '&id_po=' . $this->id_po . '&action=submit";}',
            'desc' => $this->l('Save reception'),
            'icon' => 'process-icon-save'
        );

        $this->context->smarty->assign('help_link', null);
    }

    public function setBmsMedia()
    {
        Media::addJsDef(array(
            'barecode_url' => $this->context->link->getAdminLink('AdminProcurementReceptionProduct') . '&action=barecode',
            'id_po' => $this->id_po,
            'errorMessage' => $this->l('Unknown barcode')
        ));
        $this->addJS(_PS_MODULE_DIR_ . 'bmsprocurement/views/js/iframe.js');
        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/receptionProduct.js');
    }
}
