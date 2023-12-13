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
 <div class="panel">
	<h3>{l s='Tools' mod='bmsprocurement'}</h3>
	<div class="row">
        <div class="col-md-1">
            {l s='Supplier' mod='bmsprocurement'}
        </div>
        <div class="col-md-3">
            <select id="supplier" onchange="selectCurrentSupplier(this);">
                <option></option>
                {foreach from=$arrSuppliers item=supplier}
                    <option value="{$supplier.id_supplier|escape:'htmlall':'UTF-8'}" {if $supplier.id_supplier == $currentSupplierId} selected {/if}>
                        {$supplier.name|escape:'htmlall':'UTF-8'}
                    </option>
                {/foreach}
            </select>
        </div>
        <div class="col-md-4" align="center">
            <button id="min" class="btn btn-default"><i class="icon-minus"></i>&nbsp;{l s='All min qties' mod='bmsprocurement'}</button>
            &nbsp;
            <button id="max" class="btn btn-default"><i class="icon-plus"></i>&nbsp;{l s='All max qties' mod='bmsprocurement'}</button>
        </div>
        <div class="col-md-4" align="right">
            <button onclick="createPO('{Context::getContext()->link->getAdminLink('AdminProcurementPurchaseOrder')|escape:'htmlall':'UTF-8'}&isFromSuppplyNeeds=1&createPO&supplier_id=' + $('#supplier option:checked').val() + '&addbms_procurement_purchase_order', '{l s='Please select a supplier' mod='bmsprocurement'}');" class="btn btn-default"><i class="icon-save"></i>&nbsp;{l s='Create new PO' mod='bmsprocurement'}</button>
        </div>
		</div>
	</div>
</div>