<div id="mobile_container">
    <div>
        <div class="options_mobile_container" style="cursor: pointer;display: flow-root;margin-top: 10px;width:20%;float:left;background-color: dodgerblue; " onclick="$('.elements_mobile_container').css('display', 'none');$('#container_block_mobile_0').toggle();$('.options_mobile_container').css('background-color', 'grey'); $(this).css('background-color', 'dodgerblue')">
            <div style="width: 100%;text-align: left;border-top: 1px solid #666;border-left: 1px solid #666;border-right: 1px solid #666;padding: 5px;font-weight: bolder; color: #FFF;text-align: center;"> POSITION 1 </div>
        </div>
        <div class="options_mobile_container" style="cursor: pointer;display: flow-root;margin-top: 10px;width:20%;float:left;background-color: grey;" onclick="$('.elements_mobile_container').css('display', 'none');$('#container_block_mobile_1').toggle();$('.options_mobile_container').css('background-color', 'grey'); $(this).css('background-color', 'dodgerblue')">
            <div style="width: 100%;text-align: left;border-top: 1px solid #666;border-left: 1px solid #666;border-right: 1px solid #666;padding: 5px;font-weight: bolder; color: #FFF;text-align: center;"> POSITION 2 </div>
        </div>
        <div class="options_mobile_container" style="cursor: pointer;display: flow-root;margin-top: 10px;width:20%;float:left;background-color: grey;" onclick="$('.elements_mobile_container').css('display', 'none');$('#container_block_mobile_2').toggle();$('.options_mobile_container').css('background-color', 'grey'); $(this).css('background-color', 'dodgerblue')">
            <div style="width: 100%;text-align: left;border-top: 1px solid #666;border-left: 1px solid #666;border-right: 1px solid #666;padding: 5px;font-weight: bolder; color: #FFF;text-align: center;"> POSITION 3 </div>
        </div>
        <div class="options_mobile_container" style="cursor: pointer;display: flow-root;margin-top: 10px;width:20%;float:left;background-color: grey;" onclick="$('.elements_mobile_container').css('display', 'none');$('#container_block_mobile_3').toggle();$('.options_mobile_container').css('background-color', 'grey'); $(this).css('background-color', 'dodgerblue')">
            <div style="width: 100%;text-align: left;border-top: 1px solid #666;border-left: 1px solid #666;border-right: 1px solid #666;padding: 5px;font-weight: bolder;color: #FFF;text-align: center;"> POSITION 4 </div>
        </div>
        <div class="options_mobile_container" style="cursor: pointer;display: flow-root;margin-top: 10px;width:20%;float:left;background-color: grey;" onclick="$('.elements_mobile_container').css('display', 'none');$('#container_block_mobile_4').toggle();$('.options_mobile_container').css('background-color', 'grey'); $(this).css('background-color', 'dodgerblue')">
            <div style="width: 100%;text-align: left;border-top: 1px solid #666;border-left: 1px solid #666;border-right: 1px solid #666;padding: 5px;font-weight: bolder;color: #FFF;text-align: center;"> POSITION 5 </div>
        </div>
    </div>
    <div style="display: ruby">
        {foreach $mobile_icons AS $index => $mobile}
        
            <div id="container_block_mobile_{$index}" class="elements_mobile_container" style="margin-top: 20px;display: inline-block; width: 100%;{if $index == 0} dispplay: block; {else} display:none; {/if}">
                <div style="width: 25%; float: left;height: 240px;"></div>
                <div style="width: 25%; float: left;height: 240px;">
                    <img id="image_{$mobile['id']}" src="{$mobile['image_en']}{if strlen($mobile['image_en']) > 0}?t={rand()}{/if}" style="background-color: #fff;width: 100%;border: 1px solid #000;height: 239px;background-image: url('/modules/wmmodule_homepage/views/images/upload.webp');background-position: center;background-repeat: no-repeat;background-size: contain;" onclick="setModal({$mobile['id']},{$mobile['icon_type']},$('#select_brand_{$mobile['id']}'))">
                </div>
                <div style="width: 25%; float: left;border: 1px solid #000;height: 240px;">
                    <input type="hidden" value="$mobile_icon_1['active']" name="active"> 
                    <div style="padding: 5px;margin-top: 10px;padding: 0 10px;">
                        <div style="display: flex;">
                            <div style="width: 100%; float: left;">
                                <label>Select brand</label> 
                                <select id="select_brand_{$mobile['id']}" name="link" onclick="setImageText(this, {$mobile['id']}, 'select_car_{$mobile['id']}')">
                                    <option value="">---</option>
                                    <option value="523_clearence" {if "523_clearence" == $mobile['link']} selected {/if}>Clearence</option>
                                    {foreach $manufacturers AS $manufacturer}
                                        <option value="{$manufacturer['link_data']}" {if $manufacturer['link_data'] == $mobile['link']} selected {/if}>{$manufacturer['name']}</option>
                                    {/foreach}
                                </select>
                            </div>
                            <div style="display:none;width: 20%; float: left;"> <div style="color: black; font-weight: bolder; font-size: 20px; text-transform: uppercase; text-align: center;" ></div> </div>
                            <div style="display:none;width: 40%; float: left;">
                                {assign var="compat" value="`$mobile['brand']`_`$mobile['model']`_`$mobile['type']`_`$mobile['version']`"}
                                <label>Select car</label> 
                                <select id="select_car_{$mobile['id']}" name="car" onclick="setImageText(this, {$mobile['id']}, 'select_brand_{$mobile['id']}');">
                                    <option value="">---</option>
                                   {*
                                   {foreach $cars AS $car}
                                        <option value="{implode('_', array_keys($car['filters']))}" {if (implode('_', array_keys($car['filters'])) == $compat)} selected {/if}>{implode(' | ', array_values($car['filters']))}</option>
                                    {/foreach}
                                    *}
                                </select>
                            </div>
                        </div>
                        <div style="margin-top: 20px;">
                            <div style="color: #555; text-transform: uppercase;padding: 5px 0;display: flex;">
                                <div   style="width: 80px; float: left;font-weight: bolder;">Inglês</div>
                                <input style="width: calc(100% - 80px); float: left;" name="title_en" type="text" value="{$mobile['title_en']}" placeholder="Titulo em inglês" id="title_en_{$mobile['id']}">
                            </div>
                            <div style="color: #555; text-transform: uppercase;padding: 5px 0;display: flex;">
                                <div   style="width: 80px; float: left;font-weight: bolder;">Espanhol</div>
                                <input style="width: calc(100% - 80px); float: left;" name="title_en" type="text" value="{$mobile['title_es']}" placeholder="Titulo em espanhol" id="title_es_{$mobile['id']}">
                            </div>
                            <div style="color: #555; text-transform: uppercase;padding: 5px 0;display: flex;">
                                <div   style="width: 80px; float: left;font-weight: bolder;">Francês</div>
                                <input style="width: calc(100% - 80px); float: left;" name="title_en" type="text" value="{$mobile['title_fr']}" placeholder="Titulo em francês" id="title_fr_{$mobile['id']}">
                            </div>
                        </div>
                    </div>
                </div>
                <div style="width: 25%; float: left;height: 240px;"></div>
            </div>
        
        {/foreach}
    </div>
    <div style="text-align: center;margin: 10px;padding: 10px;">
        <button type="button" class="btn btn-primary" onclick="$('#showMobilePreview').toggle();$('#mobile_container').toggle();$('#abas_container').toggle();" style="width:200px;">PREVIEW</button>
    </div>
