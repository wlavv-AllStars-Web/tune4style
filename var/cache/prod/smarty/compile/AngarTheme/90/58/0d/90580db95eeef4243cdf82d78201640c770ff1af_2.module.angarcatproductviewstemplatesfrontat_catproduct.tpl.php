<?php
/* Smarty version 4.3.1, created on 2023-12-20 11:57:25
  from 'module:angarcatproductviewstemplatesfrontat_catproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6582d6a5e61570_73955091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90580db95eeef4243cdf82d78201640c770ff1af' => 
    array (
      0 => 'module:angarcatproductviewstemplatesfrontat_catproduct.tpl',
      1 => 1703072759,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6582d6a5e61570_73955091 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if ($_smarty_tpl->tpl_vars['catprod_id']->value) {?>

<div id="home_cat_product">

	<div class="row">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catProducts']->value, 'catProduct', false, NULL, 'atCatProducts', array (
));
$_smarty_tpl->tpl_vars['catProduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['catProduct']->value) {
$_smarty_tpl->tpl_vars['catProduct']->do_else = false;
?>
		
		<div id="block_id_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="col-xs-12 col-sm-3">

			<div class="catprod_title">
				<a href="<?php ob_start();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
$_prefixVariable9 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['catProduct']->value['link_rewrite'], ENT_QUOTES, 'UTF-8');
$_prefixVariable10 = ob_get_clean();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_prefixVariable9,$_prefixVariable10),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
					<span><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
				</a>

				<div class="arrows_container">
					<div id="home-next_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="slider-btn"></div>
					<div id="home-prev_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="slider-btn"></div>
				</div>
			</div>

			<div class="bx_box">
				<ul id="bxslider_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catProduct']->value['product'], 'product', false, NULL, 'myLoop', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
					<li> 
						<div class="product_container">
							<div class="left-block">
								<a class="product_img_link" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
								<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'])) {?>
									<img class="replace-2x img-responsive" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'small_default'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['legend'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['legend'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']))) {?> loading="lazy" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['height'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> />
								<?php } else { ?>
									<img class="replace-2x img-responsive" src = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
en-default-home_default.jpg" alt = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']))) {?> loading="lazy" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['height'], ENT_QUOTES, 'UTF-8');?>
" <?php }?> />
								<?php }?>
								</a>

								<a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="product-flags-plist">
									<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['new'])) && $_smarty_tpl->tpl_vars['product']->value['new'] == 1) {?>
										<span class="product-flag new"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New','mod'=>'angarcatproduct'),$_smarty_tpl ) );?>
</span>
									<?php }?>

									
									<?php if ($_smarty_tpl->tpl_vars['product']->value['reduction'] != 0) {?>
										<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
											<span class="product-flag on-sale"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
										<?php }?>

										<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
											<span class="product-flag on-sale">-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_amount'], ENT_QUOTES, 'UTF-8');?>
</span>
										<?php }?>
									<?php }?>
								</a>
							</div>

							<div class="right-block">
								<div class="name_block">
									<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])) && $_smarty_tpl->tpl_vars['product']->value['pack_quantity']) {
echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['pack_quantity'] ))).(' x '), ENT_QUOTES, 'UTF-8');
}?>
									<a class="product-name" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" >
										<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],45,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

									</a>
								</div>
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'displayProductListReviews', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
								<?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayProductListReviews')) {?>
									<div class="hook-reviews">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

									</div>
								<?php }?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18245322926582d6a5e5ef44_08683515', 'product_shortdesc');
?>


								<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
									<div class="product-price-and-shipping">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


										<span class="price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>

										<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

											<span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
										<?php }?>

										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

									</div>
								<?php }?>
							</div>

							<div class="clearfix"></div>

						</div>

					</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>

			</div>

		</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>

</div>

<?php }?>

<div class="clearfix"></div><?php }
/* {block 'product_shortdesc'} */
class Block_18245322926582d6a5e5ef44_08683515 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_shortdesc' => 
  array (
    0 => 'Block_18245322926582d6a5e5ef44_08683515',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<p class="product-desc">
										<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['product']->value['description_short']),40,'...' )), ENT_QUOTES, 'UTF-8');?>

									</p>
								<?php
}
}
/* {/block 'product_shortdesc'} */
}
