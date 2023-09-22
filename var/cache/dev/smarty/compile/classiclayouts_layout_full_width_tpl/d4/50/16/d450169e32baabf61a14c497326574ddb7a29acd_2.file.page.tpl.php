<?php
/* Smarty version 4.3.1, created on 2023-09-22 11:35:04
  from 'C:\xampp\htdocs\tune4style\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_650d6dd89c9780_92971893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd450169e32baabf61a14c497326574ddb7a29acd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tune4style\\themes\\classic\\templates\\page.tpl',
      1 => 1695376618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650d6dd89c9780_92971893 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1629748805650d6dd89c54c2_68887488', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_474941610650d6dd89c5d38_14864465 extends Smarty_Internal_Block
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
class Block_131691687650d6dd89c58e4_62196179 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_474941610650d6dd89c5d38_14864465', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1364162862650d6dd89c7e72_86296294 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_210137679650d6dd89c8365_03263392 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_559100032650d6dd89c7b11_21720636 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1364162862650d6dd89c7e72_86296294', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210137679650d6dd89c8365_03263392', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_843819784650d6dd89c8e02_78308369 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_362888920650d6dd89c8af8_29068754 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_843819784650d6dd89c8e02_78308369', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1629748805650d6dd89c54c2_68887488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1629748805650d6dd89c54c2_68887488',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_131691687650d6dd89c58e4_62196179',
  ),
  'page_title' => 
  array (
    0 => 'Block_474941610650d6dd89c5d38_14864465',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_559100032650d6dd89c7b11_21720636',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1364162862650d6dd89c7e72_86296294',
  ),
  'page_content' => 
  array (
    0 => 'Block_210137679650d6dd89c8365_03263392',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_362888920650d6dd89c8af8_29068754',
  ),
  'page_footer' => 
  array (
    0 => 'Block_843819784650d6dd89c8e02_78308369',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131691687650d6dd89c58e4_62196179', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_559100032650d6dd89c7b11_21720636', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_362888920650d6dd89c8af8_29068754', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
