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
<!doctype html>
<html lang="{$language.iso_code}">

  <head>
    {block name='head'}
      {include file='_partials/head.tpl'}
    {/block}
  </head>

{* AngarTheme *}
  <body id="{$page.page_name}" class="{$page.body_classes|classnames} live_edit_{$enableconfig} {if $enableconfig == 1 & $demo == 0}demo{/if} {$psversion} ps_{$smarty.const._PS_VERSION_|replace:'.':''|truncate:3:""}
	{$css1|escape:'html':'UTF-8'} {$css2|escape:'html':'UTF-8'} {$css3|escape:'html':'UTF-8'} {$css4|escape:'html':'UTF-8'} {$css5|escape:'html':'UTF-8'} {$css6|escape:'html':'UTF-8'} {$css7|escape:'html':'UTF-8'} {$css8|escape:'html':'UTF-8'} {$css9|escape:'html':'UTF-8'} {$css10|escape:'html':'UTF-8'} {$css11|escape:'html':'UTF-8'} {$css12|escape:'html':'UTF-8'} {$css13|escape:'html':'UTF-8'} {$css14|escape:'html':'UTF-8'} {$css15|escape:'html':'UTF-8'} {$css16|escape:'html':'UTF-8'} {$css17|escape:'html':'UTF-8'} {$css18|escape:'html':'UTF-8'} {$css19|escape:'html':'UTF-8'} {$css20|escape:'html':'UTF-8'} {$css21|escape:'html':'UTF-8'} {$css22|escape:'html':'UTF-8'} {$css23|escape:'html':'UTF-8'} {$css24|escape:'html':'UTF-8'} {$css25|escape:'html':'UTF-8'} {$css26|escape:'html':'UTF-8'} {$css27|escape:'html':'UTF-8'} {$css28|escape:'html':'UTF-8'} {$css29|escape:'html':'UTF-8'} {$css30|escape:'html':'UTF-8'} {$css31|escape:'html':'UTF-8'} {$css32|escape:'html':'UTF-8'} {$css33|escape:'html':'UTF-8'} {$css34|escape:'html':'UTF-8'} {$css35|escape:'html':'UTF-8'} {$css36|escape:'html':'UTF-8'} {$css37|escape:'html':'UTF-8'} {$css38|escape:'html':'UTF-8'} {$css39|escape:'html':'UTF-8'} {$css40|escape:'html':'UTF-8'} {$css41|escape:'html':'UTF-8'} {$css42|escape:'html':'UTF-8'} {$css43|escape:'html':'UTF-8'} {$css45|escape:'html':'UTF-8'} {$css46|escape:'html':'UTF-8'} {$css47|escape:'html':'UTF-8'} {$css48|escape:'html':'UTF-8'} {$css49|escape:'html':'UTF-8'} {$css50|escape:'html':'UTF-8'} {$css51|escape:'html':'UTF-8'} {$css52|escape:'html':'UTF-8'} {$css53|escape:'html':'UTF-8'} {$css54|escape:'html':'UTF-8'} {$css55|escape:'html':'UTF-8'} {$css57|escape:'html':'UTF-8'} {$css58|escape:'html':'UTF-8'}  {$css62|escape:'html':'UTF-8'} {$css63|escape:'html':'UTF-8'} {$css64|escape:'html':'UTF-8'} mainfont_{$css59|escape:'html':'UTF-8'} {$color75|escape:'html':'UTF-8'} {if $css17 != pl_2col_qty_3}standard_carusele{/if} {if $customer.is_logged == 0}not_logged{/if} {if $configuration.show_prices == 0}hide_prices{/if} {if $configuration.is_catalog == 1}hide_prices_catalog_mode{/if}">

	<main>

    {block name='hook_after_body_opening_tag'}
      {hook h='displayAfterBodyOpeningTag'}
    {/block}

    <header id="header">
      {block name='header'}
        {include file='_partials/header.tpl'}
      {/block}
    </header>

    {block name='notifications'}
      {include file='_partials/notifications.tpl'}
    {/block}

    <section id="wrapper">
      {hook h="displayWrapperTop"}
      <div class="container">

      {block name='content'}
        <section id="content">
          <div class="row">
            <div class="col-md-8">
              {block name='cart_summary'}
                {render file='checkout/checkout-process.tpl' ui=$checkout_process}
              {/block}
            </div>
            <div class="col-md-4">

              {block name='cart_summary'}
                {include file='checkout/_partials/cart-summary.tpl' cart = $cart}
              {/block}

              {hook h='displayReassurance'}
            </div>
          </div>
        </section>
      {/block}
      </div>
      {hook h="displayWrapperBottom"}
    </section>

    <footer id="footer">
      {block name='footer'}
        {include file='_partials/footer.tpl'}
      {/block}
    </footer>

    {block name='javascript_bottom'}
      {include file="_partials/javascript.tpl" javascript=$javascript.bottom}
    {/block}

    {block name='hook_before_body_closing_tag'}
      {hook h='displayBeforeBodyClosingTag'}
    {/block}

	</main>

  </body>

</html>
