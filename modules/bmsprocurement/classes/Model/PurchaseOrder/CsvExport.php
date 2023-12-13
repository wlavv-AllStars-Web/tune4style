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

class BmsProcurement_PurchaseOrder_CsvExport
{
    const LINE_RETURN = "\r\n";

    public function export($po)
    {
        $supplierId = $po->supplier_id;
        $supplier = new BmsProcurementSupplier($supplierId);

        //Get supplier file settings
        $exportFileFields = $supplier->getSupplierExportFileSettings($supplierId);
        if(isset($exportFileFields[0])){
            $exportFileFields = $exportFileFields[0];
        }else{
            $exportFileFields = array();
        }

        $csv = $this->getCsvContent($po, $supplier, $exportFileFields);

        $fileName = $this->getFileName($po, $supplier, $exportFileFields);

        $this->outputCsv($csv, $fileName);
    }

    public function getCsvContent($po, $supplier, $exportFileFields)
    {
        $csv = '';

        if((isset($exportFileFields['export_header']) && $exportFileFields['export_header'] != '')
        || (isset($exportFileFields['export_order_row']) && $exportFileFields['export_order_row'] != '')
        || (isset($exportFileFields['export_footer']) && $exportFileFields['export_footer'] != '')){

            //Header
            $header = ($exportFileFields['export_header'] != '') ? $exportFileFields['export_header'].self::LINE_RETURN : '';
            $csv .= $header;

            //Product lines
            if(isset($exportFileFields['export_order_row']) && $exportFileFields['export_order_row'] != '') {
                foreach (BmsProcurementPurchaseOrder::getProducts($po->id) as $orderItem) {
                    $orderRow = $exportFileFields['export_order_row'] . self::LINE_RETURN;

                    foreach ($this->getPoAndSupplierCodes($po, $supplier) as $code => $value) {
                        $orderRow = str_replace("{" . $code . "}", $value, $orderRow);
                    }

                    foreach ($this->getPoItemCodes($orderItem) as $code => $value) {
                        $orderRow = str_replace("{" . $code . "}", $value, $orderRow);
                    }

                    $csv .= $orderRow;
                }
            }

            //Footer
            if(isset($exportFileFields['export_footer']) && $exportFileFields['export_footer'] != '') {
                $csv .= $exportFileFields['export_footer'];
            }

        } else{

            //Header
            $header = 'product_id;attribute_id;name;reference;supplier_sku;qty;price;tax_rate'.self::LINE_RETURN;
            $csv .= $header;

            //Product lines
            foreach(BmsProcurementPurchaseOrder::getProducts($po->id) as $orderItem)
            {
                $orderRow = $header;

                $productName = Compatibility::getProductName($orderItem['product_id'], $orderItem['product_attribute_id']);

                $orderRow = str_replace('product_id', $orderItem['product_id'], $orderRow);
                $orderRow = str_replace('attribute_id', $orderItem['product_attribute_id'], $orderRow);
                $orderRow = str_replace('name', $productName, $orderRow);
                $orderRow = str_replace('reference', $orderItem['sku'], $orderRow);
                $orderRow = str_replace('supplier_sku', $orderItem['supplier_sku'], $orderRow);
                $orderRow = str_replace('qty', $orderItem['qty_ordered'], $orderRow);
                $orderRow = str_replace('price', $orderItem['price'], $orderRow);
                $orderRow = str_replace('tax_rate', $orderItem['tax_rate'], $orderRow);

                $csv .= $orderRow;
            }

        }

        return $csv;
    }

    public function getPoAndSupplierCodes($po, $supplier)
    {
        $codes = [];

        //po
        foreach($po as $code => $value) {
            if (!is_array($value) && !is_object($value))
                $codes['po.'.$code] = $value;
        }

        //supplier
        foreach($supplier as $code => $value)
        {
            if (!is_array($value) && !is_object($value))
                $codes['supplier.'.$code] = $value;
        }

        return $codes;
    }

    public function getPoItemCodes($orderItem)
    {
        $codes = [];

        foreach($orderItem as $code => $value) {
            if (!is_array($value) && !is_object($value)){
                $codes['item.' . $code] = $value;
            }
        }

        return $codes;
    }

    public function getFileName($po, $supplier, $exportFileFields)
    {
        if(isset($exportFileFields['export_file_name']) && $exportFileFields['export_file_name'] != '') {
            $fileName = $exportFileFields['export_file_name'];
            foreach ($this->getPoAndSupplierCodes($po, $supplier) as $code => $value) {
                $fileName = str_replace("{" . $code . "}", $value, $fileName);
            }
        }else {
            $fileName = 'po_'.$po->reference.'.csv';
        }

        return $fileName;
    }

    protected function outputCsv($csv, $fileName)
    {
        // Redirect output to a client’s web browser (Excel2007)
        header('Content-Type: text/csv');
        header("Content-Length: " . Tools::strlen($csv));
        header('Content-Disposition: attachment;filename="'.$fileName.'"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

        // If you're serving to IE over SSL, then the following may be needed
        header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
        header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header ('Pragma: public'); // HTTP/1.0

        die($csv);
    }

}