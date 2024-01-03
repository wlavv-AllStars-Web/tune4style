<?php
/* Smarty version 4.3.1, created on 2024-01-03 09:05:24
  from '/opt/lampp/htdocs/tune4style/themes/AngarTheme/modules/productcomments/views/templates/front/productcomments_reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6595235459c615_47178956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79d86321b781f3a04a91d6c305e30d2110b76f1a' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/themes/AngarTheme/modules/productcomments/views/templates/front/productcomments_reviews.tpl',
      1 => 1703072759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6595235459c615_47178956 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="comments_note">
	<div class="star-content star_content clearfix">
		<?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 5; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
			<?php if ($_smarty_tpl->tpl_vars['averageTotal']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
				<div class="star"></div>
			<?php } else { ?>
				<div class="star star_on"></div>
			<?php }?>
		<?php
}
}
?>
	</div>
	<span class="nb-comments"><span class="pull-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Review(s)','mod'=>'productcomments'),$_smarty_tpl ) );?>
: <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nbComments']->value, ENT_QUOTES, 'UTF-8');?>
</span></span></span>
</div><?php }
}
