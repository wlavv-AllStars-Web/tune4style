<?php
/* Smarty version 4.3.4, created on 2024-01-04 16:58:36
  from '/opt/lampp/htdocs/tune4style/themes/AngarTheme/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6596e3bc2cf9c9_11076469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5bf721cbe886d788f5d1205a1bd8dbe9bf2a93e' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/themes/AngarTheme/templates/_partials/footer.tpl',
      1 => 1704386691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6596e3bc2cf9c9_11076469 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="container">
  <div class="row">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2001502786596e3bc2cdd80_38033176', 'hook_footer_before');
?>

  </div>
</div>

<div class="footer-container">

  <div class="container">

    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18763812126596e3bc2ce369_10085602', 'hook_footer');
?>

    </div>

    <div class="social_footer">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2626434186596e3bc2ce7a4_57258807', 'hook_footer_after');
?>

    </div>

  </div>
 
  <div class="bottom-footer" align="center" style="padding-bottom: 22px;padding-top: 22px;">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10790380166596e3bc2ceb94_25647665', 'copyright_link');
?>

  </div>

</div>
<?php }
/* {block 'hook_footer_before'} */
class Block_2001502786596e3bc2cdd80_38033176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_2001502786596e3bc2cdd80_38033176',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_18763812126596e3bc2ce369_10085602 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_18763812126596e3bc2ce369_10085602',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_2626434186596e3bc2ce7a4_57258807 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_2626434186596e3bc2ce7a4_57258807',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_10790380166596e3bc2ceb94_25647665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_10790380166596e3bc2ceb94_25647665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% Copyright %year% %shop_name%. All Rights Reserved.','sprintf'=>array('%shop_name%'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['name'],'html','UTF-8' )),'%year%'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( 'Y' )),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'copyright_link'} */
}
