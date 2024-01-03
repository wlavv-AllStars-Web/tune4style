<?php
/* Smarty version 4.3.1, created on 2024-01-02 16:58:39
  from '/opt/lampp/htdocs/tune4style/modules/angarcontact/views/templates/front/angarcontact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_659440bfa9bf58_42963356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c3a70a96f97127612ecef0ab40bb1dbbb35d234' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/modules/angarcontact/views/templates/front/angarcontact.tpl',
      1 => 1703072759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659440bfa9bf58_42963356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/tune4style/vendor/smarty/smarty/libs/plugins/function.mailto.php','function'=>'smarty_function_mailto',),));
?>
<div class="block-contact col-md-3 links wrapper">
  <div class="h3 block-contact-title hidden-sm-down">
    <a class="text-uppercase" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact','mod'=>'angarcontact'),$_smarty_tpl ) );?>

    </a>
  </div>
  <div class="title clearfix hidden-md-up" data-target="#footer_contact" data-toggle="collapse">
    <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact','mod'=>'angarcontact'),$_smarty_tpl ) );?>
</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_contact">
    <?php if ($_smarty_tpl->tpl_vars['angarcontact_company']->value != '') {?><li><?php echo $_smarty_tpl->tpl_vars['angarcontact_company']->value;?>
 </li><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['angarcontact_address']->value != '') {?><li><?php echo $_smarty_tpl->tpl_vars['angarcontact_address']->value;?>
 </li><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['angarcontact_phone']->value != '') {?><li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone:','mod'=>'angarcontact'),$_smarty_tpl ) );?>
 <strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['angarcontact_phone']->value, ENT_QUOTES, 'UTF-8');?>
</strong></li><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['angarcontact_whatsapp']->value != '') {?><li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'WhatsApp:','mod'=>'angarcontact'),$_smarty_tpl ) );?>
 <strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['angarcontact_whatsapp']->value, ENT_QUOTES, 'UTF-8');?>
</strong></li><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['angarcontact_email']->value != '') {?><li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email:','mod'=>'angarcontact'),$_smarty_tpl ) );?>
 <strong><?php echo smarty_function_mailto(array('address'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['angarcontact_email']->value,'html','UTF-8' )),'encode'=>"hex"),$_smarty_tpl);?>
</strong></li><?php }?>
  </ul>
</div><?php }
}
