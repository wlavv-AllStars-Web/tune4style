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
 <div id="content" class="bootstrap" style="margin-left:0px;padding:0px">
	<div class="panel" style="width:500px">
		<div class="row">
			<div class="col-lg-9">
   				<h3>{l s='Select a supplier' mod='bmsprocurement'}</h3>
   				<select id="supplier">
       				{foreach from=$arrSuppliers item=supplier}
            			<option value="{$supplier.id_supplier|escape:'htmlall':'UTF-8'}">{$supplier.name|escape:'htmlall':'UTF-8'}</option>
       				{/foreach}
   				</select>
			</div>  
			<div class="col-lg-3">
			   				<button class="btn btn-primary" style="margin-top: 25px;" onclick="submitSupplier()">{l s='Submit' mod='bmsprocurement'}</button>
			
			</div>
		</div>  
	</div>  
</div>  

<script>
function submitSupplier(){

	location.href="{Context::getContext()->link->getAdminLink('AdminProcurementPurchaseOrder')|escape:'quotes':'UTF-8'}&supplier_id=" + $('#supplier option:checked').val() + "&createPO&addbms_procurement_purchase_order";
}
</script>
