<?php
/* Smarty version 4.3.1, created on 2023-09-22 11:35:05
  from 'C:\xampp\htdocs\tune4style\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_650d6dd90327f6_20402445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75413b3ccdacae4f527fa1f111b49087c421a1ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tune4style\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1695376618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650d6dd90327f6_20402445 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\tune4style\\var\\cache\\dev\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\75\\41\\3b\\75413b3ccdacae4f527fa1f111b49087c421a1ef_2.file.helpers.tpl.php',
    'uid' => '75413b3ccdacae4f527fa1f111b49087c421a1ef',
    'call_name' => 'smarty_template_function_renderLogo_1552873323650d6dd900e5d3_30349122',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1552873323650d6dd900e5d3_30349122 */
if (!function_exists('smarty_template_function_renderLogo_1552873323650d6dd900e5d3_30349122')) {
function smarty_template_function_renderLogo_1552873323650d6dd900e5d3_30349122(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_1552873323650d6dd900e5d3_30349122 */
}
