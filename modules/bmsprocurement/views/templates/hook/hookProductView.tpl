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
 <script type="text/javascript">
	$(document).ready(function()
	{
		$('.checkbox_stock').on('click', function(){
		    var text_input = $('#' + $(this).attr('data-id-input-field'));
		    if($(this).is(':checked')){
				$(text_input).attr('disabled', true);
				$(text_input).val($(text_input).attr('data-default-value'));
		    }else{
				$(text_input).attr('disabled', false);
				$(text_input).val($(text_input).attr('data-value'));
		    }
		});
	});
</script>

<div id="quantities" style="">
  <h2>{l s='Replenishment' mod='bmsprocurement'}</h2>
  <fieldset class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label class="form-control-label">{l s='Warning stock level' mod='bmsprocurement'}</label>
        ({l s='Use default value' mod='bmsprocurement'}<input class="checkbox_stock" type="checkbox" data-id-input-field="bms_warning_stock_level{$id|escape:'htmlall':'UTF-8'}" name="bms_use_default_warning_level_stock{$id|escape:'htmlall':'UTF-8'}" {if $bms_use_default_warning_stock_level_value == 1}checked{/if}/>)
		<input type="text" id="bms_warning_stock_level{$id|escape:'htmlall':'UTF-8'}" name="bms_warning_stock_level{$id|escape:'htmlall':'UTF-8'}" data-default-value="{$bms_default_warning_stock_level_value|escape:'htmlall':'UTF-8'}" data-value="{$bms_warning_stock_level_value|escape:'htmlall':'UTF-8'}" required="required" class="form-control" value="{$bms_displayed_warning_stock_level_value|escape:'htmlall':'UTF-8'}" {if $bms_use_default_warning_stock_level_value == 1}disabled{/if}>
      </div>
      <div class="col-md-4">
        <label class="form-control-label">{l s='Ideal stock level' mod='bmsprocurement'}</label>
        ({l s='Use default value' mod='bmsprocurement'}<input class="checkbox_stock" type="checkbox" data-id-input-field="bms_ideal_stock_level{$id|escape:'htmlall':'UTF-8'}" name="bms_use_default_ideal_level_stock{$id|escape:'htmlall':'UTF-8'}" {if $bms_use_default_ideal_stock_level_value == 1}checked{/if}/>)
        <input type="text" id="bms_ideal_stock_level{$id|escape:'htmlall':'UTF-8'}" name="bms_ideal_stock_level{$id|escape:'htmlall':'UTF-8'}" data-default-value="{$bms_default_ideal_stock_level_value|escape:'htmlall':'UTF-8'}" data-value="{$bms_ideal_stock_level_value|escape:'htmlall':'UTF-8'}" required="required" class="form-control" value="{$bms_displayed_ideal_stock_level_value|escape:'htmlall':'UTF-8'}" {if $bms_use_default_ideal_stock_level_value == 1}disabled{/if}>
      </div>
      <input type="hidden" name="bms_id_product_procurement{$id|escape:'htmlall':'UTF-8'}" value="{$bms_procurement_id|escape:'htmlall':'UTF-8'}">
    </div>
  </fieldset>
</div>