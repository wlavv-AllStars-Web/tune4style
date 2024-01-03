<?php
/* Smarty version 4.3.1, created on 2024-01-02 16:58:39
  from '/opt/lampp/htdocs/tune4style/modules/angarthemeconfigurator/views/templates/front/csstpl.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_659440bf99a282_11335297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f4db5061747759380ecd886ec5f79669f12e7bf' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/modules/angarthemeconfigurator/views/templates/front/csstpl.tpl',
      1 => 1703072759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659440bf99a282_11335297 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/tune4style/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<style type="text/css">
body {
background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css2']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
font-family: "<?php echo htmlspecialchars((string) smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css59']->value,'htmlall','UTF-8' )),'_',' '), ENT_QUOTES, 'UTF-8');?>
", Arial, Helvetica, sans-serif;
}

.products .product-miniature .product-title {
height: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css26']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px;
}

.products .product-miniature .product-title a {
font-size: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css27']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px;
line-height: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css28']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px;
}

#content-wrapper .products .product-miniature .product-desc {
height: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css61']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px;
}

@media (min-width: 991px) {
#home_categories ul li .cat-container {
min-height: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css56']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px;
}
}

@media (min-width: 768px) {
#_desktop_logo {
padding-top: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css44']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px;
padding-bottom: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css60']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px;
}
}

nav.header-nav {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color1']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

nav.header-nav,
.header_sep2 #contact-link span.shop-phone,
.header_sep2 #contact-link span.shop-phone.shop-tel,
.header_sep2 #contact-link span.shop-phone:last-child,
.header_sep2 .lang_currency_top,
.header_sep2 .lang_currency_top:last-child,
.header_sep2 #_desktop_currency_selector,
.header_sep2 #_desktop_language_selector,
.header_sep2 #_desktop_user_info {
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color2']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

#contact-link,
#contact-link a,
.lang_currency_top span.lang_currency_text,
.lang_currency_top .dropdown i.expand-more,
nav.header-nav .user-info span,
nav.header-nav .user-info a.logout,
#languages-block-top div.current,
nav.header-nav a{
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color3']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

#contact-link span.shop-phone strong,
#contact-link span.shop-phone strong a,
.lang_currency_top span.expand-more,
nav.header-nav .user-info a.account {
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color4']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

#contact-link span.shop-phone i {
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color5']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

.header-top {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color6']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

div#search_widget form button[type=submit] {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color7']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color78']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

div#search_widget form button[type=submit]:hover {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color8']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color79']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}


#header div#_desktop_cart .blockcart .header {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color9']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

#header div#_desktop_cart .blockcart .header a.cart_link {
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color80']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}


#homepage-slider .bx-wrapper .bx-pager.bx-default-pager a:hover,
#homepage-slider .bx-wrapper .bx-pager.bx-default-pager a.active{
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color10']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

div#rwd_menu {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color11']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

div#rwd_menu,
div#rwd_menu a {
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color13']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

div#rwd_menu,
div#rwd_menu .rwd_menu_item,
div#rwd_menu .rwd_menu_item:first-child {
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color12']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

div#rwd_menu .rwd_menu_item:hover,
div#rwd_menu .rwd_menu_item:focus,
div#rwd_menu .rwd_menu_item a:hover,
div#rwd_menu .rwd_menu_item a:focus {
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color14']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color15']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

#mobile_top_menu_wrapper2 .top-menu li a:hover,
.rwd_menu_open ul.user_info li a:hover {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color16']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color81']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

#_desktop_top_menu{
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color11']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

#_desktop_top_menu,
#_desktop_top_menu > ul > li,
.menu_sep1 #_desktop_top_menu > ul > li,
.menu_sep1 #_desktop_top_menu > ul > li:last-child,
.menu_sep2 #_desktop_top_menu,
.menu_sep2 #_desktop_top_menu > ul > li,
.menu_sep2 #_desktop_top_menu > ul > li:last-child,
.menu_sep3 #_desktop_top_menu,
.menu_sep4 #_desktop_top_menu,
.menu_sep5 #_desktop_top_menu,
.menu_sep6 #_desktop_top_menu {
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color12']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

#_desktop_top_menu > ul > li > a {
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color13']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

#_desktop_top_menu > ul > li:hover > a {
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color14']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color15']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

.submenu1 #_desktop_top_menu .popover.sub-menu ul.top-menu li a:hover,
.submenu3 #_desktop_top_menu .popover.sub-menu ul.top-menu li a:hover,
.live_edit_0.submenu1 #_desktop_top_menu .popover.sub-menu ul.top-menu li:hover > a,
.live_edit_0.submenu3 #_desktop_top_menu .popover.sub-menu ul.top-menu li:hover > a {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color16']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color81']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}


#home_categories .homecat_title span {
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color60']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

#home_categories ul li .homecat_name span {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color61']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

#home_categories ul li a.view_more {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color62']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color63']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color64']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

#home_categories ul li a.view_more:hover {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color65']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color66']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color67']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

.columns .text-uppercase a,
.columns .text-uppercase span,
.columns div#_desktop_cart .cart_index_title a,
#home_man_product .catprod_title a span {
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color17']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

#index .tabs ul.nav-tabs li.nav-item a.active,
#index .tabs ul.nav-tabs li.nav-item a:hover,
.index_title a,
.index_title span {
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color19']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

a.product-flags-plist span.product-flag,
a.product-flags-plist span.product-flag.new,
#home_cat_product a.product-flags-plist span.product-flag.new,
#product #content .product-flags li,
#product #content .product-flags .product-flag.new {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color20']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

.products .product-miniature .product-title a,
#home_cat_product ul li .right-block .name_block a {
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color21']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

.products .product-miniature span.price,
#home_cat_product ul li .product-price-and-shipping .price,
.ui-widget .search_right span.search_price,
body#view #main .wishlist-product-price {
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color22']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

.button-container .add-to-cart:hover,
#subcart .cart-buttons .viewcart:hover,
body#view ul li.wishlist-products-item .wishlist-product-bottom .btn-primary:hover {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color26']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color27']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color28']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

.button-container .add-to-cart,
.button-container .add-to-cart:disabled,
#subcart .cart-buttons .viewcart,
body#view ul li.wishlist-products-item .wishlist-product-bottom .btn-primary {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color23']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color24']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color25']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

#home_cat_product .catprod_title span {
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color68']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

#home_man .man_title span {
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color71']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

div#angarinfo_block .icon_cms {
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color29']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

.footer-container {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color30']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

.footer-container,
.footer-container .h3,
.footer-container .links .title,
.row.social_footer {
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color31']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

.footer-container .h3 span,
.footer-container .h3 a,
.footer-container .links .title span.h3,
.footer-container .links .title a.h3 {
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color32']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

.footer-container,
.footer-container .h3,
.footer-container .links .title .h3,
.footer-container a,
.footer-container li a,
.footer-container .links ul>li a {
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color33']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

.block_newsletter .btn-newsletter {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color34']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color82']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

.block_newsletter .btn-newsletter:hover {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color35']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color83']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

.footer-container .bottom-footer {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color36']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color37']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color38']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

.product-prices .current-price span.price {
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color39']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

.product-add-to-cart button.btn.add-to-cart:hover {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color43']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color44']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color45']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

.product-add-to-cart button.btn.add-to-cart,
.product-add-to-cart button.btn.add-to-cart:disabled {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color40']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color41']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color42']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

#product .tabs ul.nav-tabs li.nav-item a.active,
#product .tabs ul.nav-tabs li.nav-item a:hover,
#product .index_title span,
.page-product-heading span,
body #product-comments-list-header .comments-nb {
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color46']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

body .btn-primary:hover {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color50']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color51']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color52']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

body .btn-primary,
body .btn-primary.disabled,
body .btn-primary:disabled,
body .btn-primary.disabled:hover {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color47']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color48']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color49']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

body .btn-secondary:hover {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color56']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color57']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color58']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

body .btn-secondary,
body .btn-secondary.disabled,
body .btn-secondary:disabled,
body .btn-secondary.disabled:hover {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color53']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color54']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color55']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

.form-control:focus, .input-group.focus {
border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color72']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
outline-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color72']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

body .pagination .page-list .current a,
body .pagination .page-list a:hover,
body .pagination .page-list .current a.disabled,
body .pagination .page-list .current a.disabled:hover {
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color73']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

.page-my-account #content .links a:hover i {
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color74']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

#scroll_top {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color76']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color84']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

#scroll_top:hover,
#scroll_top:focus {
background: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color77']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color85']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
}

</style><?php }
}
