<?php
/* Smarty version 4.3.4, created on 2024-01-04 16:58:36
  from '/opt/lampp/htdocs/tune4style/modules/angarcontact/views/templates/front/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6596e3bc23ce14_04850396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e39716c74b9f28c3339da6d8035af668f8231584' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/modules/angarcontact/views/templates/front/nav.tpl',
      1 => 1703072759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6596e3bc23ce14_04850396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/tune4style/vendor/smarty/smarty/libs/plugins/function.mailto.php','function'=>'smarty_function_mailto',),));
?>

<div id="_desktop_contact_link">
  <div id="contact-link">

	<?php if ($_smarty_tpl->tpl_vars['angarcontact_phone']->value) {?>
		<span class="shop-phone contact_link">
			<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact','mod'=>'angarcontact'),$_smarty_tpl ) );?>
</a>
		</span>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['angarcontact_phone']->value) {?>
		<span class="shop-phone shop-tel">
			<i class="fa fa-phone"></i>
			<span class="shop-phone_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone:','mod'=>'angarcontact'),$_smarty_tpl ) );?>
</span>
			<strong><a href="tel:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['angarcontact_phone']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['angarcontact_phone']->value, ENT_QUOTES, 'UTF-8');?>
</a></strong>
		</span>
	<?php } else { ?>
		<span class="shop-phone contact_link">
			<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact','mod'=>'angarcontact'),$_smarty_tpl ) );?>
</a>
		</span>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['angarcontact_email']->value) {?>
		<span class="shop-phone shop-email">
			<i class="fa fa-envelope"></i>
			<span class="shop-phone_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email:','mod'=>'angarcontact'),$_smarty_tpl ) );?>
</span>
			<strong><?php echo smarty_function_mailto(array('address'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['angarcontact_email']->value,'html','UTF-8' )),'encode'=>"hex"),$_smarty_tpl);?>
</strong>
		</span>
	<?php }?>


  </div>
</div>
<?php }
}
