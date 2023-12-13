<?php
/* Smarty version 4.3.1, created on 2023-12-12 12:08:44
  from '/opt/lampp/htdocs/tune4style/admin3355/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65784d4c965290_87729346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '070a1e52c12652bb119a6d8641ed7ea6957c9b51' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/admin3355/themes/default/template/content.tpl',
      1 => 1695895954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65784d4c965290_87729346 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
