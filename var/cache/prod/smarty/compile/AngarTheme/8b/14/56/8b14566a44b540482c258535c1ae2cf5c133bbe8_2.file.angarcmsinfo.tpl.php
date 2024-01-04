<?php
/* Smarty version 4.3.4, created on 2024-01-04 16:58:36
  from '/opt/lampp/htdocs/tune4style/modules/angarcmsinfo/views/templates/front/angarcmsinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6596e3bc2cbf18_40516476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b14566a44b540482c258535c1ae2cf5c133bbe8' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/modules/angarcmsinfo/views/templates/front/angarcmsinfo.tpl',
      1 => 1703072759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6596e3bc2cbf18_40516476 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/tune4style/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?>
<!-- MODULE Block cmsinfo -->
<div id="angarinfo_block">
	<div class="container">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'info2');
$_smarty_tpl->tpl_vars['info2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info2']->value) {
$_smarty_tpl->tpl_vars['info2']->do_else = false;
?>
			<div class="col-xs-3"><?php echo $_smarty_tpl->tpl_vars['info2']->value['text'];?>
 </div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div>
<!-- /MODULE Block cmsinfo -->
<?php }
}
}
