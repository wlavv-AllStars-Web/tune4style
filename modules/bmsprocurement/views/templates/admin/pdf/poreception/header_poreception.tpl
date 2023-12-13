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
        {l s='Reception' mod='bmsprocurement'} #{$po_reception->id|escape:'htmlall':'UTF-8'} (PO #{$purchase_order->reference|escape:'htmlall':'UTF-8'})
	</td>
</tr>	
</table>
<br/>
<br/>
<br/>
<table style="width: 50%; margin-top:50px;">
<tr style="width: 50%;">
	<td style="text-align: left;font-weight: bold;">{l s='Date' mod='bmsprocurement'} : </td>
	<td style="text-align: right;">{$po_reception->date_add|escape:'htmlall':'UTF-8'}</td>
</tr>
<tr style="width: 50%;">
	<td style="text-align: left;font-weight: bold;">{l s='User' mod='bmsprocurement'} : </td>
	<td style="text-align: right;">{$employee->firstname|escape:'htmlall':'UTF-8'} {$employee->lastname|escape:'htmlall':'UTF-8'}</td>
</tr>
<tr style="width: 50%;">
	<td style="text-align: left;font-weight: bold;">{l s='Supplier' mod='bmsprocurement'} : </td>
	<td style="text-align: right;">{$supplier_name|escape:'htmlall':'UTF-8'}</td>
</tr>
<tr style="width: 50%;">
	<td style="text-align: left;font-weight: bold;">{l s='Purchase order' mod='bmsprocurement'} : </td>
	<td style="text-align: right;">{$purchase_order->reference|escape:'htmlall':'UTF-8'}</td>
</tr>
<tr style="width: 50%;">
	<td style="text-align: left;font-weight: bold;">{l s='Products count' mod='bmsprocurement'} : </td>
	<td style="text-align: right;">{$purchase_order->products_count|escape:'htmlall':'UTF-8'}</td>
</tr>	
</table>
<br/>
