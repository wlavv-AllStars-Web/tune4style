<?php
/* Smarty version 4.3.1, created on 2023-09-22 11:35:06
  from 'C:\xampp\htdocs\tune4style\themes\classic\templates\_partials\notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_650d6dda2dc789_66068975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed535a653367c76e2494745e051d47b8730f5640' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tune4style\\themes\\classic\\templates\\_partials\\notifications.tpl',
      1 => 1695376618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650d6dda2dc789_66068975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['notifications']->value))) {?>
<aside id="notifications">
  <div class="notifications-container container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1212992588650d6dda2d69b6_36523493', 'notifications_error');
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1345944406650d6dda2d8533_52457726', 'notifications_warning');
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_788839513650d6dda2d9c46_68894412', 'notifications_success');
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1802006788650d6dda2db369_22799019', 'notifications_info');
?>

    <?php }?>
  </div>
</aside>
<?php }
}
/* {block 'notifications_error'} */
class Block_1212992588650d6dda2d69b6_36523493 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_error' => 
  array (
    0 => 'Block_1212992588650d6dda2d69b6_36523493',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-danger" role="alert" data-alert="danger">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['error'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_error'} */
/* {block 'notifications_warning'} */
class Block_1345944406650d6dda2d8533_52457726 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
    0 => 'Block_1345944406650d6dda2d8533_52457726',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-warning" role="alert" data-alert="warning">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['warning'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_warning'} */
/* {block 'notifications_success'} */
class Block_788839513650d6dda2d9c46_68894412 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_success' => 
  array (
    0 => 'Block_788839513650d6dda2d9c46_68894412',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-success" role="alert" data-alert="success">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['success'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_success'} */
/* {block 'notifications_info'} */
class Block_1802006788650d6dda2db369_22799019 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_info' => 
  array (
    0 => 'Block_1802006788650d6dda2db369_22799019',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-info" role="alert" data-alert="info">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['info'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_info'} */
}
