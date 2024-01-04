<?php
/* Smarty version 4.3.4, created on 2024-01-04 15:28:14
  from '/opt/lampp/htdocs/tune4style/modules/angarslider/views/templates/hook/slider_script.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6596ce8e59d146_70637518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6231da55526312cd0ffa96c9f8aa5e846567badf' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/modules/angarslider/views/templates/hook/slider_script.tpl',
      1 => 1703072759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6596ce8e59d146_70637518 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
$(window).load(function(){
		$('#angarslider').bxSlider({
			maxSlides: 1,
			slideWidth: 1920,
			infiniteLoop: true,
			auto: true,
			pager: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pager']->value, ENT_QUOTES, 'UTF-8');?>
,
			autoHover: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pause_hover']->value, ENT_QUOTES, 'UTF-8');?>
,
			speed: 500,
			pause: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pause']->value, ENT_QUOTES, 'UTF-8');?>
,
			adaptiveHeight: true,
			touchEnabled: true
		});
});
<?php echo '</script'; ?>
>
<?php }
}
