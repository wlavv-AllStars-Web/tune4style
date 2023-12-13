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
	<div class="form-wrapper">
  		<ul class="nav nav-tabs">
    		<li><a href="#dashboard" data-toggle="tab" data-noRefresh='false' data-href="{Context::getContext()->link->getAdminLink('AdminProcurementHome')|escape:'htmlall':'UTF-8'}&liteDisplaying=1&home=1">{l s='Dashboard' mod='bmsprocurement'}</a></li>
    		<li><a href="#supplier" data-toggle="tab" data-noRefresh='false' data-href="{Context::getContext()->link->getAdminLink('AdminProcurementSuppliers')|escape:'htmlall':'UTF-8'}&liteDisplaying=1">{l s='Suppliers' mod='bmsprocurement'}</a></li>
    		<li><a href="#order" data-toggle="tab" data-noRefresh='false' data-href="{Context::getContext()->link->getAdminLink('AdminProcurementPurchaseOrder')|escape:'htmlall':'UTF-8'}&liteDisplaying=1">{l s='Purchase orders' mod='bmsprocurement'}</a></li>
    		<li><a href="#product" data-toggle="tab" data-href="{Context::getContext()->link->getAdminLink('AdminProcurementProductToReceiveTab')|escape:'htmlall':'UTF-8'}&liteDisplaying=1">{l s='Products to receive' mod='bmsprocurement'}</a></li>
    		<li><a href="#supply" data-toggle="tab" data-noRefresh='false' data-href="{Context::getContext()->link->getAdminLink('AdminProcurementSupplyNeedsTab')|escape:'htmlall':'UTF-8'}">{l s='Supply needs' mod='bmsprocurement'}</a></li>
    		<li><a href="#replenishment" data-toggle="tab" data-noRefresh='false' data-href="{Context::getContext()->link->getAdminLink('AdminProcurementReplenishmentLevelTab')|escape:'htmlall':'UTF-8'}">{l s='Stock replenishment levels' mod='bmsprocurement'}</a></li>
  		</ul>
		<div class="tab-content panel">
  			<div id="dashboard" data-tab-id="dashboard" class="tab-pane active"><iframe id="dashboardFrame" frameborder= '0' scrolling= 'no' width= '100%' onload="resizeIframe(this)"  src=""></iframe></div>  
  			<div id="supplier" data-tab-id="supplier" class="tab-pane"><iframe id="supplierFrame" frameborder= '0' scrolling= 'no' width= '100%' onload="resizeIframe(this)"  src=""></iframe></div>  
  			<div id="order" data-tab-id="order" class="tab-pane"><iframe id="orderFrame" frameborder= '0' scrolling= 'no' width= '100%' onload="resizeIframe(this)"  src=""></iframe></div>  
  			<div id="product" data-tab-id="product" class="tab-pane"><iframe id="productFrame" frameborder= '0' scrolling= 'no' width= '100%' onload="resizeIframe(this)"  src=""></iframe></div>  
  			<div id="supply" data-tab-id="supply" class="tab-pane"><iframe id="supplyFrame" frameborder= '0' scrolling= 'no' width= '100%' onload="resizeIframe(this)"  src=""></iframe> </div>  
  			<div id="replenishment" data-tab-id="replenishment" class="tab-pane"><iframe id="replenishmentFrame" frameborder= '0' scrolling= 'no' width= '100%' onload="resizeIframe(this)"  src=""></iframe> </div>
		</div>
	</div>
</div>

<div id='supplierSelect' style="display:none">
	{$supplierSelectTemplate}
</div>
