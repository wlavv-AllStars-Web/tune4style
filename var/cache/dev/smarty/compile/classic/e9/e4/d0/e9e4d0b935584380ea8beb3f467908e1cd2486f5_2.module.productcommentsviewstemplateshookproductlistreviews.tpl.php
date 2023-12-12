<?php
/* Smarty version 4.3.1, created on 2023-12-12 11:32:36
  from 'module:productcommentsviewstemplateshookproductlistreviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_657844d4b15d92_57894513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9e4d0b935584380ea8beb3f467908e1cd2486f5' => 
    array (
      0 => 'module:productcommentsviewstemplateshookproductlistreviews.tpl',
      1 => 1693386896,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657844d4b15d92_57894513 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /opt/lampp/htdocs/tune4style/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['product_comment_grade_url']->value;?>
">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>
<!-- end /opt/lampp/htdocs/tune4style/modules/productcomments/views/templates/hook/product-list-reviews.tpl --><?php }
}
