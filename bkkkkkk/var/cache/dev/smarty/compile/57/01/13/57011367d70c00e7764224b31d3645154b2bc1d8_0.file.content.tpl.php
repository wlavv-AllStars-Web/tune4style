<?php
/* Smarty version 4.3.1, created on 2023-12-11 15:13:22
  from '/opt/lampp/htdocs/tune4style/admin3355/themes/default/template/controllers/not_found/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6577271201b808_75545053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57011367d70c00e7764224b31d3645154b2bc1d8' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/admin3355/themes/default/template/controllers/not_found/content.tpl',
      1 => 1702298675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6577271201b808_75545053 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['controller']->value)) && !empty($_smarty_tpl->tpl_vars['controller']->value) && $_smarty_tpl->tpl_vars['controller']->value != 'adminnotfound') {?>
	<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The controller %s is missing or invalid.','sprintf'=>array($_smarty_tpl->tpl_vars['controller']->value)),$_smarty_tpl ) );?>
</h1>
<?php }?>
<a class="btn btn-default" href="javascript:window.history.back();">
	<i class="icon-arrow-left"></i>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to the previous page'),$_smarty_tpl ) );?>

</a>
<a class="btn btn-default" href="index.php">
	<i class="icon-dashboard"></i>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to the dashboard'),$_smarty_tpl ) );?>

</a>
<?php }
}
