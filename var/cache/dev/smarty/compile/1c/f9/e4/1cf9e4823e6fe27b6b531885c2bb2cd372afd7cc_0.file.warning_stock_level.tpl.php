<?php
/* Smarty version 4.3.1, created on 2023-12-12 12:17:06
  from '/opt/lampp/htdocs/tune4style/modules/bmsprocurement/views/templates/admin/replenishment_level/warning_stock_level.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65784f42eb4f21_72481567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cf9e4823e6fe27b6b531885c2bb2cd372afd7cc' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/modules/bmsprocurement/views/templates/admin/replenishment_level/warning_stock_level.tpl',
      1 => 1695724284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65784f42eb4f21_72481567 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input
        type="checkbox"
        value="1"
        data-textbox-id="warning_stock_level_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value,'htmlall','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute']->value,'htmlall','UTF-8' ));?>
"
        data-product-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value,'htmlall','UTF-8' ));?>
"
        data-attribute-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute']->value,'htmlall','UTF-8' ));?>
"
        data-field="use_default_warning_stock_level"
        onclick="toggleTextboxVisibilityFromCheckbox(this); saveReplenishmentSetting(this);"
        <?php if ($_smarty_tpl->tpl_vars['use_default_warning_stock_level']->value != "0") {?>checked<?php }?>
>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use default value','mod'=>'bmsprocurement'),$_smarty_tpl ) );?>
 : <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['default_warning_stock_level']->value,'htmlall','UTF-8' ));?>

<br>
<input
        <?php if ($_smarty_tpl->tpl_vars['use_default_warning_stock_level']->value != "0") {?>style="display:none;"<?php }?>
        type="text"
        id="warning_stock_level_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value,'htmlall','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute']->value,'htmlall','UTF-8' ));?>
"
        data-product-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value,'htmlall','UTF-8' ));?>
"
        data-attribute-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute']->value,'htmlall','UTF-8' ));?>
"
        data-field="warning_stock_level"
        onchange="saveReplenishmentSetting(this);"
        value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['warning_stock_level']->value,'htmlall','UTF-8' ));?>
"
>
<?php }
}
