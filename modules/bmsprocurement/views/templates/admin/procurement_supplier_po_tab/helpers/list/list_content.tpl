{**
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
 *}
 
{extends file="helpers/list/list_content.tpl"} 
{block name="open_td"}
				<td
					{if isset($params.position)}
						id="td_{if !empty($position_group_identifier)}{$position_group_identifier|escape:'htmlall':'UTF-8'}{else}0{/if}_{$tr.$identifier|escape:'htmlall':'UTF-8'}{if $smarty.capture.tr_count > 1}_{($smarty.capture.tr_count - 1)|intval}{/if}"
					{/if}
					class="{strip}pointer
					{if isset($params.position) && $order_by == 'position'  && $order_way != 'DESC'} dragHandle{/if}
					{if isset($params.class)} {$params.class|escape:'htmlall':'UTF-8'}{/if}
					{if isset($params.align)} {$params.align|escape:'htmlall':'UTF-8'}{/if}{/strip}"

						onclick="parent.document.location = '{Context::getContext()->link->getAdminLink("AdminProcurementPurchaseOrder")|escape:'htmlall':'UTF-8'}&updatebms_procurement_purchase_order&id_bms_procurement_purchase_order={$tr.$identifier|escape:'html':'UTF-8'}'">

			{/block}