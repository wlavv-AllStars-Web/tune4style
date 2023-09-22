<?php
/* Smarty version 4.3.1, created on 2023-09-22 11:36:11
  from 'C:\xampp\htdocs\tune4style\admin3355\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_650d6e1b6842f5_38722607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '309e4db68dbc95ece35fe5bdb76f129eb832d751' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tune4style\\admin3355\\themes\\default\\template\\content.tpl',
      1 => 1695376605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650d6e1b6842f5_38722607 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
