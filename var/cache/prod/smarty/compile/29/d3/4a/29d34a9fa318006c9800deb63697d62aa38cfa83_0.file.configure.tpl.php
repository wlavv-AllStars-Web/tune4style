<?php
/* Smarty version 4.3.1, created on 2023-12-13 10:56:19
  from '/opt/lampp/htdocs/tune4style/modules/bmsprocurement/views/templates/admin/configure/configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65798dd31adc74_39048293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29d34a9fa318006c9800deb63697d62aa38cfa83' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/modules/bmsprocurement/views/templates/admin/configure/configure.tpl',
      1 => 1695724284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65798dd31adc74_39048293 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

	$(document).ready(function(){
		//$(".fancybox").fancybox({width:'auto'});
		checkoutIframe();
	});

<?php echo '</script'; ?>
>
<div class="panel">
    <h3><i class="icon icon-calendar"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Supplier','mod'=>'bmsprocurement'),$_smarty_tpl ) );?>
</h3>
    <ul>
    	<li><a class="fancybox" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Context::getContext()->link->getAdminLink('AdminProcurementPaymentTerm',true),'htmlall','UTF-8' ));?>
&liteDisplaying=1" data-fancybox-type="iframe"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure payment conditions','mod'=>'bmsprocurement'),$_smarty_tpl ) );?>
</a></li>
    	<li><a class="fancybox" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Context::getContext()->link->getAdminLink('AdminProcurementPaymentMethod',true),'htmlall','UTF-8' ));?>
&liteDisplaying=1" data-fancybox-type="iframe"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure payment methods','mod'=>'bmsprocurement'),$_smarty_tpl ) );?>
</a></li>

    </ul>
</div>
<?php }
}
