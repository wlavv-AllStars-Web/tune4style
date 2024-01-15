<div style="display: none;" id="sliders33_container" class="elements_container">
    {foreach $array_icons_33 AS $index => $icons_33}
        <div style="border: 1px solid #666;width: 33.33%;float: left;padding: 5px;">
     	    <input type="hidden" name="position[{$icons_33['id']}]" value="{$index+1}">
     	    <input type="hidden" name="type[{$icons_33['id']}]" value="desktop">
     	    <input type="hidden" name="icon_type[{$icons_33['id']}]" value="3">
            <input type="hidden" value="1" name="active[{$icons_33['id']}]"> 
     	    {assign var=id_manufacturer value="_"|explode:$icons_33['link']}
     	    <input type="hidden" id="homepage_manufacturer_id_manufacturer_{$icons_33['id']}" name="homepage_manufacturer_id_manufacturer[{$icons_33['id']}]" value="{$id_manufacturer[0]}">
     	    <input type="hidden" id="homepage_manufacturer_id_{$icons_33['id']}" name="homepage_manufacturer_id[{$icons_33['id']}]" value="">
            <img id="image_{$icons_33['id']}" src="{$icons_33['image_en']}{if strlen($icons_33['image_en']) > 0}?t={rand()}{/if}" style="background-color: #fff;margin-bottom: 10px;width: 100%;border: 1px solid #000;min-height: 258px;background-image: url('/modules/wmmodule_homepage/views/images/upload.webp');background-position: center;background-repeat: no-repeat;background-size: contain;" onclick="setModal({$icons_33['id']},3,$('#select_brand_{$icons_33['id']}'))">
            <div style="width: 100%;float: left;">
                <label>Select brand</label> 
                <select id="select_brand_{$icons_33['id']}" name="link[{$icons_33['id']}]" onclick="setImageText(this, {$icons_33['id']}, 'select_brand_{$icons_33['id']}')" style="padding:5px;">
                    <option value="">---</option>
                    <option value="523_clearence" {if "523_clearence" == $icons_33['link']} selected {/if}>Clearence</option>
                    {foreach $manufacturers AS $manufacturer}
                        <option value="{$manufacturer['link_data']}" {if $manufacturer['link_data'] == $icons_33['link']} selected {/if}>{$manufacturer['name']}</option>
                    {/foreach}
                </select>
            </div>
            <div style="display:none;width: 20%;float: left;">
                <div style="color: black; font-weight: bolder; font-size: 30px; text-transform: uppercase; text-align: center; padding: 15px 15px 0px 15px;" > OR </div>
            </div>
            <div style="display:none;width: 40%;float: left;">
                <label>Select car</label> 
                {assign var="compat" value="`$icons_33['brand']`_`$icons_33['model']`_`$icons_33['type']`_`$icons_33['version']`"}
                <select id="select_car_{$icons_33['id']}" name="car[{$icons_33['id']}]" onclick="setImageText(this, {$icons_33['id']}, 'select_car_{$icons_33['id']}');" style="padding:5px;">
                    <option value="">---</option>
                    {*
                    {foreach $cars AS $car}
                        <option value="{implode('_', array_keys($car['filters']))}"  {if (implode('_', array_keys($car['filters'])) == $compat)} selected {/if}>{implode(' | ', array_values($car['filters']))}</option>
                    {/foreach}
                    *}
                </select>
            </div>
            <div style="color: #666; text-transform: uppercase; background-color: #ddd;padding: 5px;display: inline-block;">
                <span  style="width: 80px; float: left;padding: 5px 0;">Inglês</span>
                <input style="width: calc(100% - 80px); float: left;" name="title_en[{$icons_33['id']}]" type="text" value="{$icons_33['title_en']}" placeholder="Titulo em inglês" id="title_en_{$icons_33['id']}">
                <span  style="width: 80px; float: left;padding: 5px 0;">Espanhol</span>
                <input style="width: calc(100% - 80px); float: left;" name="title_es[{$icons_33['id']}]" type="text" value="{$icons_33['title_es']}" placeholder="Titulo em espanhol" id="title_es_{$icons_33['id']}">
                <span  style="width: 80px; float: left;padding: 5px 0;">Francês</span>
                <input style="width: calc(100% - 80px); float: left;" name="title_fr[{$icons_33['id']}]" type="text" value="{$icons_33['title_fr']}" placeholder="Titulo em francês" id="title_fr_{$icons_33['id']}">
            </div>
        </div>
    {/foreach}
</div>