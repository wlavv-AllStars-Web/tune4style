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

/**
 *
 * @since 1.5
*/

class HTMLTemplatePoReception extends HTMLTemplate
{

    public $po_reception;

    /**
     *
     * @param OrderInvoice $order_invoice
     * @param
     *            $smarty
     * @throws PrestaShopException
     */
    public function __construct(BmsProcurementPurchaseOrderReception $po_reception, $smarty, $bulk_mode = false)
    {
        $this->po_reception = $po_reception;
        $this->smarty = $smarty;

        // header informations
        $this->date = Tools::displayDate($po_reception->date_add);

        $id_lang = Context::getContext()->language->id;
        $this->title = '';

        $this->shop = 1;
    }

    public function getBulkFilename()
    {
        return parent::getBulkFilename();
    }

    /**
     * Returns the template's HTML header
     *
     * @return string HTML header
     */
    public function getHeader()
    {
        $this->assignCommonHeaderData();
        $employee = Context::getContext()->employee;

        $po = new BmsProcurementPurchaseOrder($this->po_reception->po_id);
        $supplier = new Supplier($po->supplier_id);

        $this->smarty->assign(array(
            'po_reception' => $this->po_reception,
            'employee' => $employee,
            'purchase_order' => $po,
            'supplier_name' => $supplier->name
        ));

        return $this->smarty->fetch(_PS_MODULE_DIR_ . 'bmsprocurement/views/templates/admin/pdf/poreception/header_poreception.tpl');
    }

    public function getFooter()
    {
        return '';
    }

    /**
     * Returns the template's HTML content
     *
     * @return string HTML content
     */
    public function getContent()
    {
        $data = array(
            'products' => $this->po_reception->getProducts($this->po_reception->id)
        );

        $this->smarty->assign($data);

        $tpls = array(
            'style_tab' => $this->smarty->fetch(_PS_MODULE_DIR_ . 'bmsprocurement/views/templates/admin/pdf/style.tpl'),
            'product_tab' => $this->smarty->fetch(_PS_MODULE_DIR_ . 'bmsprocurement/views/templates/admin/pdf/poreception/product-tab.tpl')
        );

        $this->smarty->assign($tpls);

        return $this->smarty->fetch(_PS_MODULE_DIR_ . 'bmsprocurement/views/templates/admin/pdf/poreception/po_reception.tpl');
    }

    /**
     * Returns the template filename
     *
     * @return string filename
     */
    public function getFilename()
    {
        return 'po_reception.pdf';
    }
}
