<?php
/* Smarty version 4.3.1, created on 2023-12-20 11:57:25
  from '/opt/lampp/htdocs/tune4style/themes/AngarTheme/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6582d6a5c2be65_06838012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8ee98f283a28062345af70e21f5f3f0139a0dee' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/themes/AngarTheme/templates/index.tpl',
      1 => 1703072759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6582d6a5c2be65_06838012 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14212820226582d6a5c28de0_70549064', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_19259982086582d6a5c29c16_19566895 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_16316964676582d6a5c2a0b5_28860807 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_assignInScope('HOOK_HOME_TAB_CONTENT', Hook::exec('displayHomeTabContent'));?>
          <?php $_smarty_tpl->_assignInScope('HOOK_HOME_TAB', Hook::exec('displayHomeTab'));?>
          <?php if ((isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value ))) {?>
            <div class="tabs">
                <?php if ((isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value ))) {?>
                    <ul id="home-page-tabs" class="nav nav-tabs clearfix">
                        <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

                    </ul>
                <?php }?>
                <div class="tab-content" id="tab-content"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</div>
            </div>
          <?php }?>

		  <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>


        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14212820226582d6a5c28de0_70549064 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_14212820226582d6a5c28de0_70549064',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_19259982086582d6a5c29c16_19566895',
  ),
  'page_content' => 
  array (
    0 => 'Block_16316964676582d6a5c2a0b5_28860807',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">

		<?php if ($_smarty_tpl->tpl_vars['css7']->value == 'slider_position_column') {?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
			<div id="slider_row">
				<div id="top_column"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayTopColumn"),$_smarty_tpl ) );?>
</div>
				<div class="clearfix"></div>
			</div>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'angarHomeCat'),$_smarty_tpl ) );?>

			<?php }?>
		<?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19259982086582d6a5c29c16_19566895', 'page_content_top', $this->tplIndex);
?>
  
    
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAngarAboveTabs'),$_smarty_tpl ) );?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16316964676582d6a5c2a0b5_28860807', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}