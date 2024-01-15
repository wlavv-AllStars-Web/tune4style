<div style="display: flow-root;" id="abas_container">
    <div class="desktop_mobile_container" style="cursor: pointer;border-radius: 10px 0 0 0;background-color: dodgerblue; color: #fff;width:50%;float: left; border: 1px solid #777;padding: 10px;font-weight: bolder; font-size:40px;text-align: center;" onclick="$('.desktop_mobile_container').css('background-color', 'grey');$(this).css('background-color', 'dodgerblue');$('#desktop_layer_container').toggle();$('#mobile_layer_container').toggle();">
        DESKTOP
    </div>
    <div class="desktop_mobile_container" style="cursor: pointer;border-radius: 0 10px 0 0;background-color: grey; color: #fff;width:50%;float: left; border: 1px solid #777;padding: 10px;font-weight: bolder; font-size:40px;text-align: center;" onclick="$('.desktop_mobile_container').css('background-color', 'grey');$(this).css('background-color', 'dodgerblue');$('#desktop_layer_container').toggle();$('#mobile_layer_container').toggle();">
        MOBILE
    </div>
</div>
<div id="desktop_layer_container" style="display: block;padding:0 10px;background-color: #ddd;border: 1px solid #777;">
    {include file="$modules/wmmodule_homepage/views/templates/admin/desktop.tpl"}
</div>

<div id="mobile_layer_container"  style="display: none;padding:0 10px;background-color: #ddd;border: 1px solid #777;">
    {include file="$modules/wmmodule_homepage/views/templates/admin/mobile.tpl"}
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel" style="text-align: center;padding: 0;margin: 0;">Modal title</h2>
      </div>
      <div class="modal-body">
          <div id="modal_container"> </div>
      </div>
      <div class="modal-footer">
        <button id="setImageButton" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    
<style>
    .page-title{ padding-left: 150px; }
    #select_car_1,#select_car_2,#select_car_3,#select_car_4,#select_car_5,#select_car_6{ display:none; }
</style>


