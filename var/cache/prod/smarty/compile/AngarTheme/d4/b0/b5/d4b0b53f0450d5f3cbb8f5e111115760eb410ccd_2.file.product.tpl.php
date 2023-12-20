<?php
/* Smarty version 4.3.1, created on 2023-12-20 11:57:25
  from '/opt/lampp/htdocs/tune4style/themes/AngarTheme/templates/catalog/_partials/miniatures/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6582d6a5dc3638_78513115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4b0b53f0450d5f3cbb8f5e111115760eb410ccd' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/themes/AngarTheme/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1703072759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_6582d6a5dc3638_78513115 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16848832286582d6a5db0009_65692830', 'product_miniature_item');
?>

<?php }
/* {block 'product_flags'} */
class Block_17960523726582d6a5db06b4_58258044 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="product-flags-plist">
					<?php if ($_smarty_tpl->tpl_vars['product']->value['reduction'] != 0) {?>
						<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
							<span class="product-flag discount-percentage"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
							<span class="product-flag discount-percentage">- <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_amount'], ENT_QUOTES, 'UTF-8');?>
</span>
						<?php }?>
					<?php }?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
						<?php if ($_smarty_tpl->tpl_vars['flag']->value['type'] === 'discount') {?>
							<span class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reduced price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
						<?php } else { ?>
							<span class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</a>
				<?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_thumbnail'} */
class Block_4939991026582d6a5db2ce2_46918722 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
					<picture>
						<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'])) {?>
						  <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
						  <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
						  <img
							src = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
							alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
							data-full-size-image-url = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']))) {?> 
							loading="lazy"
							width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
						  >
						<?php } else { ?>
							<?php if ((defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null) >= '1.7.6.0') {?>
								<img
									src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
									loading="lazy"
									width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
									height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
								/>
							<?php } else { ?>
								<img src = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
en-default-home_default.jpg" loading="lazy">
							<?php }?>
						<?php }?>
					</picture>
				</a>
				<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'quick_view'} */
class Block_20189071976582d6a5db7566_41882139 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				    <a class="quick-view" href="#" data-link-action="quickview">
					  <i class="material-icons search">&#xE8B6;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

				    </a>
				  <?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_name'} */
class Block_11384726296582d6a5db9992_62260388 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <h3 class="h3 product-title"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],160,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
				<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_reviews'} */
class Block_5375934306582d6a5dba2a5_72269986 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

				<?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_shortdesc'} */
class Block_16242132346582d6a5dba788_72624253 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<div class="product-desc">
						<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...' )), ENT_QUOTES, 'UTF-8');?>

					</div>
				<?php
}
}
/* {/block 'product_shortdesc'} */
/* {block 'product_price_and_shipping'} */
class Block_14130838496582d6a5dbb2a8_27479730 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
					<div class="product-price-and-shipping">
					  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


					  <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
					  <span class="price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>

					  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

						<span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
						<span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
					  <?php }?>

					  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


					  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

					</div>
				  <?php }?>
				<?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_availability'} */
class Block_11492366576582d6a5dc09f6_40671030 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					  <span class="pl-availability">
						<?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
						  <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
							<i class="material-icons product-available">&#xE5CA;</i>
						  <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
							<i class="material-icons product-last-items">&#xE002;</i>
						  <?php } else { ?>
							<i class="material-icons product-unavailable">&#xE14B;</i>
						  <?php }?>
						  <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

						<?php } else { ?>
							<?php if ($_smarty_tpl->tpl_vars['product']->value['allow_oosp'] == 0) {?>
								<i class="material-icons product-available">&#xE5CA;</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

							<?php }?>
							
							<?php if ($_smarty_tpl->tpl_vars['product']->value['allow_oosp'] == 1) {?>
																<i class="material-icons product-available">&#xE5CA;</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

							<?php }?>
						<?php }?>
					  </span>
					<?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_variants'} */
class Block_16447313336582d6a5dc2816_12996037 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					  <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
						<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
					  <?php }?>
					<?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature_item'} */
