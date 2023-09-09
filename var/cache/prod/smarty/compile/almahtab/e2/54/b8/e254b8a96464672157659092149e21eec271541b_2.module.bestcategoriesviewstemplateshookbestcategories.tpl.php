<?php
/* Smarty version 4.3.1, created on 2023-09-09 17:35:06
  from 'module:bestcategoriesviewstemplateshookbestcategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64fc829a2c95a7_78648495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e254b8a96464672157659092149e21eec271541b' => 
    array (
      0 => 'module:bestcategoriesviewstemplateshookbestcategories.tpl',
      1 => 1693231146,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fc829a2c95a7_78648495 (Smarty_Internal_Template $_smarty_tpl) {
?> 
 <div class="categories-section">
 <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top Categories','d'=>'Shop.Theme.CategoryTitle'),$_smarty_tpl ) );?>
</h3></h4>
<div class="categories-container">

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?> 
   <?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image_url'])) {?>
    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['link'], ENT_QUOTES, 'UTF-8');?>
"> 
     <div class="block-category card card-block">
            
            <div class="block-category-inner">  
                    <div class="category-cover">
                        <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
"  loading="lazy" width="100%"  >
                    </div> 
            </div>
            <h6 class=""><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h6>  
     </div>
  </a> 
  
 <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
  </div><?php }
}
