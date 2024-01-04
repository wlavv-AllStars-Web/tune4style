<?php
/* Smarty version 4.3.4, created on 2024-01-04 16:58:36
  from '/opt/lampp/htdocs/tune4style/themes/AngarTheme/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6596e3bc1d5467_77665555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec9ba66355bc5937ebb83178a5863c3691c86257' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/themes/AngarTheme/templates/page.tpl',
      1 => 1703072759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6596e3bc1d5467_77665555 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11788654596596e3bc1d2db5_07467967', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_14769424116596e3bc1d31c0_93152919 extends Smarty_Internal_Block
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
class Block_11431534636596e3bc1d2f81_44874985 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14769424116596e3bc1d31c0_93152919', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_158364206596e3bc1d48a6_34768329 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_17008248366596e3bc1d4b01_80006900 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_10515576866596e3bc1d4705_90543165 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158364206596e3bc1d48a6_34768329', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17008248366596e3bc1d4b01_80006900', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_20504839076596e3bc1d4fd7_49290034 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_4555058126596e3bc1d4e72_92500703 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20504839076596e3bc1d4fd7_49290034', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_11788654596596e3bc1d2db5_07467967 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11788654596596e3bc1d2db5_07467967',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_11431534636596e3bc1d2f81_44874985',
  ),
  'page_title' => 
  array (
    0 => 'Block_14769424116596e3bc1d31c0_93152919',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_10515576866596e3bc1d4705_90543165',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_158364206596e3bc1d48a6_34768329',
  ),
  'page_content' => 
  array (
    0 => 'Block_17008248366596e3bc1d4b01_80006900',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_4555058126596e3bc1d4e72_92500703',
  ),
  'page_footer' => 
  array (
    0 => 'Block_20504839076596e3bc1d4fd7_49290034',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11431534636596e3bc1d2f81_44874985', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10515576866596e3bc1d4705_90543165', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4555058126596e3bc1d4e72_92500703', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
