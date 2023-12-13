{**
 * 2007-2022 Boostmyshop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
 	<input type='button' onclick="setQte('qty{$id_product|escape:'htmlall':'UTF-8'}_{$id_attribute|escape:'htmlall':'UTF-8'}',{$qty_min|escape:'htmlall':'UTF-8'})" value="Min"/>
	<input style="display:inline;width: 23px;padding: 4px;" type="text" id="qty{$id_product|escape:'htmlall':'UTF-8'}_{$id_attribute|escape:'htmlall':'UTF-8'}" name="qtyNeed[{$id_product|escape:'htmlall':'UTF-8'}][{$id_attribute|escape:'htmlall':'UTF-8'}]" data-id-product="{$id_product|escape:'htmlall':'UTF-8'}" data-id-attribute="{$id_attribute|escape:'htmlall':'UTF-8'}"  value="0">
	<input type='button' onclick="setQte('qty{$id_product|escape:'htmlall':'UTF-8'}_{$id_attribute|escape:'htmlall':'UTF-8'}',{$qty_max|escape:'htmlall':'UTF-8'})" value="Max"/>
