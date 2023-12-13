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

require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementCurrency.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPaymentTerm.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPaymentMethod.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementSupplier.php';
require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementSupplierContact.php';

class AdminProcurementSuppliersController extends AdminSuppliersControllerCore
{

    /** @var BmsProcurementSupplier */
    public $bms_supplier;

    /**@var array */
    public $arrayType = array(
        'Sales',
        'Aftersales',
        'Accounting'
    );

    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'supplier';
        $this->className = 'Supplier';

        AdminController::__construct();

        $this->override_folder = 'suppliers/';

        $this->addRowAction('update');
        $this->allow_export = false;

        $this->_defaultOrderBy = 'name';
        $this->_defaultOrderWay = 'ASC';

        $this->_select = 'a.active as enabled,tryl.name as country, addr.phone';
        $this->_join =  'LEFT JOIN ' . _DB_PREFIX_ . 'address addr ON (addr.id_supplier > 0 and addr.id_supplier = a.id_supplier )' .
                        'LEFT JOIN ' . _DB_PREFIX_ . 'country_lang tryl ON (tryl.id_country = addr.id_country AND tryl.id_lang = ' . (int) $this->context->language->id . ')';


        $this->fields_list = array(
            'id_supplier' => array(
                'title' => $this->l('ID'),
                'align' => 'center',
                'class' => 'fixed-width-xs',
                'type' => 'int'
            ),
            'name' => array(
                'title' => $this->l('Name'),
                'filter_key' => 'a!name'
            ),
            'date_add' => array(
                'title' => $this->l('Created at'),
                'type' => 'datetime'
            ),
            'country' => array(
                'title' => $this->l('Country'),
                'filter_key' => 'country',
                'havingFilter' => true
            ),
            'phone' => array(
                'title' => $this->l('Phone')
            ),
            'enabled' => array(
                'title' => $this->l('Enabled'),
                'type' => 'bool',
                'callback' => 'getEnabledSupplier',
                'align' => 'center',
                'filter_key' => 'enabled',
                'havingFilter' => true
            )
        );
    }

    public function initContent()
    {
        parent::initContent();
        $this->setBmsMedia();
    }

    public function getEnabledSupplier($idSupplier, $object)
    {
        return ($object['enabled'] ? $this->l('Yes') : $this->l('No'));
    }

    public function renderList()
    {
        $this->toolbar_btn = array();
        $this->tpl_list_vars['title'] = $this->l('Supplier');

        return parent::renderList();
    }

    public function renderForm()
    {
        $this->fields_value = array();
        $this->fields_form = array(
            'tabs' => array(
                'general' => $this->l('Géneral'),
                'setting' => $this->l('Settings'),
                'payment' => $this->l('Payment'),
                'contact' => $this->l('Contacts')
            ),
            'input' => array(),
            'submit' => array(
                'title' => $this->l('Save')
            )
        );

        $this->setGeneralTab();
        $this->setSettingsTab();
        $this->setPaymentTab();
        $this->setContactsTab();
        $this->loadData();
        $this->addJS(_PS_MODULE_DIR_ . 'bmsprocurement/views/js/suppliersTabForm.js');

        return AdminController::renderForm();
    }

    public function initProcess()
    {
        parent::initProcess();

        if (! $this->display) { // renderListe
            $this->display_header = false;
            $this->display_header_javascript = true;
            $this->display_footer = false;
            $this->content_only = false;
            $this->lite_display = true;
        }
    }

    public function setBmsMedia()
    {
        if (Tools::getValue('id_supplier'))
        {
            Media::addJsDef(array(
                'AdminProcurementSupplierPoTabLabel' => $this->l('Purchase orders'),
                'AdminProcurementSupplierPoTabUrl' => $this->context->link->getAdminLink('AdminProcurementSupplierPoTab') . '&id_supplier=' . Tools::getValue('id_supplier'),
                'id_supplier' => Tools::getValue('id_supplier')
            ));
        }

        $this->addJquery();
        $this->addJqueryUi('ui.tabs');
        $this->addJS(_PS_MODULE_DIR_ . 'bmsprocurement/views/js/iframe.js');
        $this->addJS(_PS_MODULE_DIR_ . 'bmsprocurement/views/js/tabs.js');
        $this->addJS(_PS_MODULE_DIR_ . 'bmsprocurement/views/js/suppliersTab.js');
    }

    protected function loadData()
    {
        if ($this->object->id && ! Tools::isSubmit('submitAdd' . $this->table)) {
            $this->bms_supplier = new BmsProcurementSupplier($this->object->id);

            foreach ($this->bms_supplier->getFields() as $key => $value) {
                $this->fields_value[$key] = $value;
            }

            $this->fields_value['procurement_currency_id'] = $this->bms_supplier->getDefaultCurrency();
        }

        if (!isset($this->fields_value['procurement_currency_id']) || (!$this->fields_value['procurement_currency_id']))
            $this->fields_value['procurement_currency_id'] = $this->getShopDefaultCurrency();

        $this->loadDataContactsTab();
    }

    protected function setGeneralTab()
    {
        $obj = $this->object;

        $tmp_addr = new Address();
        $res = $tmp_addr->getFieldsRequiredDatabase();

        $required_fields = array();
        foreach ($res as $row) {
            $required_fields[(int) $row['id_required_field']] = $row['field_name'];
        }

        array_push($this->fields_form['input'], array(
            'type' => 'hidden',
            'name' => 'id_address',
            'tab' => 'general'
        ), array(
            'type' => 'text',
            'label' => $this->l('Name'),
            'name' => 'name',
            'required' => true,
            'col' => 4,
            'hint' => $this->l('Invalid characters') . ': &lt;&gt;;=#{}',
            'tab' => 'general'
        ), (in_array('company', $required_fields) ? array(
            'type' => 'text',
            'label' => $this->l('Company'),
            'name' => 'company',
            'display' => in_array('company', $required_fields),
            'required' => in_array('company', $required_fields),
            'maxlength' => 16,
            'col' => 4,
            'hint' => $this->l('Company name for this supplier'),
            'tab' => 'general'
        ) : null), array(
            'type' => 'textarea',
            'label' => $this->l('Description'),
            'name' => 'description',
            'lang' => true,
            'hint' => array(
                $this->l('Invalid characters') . ': &lt;&gt;;=#{}',
                $this->l('Will appear in the list of suppliers.')
            ),
            'autoload_rte' => 'rte', // Enable TinyMCE editor for short description,
            'tab' => 'general'
        ), array(
            'type' => 'text',
            'label' => $this->l('Phone'),
            'name' => 'phone',
            'required' => in_array('phone', $required_fields),
            'maxlength' => 16,
            'col' => 4,
            'hint' => $this->l('Phone number for this supplier'),
            'tab' => 'general'
        ), array(
            'type' => 'text',
            'label' => $this->l('Mobile phone'),
            'name' => 'phone_mobile',
            'required' => in_array('phone_mobile', $required_fields),
            'maxlength' => 16,
            'col' => 4,
            'hint' => $this->l('Mobile phone number for this supplier.'),
            'tab' => 'general'
        ), array(
            'type' => 'text',
            'label' => $this->l('Address'),
            'name' => 'address',
            'maxlength' => 128,
            'col' => 6,
            'required' => true,
            'tab' => 'general'
        ), array(
            'type' => 'text',
            'label' => $this->l('Address (2)'),
            'name' => 'address2',
            'required' => in_array('address2', $required_fields),
            'col' => 6,
            'maxlength' => 128,
            'tab' => 'general'
        ), array(
            'type' => 'text',
            'label' => $this->l('Zip/postal code'),
            'name' => 'postcode',
            'required' => in_array('postcode', $required_fields),
            'maxlength' => 12,
            'col' => 2,
            'tab' => 'general'
        ), array(
            'type' => 'text',
            'label' => $this->l('City'),
            'name' => 'city',
            'maxlength' => 32,
            'col' => 4,
            'required' => true,
            'tab' => 'general'
        ), array(
            'type' => 'select',
            'label' => $this->l('Country'),
            'name' => 'id_country',
            'required' => true,
            'col' => 4,
            'default_value' => (int) $this->context->country->id,
            'options' => array(
                'query' => Country::getCountries($this->context->language->id, false),
                'id' => 'id_country',
                'name' => 'name'
            ),
            'tab' => 'general'
        ), array(
            'type' => 'select',
            'label' => $this->l('State'),
            'name' => 'id_state',
            'col' => 4,
            'options' => array(
                'id' => 'id_state',
                'query' => array(),
                'name' => 'name'
            ),
            'tab' => 'general'
        ), array(
            'type' => 'text',
            'label' => $this->l('Meta title'),
            'name' => 'meta_title',
            'lang' => true,
            'col' => 4,
            'hint' => $this->l('Invalid characters') . ': &lt;&gt;;=#{}',
            'tab' => 'general'
        ), array(
            'type' => 'text',
            'label' => $this->l('Meta description'),
            'name' => 'meta_description',
            'lang' => true,
            'col' => 6,
            'hint' => $this->l('Invalid characters') . ': &lt;&gt;;=#{}',
            'tab' => 'general'
        ), array(
            'type' => 'tags',
            'label' => $this->l('Meta keywords'),
            'name' => 'meta_keywords',
            'lang' => true,
            'col' => 6,
            'hint' => array(
                $this->l('To add "tags" click in the field, write something and then press "Enter".'),
                $this->l('Invalid characters') . ': &lt;&gt;;=#{}'
            ),
            'tab' => 'general'
        ), array(
            'type' => 'switch',
            'label' => $this->l('Enable'),
            'name' => 'active',
            'required' => false,
            'class' => 't',
            'is_bool' => true,
            'values' => array(
                array(
                    'id' => 'active_on',
                    'value' => 1,
                    'label' => $this->l('Enabled')
                ),
                array(
                    'id' => 'active_off',
                    'value' => 0,
                    'label' => $this->l('Disabled')
                )
            ),
            'tab' => 'general'
        ));

        // loads current address for this supplier - if possible
        $address = null;
        if (isset($obj->id) && ! Tools::isSubmit('submitAdd' . $this->table)) {
            $id_address = Address::getAddressIdBySupplierId($obj->id);

            if ($id_address > 0) {
                $address = new Address((int) $id_address);
            }
        }

        // force specific fields values (address)
        if ($address != null) {
            $this->fields_value = array(
                'id_address' => $address->id,
                'phone' => $address->phone,
                'phone_mobile' => $address->phone_mobile,
                'address' => $address->address1,
                'address2' => $address->address2,
                'postcode' => $address->postcode,
                'city' => $address->city,
                'id_country' => $address->id_country,
                'id_state' => $address->id_state,
                'tab' => 'general'
            );
        } else {
            $this->fields_value = array(
                'id_address' => Tools::getValue('id_address', 0),
                'id_country' => Configuration::get('PS_COUNTRY_DEFAULT'),
                'tab' => 'general'
            );
        }

        if (Shop::isFeatureActive()) {
            $this->fields_form['input'][] = array(
                'type' => 'shop',
                'label' => $this->l('Shop association'),
                'name' => 'checkBoxShopAsso',
                'tab' => 'general'
            );
        }

    }

    protected function setSettingsTab()
    {
        Media::addJsDef(array(
            'GeneralTitle' => $this->l('General'),
            'ExportFileSettingsTitle' => $this->l('Export File Settings')
        ));

        $arrCurrency = BmsProcurementCurrency::getCurrencies();
        foreach ($arrCurrency as &$currency) {
            $currency["name"] = $currency['name'] . ' (' . $currency['iso_code'] . ')';
        }

        array_push($this->fields_form['input'], array(
            'type' => 'text',
            'name' => 'minimum_of_order',
            'label' => $this->l('Minimum of order'),
            'col' => 2,
            'tab' => 'setting',
            'class' => 'setting_MinimumOfOrder'
        ), array(
            'type' => 'text',
            'name' => 'carriage_free_amount',
            'label' => $this->l('Carriage free amount'),
            'col' => 2,
            'tab' => 'setting'
        ), array(
            'type' => 'select',
            'label' => $this->l('Currency'),
            'name' => 'procurement_currency_id',
            'options' => array(
                'query' => $arrCurrency,
                'id' => 'id_currency',
                'name' => 'name'
            ),
            'tab' => 'setting'
        ),array(
            'type' => 'text',
            'name' => 'default_currency_change_rate',
            'label' => $this->l('Default currency change rate'),
            'col' => 2,
            'tab' => 'setting'
        ), array(
            'type' => 'text',
            'name' => 'lead_time',
            'label' => $this->l('Lead time'),
            'col' => 2,
            'tab' => 'setting'
        ), array(
            'type' => 'text',
            'name' => 'default_tax_class',
            'label' => $this->l('Default tax rate'),
            'col' => 2,
            'tab' => 'setting'
        ));

        //add space between 2 blocks
        array_push($this->fields_form['input'], array(
            'type' => 'label',
            'name' => 'line_break',
            'label' => '&nbsp',
            'required' => false,
            'tab' => 'setting'
        ));

        array_push($this->fields_form['input'], array(
            'type' => 'text',
            'name' => 'export_file_name',
            'label' => $this->l('File name'),
            'required' => false,
            'col' => 2,
            'tab' => 'setting',
            'class' => 'setting_FileName'
        ), array(
            'type' => 'textarea',
            'label' => $this->l('Header'),
            'name' => 'export_header',
            'required' => false,
            'autoload_rte' => false,
            'col' => 5,
            'tab' => 'setting'
        ), array(
            'type' => 'textarea',
            'label' => $this->l('Product line'),
            'name' => 'export_order_row',
            'required' => false,
            'autoload_rte' => false,
            'col' => 5,
            'tab' => 'setting'
        ), array(
            'type' => 'textarea',
            'label' => $this->l('Footer'),
            'name' => 'export_footer',
            'required' => false,
            'autoload_rte' => false,
            'col' => 5,
            'tab' => 'setting'
        ));
    }

    protected function setPaymentTab()
    {
        $arrPaymentTerms = BmsProcurementPaymentTerm::getPaymentTerms();

        array_unshift($arrPaymentTerms, array(
            'id_payment_term' => 0,
            'name' => $this->l("None")
        ));

        $arrPaymentMethods = BmsProcurementPaymentMethod::getPaymentMethods();
        array_unshift($arrPaymentMethods, array(
            'id_payment_method' => 0,
            'name' => $this->l("None")
        ));

        array_push($this->fields_form['input'], array(
            'type' => 'select',
            'label' => $this->l('Payment terms'),
            'name' => 'payment_terms_id',
            'options' => array(
                'query' => $arrPaymentTerms,
                'id' => 'id_payment_term',
                'name' => 'name'
            ),
            'tab' => 'payment'
        ), array(
            'type' => 'select',
            'label' => $this->l('Payment method'),
            'name' => 'payment_method_id',
            'options' => array(
                'query' => $arrPaymentMethods,
                'id' => 'id_payment_method',
                'name' => 'name'
            ),
            'tab' => 'payment'
        ), array(
            'type' => 'text',
            'name' => 'paypal_account',
            'label' => $this->l('Paypal account'),
            'required' => false,
            'maxchar' => 200,
            'tab' => 'payment'
        ), array(
            'type' => 'textarea',
            'label' => $this->l('Bank details'),
            'name' => 'bank_details',
            'required' => false,
            'autoload_rte' => false,
            'maxchar' => 400,
            'tab' => 'payment'
        ));
    }

    protected function loadDataContactsTab()
    {
        $obj = $this->object;
        if (isset($obj->id) && ! Tools::isSubmit('submitAdd' . $this->table)) {
            $contacts = BmsProcurementSupplierContact::getContactsBySupplierId($obj->id);
            foreach ($contacts as $contact) {
                if (empty($contact['type'])) {
                    throw new PrestaShopException('Le type de contact devrait être renseigné');
                }
                $this->fields_value = array_merge($this->fields_value, array(
                    "id_bms_procurement_supplier_contact[" . $contact['type'] . "]" => $contact["id_bms_procurement_supplier_contact"],
                    "contact[" . $contact['type'] . "]" => $contact["contact"],
                    "type[" . $contact['type'] . "]" => $contact['type'],
                    "email[" . $contact['type'] . "]" => $contact["email"],
                    "telephone[" . $contact['type'] . "]" => $contact["telephone"],
                    "notes[" . $contact['type'] . "]" => $contact["notes"],
                    "supplier_id[" . $contact['type'] . "]" => $contact["supplier_id"]
                ));
            }

            // si il manque un type
            foreach ($this->arrayType as $type) {
                if (! array_key_exists("type[$type]", $this->fields_value)) {
                    $this->fields_value = array_merge($this->fields_value, array(
                        "type[$type]" => $type
                    ));
                }
            }
        } else {
            $arrFieldsContact = array(
                'id_bms_procurement_supplier_contact' => Tools::getValue('id_bms_procurement_supplier_contact'),
                'contact' => Tools::getValue('contact'),
                'email' => Tools::getValue('email'),
                'telephone' => Tools::getValue('telephone'),
                'notes' => Tools::getValue('notes')
            );

            foreach ($arrFieldsContact as $key => $contact) {
                foreach ($this->arrayType as $type) {
                    $this->fields_value = array_merge($this->fields_value, array(
                        $key . "[" . $type . "]" => $contact[$type]
                    ));
                    $this->fields_value = array_merge($this->fields_value, array(
                        'type[' . $type . ']' => $type
                    ));
                }
            }
        }
    }

    protected function setContactsTab()
    {
        Media::addJsDef(array(
            'SalesTitle' => $this->l('Sales'),
            'AftersalesTitle' => $this->l('After sales'),
            'AccountingTitle' => $this->l('Accounting')
        ));

        $type = null;

        foreach ($this->arrayType as $type) {
            array_push($this->fields_form['input'], array(
                'type' => 'text',
                'name' => "contact[" . $type . "]",
                'label' => $this->l('Name'),
                'required' => false,
                'col' => 2,
                'tab' => 'contact',
                'class' => "contact_" . $type
            ), array(
                'type' => 'text',
                'name' => "email[" . $type . "]",
                'label' => $this->l('Email'),
                'required' => false,
                'col' => 2,
                'tab' => 'contact'
            ), array(
                'type' => 'text',
                'name' => "telephone[" . $type . "]",
                'label' => $this->l('Phone'),
                'required' => false,
                'col' => 2,
                'tab' => 'contact'
            ), array(
                'type' => 'textarea',
                'name' => "notes[" . $type . "]",
                'label' => $this->l('Notes'),
                'required' => false,
                'col' => 5,
                'tab' => 'contact',
                'autoload_rte' => false
            ), array(
                'type' => 'hidden',
                'name' => "type[" . $type . "]",
                'label' => $this->l('Type'),
                'required' => false,
                'col' => 2,
                'tab' => 'contact'
            ), array(
                'type' => 'hidden',
                'name' => "id_bms_procurement_supplier_contact[" . $type . "]",
                'label' => $this->l('id_bms_procurement_supplier_contact'),
                'required' => false,
                'col' => 2,
                'tab' => 'contact'
            ), array(
                'type' => 'label',
                'name' => $type,
                'label' => '&nbsp',
                'required' => false,
                'tab' => 'contact'
            ));


        }
    }

    public function processAdd()
    {
        $result = parent::processAdd();

        if (! $result) {
            return false;
        }
        $this->saveContacts($this->object->id);

        $bms_supplier = new BmsProcurementSupplier();
        $bms_supplier->id = $this->object->id;
        $this->copyFromPost($bms_supplier, BmsProcurementSupplier::$definition['table']);

        try {
            $bms_supplier->add();
        } catch (PrestaShopException $e) {
            $this->errors[] = $e->getMessage();
            $this->redirect_after = null;
            $this->display = 'edit';
            return false;
        }

        return $result;
    }

    public function processUpdate()
    {
        $this->saveContacts($this->object->id);

        $bms_supplier = new BmsProcurementSupplier($this->object->id);
        $this->copyFromPost($bms_supplier, BmsProcurementSupplier::$definition['table']);

        try {
            if (! $bms_supplier->id) {
                $bms_supplier->id = $this->object->id;
                $result = $bms_supplier->add();
            } else {
                $result = $bms_supplier->save();
            }
        } catch (PrestaShopException $e) {
            $this->errors[] = $e->getMessage();
            $this->display = 'edit';
            return false;
        }

        return parent::processUpdate();
    }

    protected function saveContacts($id_supplier)
    {
        $arrDataFieldsContact = array(
            'id' => Tools::getValue('id_bms_procurement_supplier_contact'),
            'contact' => Tools::getValue('contact'),
            'type' => Tools::getValue('type'),
            'email' => Tools::getValue('email'),
            'telephone' => Tools::getValue('telephone'),
            'notes' => Tools::getValue('notes')
        );
        $arrFields = array_keys($arrDataFieldsContact);
        $objContact = array();
        foreach ($this->arrayType as $type) {
            $objContact[$type] = new BmsProcurementSupplierContact();
            foreach ($arrFields as $propriete) {
                $error = true;
            
           // var_dump((array)$objContact[$type]->getFields()[$supplier_id]);
          // exit;
           
           //$t = $objContact[$type];
                 if (array_key_exists($propriete, (array)$objContact[$type]) && array_key_exists($propriete, (array)$objContact[$type]->getFields())) {
                    $error = $objContact[$type]->validateField($propriete, $arrDataFieldsContact[$propriete][$type], null, array(), true);
                    if ($error !== true) {
                        $this->errors[] = $error;
                    } else {
                        $objContact[$type]->$propriete = $arrDataFieldsContact[$propriete][$type];
                    }
                } elseif ($propriete == 'id') {
                    $objContact[$type]->id = $arrDataFieldsContact['id'][$type];
                }
            }
            $objContact[$type]->supplier_id = (int) $id_supplier;

            if (! empty($objContact[$type]->id)) {
                $objContact[$type]->update();
            } else {
                $objContact[$type]->add();
            }
        }

        return $objContact;
    }

    protected function afterAdd($object)
    {
        if (parent::afterAdd($object)) {
            $this->redirect_after = self::$currentIndex . '&' . $this->identifier . '=' . $object->id . '&conf=3&update' . $this->table . '&token=' . $this->token;
        }
        return true;
    }

    protected function afterUpdate($object)
    {
        if (parent::afterUpdate($object)) {
            $this->redirect_after = self::$currentIndex . '&' . $this->identifier . '=' . $this->object->id . '&conf=4&update' . $this->table . '&token=' . $this->token;
        }
        return true;
    }

    public function initPageHeaderToolbar()
    {
        parent::initPageHeaderToolbar();

        $this->context->smarty->assign('help_link', null);
    }

    public function getShopDefaultCurrency()
    {
        $sql = '
                    SELECT
                       id_bms_procurement_currency
                    FROM
                        `' . _DB_PREFIX_ .'configuration` tbl_conf
                        inner join `' . _DB_PREFIX_ . 'currency` tbl_cur on tbl_cur.id_currency = tbl_conf.value
                        inner join `' . _DB_PREFIX_ . 'bms_procurement_currency` tbl_bms_cur on tbl_cur.iso_code = tbl_bms_cur.iso_code
                    WHERE
                        tbl_conf.name = "PS_CURRENCY_DEFAULT"
                ';
        return Db::getInstance()->getValue($sql);
    }

}
