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
<table id="total-tab" width="100%" style="text-align:right">
	<tr>
		<td class="grey" width="70%">
            {l s='Sub total' mod='bmsprocurement'}
		</td>
		<td class="white" width="30%">
			{$sub_total|string_format:"%.2f"|escape:'htmlall':'UTF-8'} {$po->getCurrencySign()|escape:'htmlall':'UTF-8'}
		</td>
	</tr>
	<tr>
		<td class="grey" width="70%">
            {l s='Shipping and additional' mod='bmsprocurement'}
		</td>
		<td class="white" width="30%">
			{$shipping|string_format:"%.2f"|escape:'htmlall':'UTF-8'} {$po->getCurrencySign()|escape:'htmlall':'UTF-8'}
		</td>
	</tr>
	<tr class="bold">
		<td class="grey">
            {l s='Taxes' mod='bmsprocurement'}
		</td>
		<td class="white">
			{$taxes|string_format:"%.2f"|escape:'htmlall':'UTF-8'} {$po->getCurrencySign()|escape:'htmlall':'UTF-8'}
		</td>
	</tr>
	<tr class="bold big">
		<td class="grey">
            {l s='Grand total' mod='bmsprocurement'}
		</td>
		<td class="white">
			{$total|string_format:"%.2f"|escape:'htmlall':'UTF-8'} {$po->getCurrencySign()|escape:'htmlall':'UTF-8'}
		</td>
	</tr>
</table>
