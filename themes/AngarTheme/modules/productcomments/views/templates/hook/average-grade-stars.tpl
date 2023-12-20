{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
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
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
{* AngarTheme - productcomments mod *}

  <div class="comments-note">
    <span class="grade">{l s='Grade' d='Modules.Productcomments.Shop'}</span>
	<div class="star_content clearfix">
		{section name="i" start=0 loop=5 step=1}
			{if $average_grade le $smarty.section.i.index}
				<span class="star"></span>
			{else}
				{math equation="floor($average_grade)" assign="average_grade_integer"}
				<div class="star star_on {if $average_grade != $average_grade_integer}star_on_half{/if}"></div>
			{/if}
		{/section}
	</div>
  </div>
