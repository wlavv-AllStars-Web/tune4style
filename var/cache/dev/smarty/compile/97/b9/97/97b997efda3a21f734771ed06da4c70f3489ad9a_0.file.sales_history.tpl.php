<?php
/* Smarty version 4.3.1, created on 2023-12-12 12:17:02
  from '/opt/lampp/htdocs/tune4style/modules/bmsprocurement/views/templates/admin/common/sales_history.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65784f3e4fd2a5_13861716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97b997efda3a21f734771ed06da4c70f3489ad9a' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/modules/bmsprocurement/views/templates/admin/common/sales_history.tpl',
      1 => 1695724284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65784f3e4fd2a5_13861716 (Smarty_Internal_Template $_smarty_tpl) {
?>
<center>
    <div id="div_sales_history_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value,'htmlall','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute']->value,'htmlall','UTF-8' ));?>
">

        <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hasSales']->value,'htmlall','UTF-8' ))) {?>
            <table border="1" cellspacing="0">
                <tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ranges']->value, 'range');
$_smarty_tpl->tpl_vars['range']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['range']->value) {
$_smarty_tpl->tpl_vars['range']->do_else = false;
?>
                        <td align="center" style="font-size: 10px"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['range']->value['label'],'htmlall','UTF-8' ));?>
</td>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tr>
                <tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ranges']->value, 'range');
$_smarty_tpl->tpl_vars['range']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['range']->value) {
$_smarty_tpl->tpl_vars['range']->do_else = false;
?>
                        <td align="center" style="font-size: 10px"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['range']->value['sales_count'],'htmlall','UTF-8' ));?>
</td>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tr>
            </table>

            <p>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Avg sales per day','mod'=>'bmsprocurement'),$_smarty_tpl ) );?>
 : <b><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['avg']->value,'htmlall','UTF-8' ));?>
</b>
                <?php if ($_smarty_tpl->tpl_vars['runout']->value > call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( 0,'htmlall','UTF-8' ))) {?>
                    <br> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Run out','mod'=>'bmsprocurement'),$_smarty_tpl ) );?>
 in <b><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['runout']->value,'htmlall','UTF-8' ));?>
</b> days
                <?php }?>
            </p>
        <?php } else { ?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No sales found','mod'=>'bmsprocurement'),$_smarty_tpl ) );?>

        <?php }?>

    </div>
</center><?php }
}
