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

if (! defined('_PS_VERSION_')) {
    exit();
}

require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementProduct.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/controllers/admin/AdminProcurementPurchaseOrderHistory.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Helper/Compatibility.php';

class BMSProcurement extends Module
{
    public function __construct()
    {
        $this->name = 'bmsprocurement';
        $this->tab = 'administration';
        $this->version = '1.1.40';
        $this->author = 'Alpha Procurement';
        $this->need_instance = 0;
        $this->module_key = 'e19ad1814a1b4bbdfd528a60e4583613';
        $this->ps_versions_compliancy = array(
            'min' => '1.6.1.1',
            'max' => _PS_VERSION_
        );
        $this->displayName = $this->l('Procurement');
        $this->description = $this->l('Supplier and Purchase orders Management');
        $this->bootstrap = true;

        parent::__construct();
        
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        $this->multipleFields = array('BMS_SALES_HISTORY_STATUSES');
        $this->fields = array(
            'BMS_WARNING_STOCK_LEVEL',
            'BMS_IDEAL_STOCK_LEVEL',
            'BMS_EXCLUDE_DISABLED_PRODUCTS',
            'BMS_SALES_HISTORY_RANGE',
            'BMS_SALES_HISTORY_RANGE_COUNT',
            'BMS_SALES_HISTORY_STATUSES',
            'BMS_PREVENT_ADD_PRODUCT',
            'BMS_UPDATE_WAC_FROM_RECEPTION',
            'BMS_PO_INVOICE_ADDRESS',
            'BMS_PO_SHIPPING_ADDRESS',
            'BMS_MISC_PRODUCTNAME_FIX',
            'BMS_ADDITIONAL_COST_METHOD'
            );
    }

    public function initPageHeaderToolbar()
    {
        $this->page_header_toolbar_btn['Notify'] = array(
            'href' => $this->context->link->getAdminLink('AdminCarrierWizard'),
            'desc' => $this->l('Notify'),
            'icon' => 'process-icon-new'
        );

        parent::initPageHeaderToolbar();
    }

    public function getContent()
    {
        /*
         * BMS_WARNING_STOCK_LEVEL
         * BMS_IDEAL_STOCK_LEVEL
         * BMS_EXCLUDE_DISABLED_PRODUCTS
         */
        $output = null;
        if (Tools::isSubmit('submit' . $this->name)) {
            if (! Validate::isInt(Tools::getValue('BMS_WARNING_STOCK_LEVEL'))) {
                $error_msg = $this->l('Invalid warning stock level. Must be an integer value');

                $this->errors[] = $error_msg;
            }
            if (! Validate::isInt(Tools::getValue('BMS_IDEAL_STOCK_LEVEL'))) {
                $error_msg = $this->l('Invalid ideal stock level. Must be an integer value');

                $this->errors[] = $error_msg;
            }
            if (empty($this->errors)) {

                $this->save();

                $output .= $this->displayConfirmation($this->l('Settings saved'));
            } else {
                foreach ($this->errors as $error) {
                    $output .= $this->displayError($error);
                }
            }
        }
        return $output . $this->displayForm() . $this->context->smarty->fetch($this->local_path . 'views/templates/admin/configure/configure.tpl');
    }

    public function initConfigValues()
    {
        Configuration::updateValue('BMS_WARNING_STOCK_LEVEL', '5');
        Configuration::updateValue('BMS_IDEAL_STOCK_LEVEL', '10');
        Configuration::updateValue('BMS_EXCLUDE_DISABLED_PRODUCTS', '1');
        Configuration::updateValue('BMS_SALES_HISTORY_RANGE', 'm');
        Configuration::updateValue('BMS_SALES_HISTORY_RANGE_COUNT', '4');
        Configuration::updateValue('BMS_SALES_HISTORY_STATUSES', '4,5,11,7');
        Configuration::updateValue('BMS_PREVENT_ADD_PRODUCT', '0');
        Configuration::updateValue('BMS_UPDATE_WAC_FROM_RECEPTION', '0');
        Configuration::updateValue('BMS_ADDITIONAL_COST_METHOD', '1');


    }

