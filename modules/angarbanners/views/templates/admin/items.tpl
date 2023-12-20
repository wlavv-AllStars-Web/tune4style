{*
* @author	Krzysztof Pecak
* @copyright	2017 Krzysztof Pecak
* @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*}

<script> theme_url='{$htmlitems.theme_url}' </script> {*HTML CODE*}

<ul class="nav nav-tabs">
	{foreach from=$htmlitems.lang.all item=lang}
		<li id="lang-{$lang.id_lang|escape:'htmlall':'UTF-8'}" class="lang-flag{if $lang.id_lang == $htmlitems.lang.default.id_lang} active{/if}">
			<a href="#items-{$lang.id_lang|escape:'htmlall':'UTF-8'}" onclick="setLanguage({$lang.id_lang|intval}, '{$lang.iso_code}');" data-toggle="tab">{$lang.name|escape:'htmlall':'UTF-8'}</a>
		</li>
	{/foreach}
</ul>
<div class="lang-items tab-content">
{foreach name=langs from=$htmlitems.items key=lang item=langItems}
	<div id="items-{$lang|escape:'htmlall':'UTF-8'}" class="lang-content tab-pane {if $lang == $htmlitems.lang.default.id_lang}active{/if}" >
	{foreach name=hooks from=$langItems key=hook item=hookItems}
		<h4 class="hook-title">{l s='Hook' mod='angarbanners'} "{$hook|escape:'htmlall':'UTF-8'}"</h4>
		{if $hookItems}
			<ul id="items" class="list-unstyled">
				{foreach name=items from=$hookItems item=hItem}
					<li id="item-{$hItem.id_item|escape:'htmlall':'UTF-8'}" class="item well">
						<form method="post" action="{$htmlitems.postAction|escape:'htmlall':'UTF-8'}" enctype="multipart/form-data" class="item-form defaultForm  form-horizontal">
							<div class="btn-group pull-right">
								<button class="btn btn-default button-edit">
									<span class="button-edit-edit"><i class="icon-edit"></i> {l s='Edit' mod='angarbanners'}</span>
									<span class="button-edit-close hide"><i class="icon-remove"></i> {l s='Close' mod='angarbanners'}</span>
								</button>
								<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<i class="icon-caret-down"></i>
								</button>
								<ul class="dropdown-menu">
									<li>
										<a href="{$htmlitems.postAction|escape:'htmlall':'UTF-8'}&amp;removeItem&amp;item_id={$hItem.id_item|escape:'htmlall':'UTF-8'}" name="removeItem" class="link-item-delete">
											<i class="icon-trash"></i> {l s='Delete item' mod='angarbanners'}
										</a>
									</li>
								</ul>
							</div>
							<span class="item-order">{if $hItem.item_order le 9}0{/if}{$hItem.item_order|escape:'htmlall':'UTF-8'}</span>
							<span class="item-title">{$hItem.title|escape:'htmlall':'UTF-8'}</span>
							<br>
							{if $hItem.image}
								<img src="{$module_dir|escape:'htmlall':'UTF-8'}views/img/{$hItem.image}" rel="#comments_{$hItem.id_item}" class="preview img-thumbnail" />
							{/if}
							<div class="item-container clearfix">
								<input type="hidden" name="id_lang" value="{$lang|escape:'htmlall':'UTF-8'}" />
								<input type="hidden" name="item_id" value="{$hItem.id_item|escape:'htmlall':'UTF-8'}" />
								<input type="hidden" name="item_order" value="{$hItem.item_order|escape:'htmlall':'UTF-8'}" />
								<div class="item-field form-group">
									<div class="col-lg-9 col-lg-offset-3">
										<div class="checkbox">
											<label class="control-label">
												{l s='Enable' mod='angarbanners'}
												<input type="checkbox" name="item_active" value="1"{if $hItem.active == 1} checked="checked"{/if} />
											</label>
										</div>
									</div>
								</div>
								<div class="title item-field form-group">
									<label class="control-label col-lg-3">{l s='Image title' mod='angarbanners'}</label>
									<div class="col-lg-7">
										<input type="text" name="item_title" value="{$hItem.title|escape:'htmlall':'UTF-8'}" />
									</div>
								</div>
								<div class="title_use item-field form-group">
									<div class="col-lg-9 col-lg-offset-3">
										<div class="checkbox">
											<label class="control-label">
												{l s='Use title in front' mod='angarbanners'}
												<input type="checkbox" name="item_title_use" value="1"{if $hItem.title_use == 1} checked="checked"{/if} />
											</label>
										</div>
									</div>
								</div>
								<div class="hook item-field form-group">
									<label class="control-label col-lg-3">{l s='Hook to which the image should be attached' mod='angarbanners'}</label>
									<div class="col-lg-7">
										<select name="item_hook" default="top" class="fixed-width-lg">
											<option value="top"{if $hItem.hook == 'top'} selected="selected"{/if}>top</option>
											<option value="bottom"{if $hItem.hook == 'bottom'} selected="selected"{/if}>bottom</option>
											<option value="home"{if $hItem.hook == 'home'} selected="selected"{/if}>home</option>
											<option value="left"{if $hItem.hook == 'left'} selected="selected"{/if}>left</option>
											<option value="right"{if $hItem.hook == 'right'} selected="selected"{/if}>right</option>
											<option value="header"{if $hItem.hook == 'header'} selected="selected"{/if}>header</option>
											<option value="footer"{if $hItem.hook == 'footer'} selected="selected"{/if}>footer</option>
										</select>
									</div>
								</div>
								<div class="image item-field form-group">
									<label class="control-label col-lg-3">{l s='Load your image' mod='angarbanners'}</label>
									<div class="col-lg-7">
										<input type="file" name="item_img" />
									</div>
								</div>
								<div class="image_w item-field form-group">
									<label class="control-label col-lg-3">{l s='Image width' mod='angarbanners'}</label>
									<div class="col-lg-7">
										<div class="input-group fixed-width-lg">
											<input name="item_img_w" type="text" maxlength="4" size="4" value="{$hItem.image_w|escape:'htmlall':'UTF-8'}"/>
											<span class="input-group-addon">{l s='pixels' mod='angarbanners'}</span>
										</div>
									</div>
								</div>
								<div class="image_h item-field form-group">
									<label class="control-label col-lg-3">{l s='Image height' mod='angarbanners'}</label>
									<div class="col-lg-7">
										<div class="input-group fixed-width-lg">
											<input name="item_img_h" type="text" maxlength="4" size="4" value="{$hItem.image_h|escape:'htmlall':'UTF-8'}"/>
											<span class="input-group-addon">{l s='pixels' mod='angarbanners'}</span>
										</div>
									</div>
								</div>
								<div class="url item-field form-group">
									<label class="control-label col-lg-3">{l s='Target link' mod='angarbanners'}</label>
									<div class="col-lg-7">
										<input type="text" name="item_url" value="{$hItem.url|escape:'htmlall':'UTF-8'}" />
									</div>
								</div>
								<div class="target item-field form-group">
									<div class="col-lg-9 col-lg-offset-3">
										<div class="checkbox">
											<label class="control-label">
												{l s='Open link in a new tab/page' mod='angarbanners'}
												<input type="checkbox" name="item_target" value="1"{if $hItem.target == 1} checked="checked"{/if} />
											</label>
										</div>
									</div>
								</div>
								<div class="html item-field form-group">
									<label class="control-label col-lg-3">{l s='Optional HTML code' mod='angarbanners'}</label>
									<div class="col-lg-7">
										<textarea name="item_html" cols="65" rows="12">{$hItem.html|escape:'htmlall':'UTF-8'}</textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-7 col-lg-offset-3">
										<button type="button" class="btn btn-default button-item-edit-cancel" >
											<i class="icon-remove"></i> {l s='Cancel' mod='angarbanners'}
										</button>
										<button type="submit" name="updateItem" class="btn btn-success button-save pull-right" >
											<i class="icon-save"></i> {l s='Save' mod='angarbanners'}
										</button>
									</div>
								</div>
							</div>
						</form>
					</li>
				{/foreach}
			</ul>
		{else}
			<div class="item">
				<span class="text-muted">{l s='No items available' mod='angarbanners'}</span>
			</div>
		{/if}
	{/foreach}
	</div>
{/foreach}
</div>