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
	$("input[name^='qty'],input[data-ajax='1']").change(function(){	
			$.ajax({
			  type: 'POST',
			   async: false,
			  url: ajaxAddQtyLink,
			  data: {
			  	'id_po':id_po,
			  	'method': method,
			  	'ajax': '1',
			  	'id_product': ( $(this).attr("data-id-product") ? $(this).attr("data-id-product") : 0),
			  	'value':$(this).val(),
			  	'id_attribute': ( $(this).attr("data-id-attribute") ? $(this).attr("data-id-attribute") : 0 ),
			  	'fieldName': ( $(this).attr("data-name") ? $(this).attr("data-name") : '')
			  },
			  dataType: 'json',
			  success: function($data) {
			  	console.log($data)
			  }
			});
	
		});
			
		$(window).load(function(){
			if (typeof qtyData == 'undefined') return ;
			arrProduct = jQuery.parseJSON(qtyData);
			console.log(arrProduct);
			if(method == 'product'){
				for (var id_product in arrProduct) {
					for (var id_attribute in arrProduct[id_product]) {
						for (var name in arrProduct[id_product][id_attribute]) {
							$("input[name='" + name + "[" + id_product + "][" + id_attribute + "]']").val(arrProduct[id_product][id_attribute][name].value);
						}
					}
				}
			}else{
				for (var id_product in arrProduct) {
					for (var id_attribute in arrProduct[id_product]) {
						$("input[name='qty[" + id_product + "]']").val(arrProduct[id_product][id_attribute].value);
						$("input[name='qtyAttrib[" + id_attribute  + "]']").val(arrProduct[id_product][id_attribute].value);
						$("input[name='qtyNeed[" + id_product + "][" + id_attribute + "]']").val(arrProduct[id_product][id_attribute].value);
					}
				}
			}
			
			
		});
});