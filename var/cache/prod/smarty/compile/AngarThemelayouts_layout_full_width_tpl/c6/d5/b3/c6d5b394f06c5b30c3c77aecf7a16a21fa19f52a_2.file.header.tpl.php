<?php
/* Smarty version 4.3.1, created on 2023-12-20 11:57:31
  from '/opt/lampp/htdocs/tune4style/themes/AngarTheme/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6582d6ab82f9f3_73117930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6d5b394f06c5b30c3c77aecf7a16a21fa19f52a' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/themes/AngarTheme/templates/_partials/header.tpl',
      1 => 1703072759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6582d6ab82f9f3_73117930 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7806611406582d6ab82c8c6_55731208', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14818902626582d6ab82ce12_46462580', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7522976116582d6ab82d3d7_94924214', 'header_top');
}
/* {block 'header_banner'} */
class Block_7806611406582d6ab82c8c6_55731208 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_7806611406582d6ab82c8c6_55731208',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_14818902626582d6ab82ce12_46462580 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_14818902626582d6ab82ce12_46462580',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav">
    <div class="container">
      <div class="row">
          <div class="col-md-12 col-xs-12">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>


            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

          </div>
      </div>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_7522976116582d6ab82d3d7_94924214 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_7522976116582d6ab82d3d7_94924214',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <div class="container">
	  <div class="row">
        <div class="col-md-4 hidden-sm-down2" id="_desktop_logo">
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
              <h1>
                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                  <img class="logo img-responsive" src="<?php if (!strstr($_smarty_tpl->tpl_vars['shop']->value['logo'],"/")) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                </a>
              </h1>
            <?php } else { ?>
                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                  <img class="logo img-responsive" src="<?php if (!strstr($_smarty_tpl->tpl_vars['shop']->value['logo'],"/")) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                </a>
            <?php }?>
        </div>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

		<div class="clearfix"></div>
	  </div>
    </div>

	<div id="rwd_menu" class="hidden-md-up">
		<div class="container">
			<div id="menu-icon2" class="rwd_menu_item"><i class="material-icons d-inline">&#xE5D2;</i></div>
			<div id="search-icon" class="rwd_menu_item"><i class="material-icons search">&#xE8B6;</i></div>
			<div id="user-icon" class="rwd_menu_item"><i class="material-icons logged">&#xE7FF;</i></div>
			<div id="_mobile_cart" class="rwd_menu_item"></div>
		</div>
		<div class="clearfix"></div>
	</div>

	<div class="container">
		<div id="mobile_top_menu_wrapper2" class="rwd_menu_open hidden-md-up" style="display:none;">
			<div class="js-top-menu mobile" id="_mobile_top_menu"></div>
		</div>

		<div id="mobile_search_wrapper" class="rwd_menu_open hidden-md-up" style="display:none;">
			<div id="_mobile_search_widget"></div>
		</div>

		<div id="mobile_user_wrapper" class="rwd_menu_open hidden-md-up" style="display:none;">
			<div id="_mobile_user_info"></div>
		</div>
	</div>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}