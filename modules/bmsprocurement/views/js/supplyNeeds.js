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
 

 
 $(document).ready(function()
{
    
        //bootstrap components init
        $('.dropdown-toggle').click(function(){
            $('.dropdown-menu').css("margin-top", "-100px");
          });
        $('.dropdown-toggle').dropdown();
	//la methode qui permet au js Ajax de gerer la session des qte
	method="productQtyNeed";
	
	$("button#min").click(function(){
		$(".table.product input[value=Min]").click();
	});
	$("button#max").click(function(){
		$(".table.product input[value=Max]").click();
	});
	
});
function setQte(id,qte){
	qte = parseInt(qte,10);
	if(isNaN(qte)) return false;
	$("#"+id).val( qte);
	$("#"+id).change();
}

function createPO(url, errorMsg)
{
    if ($('#supplier option:checked').val())
        parent.location.href = url;
    else
        alert(errorMsg);
}

function selectCurrentSupplier(dropDown)
{
    var supplierId = $(dropDown).val();

    $.ajax({
        type: 'POST',
        async: false,
        url: ajaxAddQtyLink,
        data: {
            'method': 'saveCurrentSupplierId',
            'ajax': '1',
            'supplier_id': supplierId
        },
        dataType: 'json',
        success: function(data) {
            document.location.href = document.location.href;
        },
        error: function(data)
        {
            alert('An error occured during replenishment save');
        }
    });
}