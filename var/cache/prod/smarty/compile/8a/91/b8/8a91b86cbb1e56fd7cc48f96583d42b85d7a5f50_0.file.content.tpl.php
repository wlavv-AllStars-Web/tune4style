<?php
/* Smarty version 4.3.1, created on 2023-12-11 15:49:43
  from '/opt/lampp/htdocs/tune4style/admin3355/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65772f973ac882_49009722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a91b86cbb1e56fd7cc48f96583d42b85d7a5f50' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/admin3355/themes/new-theme/template/content.tpl',
      1 => 1695895954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65772f973ac882_49009722 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}