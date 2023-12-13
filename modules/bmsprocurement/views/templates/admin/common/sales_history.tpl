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

<center>
    <div id="div_sales_history_{$id_product|escape:'htmlall':'UTF-8'}_{$id_attribute|escape:'htmlall':'UTF-8'}">

        {if $hasSales|escape:'htmlall':'UTF-8'}
            <table border="1" cellspacing="0">
                <tr>
                    {foreach from=$ranges item=range}
                        <td align="center" style="font-size: 10px">{$range['label']|escape:'htmlall':'UTF-8'}</td>
                    {/foreach}
                </tr>
                <tr>
                    {foreach from=$ranges item=range}
                        <td align="center" style="font-size: 10px">{$range['sales_count']|escape:'htmlall':'UTF-8'}</td>
                    {/foreach}
                </tr>
            </table>

            <p>
                {l s='Avg sales per day' mod='bmsprocurement'} : <b>{$avg|escape:'htmlall':'UTF-8'}</b>
                {if $runout>0|escape:'htmlall':'UTF-8'}
                    <br> {l s='Run out' mod='bmsprocurement'} in <b>{$runout|escape:'htmlall':'UTF-8'}</b> days
                {/if}
            </p>
        {else}
            {l s='No sales found' mod='bmsprocurement'}
        {/if}

    </div>
</center>