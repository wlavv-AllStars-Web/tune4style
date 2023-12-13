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
		<div class="col-md-6"><label>{l s='Barcode' mod='bmsprocurement'}</label><input readonly='readonly' id="barecode" style="border:0px;width:100%;font-size:14px"  placeholder="{l s='SCAN ENABLED' mod='bmsprocurement'}" value=""/></div>
		<div class="col-md-6"> </div>
	</div>	
</div>

<audio id="audio-correct" src="{$audioCorrectUrl|escape:'htmlall':'UTF-8'}" ></audio>
<audio id="audio-wrong" src="{$audioWrongUrl|escape:'htmlall':'UTF-8'}" ></audio>
