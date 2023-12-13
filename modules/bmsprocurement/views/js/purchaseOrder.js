/**
 * 2007-2022 Boostmyshop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
 
 $(document).ready(function(){
	
 	$('ul.nav.nav-tabs').append('<li><a href="#product" data-href="' + AdminProcurementPOProductTabUrl + '" data-toggle="tab">' + AdminProcurementPOProductTabLabel + '</a></li>')	
 	$('div.tab-content.panel').append(' <div id="product" class="tab-pane" data-tab-id="product"><iframe id="productFrame" frameborder= "0" scrolling= "no" width= "100%" onload="resizeIframe(this)"  src=""></iframe></div>')
	
 	$('ul.nav.nav-tabs').append('<li><a href="#addProduct" data-href="' + AdminProcurementPOAddProductTabUrl + '" data-toggle="tab">' + AdminProcurementPOAddProductTabLabel + '</a></li>')	
 	$('div.tab-content.panel').append(' <div id="addProduct" class="tab-pane" data-tab-id="product"><iframe id="addProductFrame" frameborder= "0" scrolling= "no" width= "100%" onload="resizeIframe(this)"  src=""></iframe></div>')
	
 	$('ul.nav.nav-tabs').append('<li><a href="#reception" data-href="' + AdminProcurementPOReceptionTabUrl + '" data-toggle="tab">' + AdminProcurementPOReceptionTabLabel + '</a></li>')	
 	$('div.tab-content.panel').append(' <div id="reception" class="tab-pane" data-tab-id="product"><iframe id="receptionFrame" frameborder= "0" scrolling= "no" width= "100%" onload="resizeIframe(this)"  src=""></iframe></div>')
	
 
	initFormTabs();
	checkoutIframe();


	
});
$( window ).load(function() {

});