</div>

<div id="showMobilePreview" style="display: none;background-color: #111;">
    
    <div style="background-color: #fff;">
    
        <div style="text-align: center;padding: 30px;width: 100%;display: inline-block;">
            <button type="button" class="btn btn-primary" onclick="$('#showMobilePreview').toggle();$('#mobile_container').toggle();$('#abas_container').toggle();" style="width: 320px;">BACK TO EDITOR</button>
        </div>
    
        <div style="width: 320px;margin: 0 auto;background-color: #5c5c5c;">
            <div style="width: 100%;">
                <img style="width: 100%;" src="/modules/wmmodule_homepage/views/images/header_mobile.jpg"> 
            </div>
            
            <div style="width: 100%;padding: 5px;">
                <img id="preview_image_19" src="{$mobile_icons[0]['image_en']}" style="overflow: hidden;border: 1px solid #999;width: 100%;"> 
            </div>
            
            <div style="width: 100%;padding: 5px;">
                <img id="preview_image_20" src="{$mobile_icons[1]['image_en']}" style="overflow: hidden;border: 1px solid #999;width: 100%;"> 
            </div>
            
            <div style="width: 100%;padding: 5px;">
                <img id="preview_image_21" src="{$mobile_icons[2]['image_en']}" style="cursor: pointer;overflow: hidden;border: 1px solid #999;width: 100%;"> 
            </div>
    
            <div style="width: 100%;padding: 5px">
                <img id="preview_image_22" src="{$mobile_icons[3]['image_en']}" style="overflow: hidden;border: 1px solid #999;width: 100%;"> 
            </div>
            
            <div style="width: 100%;padding: 5px">
                <img id="preview_image_23" src="{$mobile_icons[4]['image_en']}" style="cursor: pointer;overflow: hidden;border: 1px solid #999;width: 100%;"> 
            </div>
            
            <div style="width: 100%;">
                <img style="width: 100%;" src="/modules/wmmodule_homepage/views/images/footer_mobile.jpg"> 
            </div>
        </div>
        
        <div style="text-align: center;padding: 30px;">
            <button type="button" class="btn btn-primary" onclick="saveMobileLive();" style="width:320px;">SAVE</button>
        </div>
    </div>
</div>

