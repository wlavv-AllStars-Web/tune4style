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

class BmsProcurementSupplier extends ObjectModel
{

    public $id;

    public $force_id = true;

    public $minimum_of_order;

    public $carriage_free_amount;

    public $procurement_currency_id;

    public $default_currency_change_rate;

    public $lead_time;

    public $payment_terms_id;

    public $payment_method_id;

    public $paypal_account;

    public $bank_details;

    public $default_tax_class;

    public $export_file_name;

    public $export_header;

    public $export_order_row;

    public $export_footer;

    /**
     *
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'bms_procurement_supplier',
        'primary' => 'id_bms_procurement_supplier',
        'multilang' => false,
        'multilang_shop' => false,
        'fields' => array(
            'minimum_of_order' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt'
            ),
            'carriage_free_amount' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt'
            ),
            'procurement_currency_id' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isUnsignedId'
            ),
            'default_currency_change_rate' => array(
                'type' => self::TYPE_FLOAT,
                'validate' => 'isFloat'
            ),
            'lead_time' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt'
            ),
            'payment_terms_id' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isUnsignedId'
            ),
            'payment_method_id' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isUnsignedId'
            ),
            'paypal_account' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isString',
                'size' => 200
            ),
            'bank_details' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isCleanHtml',
                'size' => 400
            ),
            'default_tax_class' => array(
                'type' => self::TYPE_FLOAT,
                'validate' => 'isFloat',
                'size' => 200
            ),
            'export_file_name' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isString'
            ),
            'export_header' => array(
                'type' => self::TYPE_HTML
            ),
            'export_order_row' => array(
                'type' => self::TYPE_HTML
            ),
            'export_footer' => array(
                'type' => self::TYPE_HTML
            )
        )
    );

    /**
     * Return supplier currency OR store default currency if not set at supplier level
     *
     * @return mixed
     */
    public function getDefaultCurrency()
    {
        if ($this->procurement_currency_id)
            return $this->procurement_currency_id;
        else
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

    public function getSupplierExportFileSettings($supplierId)
    {
            $sql = '
                    SELECT
                       export_file_name,
                       export_header,
                       export_order_row,
                       export_footer
                    FROM
                        `' . _DB_PREFIX_ .'bms_procurement_supplier` supplier
                    WHERE
                        supplier.id_bms_procurement_supplier = ' . $supplierId . '
                ';

            return Db::getInstance()->executeS($sql);
    }
}
