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
//la methode qui permet au js Ajax de gerer la session des qte
	method="productQty";
	checkoutIframe();
	
});

function selectCurrentSupplierForAddProducts(dropDown)
{
    var supplierId = $(dropDown).val();

    $.ajax({
        type: 'POST',
        async: false,
        url: ajaxAddQtyLink,
        data: {
            'method': 'saveCurrentSupplierIdForAddProducts',
            'ajax': '1',
            'supplier_id': supplierId
        },
        dataType: 'json',
        success: function(data) {
            document.location.href = document.location.href;
        },
        error: function(data)
        {
            alert('An error occured');
        }
    });
}
