<?php
/* Smarty version 4.3.1, created on 2023-09-09 21:59:27
  from 'C:\xampp\htdocs\prestashop_edition_basic_version_8.1.0\themes\almahtab\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64fcc08f5511d5_58598261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2083dc41efcc8ef1bda5b2e1a9d8b3eabeba8ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_edition_basic_version_8.1.0\\themes\\almahtab\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1692361508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fcc08f5511d5_58598261 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117770960164fcc08f54f9a0_77208096', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_117770960164fcc08f54f9a0_77208096 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_117770960164fcc08f54f9a0_77208096',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
