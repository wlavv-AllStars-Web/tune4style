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


<table style="width: 100%">
<tr>
	<td style="font-weight: bold; font-size: 19pt; color: #444; width: 100%;">
        {l s='Purchase Order' mod='bmsprocurement'} # {$purchase_order->reference|escape:'htmlall':'UTF-8'}
	</td>
</tr>
</table>
<br/>
<br/>
<br/>
<table style="width: 100%; margin-top:50px;">
<tr>
	<td style="width: 100%; text-align: left;">
		<table style="width: 100%">
			<tr>
				<td >{l s='Supplier' mod='bmsprocurement'} : {$supplier_name|escape:'htmlall':'UTF-8'}</td>
			</tr>
			<tr>
				<td >{l s='Manager' mod='bmsprocurement'} : {$employee->firstname|escape:'htmlall':'UTF-8'} {$employee->lastname|escape:'htmlall':'UTF-8'}</td>
			</tr>
			<tr>
				<td >{l s='Estimated time of arrival' mod='bmsprocurement'} : {$purchase_order->eta|escape:'htmlall':'UTF-8'}</td>
			</tr>
			<tr>
				<td >{l s='Payment terms' mod='bmsprocurement'} : {$payment_term_name|escape:'htmlall':'UTF-8'}</td>
			</tr>
		</table>
	</td>
</tr>
</table>