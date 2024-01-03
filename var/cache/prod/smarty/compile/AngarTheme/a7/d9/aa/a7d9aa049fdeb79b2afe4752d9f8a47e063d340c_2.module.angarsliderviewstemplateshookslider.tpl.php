<?php
/* Smarty version 4.3.1, created on 2024-01-02 16:58:39
  from 'module:angarsliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_659440bfa4ffa8_78024044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7d9aa049fdeb79b2afe4752d9f8a47e063d340c' => 
    array (
      0 => 'module:angarsliderviewstemplateshookslider.tpl',
      1 => 1703072759,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659440bfa4ffa8_78024044 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Module AngarSlider -->
<?php if ($_smarty_tpl->tpl_vars['angarslider']->value['slides']) {?>
	<div id="homepage-slider">

		<ul id="angarslider">
		  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['angarslider']->value['slides'], 'slide', false, NULL, 'angarslider', array (
));
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
			<li class="angarslider-container">
			  <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8');?>
">
				  <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" width="100%" height="100%">
				  <?php if ($_smarty_tpl->tpl_vars['slide']->value['description']) {?>
					  <div class="angarslider-description"><div class="slider_desc"><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
 </div></div>
				  <?php }?>
			  </a>
			</li>
		  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>

	</div>
<?php }?>
<!-- /Module AngarSlider -->
<?php }
}
