<?php
/* Smarty version 4.3.1, created on 2023-09-09 23:22:08
  from 'module:ps_brandlistviewstemplateshookps_brandlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64fcd3f0677775_48311279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad7605d3e1afaa968ac113b0444601df2cff1153' => 
    array (
      0 => 'module:ps_brandlistviewstemplateshookps_brandlist.tpl',
      1 => 1692361508,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fcd3f0677775_48311279 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="search_filters_brands">
  <section class="facet">
    <?php if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?>
    <div class="brand-title">
      <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="h6 text-uppercase facet-label" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

      </a>
    </div>
    <?php } else { ?>
      <p class="h6 text-uppercase facet-label">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

      </p>
    <?php }?>

    <div class="brandlist-container">
      <?php if ($_smarty_tpl->tpl_vars['brands']->value) {?> 
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
         <div class="brand">
          <div class="brand-img">
          <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['link'], ENT_QUOTES, 'UTF-8');?>
">
            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['imageUrl'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" width="100px;">
          </a>
          </div>
 
    
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
       
   
      <?php } else { ?>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
      <?php }?>
    </div>
  </section>
</div>
<?php }
}
