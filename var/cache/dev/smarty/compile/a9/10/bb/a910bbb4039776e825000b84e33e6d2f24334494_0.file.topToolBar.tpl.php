<?php
/* Smarty version 4.3.1, created on 2023-12-12 12:16:30
  from '/opt/lampp/htdocs/tune4style/modules/bmsprocurement/views/templates/admin/supplyNeeds/topToolBar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65784f1e924623_08034264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a910bbb4039776e825000b84e33e6d2f24334494' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/modules/bmsprocurement/views/templates/admin/supplyNeeds/topToolBar.tpl',
      1 => 1695724284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65784f1e924623_08034264 (Smarty_Internal_Template $_smarty_tpl) {
?> <div class="panel">
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tools','mod'=>'bmsprocurement'),$_smarty_tpl ) );?>
</h3>
	<div class="row">
        <div class="col-md-1">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Supplier','mod'=>'bmsprocurement'),$_smarty_tpl ) );?>

        </div>
        <div class="col-md-3">
            <select id="supplier" onchange="selectCurrentSupplier(this);">
                <option></option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrSuppliers']->value, 'supplier');
$_smarty_tpl->tpl_vars['supplier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->do_else = false;
?>
                    <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],'htmlall','UTF-8' ));?>
" <?php if ($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'] == $_smarty_tpl->tpl_vars['currentSupplierId']->value) {?> selected <?php }?>>
                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['supplier']->value['name'],'htmlall','UTF-8' ));?>

                    </option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div class="col-md-4" align="center">
            <button id="min" class="btn btn-default"><i class="icon-minus"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All min qties','mod'=>'bmsprocurement'),$_smarty_tpl ) );?>
</button>
            &nbsp;
            <button id="max" class="btn btn-default"><i class="icon-plus"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All max qties','mod'=>'bmsprocurement'),$_smarty_tpl ) );?>
</button>
        </div>
        <div class="col-md-4" align="right">
            <button onclick="createPO('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Context::getContext()->link->getAdminLink('AdminProcurementPurchaseOrder'),'htmlall','UTF-8' ));?>
&isFromSuppplyNeeds=1&createPO&supplier_id=' + $('#supplier option:checked').val() + '&addbms_procurement_purchase_order', '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select a supplier','mod'=>'bmsprocurement'),$_smarty_tpl ) );?>
');" class="btn btn-default"><i class="icon-save"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create new PO','mod'=>'bmsprocurement'),$_smarty_tpl ) );?>
</button>
        </div>
		</div>
	</div>
</div><?php }
}
