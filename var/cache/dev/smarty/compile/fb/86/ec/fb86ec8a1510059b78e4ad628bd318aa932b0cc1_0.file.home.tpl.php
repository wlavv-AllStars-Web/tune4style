<?php
/* Smarty version 4.3.1, created on 2023-12-12 12:09:00
  from '/opt/lampp/htdocs/tune4style/modules/bmsprocurement/views/templates/admin/homeProcurement/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65784d5c57a5d4_48040567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb86ec8a1510059b78e4ad628bd318aa932b0cc1' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/modules/bmsprocurement/views/templates/admin/homeProcurement/home.tpl',
      1 => 1695724284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65784d5c57a5d4_48040567 (Smarty_Internal_Template $_smarty_tpl) {
?>
 
 <div class="panel">
	<div class="form-wrapper">
  		<ul class="nav nav-tabs">
    		<li><a href="#dashboard" data-toggle="tab" data-noRefresh='false' data-href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Context::getContext()->link->getAdminLink('AdminProcurementHome'),'htmlall','UTF-8' ));?>
&liteDisplaying=1&home=1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Dashboard','mod'=>'bmsprocurement'),$_smarty_tpl ) );?>
</a></li>
    		<li><a href="#supplier" data-toggle="tab" data-noRefresh='false' data-href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Context::getContext()->link->getAdminLink('AdminProcurementSuppliers'),'htmlall','UTF-8' ));?>
&liteDisplaying=1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','mod'=>'bmsprocurement'),$_smarty_tpl ) );?>
</a></li>
    		<li><a href="#order" data-toggle="tab" data-noRefresh='false' data-href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Context::getContext()->link->getAdminLink('AdminProcurementPurchaseOrder'),'htmlall','UTF-8' ));?>
&liteDisplaying=1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Purchase orders','mod'=>'bmsprocurement'),$_smarty_tpl ) );?>
</a></li>
    		<li><a href="#product" data-toggle="tab" data-href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Context::getContext()->link->getAdminLink('AdminProcurementProductToReceiveTab'),'htmlall','UTF-8' ));?>
&liteDisplaying=1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products to receive','mod'=>'bmsprocurement'),$_smarty_tpl ) );?>
</a></li>
    		<li><a href="#supply" data-toggle="tab" data-noRefresh='false' data-href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Context::getContext()->link->getAdminLink('AdminProcurementSupplyNeedsTab'),'htmlall','UTF-8' ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Supply needs','mod'=>'bmsprocurement'),$_smarty_tpl ) );?>
</a></li>
    		<li><a href="#replenishment" data-toggle="tab" data-noRefresh='false' data-href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Context::getContext()->link->getAdminLink('AdminProcurementReplenishmentLevelTab'),'htmlall','UTF-8' ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stock replenishment levels','mod'=>'bmsprocurement'),$_smarty_tpl ) );?>
</a></li>
  		</ul>
		<div class="tab-content panel">
  			<div id="dashboard" data-tab-id="dashboard" class="tab-pane active"><iframe id="dashboardFrame" frameborder= '0' scrolling= 'no' width= '100%' onload="resizeIframe(this)"  src=""></iframe></div>  
  			<div id="supplier" data-tab-id="supplier" class="tab-pane"><iframe id="supplierFrame" frameborder= '0' scrolling= 'no' width= '100%' onload="resizeIframe(this)"  src=""></iframe></div>  
  			<div id="order" data-tab-id="order" class="tab-pane"><iframe id="orderFrame" frameborder= '0' scrolling= 'no' width= '100%' onload="resizeIframe(this)"  src=""></iframe></div>  
  			<div id="product" data-tab-id="product" class="tab-pane"><iframe id="productFrame" frameborder= '0' scrolling= 'no' width= '100%' onload="resizeIframe(this)"  src=""></iframe></div>  
  			<div id="supply" data-tab-id="supply" class="tab-pane"><iframe id="supplyFrame" frameborder= '0' scrolling= 'no' width= '100%' onload="resizeIframe(this)"  src=""></iframe> </div>  
  			<div id="replenishment" data-tab-id="replenishment" class="tab-pane"><iframe id="replenishmentFrame" frameborder= '0' scrolling= 'no' width= '100%' onload="resizeIframe(this)"  src=""></iframe> </div>
		</div>
	</div>
</div>

<div id='supplierSelect' style="display:none">
	<?php echo $_smarty_tpl->tpl_vars['supplierSelectTemplate']->value;?>

</div>
<?php }
}
