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
    <div class="row">
		<div class="col-sm-4 col-md-2">
       		<div id="box-conversion-rate" data-toggle="tooltip" class="box-stats label-tooltip color1">
        		<div class="kpi-content">
          			<i class="icon  icon-list" style="font-size: 2em; color: rgb(138,223,52);">‎</i>
           			<span class="title">{l s='Status ' mod='bmsprocurement'}</span>
    				<span class="value">{$status|escape:'htmlall':'UTF-8'}</span>
       			</div>
        	</div>
        </div>
		<div class="col-sm-4 col-md-2">
       		<div id="box-conversion-rate" data-toggle="tooltip" class="box-stats label-tooltip color1">
        		<div class="kpi-content">
          			<i class="icon  icon-credit-card" style="font-size: 2em; color: rgb(138,223,52);">‎</i>
           			<span class="title">{l s='Payment Status' mod='bmsprocurement'}</span>
    				<span class="value">{$paiement_status|escape:'htmlall':'UTF-8'}</span>
       			</div>
        	</div>
        </div>
		<div class="col-sm-4 col-md-2">
       		<div id="box-conversion-rate" data-toggle="tooltip" class="box-stats label-tooltip color1">
        		<div class="kpi-content">
          			<i class="icon  icon-clock-o" style="font-size: 2em; color: rgb(138,223,52);">‎</i>
           			<span class="title">{l s='ETA' mod='bmsprocurement'}</span>
    				<span class="value">{$po->eta|escape:'htmlall':'UTF-8'}</span>
       			</div>
        	</div>
        </div>
		<div class="col-sm-4 col-md-2">
       		<div id="box-conversion-rate" data-toggle="tooltip" class="box-stats label-tooltip color1">
        		<div class="kpi-content">
          			<i class="icon  icon-truck" style="font-size: 2em; color: rgb(138,223,52);">‎</i>
           			<span class="title">{l s='Delivery progress' mod='bmsprocurement'}</span>
    				<span class="value">{$po->reception_progress|escape:'htmlall':'UTF-8'}%</span>
       			</div>
        	</div>
        </div>
		<div class="col-sm-4 col-md-2">
       		<div id="box-conversion-rate" data-toggle="tooltip" class="box-stats label-tooltip color1">
        		<div class="kpi-content">
          			<i class="icon  icon-usd" style="font-size: 2em; color: rgb(138,223,52);">‎</i>
           			<span class="title">{l s='Total' mod='bmsprocurement'}</span>
    				<span class="value">{$po->total|escape:'htmlall':'UTF-8'} {$po->getCurrencySign()|escape:'htmlall':'UTF-8'}</span>
       			</div>
        	</div>
        </div>
       
        
    </div>
</div>