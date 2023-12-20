<?php
/* Smarty version 4.3.1, created on 2023-12-20 11:57:25
  from '/opt/lampp/htdocs/tune4style/modules/angarcmsdesc/views/templates/front/angarcmsdesc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6582d6a5e40a89_48931279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b1dc1b17b5361688884ea244801bbe83b6493aa' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/modules/angarcmsdesc/views/templates/front/angarcmsdesc.tpl',
      1 => 1703072759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6582d6a5e40a89_48931279 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/tune4style/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?>
<!-- MODULE Block cmsinfo -->
<div id="angarinfo_desc">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'info2');
$_smarty_tpl->tpl_vars['info2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info2']->value) {
$_smarty_tpl->tpl_vars['info2']->do_else = false;
?>
		<div class="desc_block"><?php echo $_smarty_tpl->tpl_vars['info2']->value['text'];?>
 </div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<!-- /MODULE Block cmsinfo -->
<?php }
}
}
