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
	
	$(window).load(function(){
		if (typeof qtyData == 'undefined') return ;
		arrProduct = jQuery.parseJSON(qtyData);
	
		for (var id_po_product in arrProduct) {
			$("#"  + id_po_product).val(arrProduct[id_po_product].value);
		}
		
	});
	$(window).keypress(function(e) {
	  	bareCode(e);
	});	
	$("input[name^='qty'").change(function(){	
		
		var val = parseInt( $(this).val(),10);
	
		if(isNaN(val)) val = 0;

		
		
		
		if( val < 0 ) $(this).val(0);
			send($(this).attr('id'));
			
		
	});
});

function bareCode(event){

	if (event.keyCode == 13) { //entrer
		reset();
		
		$.ajax({
			type : 'POST',
			url : barecode_url + '&ajax=1',
			data : {
				'sku' : $('#barecode').val(),
				'id_po' : id_po
			},
			dataType : 'json',
			success : function($data) {
				if(!$data.result || !$data.ip_pop){
						setError();
				}else{
					setok();
                    $('#barecode').val($data.message);
					inc(1,$data.ip_pop,100)		
				}
			},
			error: function($data) {
				setError();
			}
		});
	}else{
		reset();
		$('#barecode').val($('#barecode').val() + event.key);
		
	}

}
function setError(){
	$('#barecode').css('color','rgb(255, 0, 0)'); //rouge
	$('#barecode').val(errorMessage +  ' ' + $('#barecode').val());
    document.getElementById("audio-wrong").play();
}
function setok(){
	$('#barecode').css('color','blue');
    document.getElementById("audio-correct").play();
}
function reset(){
		if( $('#barecode').css('color') != "rgb(85, 85, 85)"){ //si pas vert
			 $('#barecode').css('color','rgb(85, 85, 85)');
			 $('#barecode').val('');
		}
	
}
function changeQte(qte,sens,id,max){
	qte = parseInt(qte,10);
	max = parseInt(max,10);
	

	var val = parseInt( $("#"+id).val(),10);
	
	if(isNaN(val)) val = 0;
	if(isNaN(max)) max = 0;
	
	if(isNaN(qte)) return false;
	
	if(qte == 1){
		switch(sens){
			case "inc":
				$("#"+id).val( val+1 );
			break;
			case "dec":
				if( val > 0) $("#"+id).val(val-1);
			break;
		}
	}else{
		$("#"+id).val(qte);
	}
	//$("#"+id).trigger("change")

}

function dec(qte,id,max){
	changeQte(qte,'dec',id,max);
	send(id);
}
function inc(qte,id,max){
	changeQte(qte,'inc',id,max);
	send(id);
}
function send(id_po_product){
	$.ajax({
		  type: 'POST',
	  url: ajaxAddQtyLink,
	  data: {
	  	'id_po_product': id_po_product,
        'ajax': '1',
	  	'value':$("#"+id_po_product).val(),
	  	'id_po':id_po
	  },
	  dataType: 'json',
	  success: function($data) {
	  	console.log($data)
	  }
	});

}