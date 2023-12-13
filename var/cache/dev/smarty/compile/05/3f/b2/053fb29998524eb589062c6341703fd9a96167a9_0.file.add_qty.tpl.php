<?php
/* Smarty version 4.3.1, created on 2023-12-12 12:16:30
  from '/opt/lampp/htdocs/tune4style/modules/bmsprocurement/views/templates/admin/supplyNeeds/add_qty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65784f1e97c8f5_12585591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '053fb29998524eb589062c6341703fd9a96167a9' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/modules/bmsprocurement/views/templates/admin/supplyNeeds/add_qty.tpl',
      1 => 1695724284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65784f1e97c8f5_12585591 (Smarty_Internal_Template $_smarty_tpl) {
?> 	<input type='button' onclick="setQte('qty<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value,'htmlall','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute']->value,'htmlall','UTF-8' ));?>
',<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['qty_min']->value,'htmlall','UTF-8' ));?>
)" value="Min"/>
	<input style="display:inline;width: 23px;padding: 4px;" type="text" id="qty<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value,'htmlall','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute']->value,'htmlall','UTF-8' ));?>
" name="qtyNeed[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value,'htmlall','UTF-8' ));?>
][<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute']->value,'htmlall','UTF-8' ));?>
]" data-id-product="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value,'htmlall','UTF-8' ));?>
" data-id-attribute="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute']->value,'htmlall','UTF-8' ));?>
"  value="0">
	<input type='button' onclick="setQte('qty<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value,'htmlall','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute']->value,'htmlall','UTF-8' ));?>
',<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['qty_max']->value,'htmlall','UTF-8' ));?>
)" value="Max"/>
<?php }
}
