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

class AdminProcurementProductController extends ModuleAdminController
{

    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'product_attribute';
        $this->className = 'Product';

        parent::__construct();

        $this->override_folder = 'purchaseOrder/';
    }

    public function initContent()
    {
        parent::initContent();
        $this->setBmsMedia();
    }

    public function initProcess()
    {
        if (! Tools::getIsset('view' . $this->table)) { // renderView

            $this->display_header = false;
            $this->display_header_javascript = true;
            $this->display_footer = false;
            $this->content_only = false;
            $this->lite_display = true;

            $this->setFieldsListe();
        }

        parent::initProcess();
    }

    protected function setFieldsListe()
    {
        $this->fields_list = array(

            'id_product_attribute' => array(
                'title' => $this->l('id_product_attribute'),
                'align' => 'center',
                'class' => 'fixed-width-xs',
                'search' => false
            ),
            'id_product' => array(
                'title' => $this->l('id_product'),
                'align' => 'center',
                'class' => 'fixed-width-xs',
                'search' => false
            ),
            'reference' => array(
                'title' => $this->l('Product reference'),
                'align' => 'center',
                'class' => 'fixed-width-xs',
                'search' => false
            ),
            'supplier_reference' => array(
                'title' => $this->l('supplier_reference'),
                'align' => 'center',
                'class' => 'fixed-width-xs',
                'search' => false
            )
        );
    }

    public function renderList()
    {
        $this->toolbar_btn = array();

        $this->_select = 'product.id_product as juju';
        $this->_join = '
		  LEFT JOIN `' . _DB_PREFIX_ . 'product` product ON (product.`cache_default_attribute` = 0)
      ';

        return parent::renderList();
    }

    public function renderView()
    {
        $this->context->smarty->assign('controller_template', _PS_MODULE_DIR_ . $this->module->name . '/views/templates/admin/purchaseOrder/edit/');

        $tpl = $this->createTemplate('edit.tpl');
        parent::renderView();
        $this->setGeneralTab();
        $this->setMiscTab();
        return $tpl->fetch();
    }

    protected function setMiscTab()
    {
        $this->setMiscTabCosts();
        $this->setMiscTabShipping();
        $this->setMiscTabCommercial();
    }

    protected function setMiscTabCommercial()
    {
        /**
         * Recupere la liste des payment term
         *
         * @var Array $arrPaymentTerms
         */
        $arrPaymentTerms = BmsProcurementPaymentTerm::getPaymentTerms();
        array_unshift($arrPaymentTerms, array(
            'id_payment_term' => 0,
            'name' => $this->l("None")
        ));

        /**
         * Recupere la liste des payment method
         *
         * @var Array $arrPaymentMethods
         */
        $arrPaymentMethods = BmsProcurementPaymentMethod::getPaymentMethods();
        array_unshift($arrPaymentMethods, array(
            'id_payment_method' => 0,
            'name' => $this->l("None")
        ));

        /**
         * Recupere la liste des payment status
         *
         * @var Array $arrPaymentStatus
         */
        $arrPaymentStatuses = BmsProcurementPurchasesOrderPaymentStatus::getStatuses();

        $this->fields_form = array(
            'legend' => array(
                'title' => 'Commercial'
            ),
            'input' => array(

                array(
                    'type' => 'text',
                    'name' => 'supplier_po_reference',
                    'label' => $this->l('Supplier PO #'),
                    'required' => false,
                    'col' => 2
                ),
                array(
                    'type' => 'text',
                    'name' => 'supplier_invoice_reference',
                    'label' => $this->l('Supplier Invoice #'),
                    'required' => false,
                    'col' => 2
                ),
                array(
                    'type' => 'date',
                    'label' => $this->l('Invoice date'),
                    'name' => 'supplier_invoice_date',
                    'required' => false,
                    'col' => 5
                ),
                array(
                    'type' => 'date',
                    'label' => $this->l('Invoice due date '),
                    'name' => 'supplier_invoice_due_date',
                    'required' => false,
                    'col' => 5
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Payment terms'),
                    'name' => 'supplier_payment_terms_id',
                    'options' => array(
                        'query' => $arrPaymentTerms,
                        'id' => 'id_payment_term',
                        'name' => 'name'
                    )
                ),
                array(
                    'type' => 'date',
                    'label' => $this->l('Payment date'),
                    'name' => 'supplier_payment_date',
                    'required' => false,
                    'col' => 5
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Payment method'),
                    'name' => 'supplier_payment_method_id',
                    'options' => array(
                        'query' => $arrPaymentMethods,
                        'id' => 'id_payment_method',
                        'name' => 'name'
                    )
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Payment status'),
                    'name' => 'supplier_payment_status_id',
                    'options' => array(
                        'query' => $arrPaymentStatuses,
                        'id' => 'id_payment_status',
                        'name' => 'name'
                    )
                )
            )
        );

        $this->context->smarty->assign('miscTabCommercialSection', $this->renderForm());
    }

    protected function setMiscTabShipping()
    {
        $this->fields_form = array(
            'legend' => array(
                'title' => 'Shipping'
            ),
            'input' => array(

                array(
                    'type' => 'text',
                    'name' => 'shipping_tracking',
                    'label' => $this->l('Change Rate'),
                    'required' => false,
                    'col' => 2
                ),
                array(
                    'type' => 'text',
                    'name' => 'shipping_carrier',
                    'label' => $this->l('Shipping Cost'),
                    'required' => false,
                    'col' => 2
                )
            )
        );

        $this->context->smarty->assign('miscTabShippingSection', $this->renderForm());
    }

    protected function setMiscTabCosts()
    {
        /**
         * Recupere la liste des Currencies
         *
         * @var Array $arrCurrency
         */
        $arrCurrency = BmsProcurementCurrency::getCurrencies();
        foreach ($arrCurrency as &$currency) {
            $currency["name"] = $currency['name'] . ' (' . $currency['iso_code'] . ')';
        }

        $this->fields_form = array(
            'legend' => array(
                'title' => 'Costs'
            ),
            'input' => array(
                array(
                    'type' => 'select',
                    'label' => $this->l('Currency'),
                    'name' => 'currency_id',
                    'options' => array(
                        'query' => $arrCurrency,
                        'id' => 'id_currency',
                        'name' => 'name'
                    )
                ),
                array(
                    'type' => 'text',
                    'name' => 'change_rate',
                    'label' => $this->l('Change Rate'),
                    'validation' => 'isFloat',
                    'cast' => 'floatval',
                    'required' => false,
                    'col' => 2
                ),
                array(
                    'type' => 'text',
                    'name' => 'shipping_cost',
                    'label' => $this->l('Shipping Cost'),
                    'validation' => 'isFloat',
                    'cast' => 'floatval',
                    'required' => false,
                    'col' => 2
                ),
                array(
                    'type' => 'text',
                    'name' => 'additional_cost',
                    'label' => $this->l('AdditionalCost'),
                    'validation' => 'isFloat',
                    'cast' => 'floatval',
                    'required' => false,
                    'col' => 2
                ),
                array(
                    'type' => 'text',
                    'name' => 'additional_cost',
                    'label' => $this->l('AdditionalCost'),
                    'validation' => 'isFloat',
                    'cast' => 'floatval',
                    'required' => false,
                    'col' => 2
                ),
                array(
                    'type' => 'text',
                    'name' => 'taxe_rate',
                    'label' => $this->l('Taxe Rate'),
                    'validation' => 'isFloat',
                    'cast' => 'floatval',
                    'required' => false,
                    'col' => 2
                )
            )
        );
        $this->context->smarty->assign('miscTabCostsSection', $this->renderForm());
    }

    protected function setGeneralTab()
    {
        $this->fields_value = array(
            'date_add' => Tools::displayDate(date('Y-m-d')),
            'date_upd' => Tools::displayDate(date('Y-m-d'))
        );

        /**
         * Recupere la liste des fournisseurs
         *
         * @var Array $arrEmployee
         */
        $arrSuppliers = Supplier::getSuppliers();
        array_unshift($arrSuppliers, array(
            'id_supplier' => 0,
            'name' => $this->l("None")
        ));

        /**
         * Recupere la liste des statuses
         *
         * @var Array $arrStatuses
         */
        $arrStatuses = BmsProcurementPurchasesOrderStatus::getStatuses();

        /**
         * Recupere la liste des administrateurs
         *
         * @var Array $arrEmployee
         */
        $arrEmployee = Employee::getEmployees(true);
        foreach ($arrEmployee as &$employee) {
            $employee["name"] = $employee['lastname'] . ' ' . $employee['firstname'];
        }
        array_unshift($arrEmployee, array(
            'id_employee' => 0,
            'name' => $this->l("None")
        ));

        $this->fields_form = array(

            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Created at'),
                    'name' => 'date_add',
                    'disabled' => true,
                    'col' => 2
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Updated at'),
                    'name' => 'date_upd',
                    'disabled' => true,
                    'col' => 2
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Supplier'),
                    'name' => 'supplier_id',
                    'options' => array(
                        'query' => $arrSuppliers,
                        'id' => 'id_supplier',
                        'name' => 'name'
                    )
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Status'),
                    'name' => 'status_id',
                    'options' => array(
                        'query' => $arrStatuses,
                        'id' => 'id_status',
                        'name' => 'name'
                    )
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Manager'),
                    'name' => 'manager_id',
                    'options' => array(
                        'query' => $arrEmployee,
                        'id' => 'id_employee',
                        'name' => 'name'
                    )
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Reference'),
                    'name' => 'reference',
                    'required' => true,
                    'col' => 2
                ),
                array(
                    'type' => 'date',
                    'label' => $this->l('ETA'),
                    'name' => 'eta',
                    'required' => true,
                    'col' => 5
                ),
                array(
                    'type' => 'textarea',
                    'label' => $this->l('Public Comment'),
                    'name' => 'comments_public',
                    'required' => false,
                    'autoload_rte' => true
                ),
                array(
                    'type' => 'textarea',
                    'label' => $this->l('Private Comment'),
                    'name' => 'comments_private',
                    'required' => false,
                    'autoload_rte' => true
                )
            )
        );
        $this->context->smarty->assign('generalTab', $this->renderForm());
    }

    public function initPageHeaderToolbar()
    {
        $this->page_header_toolbar_title = $this->l('Purchase Order');
        parent::initPageHeaderToolbar();

    }

    public function setBmsMedia()
    {
        $this->addJquery();
        $this->addJqueryUi('ui.tabs');
        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/purchaseOrder.js');
    }
}
