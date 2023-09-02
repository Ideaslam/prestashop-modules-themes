<?php
/* Smarty version 4.3.1, created on 2023-08-28 16:45:17
  from 'C:\xampp\htdocs\prestashop_edition_basic_version_8.1.0\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64eca4ed4d15c0_53030021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c2c191f282928b52006eac9b9f07826a2976bb5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_edition_basic_version_8.1.0\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1692358143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64eca4ed4d15c0_53030021 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\prestashop_edition_basic_version_8.1.0\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\2c\\2c\\19\\2c2c191f282928b52006eac9b9f07826a2976bb5_2.file.helpers.tpl.php',
    'uid' => '2c2c191f282928b52006eac9b9f07826a2976bb5',
    'call_name' => 'smarty_template_function_renderLogo_109966755664eca4ed4cc914_44053133',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_109966755664eca4ed4cc914_44053133 */
if (!function_exists('smarty_template_function_renderLogo_109966755664eca4ed4cc914_44053133')) {
function smarty_template_function_renderLogo_109966755664eca4ed4cc914_44053133(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_109966755664eca4ed4cc914_44053133 */
}
