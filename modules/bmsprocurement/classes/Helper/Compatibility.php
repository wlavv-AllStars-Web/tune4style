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

class Compatibility
{
    public static function advancedStockModuleIsInstalled()
    {
        return (Module::isInstalled('advancedstock'));
    }

    public static function getProductLink($productId, $context)
    {
        if (version_compare(_PS_VERSION_, '1.7', '>='))
            return $context->link->getAdminLink('AdminProducts', true, array('id_product' => (int)$productId));
        else
            return $context->link->getAdminLink('AdminProducts', true).'&id_product='.$productId.'&updateproduct';
    }

    public static function getProductName($id_product, $id_product_attribute = null, $id_lang = null)
    {
        //use regular prestashop method if option not enabled
        if (!Configuration::get('BMS_MISC_PRODUCTNAME_FIX'))
            return Product::getProductName($id_product, $id_product_attribute, $id_lang);

        // use the lang in the context if $id_lang is not defined
        if (!$id_lang) {
            $id_lang = (int)Context::getContext()->language->id;
        }

        // creates the query object
        $query = new DbQuery();

        // selects different names, if it is a combination
        if ($id_product_attribute) {
            $query->select('CONCAT(pl.name, \' : \', GROUP_CONCAT(DISTINCT agl.`name`, \' - \', al.name SEPARATOR \', \')) as name');
            //original prestashop code that doesnt work:
            //$query->select('IFNULL(CONCAT(pl.name, \' : \', GROUP_CONCAT(DISTINCT agl.`name`, \' - \', al.name SEPARATOR \', \')),pl.name) as name');
        } else {
            $query->select('DISTINCT pl.name as name');
        }

        // adds joins & where clauses for combinations
        if ($id_product_attribute) {
            $query->from('product_attribute', 'pa');
            $query->join(Shop::addSqlAssociation('product_attribute', 'pa'));
            $query->innerJoin('product_lang', 'pl', 'pl.id_product = pa.id_product AND pl.id_lang = '.(int)$id_lang.Shop::addSqlRestrictionOnLang('pl'));
            $query->leftJoin('product_attribute_combination', 'pac', 'pac.id_product_attribute = pa.id_product_attribute');
            $query->leftJoin('attribute', 'atr', 'atr.id_attribute = pac.id_attribute');
            $query->leftJoin('attribute_lang', 'al', 'al.id_attribute = atr.id_attribute AND al.id_lang = '.(int)$id_lang);
            $query->leftJoin('attribute_group_lang', 'agl', 'agl.id_attribute_group = atr.id_attribute_group AND agl.id_lang = '.(int)$id_lang);
            $query->where('pa.id_product = '.(int)$id_product.' AND pa.id_product_attribute = '.(int)$id_product_attribute);
        } else {
            // or just adds a 'where' clause for a simple product

            $query->from('product_lang', 'pl');
            $query->where('pl.id_product = '.(int)$id_product);
            $query->where('pl.id_lang = '.(int)$id_lang.Shop::addSqlRestrictionOnLang('pl'));
        }

        return Db::getInstance()->getValue($query);
    }

    /**
     * Create stock movements and update product quantity
     *
     * @param $id_product
     * @param $id_product_attribute
     * @param $qty
     * @param null $warehouseId
     */
    public static function receiveQuantity($id_product, $id_product_attribute, $qty, $price, $warehouseId, $comment = '')
    {

        if (self::advancedStockModuleIsInstalled())
        {
            $class = "AdvancedStockStockMovements";
            $class::create((int)$id_product,
                                                (int)$id_product_attribute,
                                                null,
                                                $warehouseId,
                                                $qty,
                                                AdvancedStockStockMovements::TYPE_PURCHASEORDER,
                                                $comment,
                                                Context::getContext()->employee->id
                                                );
            return;
        }

        if (version_compare(_PS_VERSION_, '1.7', '>='))
        {
            //prestashop 1.7
            StockAvailable::updateQuantity( $id_product,
                $id_product_attribute,
                (int) $qty,
                null,   //id shop
                true,   //add movement
                array('id_stock_mvt_reason' => 8));
        }
        else
        {
            //Prestashop 1.6
            if ($warehouseId)
            {
                //if advanced stock management is enabled
                $stock_manager = StockManagerFactory::getManager();
                $result = $stock_manager->addProduct(   $id_product,
                                                        $id_product_attribute,
                                                        new Warehouse($warehouseId),
                                                        $qty,
                                                        8,  //stock movement reason
                                                        $price,
                                                        true,
                                                        Context::getContext()->employee->id);
                if (!$result)
                    throw new Exception('An error occured during stock movement creation');
                StockAvailable::synchronize($id_product);
            }
            else
            {
                //advanced stock is not enabled
                StockAvailable::updateQuantity( $id_product,
                    $id_product_attribute,
                    (int) $qty);
            }
        }

    }

    public static function getWarehouses()
    {

        $warehouses = false;

        if (self::advancedStockModuleIsInstalled())
        {
            //we use custom alias to ensure backward compatibility with prestashop warehouse field names
            $warehouses = Db::getInstance()->executeS('SELECT w_id as id_warehouse, w_name as name FROM `'._DB_PREFIX_.'bms_advancedstock_warehouse` WHERE w_is_active = 1 order by w_name');
        }
        else
        {
            if (version_compare(_PS_VERSION_, '1.7', '<=') && Configuration::get('PS_ADVANCED_STOCK_MANAGEMENT'))
            {
                $warehouses = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'warehouse` WHERE deleted = 0 order by name');
            }
        }

        return $warehouses;
    }

    public static function  getWarehouseAddress($warehouseId, $type, $context)
    {

        $address = '';

        if (self::advancedStockModuleIsInstalled())
        {
            $result = Db::getInstance()
                ->executeS('SELECT w_company_name, w_street1, w_street2, w_postcode, w_city, w_state, w_country, w_telephone
                            FROM `'._DB_PREFIX_.'bms_advancedstock_warehouse` WHERE w_id = '.$warehouseId);
            if(!isset($result[0]))
                throw new Exception('No warehouse found with ID #'.$warehouseId);

            $result = $result[0];
            $address .= $result['w_company_name']." \r\n";
            $address .= $result['w_street1'].' '.$result['w_street2']." \r\n";
            $address .= $result['w_postcode'].' '.$result['w_city']." \r\n";
            $address .= $result['w_state'].' '.Country::getNameById($context->language->id, (int)$result['w_country'])." \r\n";
            $address .= $result['w_telephone'];
        }
        else
        {
            switch($type)
            {
                case 'billing':
                    $address = Configuration::get('BMS_PO_INVOICE_ADDRESS');
                    break;
                case 'shipping':
                default:
                    $address = Configuration::get('BMS_PO_SHIPPING_ADDRESS');
                    break;
            }
        }

        return $address;
    }

    public static function getWarehouseName($warehouseId)
    {
        if (self::advancedStockModuleIsInstalled())
        {
            $result = Db::getInstance()
                ->executeS('
                    SELECT w_name
                    FROM `'._DB_PREFIX_.'bms_advancedstock_warehouse`
                    WHERE w_id = '.$warehouseId
                );
            if(!isset($result[0]))
                throw new Exception('No warehouse found with ID #'.$warehouseId);

            $warehouseName = $result[0]['w_name'];
        }
        else
        {
            $warehouseName = Warehouse::getWarehouseNameById($warehouseId);
        }

        return $warehouseName;
    }
}
