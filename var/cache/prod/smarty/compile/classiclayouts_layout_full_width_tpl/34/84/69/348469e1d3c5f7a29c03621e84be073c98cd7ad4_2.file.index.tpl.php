<?php
/* Smarty version 4.3.1, created on 2023-12-12 10:13:50
  from '/opt/lampp/htdocs/tune4style/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6578325ea9f345_53981532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '348469e1d3c5f7a29c03621e84be073c98cd7ad4' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/themes/classic/templates/index.tpl',
      1 => 1678745894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6578325ea9f345_53981532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14000981066578325ea9e570_26534024', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_12737746136578325ea9e787_06739210 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_19022927936578325ea9ec13_88767561 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_14878891456578325ea9eaa4_93834592 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19022927936578325ea9ec13_88767561', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14000981066578325ea9e570_26534024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_14000981066578325ea9e570_26534024',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_12737746136578325ea9e787_06739210',
  ),
  'page_content' => 
  array (
    0 => 'Block_14878891456578325ea9eaa4_93834592',
  ),
  'hook_home' => 
  array (
    0 => 'Block_19022927936578325ea9ec13_88767561',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12737746136578325ea9e787_06739210', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14878891456578325ea9eaa4_93834592', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
