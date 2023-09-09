<?php
/* Smarty version 4.3.1, created on 2023-09-09 23:22:08
  from 'C:\xampp\htdocs\prestashop_edition_basic_version_8.1.0\themes\almahtab\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64fcd3f0237251_97916816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ed79869a8c4b225065ccab2f3b5c693d8720934' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_edition_basic_version_8.1.0\\themes\\almahtab\\templates\\_partials\\helpers.tpl',
      1 => 1692361508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fcd3f0237251_97916816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\prestashop_edition_basic_version_8.1.0\\var\\cache\\prod\\smarty\\compile\\almahtablayouts_layout_full_width_tpl\\2e\\d7\\98\\2ed79869a8c4b225065ccab2f3b5c693d8720934_2.file.helpers.tpl.php',
    'uid' => '2ed79869a8c4b225065ccab2f3b5c693d8720934',
    'call_name' => 'smarty_template_function_renderLogo_147016958264fcd3f0231566_27189160',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_147016958264fcd3f0231566_27189160 */
if (!function_exists('smarty_template_function_renderLogo_147016958264fcd3f0231566_27189160')) {
function smarty_template_function_renderLogo_147016958264fcd3f0231566_27189160(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_147016958264fcd3f0231566_27189160 */
}