<script>

    $("#select_brand_1").on("change",   function () { setModal(1,  1, $(this), 'manufacturer' ) });
    $("#select_brand_2").on("change",   function () { setModal(2,  1, $(this), 'manufacturer' ) });
    $("#select_brand_3").on("change",   function () { setModal(3,  1, $(this), 'manufacturer' ) });
    $("#select_brand_4").on("change",   function () { setModal(4,  1, $(this), 'manufacturer' ) });
    $("#select_brand_5").on("change",   function () { setModal(5,  1, $(this), 'manufacturer' ) });
    $("#select_brand_6").on("change",   function () { setModal(6,  1, $(this), 'manufacturer' ) });
    $("#select_brand_7").on("change",   function () { setModal(7,  1, $(this), 'manufacturer' ) });
    $("#select_brand_8").on("change",   function () { setModal(8,  1, $(this), 'manufacturer' ) });
    $("#select_brand_9").on("change",   function () { setModal(9,  1, $(this), 'manufacturer' ) });
    $("#select_brand_10").on("change",  function () { setModal(10, 1, $(this), 'manufacturer' ) });
    $("#select_brand_11").on("change",  function () { setModal(11, 2, $(this), 'manufacturer' ) });
    $("#select_brand_12").on("change",  function () { setModal(12, 2, $(this), 'manufacturer' ) });
    $("#select_brand_13").on("change",  function () { setModal(13, 3, $(this), 'manufacturer' ) });
    $("#select_brand_14").on("change",  function () { setModal(14, 3, $(this), 'manufacturer' ) });
    $("#select_brand_15").on("change",  function () { setModal(15, 3, $(this), 'manufacturer' ) });
    $("#select_brand_19").on("change",  function () { setModal(19, 5, $(this), 'manufacturer' ) });
    $("#select_brand_20").on("change",  function () { setModal(20, 5, $(this), 'manufacturer' ) });
    $("#select_brand_21").on("change",  function () { setModal(21, 5, $(this), 'manufacturer' ) });
    $("#select_brand_22").on("change",  function () { setModal(22, 5, $(this), 'manufacturer' ) });
    $("#select_brand_23").on("change",  function () { setModal(23, 5, $(this), 'manufacturer' ) });

    $("#select_car_1").on("change",   function () { setModal(1,  1, $(this), 'compatibility' ) });
    $("#select_car_2").on("change",   function () { setModal(2,  1, $(this), 'compatibility' ) });
    $("#select_car_3").on("change",   function () { setModal(3,  1, $(this), 'compatibility' ) });
    $("#select_car_4").on("change",   function () { setModal(4,  1, $(this), 'compatibility' ) });
    $("#select_car_5").on("change",   function () { setModal(5,  1, $(this), 'compatibility' ) });
    $("#select_car_6").on("change",   function () { setModal(6,  1, $(this), 'compatibility' ) });
    $("#select_car_7").on("change",   function () { setModal(7,  1, $(this), 'compatibility' ) });
    $("#select_car_8").on("change",   function () { setModal(8,  1, $(this), 'compatibility' ) });
    $("#select_car_9").on("change",   function () { setModal(9,  1, $(this), 'compatibility' ) });
    $("#select_car_10").on("change",  function () { setModal(10, 1, $(this), 'compatibility' ) });
    $("#select_car_11").on("change",  function () { setModal(11, 2, $(this), 'compatibility' ) });
    $("#select_car_12").on("change",  function () { setModal(12, 2, $(this), 'compatibility' ) });
    $("#select_car_13").on("change",  function () { setModal(13, 3, $(this), 'compatibility' ) });
    $("#select_car_14").on("change",  function () { setModal(14, 3, $(this), 'compatibility' ) });
    $("#select_car_15").on("change",  function () { setModal(15, 3, $(this), 'compatibility' ) });
    $("#select_car_19").on("change",  function () { setModal(19, 5, $(this), 'compatibility' ) });
    $("#select_car_20").on("change",  function () { setModal(20, 5, $(this), 'compatibility' ) });
    $("#select_car_21").on("change",  function () { setModal(21, 5, $(this), 'compatibility' ) });
    $("#select_car_22").on("change",  function () { setModal(22, 5, $(this), 'compatibility' ) });
    $("#select_car_23").on("change",  function () { setModal(23, 5, $(this), 'compatibility' ) });
    
    $(document).on("click","#uploadSubmitButton", function(){
        var dataForm = new FormData($('#uploadForm')[0]);
        
		$.ajax({
			type : 'POST',
			url : "http://tune4style.local/admin3355/index.php?controller=AdminWmModuleHomepage&token={Tools::getAdminTokenLite('AdminWmModuleHomepage')}&action=uploadSubmitButton",
			data : dataForm,
            processData: false,
            contentType: false,
			success : function(data) {
			    let data_modal = JSON.parse(data);
			    $('#exampleModalLabel').html(data_modal.modal_title);
			    $('#modal_container').html(data_modal.modal_content);
			}
		});
		
    });
    
    function addCheck(imadeID, index){
        $('#'+imadeID).prop('src', '/modules/wmmodule_homepage/views/images/check_upload_'+index+'.gif');
    }
    
    function setModal(id_image, type, selectElement, element){
        
        let id_element = 0;
        
        if(element === undefined){
            if($('#select_brand_' + id_image).val() == ''){
                element = 'compatibility';
                id_element = $('#select_car_' + id_image).val();
            }else if($('#select_car_' + id_image).val() == ''){
                element = 'manufacturer';

                let elementComponent = selectElement.val();
                let element_array = elementComponent.split("_");
                id_element = element_array[0];
            }else{
                element = 'video';
                if(id_image == 16) id_element = 1;
                if(id_image == 17) id_element = 2;
                if(id_image == 18) id_element = 3;
            }
        }else if(element === 'manufacturer'){
            document.getElementById('select_car_' + id_image).selectedIndex = 0;
            id_element = $('#select_brand_' + id_image).val();
        }else{
            document.getElementById('select_brand_' + id_image).selectedIndex = 0;
            id_element = $('#select_car_' + id_image).val();
        }
        
        
		$.ajax({
			type : 'POST',
			url : "http://tune4style.local/admin3355/index.php?controller=AdminWmModuleHomepage&token={Tools::getAdminTokenLite('AdminWmModuleHomepage')}&action=getBrandImages",
			data : {
				'id_element' : id_element,
				'type' : type,
				'id_image' : id_image,
				'element' : element
			},
			success : function(data) {
			    let data_modal = JSON.parse(data);
			    $('#exampleModalLabel').html(data_modal.modal_title);
			    $('#modal_container').html(data_modal.modal_content);
			}
		});
        
        modal = $('#exampleModal');
        modal.modal('show');
    }

    function setImageText(sel, index, element){
        
        let imageText = sel.options[sel.selectedIndex].text;

        document.getElementById("title_en_" + index).value = imageText;
        document.getElementById("title_es_" + index).value = imageText;
        document.getElementById("title_fr_" + index).value = imageText;
        return;
    }
    
    function setImage(id_zone, id_image, url, homepage_manufacturer_id, homepage_manufacturer_id_manufacturer){

		$.ajax({
			type : 'POST',
			url : "http://tune4style.local/admin3355/index.php?controller=AdminWmModuleHomepage&token={Tools::getAdminTokenLite('AdminWmModuleHomepage')}&action=updateHomepageTemp",
			data : {
				'id_zone' : id_zone,
				'id_image' : id_image,
				'url' : url,
				'id_ps_asm_homepage_temp' : homepage_manufacturer_id,
				'id_element' : homepage_manufacturer_id_manufacturer,
				'title_en' : $('#title_en_' + id_image).val(),
				'title_es' : $('#title_es_' + id_image).val(),
				'title_fr' : $('#title_fr_' + id_image).val()
			},
			success : function(data) { }
		});
		
        $('#image_' + id_image).prop('src', url);
        $('#homepage_manufacturer_id_' + id_image).prop('value', homepage_manufacturer_id);
        $('#homepage_manufacturer_id_manufacturer_' + id_image).prop('value', homepage_manufacturer_id_manufacturer);
        
        $('#preview_image_' + id_image).prop('src', url);

        $('#setImageButton').click();
    }
    
    function saveDesktopLive(){
        
        var resposta = confirm("Pretende colocar as definições da Homepage, versão desktop live?");
        
        if (resposta) {
    		$.ajax({
    			type : 'POST',
    			url : "http://tune4style.local/admin3355/index.php?controller=AdminWmModuleHomepage&token={Tools::getAdminTokenLite('AdminWmModuleHomepage')}&action=setDesktopLive",
    			data : { },
    			success : function(data) { alert("As alterações foram aplicadas em desktop."); }
    		});
        } else {
          console.log("Nenhuma alteração foi aplicada.");
        }
    }
    
    function saveMobileLive(){
        
        var resposta = confirm("Pretende colocar as definições da Homepage, versão mobile live?");
        
        if (resposta) {
    		$.ajax({
    			type : 'POST',
    			url : "http://tune4style.local/admin3355/index.php?controller=AdminWmModuleHomepage&token={Tools::getAdminTokenLite('AdminWmModuleHomepage')}&action=setMobileLive",
    			data : { },
    			success : function(data) { alert("As alterações foram aplicadas em mobile."); }
    		});
        } else {
          console.log("Nenhuma alteração foi aplicada.");
        }
    }
    
    function saveVideoCode(element, position){

	    $.ajax({
			type : 'POST',
			url : "http://tune4style.local/admin3355/index.php?controller=AdminWmModuleHomepage&token={Tools::getAdminTokenLite('AdminWmModuleHomepage')}&action=updateVideoCode",
			data : {
				'position' : position,
				'code' : element.value
			},
			success : function(data) { }
		});
		
    }
    
    

</script>