<div id="desktop_container" style="font-weight: bolder;">
    {*
    <form id="desktop_form" action="/admin77500/index.php?controller=AdminWmModuleHomepage&action=updateDesktop&token={Tools::getValue('token')}" enctype="multipart/form-data" method="POST">
    *}
        <div>
            <div class="options_desktop_container" style="cursor: pointer;display: flow-root;margin-top: 10px;width:25%;float:left;background-color: dodgerblue; " onclick="$('.elements_container').css('display', 'none');$('#banners_container').toggle();$('.options_desktop_container').css('background-color', 'grey'); $(this).css('background-color', 'dodgerblue')">
                <div style="width: 100%;text-align: left;border-top: 1px solid #666;border-left: 1px solid #666;border-right: 1px solid #666;padding: 5px;font-weight: bolder; color: #FFF;text-align: center;"> BANNERS </div>
            </div>
            <div class="options_desktop_container" style="cursor: pointer;display: flow-root;margin-top: 10px;width:25%;float:left;background-color: grey;" onclick="$('.elements_container').css('display', 'none');$('#sliders55_container').toggle();$('.options_desktop_container').css('background-color', 'grey'); $(this).css('background-color', 'dodgerblue')">
                <div style="width: 100%;text-align: left;border-top: 1px solid #666;border-left: 1px solid #666;border-right: 1px solid #666;padding: 5px;font-weight: bolder; color: #FFF;text-align: center;"> ICONS 50% </div>
            </div>
            <div class="options_desktop_container" style="cursor: pointer;display: flow-root;margin-top: 10px;width:25%;float:left;background-color: grey;" onclick="$('.elements_container').css('display', 'none');$('#sliders33_container').toggle();$('.options_desktop_container').css('background-color', 'grey'); $(this).css('background-color', 'dodgerblue')">
                <div style="width: 100%;text-align: left;border-top: 1px solid #666;border-left: 1px solid #666;border-right: 1px solid #666;padding: 5px;font-weight: bolder; color: #FFF;text-align: center;"> ICONS 33% </div>
            </div>
            <div class="options_desktop_container" style="cursor: pointer;display: flow-root;margin-top: 10px;width:25%;float:left;background-color: grey;" onclick="$('.elements_container').css('display', 'none');$('#videos_container').toggle();$('.options_desktop_container').css('background-color', 'grey'); $(this).css('background-color', 'dodgerblue')">
                <div style="width: 100%;text-align: left;border-top: 1px solid #666;border-left: 1px solid #666;border-right: 1px solid #666;padding: 5px;font-weight: bolder;color: #FFF;text-align: center;"> VIDEOS </div>
            </div>
        </div>
        <div>
            {include file="$modules/wmmodule_homepage/views/templates/admin/banners.tpl"}
            {include file="$modules/wmmodule_homepage/views/templates/admin/icons_50.tpl"}
            {include file="$modules/wmmodule_homepage/views/templates/admin/icons_33.tpl"}
            {include file="$modules/wmmodule_homepage/views/templates/admin/videos.tpl"}            
        </div>

        <div style="text-align: center;margin: 10px;padding: 10px;">
            <button type="button" class="btn btn-primary" onclick="$('#showDesktopPreview').toggle();$('#desktop_container').toggle();$('#mobile_container').toggle();$('#abas_container').toggle();" style="width:400px;">PREVIEW</button>
        </div>
    {*</form>*}
</div>
    
<div id="showDesktopPreview" style="display: none;background-color: #111;">
    
    <div style="background-color: #fff;">

        <div style="text-align: center;padding: 30px;width: 100%;display: inline-block;">
            <button type="button" class="btn btn-primary" onclick="$('#showDesktopPreview').toggle();$('#desktop_container').toggle();$('#mobile_container').toggle();$('#abas_container').toggle();" style="width:400px;">BACK TO EDITOR</button>
        </div>
    
        <div style="width: 1000px;margin: 0 auto;background-color: #333;">

            <div style="width: 100%;">
                <img style="width: 100%;" src="/modules/wmmodule_homepage/views/images/header.jpg"> 
            </div>
            <div style="width: 100%;">
                <img id="preview_image_1" src="{$banners[0]['image_en']}" style="overflow: hidden;border: 1px solid #999;width: 100%;"> 
            </div>
            <div>
                <div style="width: 50%;float: left;padding: 10px 5px 5px 0px;">
                    <img id="preview_image_11" src="{$array_icons_50[0]['image_en']}" style="overflow: hidden;border: 1px solid #999;width: 100%;"> 
                </div>
                <div style="width: 50%; float: left;padding: 10px 0px 5px 5px;">
                    <img id="preview_image_12" src="{$array_icons_50[1]['image_en']}" style="cursor: pointer;overflow: hidden;border: 1px solid #999;width: 100%;"> 
                </div>
            </div>
            <div style="margin-top: 5px;">
                <div style="width: 33.3%;float: left; padding: 5px 5px 5px 0px">
                    <img id="preview_image_13" src="{$array_icons_33[0]['image_en']}" style="overflow: hidden;border: 1px solid #999;width: 100%;"> 
                </div>
                <div style="width: 33.3%; float: left; padding: 5px">
                    <img id="preview_image_14" src="{$array_icons_33[1]['image_en']}" style="cursor: pointer;overflow: hidden;border: 1px solid #999;width: 100%;"> 
                </div>
                <div style="width: 33.3%; float: left; padding: 5px 0px 5px 5px">
                    <img id="preview_image_15" src="{$array_icons_33[2]['image_en']}" style="cursor: pointer;overflow: hidden;border: 1px solid #999;width: 100%;"> 
                </div>
            </div>
            <div style="margin-top: 5px;">
                <div style="width: 33.3%;float: left;padding: 5px 5px 5px 0px">
                    <img id="preview_image_16" src="{$array_videos[0]['image_en']}" style="overflow: hidden;border: 1px solid #999;width: 100%;"> 
                </div>
                <div style="width: 33.3%; float: left;padding: 5px;">
                    <img id="preview_image_17" src="{$array_videos[1]['image_en']}" style="cursor: pointer;overflow: hidden;border: 1px solid #999;width: 100%;"> 
                </div>
                <div style="width: 33.3%; float: left;padding: 5px 0px 5px 5px">
                    <img id="preview_image_18" src="{$array_videos[2]['image_en']}" style="cursor: pointer;overflow: hidden;border: 1px solid #999;width: 100%;"> 
                </div>
            </div>
            <div style="width: 100%;">
                <img style="width: 100%;" src="/modules/wmmodule_homepage/views/images/footer.jpg"> 
            </div>
        </div>
        <div style="text-align: center;padding: 30px;">
            <button type="button" class="btn btn-primary" onclick="saveDesktopLive()" style="width:400px;">SAVE</button>
        </div>
    </div>
</div>

<style>

    .image_container{ margin: 20px 0; border: 1px solid #555; }
    .image_container:hover{ margin: 20px 0; border: 1px solid red; }
    
    #exampleModalLabel{ padding: 0 15px; }
    .modal-footer{ display: none; }
    
</style>