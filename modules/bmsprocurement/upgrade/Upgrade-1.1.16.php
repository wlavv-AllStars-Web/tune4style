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

    function upgrade_module_1_1_16($module) {

        Db::getInstance()->execute("

            CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."bms_procurement_storage`
            (
                `id_bms_procurement_storage` int(10) UNSIGNED NOT NULL,
                `employee_id` int(10) UNSIGNED NOT NULL,
                `data` TEXT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

            ALTER TABLE `"._DB_PREFIX_."bms_procurement_storage`
              ADD PRIMARY KEY (`id_bms_procurement_storage`);

            ALTER TABLE `"._DB_PREFIX_."bms_procurement_storage`
              MODIFY `id_bms_procurement_storage` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


            ");

        return true;

    }