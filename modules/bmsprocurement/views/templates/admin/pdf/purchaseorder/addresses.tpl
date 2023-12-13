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
<br/>
<br/>
<table id="addresses-tab" cellspacing="0" cellpadding="0">
	<tr>
		<td width="50%"><span class="bold">{l s='Bill to' mod='bmsprocurement'}</span><br/><br/>
							
			<table>
				<tr>
					<td>{Compatibility::getWarehouseAddress($purchase_order->warehouse_id, 'billing', Context::getContext())|escape:'htmlall':'UTF-8'|nl2br}</td>
				</tr>
			</table>
			
		</td>
		<td width="50%"><span class="bold">{l s='Ship to' mod='bmsprocurement'}</span><br/><br/>
			<table>
				<tr>
					<td>{Compatibility::getWarehouseAddress($purchase_order->warehouse_id, 'shipping', Context::getContext())|escape:'htmlall':'UTF-8'|nl2br}</td>
				</tr>
			</table>
		</td>
	</tr>
</table>