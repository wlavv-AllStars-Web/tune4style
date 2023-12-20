<?php
/* Smarty version 4.3.1, created on 2023-12-20 11:57:26
  from '/opt/lampp/htdocs/tune4style/modules/angarmanufacturer/views/templates/front/at_manufacturer_script.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6582d6a6004bf9_00554706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5435df21932e5765055371c2d531ec92df5f954' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/modules/angarmanufacturer/views/templates/front/at_manufacturer_script.tpl',
      1 => 1703072759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6582d6a6004bf9_00554706 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
echo '<script'; ?>
>
	$(document).ready(function() {
	if (!!$.prototype.bxSlider)
		$('#bx_manufacturer').bxSlider({
			auto: <?php if ($_smarty_tpl->tpl_vars['man_auto']->value == 0) {?>false<?php } else { ?>true<?php }?>,
			minSlides: 1,
			maxSlides: 5,
			slideWidth: 234,
			pager: false,
			pause: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['man_pause']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
			nextSelector: '#next_man',
			prevSelector: '#prev_man',
			nextText: '>',
			prevText: '<',
			moveSlides: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['man_move']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
			infiniteLoop: <?php if ($_smarty_tpl->tpl_vars['man_loop']->value == 0) {?>false<?php } else { ?>true<?php }?>,
			hideControlOnEnd: true,
			touchEnabled: true
		});
	});
<?php echo '</script'; ?>
>
<?php }
}
}
