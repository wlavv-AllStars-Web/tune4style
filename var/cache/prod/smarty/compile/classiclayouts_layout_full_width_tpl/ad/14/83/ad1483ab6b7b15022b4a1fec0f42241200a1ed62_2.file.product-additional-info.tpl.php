<?php
/* Smarty version 4.3.1, created on 2023-12-12 10:14:01
  from '/opt/lampp/htdocs/tune4style/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6578326990a1f3_15430960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad1483ab6b7b15022b4a1fec0f42241200a1ed62' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1678745894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6578326990a1f3_15430960 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
