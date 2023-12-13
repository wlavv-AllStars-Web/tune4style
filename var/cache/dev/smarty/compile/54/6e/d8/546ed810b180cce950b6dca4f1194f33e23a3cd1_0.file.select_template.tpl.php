<?php
/* Smarty version 4.3.1, created on 2023-12-12 12:09:00
  from '/opt/lampp/htdocs/tune4style/modules/bmsprocurement/views/templates/admin/suppliers/select_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65784d5c573fe5_10823374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '546ed810b180cce950b6dca4f1194f33e23a3cd1' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/modules/bmsprocurement/views/templates/admin/suppliers/select_template.tpl',
      1 => 1695724284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65784d5c573fe5_10823374 (Smarty_Internal_Template $_smarty_tpl) {
?> <div id="content" class="bootstrap" style="margin-left:0px;padding:0px">
	<div class="panel" style="width:500px">
		<div class="row">
			<div class="col-lg-9">
   				<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select a supplier','mod'=>'bmsprocurement'),$_smarty_tpl ) );?>
</h3>
   				<select id="supplier">
       				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrSuppliers']->value, 'supplier');
$_smarty_tpl->tpl_vars['supplier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->do_else = false;
?>
            			<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],'htmlall','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['supplier']->value['name'],'htmlall','UTF-8' ));?>
</option>
       				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   				</select>
			</div>  
			<div class="col-lg-3">
			   				<button class="btn btn-primary" style="margin-top: 25px;" onclick="submitSupplier()"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit','mod'=>'bmsprocurement'),$_smarty_tpl ) );?>
</button>
			
			</div>
		</div>  
	</div>  
</div>  

<?php echo '<script'; ?>
>
function submitSupplier(){

	location.href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Context::getContext()->link->getAdminLink('AdminProcurementPurchaseOrder'),'quotes','UTF-8' ));?>
&supplier_id=" + $('#supplier option:checked').val() + "&createPO&addbms_procurement_purchase_order";
}
<?php echo '</script'; ?>
>
<?php }
}
