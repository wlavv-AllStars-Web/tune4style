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

require_once _PS_MODULE_DIR_ . 'bmsprocurement/classes/Model/ProcurementPaymentMethod.php';

class AdminProcurementPaymentMethodController extends ModuleAdminController
{

    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'bms_procurement_payment_method';
        $this->className = 'BmsProcurementPaymentMethod';
        $this->identifier = 'id_bms_procurement_payment_method';
        $this->explicitSelect = true;
        $this->allow_export = true;
        $this->addRowAction('edit');
        $this->addRowAction('delete');
        
        parent::__construct();
        
        $this->fields_list = array(
            'id_bms_procurement_payment_method' => array(
                'title' => $this->l('ID'),
                'align' => 'center'
            ),
            'name' => array(
                'title' => $this->l('Name'),
                'align' => 'center'
            )
        );
    }

    public function init()
    {
        parent::init();
        
        $this->display_header = false;
        $this->display_header_javascript = true;
        $this->display_footer = false;
        $this->content_only = false;
        $this->lite_display = true;
    }

    public function renderForm()
    {
        $this->initToolbar();
        $this->loadObject(true);
        
        $this->fields_form = array(
            'legend' => array(
                'title' => $this->l('Payment method'),
                'icon' => 'icon-tags'
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Name'),
                    'name' => 'name',
                    'required' => true
                )
            ),
            'submit' => array(
                'title' => $this->l('Save'),
                'name' => 'submitAdd'
            )
        );
        return parent::renderForm();
    }
}
