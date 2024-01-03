<?php
/* Smarty version 4.3.1, created on 2024-01-02 16:58:39
  from '/opt/lampp/htdocs/tune4style/themes/AngarTheme/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_659440bf9b8c14_74578407',
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
function content_659440bf9b8c14_74578407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1492683898659440bf9b7215_17899004', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_268113513659440bf9b75e4_93751007 extends Smarty_Internal_Block
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
class Block_430208888659440bf9b73d2_44478071 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_268113513659440bf9b75e4_93751007', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_495732023659440bf9b8086_05767007 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_879017742659440bf9b82e3_06219635 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1284072444659440bf9b7ef0_50154381 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_495732023659440bf9b8086_05767007', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_879017742659440bf9b82e3_06219635', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_454692179659440bf9b87b1_87962164 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_554948500659440bf9b8651_29221879 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_454692179659440bf9b87b1_87962164', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1492683898659440bf9b7215_17899004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1492683898659440bf9b7215_17899004',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_430208888659440bf9b73d2_44478071',
  ),
  'page_title' => 
  array (
    0 => 'Block_268113513659440bf9b75e4_93751007',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1284072444659440bf9b7ef0_50154381',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_495732023659440bf9b8086_05767007',
  ),
  'page_content' => 
  array (
    0 => 'Block_879017742659440bf9b82e3_06219635',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_554948500659440bf9b8651_29221879',
  ),
  'page_footer' => 
  array (
    0 => 'Block_454692179659440bf9b87b1_87962164',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_430208888659440bf9b73d2_44478071', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1284072444659440bf9b7ef0_50154381', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_554948500659440bf9b8651_29221879', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
