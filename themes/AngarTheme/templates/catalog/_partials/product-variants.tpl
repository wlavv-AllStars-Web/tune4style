{**
 * 2007-2017 PrestaShop
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
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div class="product-variants allow_oosp_{$product.allow_oosp}">
  {foreach from=$groups key=id_attribute_group item=group}
    <div class="clearfix product-variants-item">
      <span class="control-label">{$group.name}</span>
      {if $group.group_type == 'select'}
        <select
          class="form-control form-control-select"
          id="group_{$id_attribute_group}"
          data-product-attribute="{$id_attribute_group}"
          name="group[{$id_attribute_group}]">
          {foreach from=$group.attributes key=id_attribute item=group_attribute}
            <option value="{$id_attribute}" title="{$group_attribute.name}"{if $group_attribute.selected} selected="selected"{/if}>{$group_attribute.name}</option>
          {/foreach}
        </select>
      {elseif $group.group_type == 'color'}
		{* AngarTheme *}
        <ul id="group_{$id_attribute_group}">
          {foreach from=$group.attributes key=id_attribute item=group_attribute}
            <li class="float-xs-left input-container {if {$group.attributes_quantity[{$id_attribute|intval}]} < 1}outofstock{/if}">
              <label>
                <input class="input-color" type="radio" title="{$group_attribute.name}" data-product-attribute="{$id_attribute_group}" name="group[{$id_attribute_group}]" value="{$id_attribute}"{if $group_attribute.selected} checked="checked"{/if}>
                <span
                  {if $group_attribute.html_color_code}class="color" style="background-color: {$group_attribute.html_color_code}" {/if}
                  {if $group_attribute.texture}class="color texture" style="background-image: url({$group_attribute.texture})" {/if}
                ><span class="sr-only">{$group_attribute.name}</span></span>
              </label>
            </li>
          {/foreach}
        </ul>
      {elseif $group.group_type == 'radio'}
        <ul id="group_{$id_attribute_group}">
          {foreach from=$group.attributes key=id_attribute item=group_attribute}
            <li class="input-container float-xs-left {if {$group.attributes_quantity[{$id_attribute|intval}]} < 1}outofstock{/if}">
              <label>
                <input class="input-radio" type="radio" data-product-attribute="{$id_attribute_group}" name="group[{$id_attribute_group}]" value="{$id_attribute}"{if $group_attribute.selected} checked="checked"{/if}>
                <span class="radio-label">{$group_attribute.name}</span>
              </label>
            </li>
          {/foreach}
        </ul>
      {/if}
    </div>
  {/foreach}

    {* AngarTheme mod *}
	{if $product.quantity_discounts}
		<section class="product-discounts2">
			<h3 class="h6 product-discounts-title">{l s='Volume discounts' d='Shop.Theme.Catalog'}</h3>
			{block name='product_discount_table'}
			  <table class="table-product-discounts">
				<thead>
				<tr>
				  <th>{l s='Quantity' d='Shop.Theme.Catalog'}</th>
				  <th>{$configuration.quantity_discount.label}</th>
				  <th>{l s='You Save' d='Shop.Theme.Catalog'}</th>
				</tr>
				</thead>
				<tbody>
				{foreach from=$product.quantity_discounts item='quantity_discount' name='quantity_discounts'}
				  <tr data-discount-type="{$quantity_discount.reduction_type}" data-discount="{$quantity_discount.real_value}" data-discount-quantity="{$quantity_discount.quantity}">
					<td>{$quantity_discount.quantity}</td>
					<td>{$quantity_discount.discount}</td>
					<td>{l s='Up to %discount%' d='Shop.Theme.Catalog' sprintf=['%discount%' => $quantity_discount.save]}</td>
				  </tr>
				{/foreach}
				</tbody>
			  </table>
			{/block}
		</section>
	{/if}

</div>