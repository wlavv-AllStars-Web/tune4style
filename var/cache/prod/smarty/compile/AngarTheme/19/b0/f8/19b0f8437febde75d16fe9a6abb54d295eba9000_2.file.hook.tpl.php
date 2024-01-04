<?php
/* Smarty version 4.3.4, created on 2024-01-04 16:58:36
  from '/opt/lampp/htdocs/tune4style/modules/angarbanners/views/templates/hook/hook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6596e3bc1c1615_58209008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19b0f8437febde75d16fe9a6abb54d295eba9000' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/modules/angarbanners/views/templates/hook/hook.tpl',
      1 => 1703072759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6596e3bc1c1615_58209008 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['htmlitems']->value)) && $_smarty_tpl->tpl_vars['htmlitems']->value) {?>
<div id="angarbanners_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hook']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="angarbanners">
	<ul class="clearfix row">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlitems']->value, 'hItem', false, NULL, 'items', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['hItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hItem']->value) {
$_smarty_tpl->tpl_vars['hItem']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration']++;
?>


<?php if ($_smarty_tpl->tpl_vars['hook']->value == 'left' || $_smarty_tpl->tpl_vars['hook']->value == 'right') {?>

	<li class="block">

		<p class="h6 text-uppercase <?php if ($_smarty_tpl->tpl_vars['hItem']->value['title_use'] == 1) {?>banner_title<?php }?>"><span><?php if ($_smarty_tpl->tpl_vars['hItem']->value['title']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hItem']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Banner','mod'=>'angarbanners'),$_smarty_tpl ) );
}?></span></p>
		
		<div class="block_content">
			<?php if ($_smarty_tpl->tpl_vars['hItem']->value['url']) {?>
			<a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hItem']->value['url'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="item-link"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['target'] == 1) {?> onclick="return !window.open(this.href);"<?php }?> title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hItem']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
			<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image']) {?>
					<img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."views/img/".((string)(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hItem']->value['image'],'htmlall','UTF-8' ))))), ENT_QUOTES, 'UTF-8');?>
" class="item-img <?php if ($_smarty_tpl->tpl_vars['hook']->value == 'left' || $_smarty_tpl->tpl_vars['hook']->value == 'right') {?>img-responsive<?php }?>" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hItem']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hItem']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" width="<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image_w']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['hItem']->value['image_w'] )), ENT_QUOTES, 'UTF-8');
} else { ?>100%<?php }?>" height="<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image_h']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['hItem']->value['image_h'] )), ENT_QUOTES, 'UTF-8');
} else { ?>100%<?php }?>"/>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['hItem']->value['html']) {?>
					<div class="itemhtml_desc"><?php echo $_smarty_tpl->tpl_vars['hItem']->value['html'];?>
 </div>
				<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['hItem']->value['url']) {?>
			</a>
			<?php }?>
		</div>

	</li>

<?php } else { ?>

	<li class="angarbanners-item-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration'] : null),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['hook']->value == 'header' || $_smarty_tpl->tpl_vars['hook']->value == 'footer') {?>col-xs-12<?php } else { ?> col-xs-4<?php }?>">

		<?php if ($_smarty_tpl->tpl_vars['hItem']->value['url']) {?>
			<a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hItem']->value['url'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="item-link"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['target'] == 1) {?> onclick="return !window.open(this.href);"<?php }?> title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hItem']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
		<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image']) {?>
				<img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."views/img/".((string)(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hItem']->value['image'],'htmlall','UTF-8' ))))), ENT_QUOTES, 'UTF-8');?>
" class="item-img <?php if ($_smarty_tpl->tpl_vars['hook']->value == 'left' || $_smarty_tpl->tpl_vars['hook']->value == 'right') {?>img-responsive<?php }?>" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hItem']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hItem']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" width="<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image_w']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['hItem']->value['image_w'] )), ENT_QUOTES, 'UTF-8');
} else { ?>100%<?php }?>" height="<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image_h']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['hItem']->value['image_h'] )), ENT_QUOTES, 'UTF-8');
} else { ?>100%<?php }?>"/>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['hItem']->value['title'] && $_smarty_tpl->tpl_vars['hItem']->value['title_use'] == 1 || $_smarty_tpl->tpl_vars['hItem']->value['html']) {?>
				<div class="item_desc">
					<div class="item_desc_position">
						<?php if ($_smarty_tpl->tpl_vars['hItem']->value['title'] && $_smarty_tpl->tpl_vars['hItem']->value['title_use'] == 1) {?>
							<h3 class="item-title"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hItem']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['hItem']->value['html']) {?>
							<div class="item-html">
								<?php echo $_smarty_tpl->tpl_vars['hItem']->value['html'];?>
 							</div>
						<?php }?>
					</div>
				</div>
			<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['hItem']->value['url']) {?>
			</a>
		<?php }?>

	</li>

<?php }?>


	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }
}
}
