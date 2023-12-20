<?php
/* Smarty version 4.3.1, created on 2023-12-20 11:57:25
  from 'module:ps_languageselectorps_languageselector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6582d6a5c98c15_96429447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c00f78dace25d509ec3a1f54176b7ae2000accf' => 
    array (
      0 => 'module:ps_languageselectorps_languageselector.tpl',
      1 => 1703072759,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6582d6a5c98c15_96429447 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="_desktop_language_selector" class="lang_currency_top">
  <div class="language-selector-wrapper">
	<div class="language-selector dropdown js-dropdown">
	  <button data-toggle="dropdown" class="hidden-sm-down2 btn-unstyle" aria-haspopup="true" aria-expanded="false" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language dropdown','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
		<img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_lang_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_language']->value['id_lang'], ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" width="16" height="11" />
		<span class="expand-more"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
</span>
		<i class="material-icons expand-more">&#xE5C5;</i>
	  </button>
	  <ul class="dropdown-menu hidden-sm-down2" aria-labelledby="language-selector-label">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
		  <li <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> class="current" <?php }?>>
			<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
" class="dropdown-item">
				<img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_lang_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" width="16" height="11" />
				<span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
</span>
			</a>
		  </li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	  </ul>
	</div>
  </div>
</div>
<?php }
}
