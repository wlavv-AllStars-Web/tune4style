<?php
/* Smarty version 4.3.1, created on 2023-12-20 11:57:25
  from '/opt/lampp/htdocs/tune4style/modules/angarhomecat/views/templates/front/at_homecat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6582d6a5ce1ee6_31800561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f1b54c1fddecef7c8abd2cd1afa997db2672e13' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/modules/angarhomecat/views/templates/front/at_homecat.tpl',
      1 => 1703072759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6582d6a5ce1ee6_31800561 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['homecat_id']->value) {?>
	<div id="home_categories"> 
		<?php if ($_smarty_tpl->tpl_vars['show_title']->value == 1) {?>
			<div class="homecat_title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured categories','mod'=>'angarhomecat'),$_smarty_tpl ) );?>
</span></div>
		<?php }?>

		<ul class="row"> 
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catProducts']->value, 'catProduct', false, NULL, 'atHomeCat', array (
));
$_smarty_tpl->tpl_vars['catProduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['catProduct']->value) {
$_smarty_tpl->tpl_vars['catProduct']->do_else = false;
?>
				<li class="cat_block col-xs-12 col-sm-4 col-md-3">
					<div class="cat-container">

						<?php if ($_smarty_tpl->tpl_vars['show_img']->value == 1) {?>
						<div class="catimg_container">
							<a href="<?php ob_start();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['catProduct']->value['link_rewrite'], ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_prefixVariable1,$_prefixVariable2),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
								<?php if ($_smarty_tpl->tpl_vars['catProduct']->value['id_image']) {?>
									<img class="replace-2x" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['catProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['catProduct']->value['id_image'],'category_default'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" loading="lazy" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
								<?php } else { ?>
									<img class="replace-2x" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_cat_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
-default-category_default.jpg" loading="lazy" />
								<?php }?>
							</a>
						</div>
						<?php }?>

						<div class="catlinks_container">
							<div class="homecat_name">
								<a href="<?php ob_start();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['catProduct']->value['link_rewrite'], ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_prefixVariable3,$_prefixVariable4),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
									<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

								</a>
								<span></span>
							</div>

							<ul class="sub_categories">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catProduct']->value['sub_cat'], 'subcat', false, NULL, 'foo', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['subcat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcat']->value) {
$_smarty_tpl->tpl_vars['subcat']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']++;
?>
								<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index'] : null) == $_smarty_tpl->tpl_vars['subcat_limit']->value) {
break 1;
}?>
								 <li><a href="<?php ob_start();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcat']->value['id_category'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
$_prefixVariable5 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcat']->value['link_rewrite'], ENT_QUOTES, 'UTF-8');
$_prefixVariable6 = ob_get_clean();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_prefixVariable5,$_prefixVariable6),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcat']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a></li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>

							<?php if ($_smarty_tpl->tpl_vars['show_btn']->value == 1) {?>
								<a class="view_more" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" href="<?php ob_start();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
$_prefixVariable7 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['catProduct']->value['link_rewrite'], ENT_QUOTES, 'UTF-8');
$_prefixVariable8 = ob_get_clean();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_prefixVariable7,$_prefixVariable8),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See more','mod'=>'angarhomecat'),$_smarty_tpl ) );?>
</a>
							<?php }?>
						</div>

						<div class="clearfix"></div>

					</div>
				</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
		</ul>

		<div class="clearfix"></div>

	</div>
<?php }
}
}
