<?php
/* Smarty version 4.3.1, created on 2024-01-03 09:05:21
  from 'module:ps_categorytreeviewstemplateshookps_categorytree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_659523517402d4_59474375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8921007f54626fc7fe42cbff53f1d70828d3393d' => 
    array (
      0 => 'module:ps_categorytreeviewstemplateshookps_categorytree.tpl',
      1 => 1703072759,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659523517402d4_59474375 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories' => 
  array (
    'compiled_filepath' => '/opt/lampp/htdocs/tune4style/var/cache/prod/smarty/compile/AngarTheme/89/21/00/8921007f54626fc7fe42cbff53f1d70828d3393d_2.module.ps_categorytreeviewstemplateshookps_categorytree.tpl.php',
    'uid' => '8921007f54626fc7fe42cbff53f1d70828d3393d',
    'call_name' => 'smarty_template_function_categories_143182007765952351739c49_28966999',
  ),
));
?>




<div class="block-categories block">
		<div class="h6 text-uppercase facet-label">
		<a href="<?php echo $_smarty_tpl->tpl_vars['categories']->value['link'];?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['categories']->value['name'], ENT_QUOTES, 'UTF-8');
}?></a>
	</div>

    <div class="block_content">
		<ul class="tree dhtml">
			<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('nodes'=>$_smarty_tpl->tpl_vars['categories']->value['children']), true);?>

		</ul>
	</div>

</div><?php }
/* smarty_template_function_categories_143182007765952351739c49_28966999 */
if (!function_exists('smarty_template_function_categories_143182007765952351739c49_28966999')) {
function smarty_template_function_categories_143182007765952351739c49_28966999(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/tune4style/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['nodes']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?><li id="cat_id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['id_category_default'])) && (isset($_smarty_tpl->tpl_vars['node']->value['id']))) {
if ($_smarty_tpl->tpl_vars['node']->value['id'] == $_smarty_tpl->tpl_vars['product']->value['id_category_default']) {?>class="selected"<?php }
}?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php } else { ?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {
if ($_smarty_tpl->tpl_vars['node']->value['id'] == $_smarty_tpl->tpl_vars['category']->value['id']) {?>class="selected"<?php }
}?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php }
if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><ul><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>
</ul><?php }?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}}
/*/ smarty_template_function_categories_143182007765952351739c49_28966999 */
}
