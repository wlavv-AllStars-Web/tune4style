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

 <table align="center">
{foreach from=$arrPo item=po}
<tr>
	<td>{$po.name|escape:'htmlall':'UTF-8'}</td>
	<td><a target='_parent' href='{Context::getContext()->link->getAdminLink('AdminProcurementPurchaseOrder')|escape:'htmlall':'UTF-8'}&id_bms_procurement_purchase_order={$po.po_id|escape:'htmlall':'UTF-8'}&updatebms_procurement_purchase_order'>{$po.reference|escape:'htmlall':'UTF-8'}</a></td>
	<td>{$po.qty|escape:'htmlall':'UTF-8'}X</td>
	<td>{Tools::displayDate($po.eta)|escape:'htmlall':'UTF-8'}</td>

</tr>
{/foreach}
</table>