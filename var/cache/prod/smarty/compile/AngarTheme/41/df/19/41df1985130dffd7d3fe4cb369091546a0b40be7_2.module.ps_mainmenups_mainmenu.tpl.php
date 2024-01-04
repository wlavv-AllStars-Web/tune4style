<?php
/* Smarty version 4.3.4, created on 2024-01-04 15:28:14
  from 'module:ps_mainmenups_mainmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6596ce8e4893c7_68425235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41df1985130dffd7d3fe4cb369091546a0b40be7' => 
    array (
      0 => 'module:ps_mainmenups_mainmenu.tpl',
      1 => 1703072759,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6596ce8e4893c7_68425235 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => '/opt/lampp/htdocs/tune4style/var/cache/prod/smarty/compile/AngarTheme/41/df/19/41df1985130dffd7d3fe4cb369091546a0b40be7_2.module.ps_mainmenups_mainmenu.tpl.php',
    'uid' => '41df1985130dffd7d3fe4cb369091546a0b40be7',
    'call_name' => 'smarty_template_function_menu_11906567916596ce8e481e31_36962236',
  ),
));
$_smarty_tpl->_assignInScope('_counter', 0);?>


<div class="menu js-top-menu position-static hidden-sm-down" id="_desktop_top_menu">
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('nodes'=>$_smarty_tpl->tpl_vars['menu']->value['children']), true);?>

    <div class="clearfix"></div>
</div>

<?php }
/* smarty_template_function_menu_11906567916596ce8e481e31_36962236 */
if (!function_exists('smarty_template_function_menu_11906567916596ce8e481e31_36962236')) {
function smarty_template_function_menu_11906567916596ce8e481e31_36962236(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0,'parent'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/tune4style/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>


      <ul class="top-menu container" <?php if ($_smarty_tpl->tpl_vars['depth']->value == 0) {?>id="top-menu"<?php }?> data-depth="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
">

		<?php if ($_smarty_tpl->tpl_vars['depth']->value == 0) {?>
			<li class="home_icon"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
"><i class="icon-home"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span></a></li>
		<?php }?>

	    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['nodes']->value)) {?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?>
				<li class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['type'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['node']->value['current']) {?> current <?php }?>" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['page_identifier'], ENT_QUOTES, 'UTF-8');?>
">
				<?php $_smarty_tpl->_assignInScope('_counter', $_smarty_tpl->tpl_vars['_counter']->value+1);?>
				  <a
					class="<?php if ($_smarty_tpl->tpl_vars['depth']->value >= 0) {?>dropdown-item<?php }
if ($_smarty_tpl->tpl_vars['depth']->value === 1) {?> dropdown-submenu<?php }
if (smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['children'])) {?> sf-with-ul<?php }?>"
					href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['url'], ENT_QUOTES, 'UTF-8');?>
" data-depth="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
"
					<?php if ($_smarty_tpl->tpl_vars['node']->value['open_in_new_window']) {?> target="_blank" <?php }?>
				  >
					<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
					  					  <?php $_smarty_tpl->_assignInScope('_expand_id', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'mt_rand' ][ 0 ], array( 10,100000 )));?>
					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add">&#xE313;</i>
						  <i class="material-icons remove">&#xE316;</i>
						</span>
					  </span>
					<?php }?>
					<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['label'], ENT_QUOTES, 'UTF-8');?>

				  </a>
				  <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
				  <div <?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?> class="popover sub-menu js-sub-menu collapse"<?php } else { ?> class="collapse"<?php }?> id="top_sub_menu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
">
					<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['node']->value['depth'],'parent'=>$_smarty_tpl->tpl_vars['node']->value), true);?>

					<?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?>
						<?php if ($_smarty_tpl->tpl_vars['node']->value['type'] == 'category') {?>
							<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['image_urls'])) {?>
								<div class="menu-images-container">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['image_urls'], 'image_url');
$_smarty_tpl->tpl_vars['image_url']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_url']->value) {
$_smarty_tpl->tpl_vars['image_url']->do_else = false;
?>
										<img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
">
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<div class="clearfix"></div>
								</div>
							<?php }?>
						<?php }?>
					<?php }?>
				  </div>
				  <?php }?>
				</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		<?php }?>

      </ul>

<?php
}}
/*/ smarty_template_function_menu_11906567916596ce8e481e31_36962236 */
}