    public function install()
    {
        if (! parent::install()
            || ! $this->registerHook('displayAdminProductsExtra')) {
            return false;
        }
        $this->installSql();
        $this->installMenu();
        $this->installSubMenu();
        $this->initConfigValues();
        $this->initDateValues();
        return true;
    }

    public function installSql()
    {
        if (! ($sql = Tools::file_get_contents(dirname(__FILE__) . '/sql/Procurement.sql'))) {
            return false;
        }

        $sql = str_replace("ps_bms_", _DB_PREFIX_ . "bms_", $sql);

        if (! Db::getInstance()->execute($sql)) {
            return false;
        }
        return true;
    }

    public function initDateValues()
    {
        $from = strtotime('2010-01-01');
        $to = strtotime('2022-01-01');

        while($from < $to)
        {
            $sql = "insert into `"._DB_PREFIX_."bms_procurement_date` (jour) values ('".date('Y-m-d', $from)."')";
            Db::getInstance()->execute($sql);
            $from = strtotime(date('Y-m-d', $from).' +1 day');
        }
    }

    public function installMenu()
    {
        $tab = new Tab();

        foreach (Language::getLanguages(true) as $lang) {
            switch ($lang['iso_code']) {
                case 'fr':
                    $tab->name[$lang['id_lang']] = 'Gestion des achats';
                    break;
                default:
                    $tab->name[$lang['id_lang']] = 'Procurement';
                    break;
            }
        }

        $tab->class_name = 'AdminProcurementHome';
        $tab->id_parent = Tab::getIdFromClassName('SELL');
        $tab->module = $this->name;
        $tab->icon = 'article';
        $tab->add();
    }


    /**
     * Installe le sous-menu
     */
    public function installSubMenu()
    {
        $arraySubMenu = array(


            array(
                'name' => $this->l('PurchaseOrder'),
                'class_name' => 'AdminProcurementPurchaseOrder'
            ),
            array(
                'name' => $this->l('SupplyNeedsTab'),
                'class_name' => 'AdminProcurementSupplyNeedsTab'
            ),
            array(
                'name' => $this->l('SuppliersTab'),
                'class_name' => 'AdminProcurementSuppliers'
            ),
            array(
                'name' => $this->l('SupplyNeedsTab'),
                'class_name' => 'AdminProcurementPurchaseOrdersTab'
            ),
            array(
                'name' => $this->l('AddProductsTab'),
                'class_name' => 'AdminProcurementPOAddProductTab'
            ),
            array(
                'name' => $this->l('AddProductsAttributes'),
                'class_name' => 'AdminProcurementPOAddProductAttributes'
            ),
            array(
                'name' => $this->l('ProductsTab'),
                'class_name' => 'AdminProcurementPOProductTab'
            ),
            array(
                'name' => $this->l('PaymentTerm'),
                'class_name' => 'AdminProcurementPaymentTerm'
            ),
            array(
                'name' => $this->l('PaymentMethod'),
                'class_name' => 'AdminProcurementPaymentMethod'
            ),
            array(
                'name' => $this->l('ReceptionProduct'),
                'class_name' => 'AdminProcurementReceptionProduct'
            ),
            array(
                'name' => $this->l('ReceptionTab'),
                'class_name' => 'AdminProcurementPOReceptionTab'
            ),
            array(
                'name' => $this->l('ProductToReceiveTab'),
                'class_name' => 'AdminProcurementProductToReceiveTab'
            ),
            array(
                'name' => $this->l('ProductHistory'),
                'class_name' => 'AdminProcurementPurchaseOrderHistory'
            ),
            array(
                'name' => $this->l('Supplier purchase orders'),
                'class_name' => 'AdminProcurementSupplierPoTab'
            ),
            array(
                'name' => $this->l('Stock replenishment levels'),
                'class_name' => 'AdminProcurementReplenishmentLevelTab'
            )
        );

        foreach ($arraySubMenu as $subMenu) {
            $tab = new Tab();
            foreach (Language::getLanguages(true) as $lang) {
                $tab->name[$lang['id_lang']] = $subMenu['name'];
            }
            $tab->class_name = $subMenu['class_name'];
            $tab->id_parent = (int) empty($subMenu['id_parent']) ? Tab::getIdFromClassName('BMSProcurement') : $subMenu['id_parent'];
            $tab->module = $this->name;
            $tab->active = 0;
            $tab->add();
        }
    }

