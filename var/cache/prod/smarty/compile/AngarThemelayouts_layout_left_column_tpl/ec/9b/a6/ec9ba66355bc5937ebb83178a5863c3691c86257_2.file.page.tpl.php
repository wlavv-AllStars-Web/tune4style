<?php
/* Smarty version 4.3.4, created on 2024-01-04 15:28:14
  from '/opt/lampp/htdocs/tune4style/themes/AngarTheme/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6596ce8e3ecd86_82756398',
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
function content_6596ce8e3ecd86_82756398 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12388285746596ce8e3eb2e6_66750738', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_14918797726596ce8e3eb6c2_07605010 extends Smarty_Internal_Block
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
class Block_13758530186596ce8e3eb4b0_55027060 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14918797726596ce8e3eb6c2_07605010', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_7433250566596ce8e3ec1c4_83956848 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_18003892206596ce8e3ec414_36117367 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_9962286566596ce8e3ec048_52129175 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7433250566596ce8e3ec1c4_83956848', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18003892206596ce8e3ec414_36117367', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_12176918026596ce8e3ec909_91838782 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_188802206596ce8e3ec799_27323049 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12176918026596ce8e3ec909_91838782', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_12388285746596ce8e3eb2e6_66750738 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12388285746596ce8e3eb2e6_66750738',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_13758530186596ce8e3eb4b0_55027060',
  ),
  'page_title' => 
  array (
    0 => 'Block_14918797726596ce8e3eb6c2_07605010',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_9962286566596ce8e3ec048_52129175',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_7433250566596ce8e3ec1c4_83956848',
  ),
  'page_content' => 
  array (
    0 => 'Block_18003892206596ce8e3ec414_36117367',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_188802206596ce8e3ec799_27323049',
  ),
  'page_footer' => 
  array (
    0 => 'Block_12176918026596ce8e3ec909_91838782',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13758530186596ce8e3eb4b0_55027060', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9962286566596ce8e3ec048_52129175', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188802206596ce8e3ec799_27323049', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
