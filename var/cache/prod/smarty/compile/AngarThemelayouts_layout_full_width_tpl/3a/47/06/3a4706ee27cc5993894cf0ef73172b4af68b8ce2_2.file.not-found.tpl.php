<?php
/* Smarty version 4.3.1, created on 2023-12-20 11:57:31
  from '/opt/lampp/htdocs/tune4style/themes/AngarTheme/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6582d6ab84e758_23064827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a4706ee27cc5993894cf0ef73172b4af68b8ce2' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/themes/AngarTheme/templates/errors/not-found.tpl',
      1 => 1703072759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6582d6ab84e758_23064827 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/tune4style/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>

	<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['subcategories']->value)) {?>

	<?php } else { ?>
	<section id="content" class="page-content page-not-found">
	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1593694076582d6ab84c699_56285666', 'page_content');
?>

	</section>
	<?php }?>

<?php } else { ?>

	<section id="content" class="page-content page-not-found">
	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17622756956582d6ab84d8a1_29517990', 'page_content');
?>

	</section>

<?php }?>

<?php }
/* {block 'search'} */
class Block_5074296106582d6ab84cd67_97559915 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_4492979726582d6ab84d1d4_21954874 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_1593694076582d6ab84c699_56285666 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_1593694076582d6ab84c699_56285666',
  ),
  'search' => 
  array (
    0 => 'Block_5074296106582d6ab84cd67_97559915',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_4492979726582d6ab84d1d4_21954874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


		<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5074296106582d6ab84cd67_97559915', 'search', $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4492979726582d6ab84d1d4_21954874', 'hook_not_found', $this->tplIndex);
?>


	  <?php
}
}
/* {/block 'page_content'} */
/* {block 'search'} */
class Block_5666142866582d6ab84dda7_73026731 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_7823074546582d6ab84e166_62178887 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_17622756956582d6ab84d8a1_29517990 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_17622756956582d6ab84d8a1_29517990',
  ),
  'search' => 
  array (
    0 => 'Block_5666142866582d6ab84dda7_73026731',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_7823074546582d6ab84e166_62178887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


		<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5666142866582d6ab84dda7_73026731', 'search', $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7823074546582d6ab84e166_62178887', 'hook_not_found', $this->tplIndex);
?>


	  <?php
}
}
/* {/block 'page_content'} */
}
