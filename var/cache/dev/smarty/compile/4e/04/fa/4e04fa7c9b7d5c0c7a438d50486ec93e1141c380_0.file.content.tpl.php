<?php
/* Smarty version 4.3.1, created on 2023-09-22 10:46:23
  from 'C:\xampp\htdocs\tune4style\admin3355\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_650d626f927cf5_60796266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e04fa7c9b7d5c0c7a438d50486ec93e1141c380' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tune4style\\admin3355\\themes\\new-theme\\template\\content.tpl',
      1 => 1689838702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650d626f927cf5_60796266 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
