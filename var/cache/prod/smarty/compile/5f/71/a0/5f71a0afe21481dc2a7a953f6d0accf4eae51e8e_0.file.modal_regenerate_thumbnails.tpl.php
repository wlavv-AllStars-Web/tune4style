<?php
/* Smarty version 4.3.1, created on 2023-12-12 10:14:58
  from '/opt/lampp/htdocs/tune4style/admin3355/themes/default/template/controllers/images/modal_regenerate_thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_657832a2661e03_70809878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f71a0afe21481dc2a7a953f6d0accf4eae51e8e' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/admin3355/themes/default/template/controllers/images/modal_regenerate_thumbnails.tpl',
      1 => 1695895954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657832a2661e03_70809878 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Regenerate thumbnails for the selected images? With the \"erase\" option enabled, the previously selected thumbnails will be deleted.",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>

</div>
<?php }
}
