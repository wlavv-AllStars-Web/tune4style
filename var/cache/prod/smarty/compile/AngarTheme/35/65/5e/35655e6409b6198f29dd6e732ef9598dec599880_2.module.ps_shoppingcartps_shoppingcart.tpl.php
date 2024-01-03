<?php
/* Smarty version 4.3.1, created on 2024-01-02 16:58:39
  from 'module:ps_shoppingcartps_shoppingcart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_659440bfa24304_73585064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:ps_shoppingcartps_shoppingcart.tpl',
      1 => 1703072759,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' => 1,
  ),
),false)) {
function content_659440bfa24304_73585064 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="_desktop_cart">

	<div class="cart_top">

		<div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
			<div class="header">
			
				<div class="cart_index_title">
					<a class="cart_link" rel="nofollow" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
						<i class="material-icons shopping-cart">shopping_cart</i>
						<span class="hidden-sm-down cart_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
:</span>
						<span class="cart-products-count">
							<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
<span> <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product','d'=>'Shop.Theme.Mytheme'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','d'=>'Shop.Theme.Mytheme'),$_smarty_tpl ) );
}?> - <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
						</span>
					</a>
				</div>


				<div id="subcart">

					<ul class="cart_products">

					<?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] == 0) {?>
						<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no more items in your cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</li>
					<?php }?>

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
						<li>
							<?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
						</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>

					<ul class="cart-subtotals">

				
						<li>
							<span class="text"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['subtotals']['shipping']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
							<span class="value"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['subtotals']['shipping']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
							<span class="clearfix"></span>
						</li>

						<li>
							<span class="text"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
							<span class="value"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
							<span class="clearfix"></span>
						</li>

					</ul>

					<div class="cart-buttons">
						<a class="btn btn-primary viewcart" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check Out','d'=>'Shop.Theme.Mytheme'),$_smarty_tpl ) );?>
 <i class="material-icons">&#xE315;</i></a>
											</div>

				</div>

			</div>
		</div>

	</div>

</div>

<?php }
}
