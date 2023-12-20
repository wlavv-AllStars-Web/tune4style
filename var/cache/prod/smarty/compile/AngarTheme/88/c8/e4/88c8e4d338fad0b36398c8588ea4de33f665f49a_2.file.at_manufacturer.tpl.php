<?php
/* Smarty version 4.3.1, created on 2023-12-20 11:57:25
  from '/opt/lampp/htdocs/tune4style/modules/angarmanufacturer/views/templates/front/at_manufacturer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6582d6a5e6be92_46051106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88c8e4d338fad0b36398c8588ea4de33f665f49a' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/modules/angarmanufacturer/views/templates/front/at_manufacturer.tpl',
      1 => 1703072759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6582d6a5e6be92_46051106 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="home_man">

	<div class="man_title">
		<a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('manufacturer'),'html' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured manufacturers','mod'=>'angarmanufacturer'),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured manufacturers','mod'=>'angarmanufacturer'),$_smarty_tpl ) );?>
</span></a>
		<div class="arrows_container">
			<div id="next_man" class="slider-btn"></div>
			<div id="prev_man" class="slider-btn"></div>
		</div>
	</div>

	<ul id="bx_manufacturer">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homeManufacturers']->value, 'homeManufacturer', false, NULL, 'atHomeMan', array (
));
$_smarty_tpl->tpl_vars['homeManufacturer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['homeManufacturer']->value) {
$_smarty_tpl->tpl_vars['homeManufacturer']->do_else = false;
?>
		<li>
			<a title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homeManufacturer']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" href="<?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['homeManufacturer']->value['id'], ENT_QUOTES, 'UTF-8');
$_prefixVariable11 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['homeManufacturer']->value['link_rewrite'], ENT_QUOTES, 'UTF-8');
$_prefixVariable12 = ob_get_clean();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getManufacturerLink($_prefixVariable11,$_prefixVariable12),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
				<img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['img_manu_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homeManufacturer']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" loading="lazy" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homeManufacturer']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
			</a>
		</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>

<div class="clearfix"></div>

</div><?php }
}
