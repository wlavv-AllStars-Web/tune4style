<?php
/* Smarty version 4.3.1, created on 2024-01-02 16:58:39
  from '/opt/lampp/htdocs/tune4style/modules/angarfacebook/views/templates/front/angarfacebook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_659440bfa6ea21_90026043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '579eff202b617b94d56e3e33aadc25ea3ca912c1' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/modules/angarfacebook/views/templates/front/angarfacebook.tpl',
      1 => 1703072759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659440bfa6ea21_90026043 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['facebookurl']->value != '') {?>
<div id="likebox_content">
	<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow us on Facebook','mod'=>'angarfacebook'),$_smarty_tpl ) );?>
</h4>
	<div class="likebox_tab"></div>
	<div class="fb-page" data-href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['facebookurl']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-lazy="true" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['facebookurl']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['facebookurl']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">Facebook</a></blockquote></div></div>
</div>
<?php }
}
}
