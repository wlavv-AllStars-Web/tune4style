<?php
/* Smarty version 4.3.1, created on 2023-12-13 14:58:35
  from '/opt/lampp/htdocs/tune4style/themes/classic/templates/catalog/_partials/category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6579c69b0efe61_07420661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02d3d45e9ba5f2514b0f23c2c678369563a94b72' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/themes/classic/templates/catalog/_partials/category-footer.tpl',
      1 => 1678745894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6579c69b0efe61_07420661 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-footer">
    <?php if ((isset($_smarty_tpl->tpl_vars['category']->value)) && $_smarty_tpl->tpl_vars['category']->value['additional_description'] && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="card">
            <div class="card-block category-additional-description">
                <?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

            </div>
        </div>
    <?php }?>
</div>
<?php }
}
