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

<input
        type="checkbox"
        value="1"
        data-textbox-id="ideal_stock_level_{$id_product|escape:'htmlall':'UTF-8'}_{$id_attribute|escape:'htmlall':'UTF-8'}"
        data-product-id="{$id_product|escape:'htmlall':'UTF-8'}"
        data-attribute-id="{$id_attribute|escape:'htmlall':'UTF-8'}"
        data-field="use_default_ideal_stock_level"
        onclick="toggleTextboxVisibilityFromCheckbox(this); saveReplenishmentSetting(this);"
        {if $use_default_ideal_stock_level != "0"}checked{/if}
>
{l s='Use default value' mod='bmsprocurement'} : {$default_ideal_stock_level|escape:'htmlall':'UTF-8'}
<br>
<input
        {if $use_default_ideal_stock_level != "0"}style="display:none;"{/if}
        type="text"
        id="ideal_stock_level_{$id_product|escape:'htmlall':'UTF-8'}_{$id_attribute|escape:'htmlall':'UTF-8'}"
        data-product-id="{$id_product|escape:'htmlall':'UTF-8'}"
        data-attribute-id="{$id_attribute|escape:'htmlall':'UTF-8'}"
        data-field="ideal_stock_level"
        onchange="saveReplenishmentSetting(this);"
        value="{$ideal_stock_level|escape:'htmlall':'UTF-8'}"
>