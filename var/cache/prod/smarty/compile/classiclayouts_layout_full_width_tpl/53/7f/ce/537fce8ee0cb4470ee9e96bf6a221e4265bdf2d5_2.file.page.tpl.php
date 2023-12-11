<?php
/* Smarty version 4.3.1, created on 2023-12-11 16:31:43
  from '/opt/lampp/htdocs/tune4style/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6577396f58e166_07016028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '537fce8ee0cb4470ee9e96bf6a221e4265bdf2d5' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/themes/classic/templates/page.tpl',
      1 => 1678745894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6577396f58e166_07016028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3581039256577396f58c599_46799489', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_17757426666577396f58c993_22712179 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_13176858706577396f58c771_25522391 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17757426666577396f58c993_22712179', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_13371559016577396f58d587_10332366 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_20485884256577396f58d7e1_91173006 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_11543248566577396f58d3f9_92656604 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13371559016577396f58d587_10332366', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20485884256577396f58d7e1_91173006', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_4761077196577396f58dce1_56799285 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_15542049136577396f58db76_92401334 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4761077196577396f58dce1_56799285', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_3581039256577396f58c599_46799489 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3581039256577396f58c599_46799489',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_13176858706577396f58c771_25522391',
  ),
  'page_title' => 
  array (
    0 => 'Block_17757426666577396f58c993_22712179',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_11543248566577396f58d3f9_92656604',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_13371559016577396f58d587_10332366',
  ),
  'page_content' => 
  array (
    0 => 'Block_20485884256577396f58d7e1_91173006',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_15542049136577396f58db76_92401334',
  ),
  'page_footer' => 
  array (
    0 => 'Block_4761077196577396f58dce1_56799285',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13176858706577396f58c771_25522391', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11543248566577396f58d3f9_92656604', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15542049136577396f58db76_92401334', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
