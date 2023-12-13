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

class AdminProcurementProductToReceiveTabController extends ModuleAdminController
{

    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'bms_procurement_purchase_order_product';
        $this->className = 'BmsProcurementPurchaseOrderProduct';
        $this->identifier = 'id_bms_procurement_purchase_order_product';
        $this->lang = false;
        $this->explicitSelect = true;
        parent::__construct();
        $this->list_no_link = true;

        $this->override_folder = 'purchaseOrder/';
        $this->setFieldsListe();
    }

    public function init()
    {
        parent::init();
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
                'title' => $this->l('Reference'),
                'align' => 'center',
                'search' => true
            ),

            'name' => array(
                'title' => $this->l('Product'),
                'align' => 'center',
                'search' => true
            ),
            'qtyToReceive' => array(
                'title' => $this->l('Qty to receive'),
                'align' => 'center'
            ),

            'ETA' => array(
                'title' => $this->l('ETA'),
                'align' => 'center',
                'type' => 'date'
            ),
            'RelatedPOs' => array(
                'title' => $this->l('Related POs'),
                'align' => 'center',
                'callback' => 'getRelatedPO',
                'search' => false,
                'orderby' => false
            )
        )
        ;
    }

    public function getRelatedPO($id_product, $object)
    {
        $list = BmsProcurementPurchaseOrder::getProductToReceive($id_product, $object['product_attribute_id']);
        $tpl = $this->createTemplate('related_table.tpl');
        $tpl->assign('arrPo', $list);
        return $tpl->fetch();
    }

    public function renderList()
    {
        $this->tpl_list_vars['title'] = $this->l('Products to receive');

        $this->_select = '`id_image`,a.product_id as RelatedPOs,a.product_attribute_id' . ',' . 'SUM(qty_ordered) - SUM(qty_received) as qtyToReceive' . ',' . 'MIN(eta) as ETA' . ',' .
        '';
        $this->_join =  'INNER JOIN`' . _DB_PREFIX_ . 'bms_procurement_purchase_order` po ON (a.po_id = po.id_bms_procurement_purchase_order)' . ' ' .
                        'LEFT JOIN `' . _DB_PREFIX_ . 'image_shop` image_shop ON (image_shop.`id_product` = a.`product_id` AND image_shop.`cover` = 1 AND image_shop.id_shop = ' . $this->context->shop->id . ') ' . '';
        $this->_where = "AND (po.`status_id` =5 or  po.`status_id` =6) AND ((qty_ordered - qty_received) > 0)"; //restrict to opened POs and to products not fully received.
        $this->_group = "GROUP BY a.product_id,a.product_attribute_id,sku,name,id_image";
        $this->_defaultOrderBy = 'sku';
        return parent::renderList();
    }

    public function initPageHeaderToolbar()
    {
        parent::initPageHeaderToolbar();

        $this->context->smarty->assign('help_link', null);
    }
}
