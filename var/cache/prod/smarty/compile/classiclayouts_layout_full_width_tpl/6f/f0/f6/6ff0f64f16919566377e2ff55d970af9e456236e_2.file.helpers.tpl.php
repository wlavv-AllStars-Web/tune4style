<?php
/* Smarty version 4.3.1, created on 2023-12-11 16:31:43
  from '/opt/lampp/htdocs/tune4style/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6577396f59a8b7_31399947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ff0f64f16919566377e2ff55d970af9e456236e' => 
    array (
      0 => '/opt/lampp/htdocs/tune4style/themes/classic/templates/_partials/helpers.tpl',
      1 => 1678745894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6577396f59a8b7_31399947 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/opt/lampp/htdocs/tune4style/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/6f/f0/f6/6ff0f64f16919566377e2ff55d970af9e456236e_2.file.helpers.tpl.php',
    'uid' => '6ff0f64f16919566377e2ff55d970af9e456236e',
    'call_name' => 'smarty_template_function_renderLogo_2983291596577396f5987b6_99711213',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_2983291596577396f5987b6_99711213 */
if (!function_exists('smarty_template_function_renderLogo_2983291596577396f5987b6_99711213')) {
function smarty_template_function_renderLogo_2983291596577396f5987b6_99711213(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_2983291596577396f5987b6_99711213 */
}
