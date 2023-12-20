<?php
/* Smarty version 4.3.1, created on 2023-12-20 11:57:25
  from '/opt/lampp/htdocs/tune4style/modules/angarparallax/views/templates/front/at_parallax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6582d6a5e438a6_39726909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1005a2b8f62fc1f99e1542484bb3b6ff6e210800' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/modules/angarparallax/views/templates/front/at_parallax.tpl',
      1 => 1703072759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6582d6a5e438a6_39726909 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="parallax_baner" <?php if ((isset($_smarty_tpl->tpl_vars['parallax_img']->value))) {?>style="background-image: url(<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['parallax_img']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
)"<?php }?>>

	<div class="parallax_desc">
		<?php echo $_smarty_tpl->tpl_vars['parallax_desc']->value;?>
 	</div>

	<?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['parallax_link']->value,'htmlall','UTF-8' ))) {?>
		<a class="parallax_button" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['parallax_link']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See more','mod'=>'angarparallax'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See more','mod'=>'angarparallax'),$_smarty_tpl ) );?>
</a>
	<?php }?>

</div>
<?php }
}
