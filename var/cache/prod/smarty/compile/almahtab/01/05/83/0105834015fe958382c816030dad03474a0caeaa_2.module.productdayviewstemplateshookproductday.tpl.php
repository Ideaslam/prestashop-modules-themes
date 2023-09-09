<?php
/* Smarty version 4.3.1, created on 2023-09-09 21:50:38
  from 'module:productdayviewstemplateshookproductday.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64fcbe7e34b6b8_07387126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0105834015fe958382c816030dad03474a0caeaa' => 
    array (
      0 => 'module:productdayviewstemplateshookproductday.tpl',
      1 => 1694284783,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/productday.tpl' => 1,
  ),
),false)) {
function content_64fcbe7e34b6b8_07387126 (Smarty_Internal_Template $_smarty_tpl) {
?> 
 <div class="productday" >  
 
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "productClasses", null);
if (!empty($_smarty_tpl->tpl_vars['productClass']->value)) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['productClass']->value, ENT_QUOTES, 'UTF-8');
} else { ?>col-xs-12 col-sm-12 col-xl-12<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

 
   
<div class="productday-container products<?php if (!empty($_smarty_tpl->tpl_vars['cssClass']->value)) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cssClass']->value, ENT_QUOTES, 'UTF-8');
}?>">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'position');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/productday.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'position'=>$_smarty_tpl->tpl_vars['position']->value,'productClasses'=>$_smarty_tpl->tpl_vars['productClasses']->value), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

 </div> 
<?php }
}