class Block_16848832286582d6a5db0009_65692830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_16848832286582d6a5db0009_65692830',
  ),
  'product_flags' => 
  array (
    0 => 'Block_17960523726582d6a5db06b4_58258044',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_4939991026582d6a5db2ce2_46918722',
  ),
  'quick_view' => 
  array (
    0 => 'Block_20189071976582d6a5db7566_41882139',
  ),
  'product_name' => 
  array (
    0 => 'Block_11384726296582d6a5db9992_62260388',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_5375934306582d6a5dba2a5_72269986',
  ),
  'product_shortdesc' => 
  array (
    0 => 'Block_16242132346582d6a5dba788_72624253',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_14130838496582d6a5dbb2a8_27479730',
  ),
  'product_availability' => 
  array (
    0 => 'Block_11492366576582d6a5dc09f6_40671030',
  ),
  'product_variants' => 
  array (
    0 => 'Block_16447313336582d6a5dc2816_12996037',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
    <div class="thumbnail-container">

		<div class="product-left">
			<div class="product-image-container">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17960523726582d6a5db06b4_58258044', 'product_flags', $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4939991026582d6a5db2ce2_46918722', 'product_thumbnail', $this->tplIndex);
?>


								<?php if ($_smarty_tpl->tpl_vars['display_quickview']->value == 1) {?>
				  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20189071976582d6a5db7566_41882139', 'quick_view', $this->tplIndex);
?>

				<?php }?>
			</div>
		</div>

		<div class="product-right">
			<div class="product-description">
								<p class="pl_reference">
				<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['reference_to_display'])) && $_smarty_tpl->tpl_vars['product']->value['reference_to_display'] != '') {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
: 
					<span><strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['reference_to_display'], ENT_QUOTES, 'UTF-8');?>
</strong></span>
				<?php }?>
				</p>

				<p class="pl_manufacturer">
				<?php if ($_smarty_tpl->tpl_vars['product']->value['id_manufacturer'] > 0) {?>
					<?php $_smarty_tpl->_assignInScope('manufacturer_name', Manufacturer::getNameById($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']));?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
: 
					<?php if ((defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null) >= '1.7.4.0') {?>
						<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer_name']->value, ENT_QUOTES, 'UTF-8');?>
"><strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer_name']->value, ENT_QUOTES, 'UTF-8');?>
</strong></a>
					<?php } else { ?>
						<strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer_name']->value, ENT_QUOTES, 'UTF-8');?>
</strong>
					<?php }?>
				<?php }?>
				</p>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11384726296582d6a5db9992_62260388', 'product_name', $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5375934306582d6a5dba2a5_72269986', 'product_reviews', $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16242132346582d6a5dba788_72624253', 'product_shortdesc', $this->tplIndex);
?>

			</div>

			<div class="product-bottom">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14130838496582d6a5dbb2a8_27479730', 'product_price_and_shipping', $this->tplIndex);
?>


								<div class="button-container">

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAddtocart','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


				<?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
					<form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" class="add-to-cart-or-refresh">
					  <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
					  <input type="hidden" name="id_product" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product_page_product_id">

					  <div class="qty_container hidden-md-up hidden-sm-down">
						  <input type="number" name="qty" value="<?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>" min="<?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>" max="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
">
						  <a onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="qty_btn qty_plus"><i class="material-icons touchspin-up"></i></a>
						  <a onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="qty_btn qty_minus"><i class="material-icons touchspin-down"></i></a>
					  </div>

						<?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url'] && $_smarty_tpl->tpl_vars['product']->value['quantity'] > 0 && !$_smarty_tpl->tpl_vars['product']->value['customization_required']) {?>

						  <a class="btn add-to-cart quick-view" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
							<i class="material-icons shopping-cart"></i>
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
						  </a>

						<?php } else { ?>

							<?php if ((!(isset($_smarty_tpl->tpl_vars['product']->value['customization_required'])) || !$_smarty_tpl->tpl_vars['product']->value['customization_required']) && ($_smarty_tpl->tpl_vars['product']->value['allow_oosp'] || $_smarty_tpl->tpl_vars['product']->value['quantity'] > 0)) {?>
							  <button class="btn add-to-cart" data-button-action="add-to-cart" type="submit">
								<i class="material-icons shopping-cart"></i>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

							  </button>
							<?php } else { ?>
							  <button class="btn add-to-cart" data-button-action="add-to-cart" type="submit" disabled>
								<i class="material-icons shopping-cart"></i>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

							  </button>
							<?php }?>

						<?php }?>

					</form>
				<?php }?>

					<a class="button lnk_view btn" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More','d'=>'Shop.Theme.Mytheme'),$_smarty_tpl ) );?>
">
						<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More','d'=>'Shop.Theme.Mytheme'),$_smarty_tpl ) );?>
</span>
					</a>

				</div>

				<?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
					<div class="availability">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11492366576582d6a5dc09f6_40671030', 'product_availability', $this->tplIndex);
?>


					
					</div>
				<?php }?>

				<div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16447313336582d6a5dc2816_12996037', 'product_variants', $this->tplIndex);
?>

				</div>
			</div>
		</div>

		<div class="clearfix"></div>

    </div>
  </article>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
