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

class BmsProcurementStorage extends ObjectModel
{

    public $id;
    public $data;
    public $employee_id;

    /**
     *
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'bms_procurement_storage',
        'primary' => 'id_bms_procurement_storage',
        'multilang' => false,
        'multilang_shop' => false,
        'fields' => array(
            'data' => array(
                'type' => self::TYPE_STRING
            ),
            'employee_id' => array(
                'type' => self::TYPE_INT
            )
        )
    );


    public static function loadForCurrentUser()
    {
        $employeeId = (int) Context::getContext()->employee->id;;
        $id = Db::getInstance()->getValue('SELECT `id_bms_procurement_storage` FROM `' . _DB_PREFIX_ . 'bms_procurement_storage` WHERE `employee_id` = ' . pSQL($employeeId));

        if (!$id)
        {
            $obj = new BmsProcurementStorage();
            $obj->employee_id = $employeeId;
            $obj->save();

            return $obj;
        }

        return new BmsProcurementStorage($id);
    }

    public function getAllDatas()
    {
        try
        {
            $data = json_decode($this->data, true);
        }
        catch(Exception $ex)
        {
            $data = array();
        }
        return $data;
    }

    public function getParam($code)
    {
        $data = $this->getAllDatas();
        if (isset($data[$code])) {
            return $data[$code];
        }
        else
            return "";
    }


    public function setParam($code, $value)
    {
        $data = $this->getAllDatas();
        $data[$code] = $value;
        $this->data = json_encode($data);
        $this->save();
    }

}
