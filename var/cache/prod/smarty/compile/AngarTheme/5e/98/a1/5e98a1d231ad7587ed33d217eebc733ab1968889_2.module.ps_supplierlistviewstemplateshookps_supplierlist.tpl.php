<?php
/* Smarty version 4.3.1, created on 2023-12-20 11:57:25
  from 'module:ps_supplierlistviewstemplateshookps_supplierlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6582d6a5d2e492_87720313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e98a1d231ad7587ed33d217eebc733ab1968889' => 
    array (
      0 => 'module:ps_supplierlistviewstemplateshookps_supplierlist.tpl',
      1 => 1703072759,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_supplierlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars[\'supplier_display_type\']->value).".tpl' => 1,
  ),
),false)) {
function content_6582d6a5d2e492_87720313 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="search_filters_suppliers" class="block">
  <section class="facet">
        <div class="h6 text-uppercase facet-label">
      <?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?>
		<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
	  <?php } else { ?>
		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
	  <?php }?>
    </div>

    <div class="block_content <?php if ($_smarty_tpl->tpl_vars['suppliers']->value) {
} else { ?>no_brands<?php }?>">
      <?php if ($_smarty_tpl->tpl_vars['suppliers']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("module:ps_supplierlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars['supplier_display_type']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('suppliers'=>$_smarty_tpl->tpl_vars['suppliers']->value), 0, true);
?>
      <?php } else { ?>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No supplier','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
      <?php }?>
    </div>

  </section>
</div><?php }
}
