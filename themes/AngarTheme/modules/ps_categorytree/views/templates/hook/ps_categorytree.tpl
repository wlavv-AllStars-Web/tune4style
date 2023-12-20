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

 * Products select category alternative
 * if $node.id == $product.id_category_default
 * $node.name == $product.category_name

 *}

{* AngarTheme *}

{function name="categories" nodes=[] depth=0}
  {strip}
    {if $nodes|count}

        {foreach from=$nodes item=node}
			<li id="cat_id_{$node.id}">
				{if $page.page_name == 'product'}
					<a href="{$node.link}" {if isset($product.id_category_default) && isset($node.id)}{if $node.id == $product.id_category_default}class="selected"{/if}{/if}>
						{$node.name}
					</a>
				{else}
					<a href="{$node.link}" {if $page.page_name == 'category'}{if $node.id == $category.id}class="selected"{/if}{/if}>
						{$node.name}
					</a>
				{/if}

				{if $node.children}
					<ul>
						{categories nodes=$node.children depth=$depth+1}
					</ul>
				{/if}
			</li>
        {/foreach}

    {/if}
  {/strip}
{/function}


<div class="block-categories block">
	{* AngarTheme *}
	<div class="h6 text-uppercase facet-label">
		<a href="{$categories.link nofilter}" title="{l s='Categories' d='Shop.Theme.Catalog'}">{if $page.page_name == 'index'}{l s='Categories' d='Shop.Theme.Catalog'}{else}{$categories.name}{/if}</a>
	</div>

    <div class="block_content">
		<ul class="tree dhtml">
			{categories nodes=$categories.children}
		</ul>
	</div>

</div>