    public function uninstall()
    {
        parent::uninstall();

        if (!$this->uninstallTabs())
            return false;

        return true;
    }

    public function uninstallSql()
    {
        if (! ($sql = Tools::file_get_contents(dirname(__FILE__) . '/sql/unInstall.sql'))) {
            return false;
        }

        $sql = str_replace("ps_bms_", _DB_PREFIX_ . "bms_", $sql);
        if (! Db::getInstance()->execute($sql)) {
            return false;
        }

        return true;
    }

    protected function uninstallTabs()
    {
        foreach (Tab::getCollectionFromModule($this->name) as $tab) {
            $tab->delete();
        }

        return true;
    }

    public function displayForm()
    {
        $fields_form = array();

        $fields_form[0]['form'] = array(
            'legend' => array(
                'title' => $this->l('Product information')
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'required' => true,
                    'label' => $this->l('Default "Warning stock level"'),
                    'name' => 'BMS_WARNING_STOCK_LEVEL',
                    'required' => true,
                    'class' => 'fixed-width-xs',
                    'desc' => $this->l('"Warning stock level" value set by default on new created products.')
                ),
                array(
                    'type' => 'text',
                    'required' => true,
                    'label' => $this->l('Default "Ideal stock level"'),
                    'name' => 'BMS_IDEAL_STOCK_LEVEL',
                    'required' => true,
                    'class' => 'fixed-width-xs',
                    'desc' => $this->l('"Ideal stock level" value set by default on new created products.')
                )
            ),
            'submit' => array(
                'title' => $this->l('Save')
            )
        );

        $rangeCountQuery = array();
        for($i=1;$i<13;$i++)
        {
            $rangeCountQuery[] = array('id_option' => $i, 'name' => $i);
        }

