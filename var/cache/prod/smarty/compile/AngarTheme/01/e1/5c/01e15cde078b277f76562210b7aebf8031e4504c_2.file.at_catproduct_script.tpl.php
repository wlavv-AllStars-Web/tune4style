<?php
/* Smarty version 4.3.1, created on 2023-12-20 11:57:26
  from '/opt/lampp/htdocs/tune4style/modules/angarcatproduct/views/templates/front/at_catproduct_script.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6582d6a60021f5_99330877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01e15cde078b277f76562210b7aebf8031e4504c' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/modules/angarcatproduct/views/templates/front/at_catproduct_script.tpl',
      1 => 1703072759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6582d6a60021f5_99330877 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
echo '<script'; ?>
>
	$(document).ready(function() {
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catProducts']->value, 'catProduct', false, NULL, 'atCatProducts', array (
));
$_smarty_tpl->tpl_vars['catProduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['catProduct']->value) {
$_smarty_tpl->tpl_vars['catProduct']->do_else = false;
?>
			$('#bxslider_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').bxSlider({
				auto: <?php if ($_smarty_tpl->tpl_vars['auto']->value == 0) {?>false<?php } else { ?>true<?php }?>,
				minSlides: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['visible']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
				maxSlides: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['visible']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
				mode: 'vertical',
				pager: false,
				pause: 3000,
				nextSelector: '#home-next_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
',
				prevSelector: '#home-prev_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
',
				nextText: '>',
				prevText: '<',
				moveSlides: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['move']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
				infiniteLoop: <?php if ($_smarty_tpl->tpl_vars['loop']->value == 0) {?>false<?php } else { ?>true<?php }?>,
				hideControlOnEnd: true,
				useCSS: false,
			});
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	});
<?php echo '</script'; ?>
>
<?php }
}
}
