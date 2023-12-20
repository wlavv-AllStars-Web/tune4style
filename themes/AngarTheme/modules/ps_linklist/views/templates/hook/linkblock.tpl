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

{* AngarTheme *}

{foreach $linkBlocks as $linkBlock}
	{if $linkBlock.hook == displayNav1}
		<ul class="links_top">
			{foreach $linkBlock.links as $link}
			  <li>
				<a
					id="{$link.id}-{$linkBlock.id}"
					class="{$link.class}"
					href="{$link.url}"
					title="{$link.description}"
					{if !empty($link.target)} target="{$link.target}" {/if}
				>
				  {$link.title}
				</a>
			  </li>
			{/foreach}
		</ul>
	{elseif $linkBlock.hook == displayLeftColumn}
		<div class="list-block block">
			<div class="h6 text-uppercase facet-label"><span>{$linkBlock.title}</span></div>
			<div class="block_content">
				<ul>
					{foreach $linkBlock.links as $link}
					  <li>
						<a
							id="{$link.id}-{$linkBlock.id}"
							class="{$link.class}"
							href="{$link.url}"
							title="{$link.description}"
							{if !empty($link.target)} target="{$link.target}" {/if}
						>
						  {$link.title}
						</a>
					  </li>
					{/foreach}
				</ul>
			</div>
		</div>
	{else}
		<div class="col-md-3 links wrapper">
		  {* AngarTheme *}
		  <div class="h3 hidden-sm-down"><span>{$linkBlock.title}</span></div>
		  {assign var=_expand_id value=10|mt_rand:100000}
		  <div class="title clearfix hidden-md-up" data-target="#footer_sub_menu_{$_expand_id}" data-toggle="collapse">
			<span class="h3">{$linkBlock.title}</span>
			<span class="float-xs-right">
			  <span class="navbar-toggler collapse-icons">
				<i class="material-icons add">&#xE313;</i>
				<i class="material-icons remove">&#xE316;</i>
			  </span>
			</span>
		  </div>
		  <ul id="footer_sub_menu_{$_expand_id}" class="collapse">
			{foreach $linkBlock.links as $link}
			  <li>
				<a
					id="{$link.id}-{$linkBlock.id}"
					class="{$link.class}"
					href="{$link.url}"
					title="{$link.description}"
					{if !empty($link.target)} target="{$link.target}" {/if}
				>
				  {$link.title}
				</a>
			  </li>
			{/foreach}
		  </ul>
		</div>
	{/if}
{/foreach}