        $fields_form[1]['form'] = array(
            'legend' => array(
                'title' => $this->l('Supply needs')
            ),
            'input' => array(
                array(
                    'type' => 'switch',
                    'required' => true,
                    'label' => $this->l('Exclude disabled products'),
                    'name' => 'BMS_EXCLUDE_DISABLED_PRODUCTS',
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => '1',
                            'label' => $this->l('Yes')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => '0',
                            'label' => $this->l('No')
                        )
                    ),
                    'desc' => $this->l('Exclude products disabled in Prestashop from supply needs grid.')
                )
            ),

            'submit' => array(
                'title' => $this->l('Save')
            )
        );

        $orderStates = $this->getOrderStates();

        $fields_form[2]['form'] = array(
            'legend' => array(
                'title' => $this->l('Sales History')
            ),
            'input' => array(
                array(
                    'type' => 'select',
                    'required' => true,
                    'label' => $this->l('Sales history ranges'),
                    'name' => 'BMS_SALES_HISTORY_RANGE',
                    'options' => array(
                        'query' => array(
                            array('id_option' => 'm', 'name' => 'Month'),
                        ),
                        'id' => 'id_option',
                        'name' => 'name'
                    ),
                    'desc' => $this->l('Only "Months" option is available for the moment.')
                ),
                array(
                    'type' => 'select',
                    'required' => true,
                    'label' => $this->l('Ranges count'),
                    'name' => 'BMS_SALES_HISTORY_RANGE_COUNT',
                    'options' => array(
                        'query' => $rangeCountQuery,
                        'id' => 'id_option',
                        'name' => 'name'
                    ),
                    'desc' => $this->l('Select there how many months should be displayed in sales history tables.')
                ),
                array(
                    'type' => 'select',
                    'multiple' => 'true',
                    'class' => 'bigSelect',
                    'required' => true,
                    'label' => $this->l('Order statuses used to calculate sales history'),
                    'name' => 'BMS_SALES_HISTORY_STATUSES',
                    'options' => array(
                        'query' => $orderStates,
                        'id' => 'id_option',
                        'name' => 'name'
                    ),
                    'desc' => $this->l('Select there what order statuses will be considered to calculate sales history.')
                )
            ),

            'submit' => array(
                'title' => $this->l('Save')
            )
        );

        $arr_method = array(
            array(
                'id_option' => '1',
                'name' => $this->l('By quantity')
            ),
            array(
                'id_option' => '2',
                'name' => $this->l('By price')
            )
        );

        $fields_form[3]['form'] = array(
            'legend' => array(
                'title' => $this->l('Purchase order')
            ),
            'input' => array(
                array(
                    'type' => 'switch',
                    'required' => true,
                    'label' => $this->l('Restrict addable products to PO\'s supplier ones'),
                    'name' => 'BMS_PREVENT_ADD_PRODUCT',
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => '1',
                            'label' => $this->l('Yes')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => '0',
                            'label' => $this->l('No')
                        )
                    ),
                    'desc' => $this->l('Only products associated to the same supplier than the PO one will be selectable through "Add products" tab of POs.')
                ),
                array(
                    'type' => 'switch',
                    'required' => true,
                    'label' => $this->l('Update product cost after PO reception'),
                    'name' => 'BMS_UPDATE_WAC_FROM_RECEPTION',
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => '1',
                            'label' => $this->l('Yes')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => '0',
                            'label' => $this->l('No')
                        )
                    ),
                    'desc' => $this->l('If this option is enabled, once PO reception is created, all products received will have their wholesale price (cost) updated with the buying price set in the PO.')
                ),
                array(
                    'type' => 'select',
                    'required' => true,
                    'label' => $this->l('Additional costs distribution method'),
                    'name' => 'BMS_ADDITIONAL_COST_METHOD',
                    'options' => array(
                        'query' => $arr_method,
                        'id' => 'id_option',
                        'name' => 'name'
                    ),
                    'desc' => $this->l('Select the way additional costs will be distributed between all PO products.')
                ),
                array(
                    'type' => 'textarea',
                    'required' => true,
                    'label' => $this->l('Invoice address'),
                    'name' => 'BMS_PO_INVOICE_ADDRESS',
                    'required' => true,
                    'class' => 'fixed-width-xxl',
                    'desc' => $this->l('Displayed on POs PDFs. The address of the warehouse associated to the PO will be used if our Advanced Stock module is installed.')
                ),
                array(
                    'type' => 'textarea',
                    'required' => true,
                    'label' => $this->l('Shipping address'),
                    'name' => 'BMS_PO_SHIPPING_ADDRESS',
                    'required' => true,
                    'class' => 'fixed-width-xxl',
                    'desc' => $this->l('Displayed on POs PDFs. The address of the warehouse associated to the PO will be used if our Advanced Stock module is installed.')
                )
            ),
            'submit' => array(
                'title' => $this->l('Save')
            )
        );

        $fields_form[4]['form'] = array(
            'legend' => array(
                'title' => $this->l('Miscellaneous')
            ),
            'input' => array(
                array(
                    'type' => 'switch',
                    'required' => true,
                    'label' => $this->l('Fix combination name function (Prestashop >= 1.7)'),
                    'name' => 'BMS_MISC_PRODUCTNAME_FIX',
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => '1',
                            'label' => $this->l('Yes')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => '0',
                            'label' => $this->l('No')
                        )
                    ),
                    'desc' => $this->l('Enable this option only if our support team ask for it.')
                )
            ),
            'submit' => array(
                'title' => $this->l('Save')
            )
        );

        $helper = new HelperForm();

        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;
        $helper->title = $this->displayName;
        $helper->show_toolbar = true;
        $helper->toolbar_scroll = true;
        $helper->submit_action = 'submit' . $this->name;
        $helper->toolbar_btn = array(
            'save' => array(
                'desc' => $this->l('Save'),
                'href' => AdminController::$currentIndex . '&configure=' . $this->name . '&save' . $this->name . '&token=' . Tools::getAdminTokenLite('AdminModules')
            )
        );

        $fields_value = array();
        foreach ($this->fields as $field) {
            $value = Configuration::get($field);
            $fields_value[$field . (in_array($field, $this->multipleFields) ? '[]' : '')] = (strpos($value, ',') !== false ? explode(',', $value) : $value);
        }
        $helper->fields_value = $fields_value;

        $this->context->controller->addJS(_PS_MODULE_DIR_ . 'bmsprocurement/views/js/iframe.js');

        return $helper->generateForm($fields_form);
    }

    protected function save()
    {
        foreach ($this->fields as $field) {
            $value = Tools::getValue($field);
            $value = (is_array($value) ? implode(',', $value) : $value);
            Configuration::updateValue($field, $value);

        }
    }

    /**
     * Deprecated since procurement 1.0.9
     *
     * @param $param
     */
    public function hookActionProductSave($param)
    {

    }

    /**
     * Deprecated since procurement 1.0.9
     *
     * @param $param
     */
    public function hookDisplayAdminProductsQuantitiesStepBottom($params)
    {

    }

    /**
     * Deprecated since procurement 1.0.9
     *
     * @param $param
     */
    public function hookDisplayAdminProductsCombinationBottom($params)
    {

    }

    public function hookDisplayAdminProductsExtra($params)
    {
        $idProduct = isset($params['id_product']) ? $params['id_product'] : Tools::getValue('id_product');
        if ($idProduct)
        {
            $tpl = Context::getContext()->smarty->createTemplate(_PS_MODULE_DIR_ . 'bmsprocurement/views/templates/hook/hookProductTab.tpl');
            $tpl->assign('id_product', $idProduct);
            return $tpl->fetch();
        }
    }

    public function displayReplenishmentBlock($params)
    {
        $id_product_attribute = $params['id_product_attribute'];
        $id_product = $params['id_product'];

        $procurement_product = BmsProcurementProduct::getProductByPrestashopProduct($id_product, $id_product_attribute);
        if ($procurement_product && $procurement_product->id) {
            $procurement_id = $procurement_product->id;
            $ideal_stock_level_value = $procurement_product->ideal_stock_level;
            $warning_stock_level_value = $procurement_product->warning_stock_level;
            $use_default_ideal_stock_level = $procurement_product->use_default_ideal_stock_level;
            $use_default_warning_stock_level = $procurement_product->use_default_warning_stock_level;
        } else {
            $procurement_id = 0;
            $ideal_stock_level_value = Configuration::get('BMS_IDEAL_STOCK_LEVEL');
            $warning_stock_level_value = Configuration::get('BMS_WARNING_STOCK_LEVEL');
            $use_default_ideal_stock_level = 1;
            $use_default_warning_stock_level = 1;
        }

        $default_ideal_stock_level_value = Configuration::get('BMS_IDEAL_STOCK_LEVEL');
        $default_warning_stock_level_value = Configuration::get('BMS_WARNING_STOCK_LEVEL');

        if ($procurement_product->use_default_ideal_stock_level) {
            $displayed_ideal_stock_level_value = $default_ideal_stock_level_value;
        } else {
            $displayed_ideal_stock_level_value = $ideal_stock_level_value;
        }
        if ($procurement_product->use_default_warning_stock_level) {
            $displayed_warning_stock_level_value = $default_warning_stock_level_value;
        } else {
            $displayed_warning_stock_level_value = $warning_stock_level_value;
        }

        $id = ($id_product_attribute == 0 ? '' : $id_product_attribute);

        $tpl = Context::getContext()->smarty->createTemplate(_PS_MODULE_DIR_ . 'bmsprocurement/views/templates/hook/hookProductView.tpl');
        $tpl->assign('bms_default_ideal_stock_level_value', $default_ideal_stock_level_value);
        $tpl->assign('bms_default_warning_stock_level_value', $default_warning_stock_level_value);
        $tpl->assign('bms_ideal_stock_level_value', $ideal_stock_level_value);
        $tpl->assign('bms_warning_stock_level_value', $warning_stock_level_value);
        $tpl->assign('bms_displayed_ideal_stock_level_value', $displayed_ideal_stock_level_value);
        $tpl->assign('bms_displayed_warning_stock_level_value', $displayed_warning_stock_level_value);
        $tpl->assign('bms_use_default_ideal_stock_level_value', $use_default_ideal_stock_level);
        $tpl->assign('bms_use_default_warning_stock_level_value', $use_default_warning_stock_level);
        $tpl->assign('bms_procurement_id', $procurement_id);
        $tpl->assign('id', $id);

        return $tpl->fetch();
    }

    protected function getOrderStates()
    {
        $arrOrderstates = OrderState::getOrderStates($this->context->language->id);
        $arr = null;

        foreach ($arrOrderstates as $state) {
            $arr[] = array(
                'id_option' => $state['id_order_state'],
                'name' => $state['name']
            );
        }

        return $arr;
    }
}
