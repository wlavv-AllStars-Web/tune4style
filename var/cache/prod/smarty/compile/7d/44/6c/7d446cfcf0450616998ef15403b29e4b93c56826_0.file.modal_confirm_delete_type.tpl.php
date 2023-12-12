<?php
/* Smarty version 4.3.1, created on 2023-12-12 10:14:58
  from '/opt/lampp/htdocs/tune4style/admin3355/themes/default/template/controllers/images/modal_confirm_delete_type.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_657832a2664189_83487580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d446cfcf0450616998ef15403b29e4b93c56826' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/admin3355/themes/default/template/controllers/images/modal_confirm_delete_type.tpl',
      1 => 1695895954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657832a2664189_83487580 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body">
  <div class="form-group">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"If you delete this image format, the theme won't be able to use it anymore. This will result in a degraded experience on your front office.",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>

  </div>

  <div class="modal-checkbox">
    <input type="checkbox" id="delete_linked_images" name="delete">
    <label for="delete_linked_images"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Delete the images linked to this image setting",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>
</label>
  </div>
</div>
<?php }
}
