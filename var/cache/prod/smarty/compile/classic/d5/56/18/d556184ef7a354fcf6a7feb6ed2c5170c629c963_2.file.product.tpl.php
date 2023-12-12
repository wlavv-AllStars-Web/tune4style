<?php
/* Smarty version 4.3.1, created on 2023-12-12 10:14:01
  from '/opt/lampp/htdocs/tune4style/modules/ps_emailalerts/views/templates/hook/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65783269917654_20969262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd556184ef7a354fcf6a7feb6ed2c5170c629c963' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/modules/ps_emailalerts/views/templates/hook/product.tpl',
      1 => 1693619790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65783269917654_20969262 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tabs">
    <div class="js-mailalert text-center" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'ps_emailalerts','controller'=>'actions','params'=>array('process'=>'add')),$_smarty_tpl ) );?>
">
    <?php if (empty($_smarty_tpl->tpl_vars['has_notification']->value)) {?>
        <?php if (!empty($_smarty_tpl->tpl_vars['email']->value)) {?>
            <input class="form-control" type="email" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'your@email.com','d'=>'Modules.Emailalerts.Shop'),$_smarty_tpl ) );?>
"/>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['id_module']->value)) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'gdprContent', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'gdprContent') != '') {?>
               <div class="gdpr_consent_wrapper mt-1"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'gdprContent');?>
</div>
            <?php }?>
        <?php }?>
        <button
            data-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
            data-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
"
            class="btn btn-primary js-mailalert-add mt-1"
            rel="nofollow">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Notify me when available','d'=>'Modules.Emailalerts.Shop'),$_smarty_tpl ) );?>

        </button>
        <div class="js-mailalert-alerts"></div>
    <?php } else { ?>
        <article class="mt-1 alert alert-info" role="alert"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You will be notified when this product is available.','d'=>'Modules.Emailalerts.Shop'),$_smarty_tpl ) );?>
</article>
    <?php }?>
    </div>
</div>
<?php }
}
