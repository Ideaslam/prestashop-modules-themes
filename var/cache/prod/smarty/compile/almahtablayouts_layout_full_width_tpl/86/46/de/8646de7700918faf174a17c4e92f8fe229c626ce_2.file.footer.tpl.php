<?php
/* Smarty version 4.3.1, created on 2023-09-09 17:35:06
  from 'C:\xampp\htdocs\prestashop_edition_basic_version_8.1.0\themes\almahtab\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64fc829a4bc5e1_31891252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8646de7700918faf174a17c4e92f8fe229c626ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_edition_basic_version_8.1.0\\themes\\almahtab\\templates\\_partials\\footer.tpl',
      1 => 1693229573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fc829a4bc5e1_31891252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


 <?php $_smarty_tpl->_assignInScope('phone', Configuration::get('PS_SHOP_PHONE'));?>
<div class="newsletter-container">
  <div class="row">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80845398664fc829a4b7c10_24475144', 'hook_footer_before');
?>

  </div>
</div>
<div class="footer-container">
  


  <div class="footer-body">
     <div class="row footer-contactus">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47263702264fc829a4b8591_96395841', 'hook_footer_contact');
?>


    </div>
    <hr>

    <div class="row footer-links">
      <div class="col-md-6">
        <p class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop Aboutus Title','d'=>'Shop.Aboutus'),$_smarty_tpl ) );?>
</p>
        <p class="aboutus-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop Aboutus Text','d'=>'Shop.Aboutus'),$_smarty_tpl ) );?>
</p>
         <div class=" "> 
          <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo htmlspecialchars((string) str_replace('+','00',$_smarty_tpl->tpl_vars['phone']->value), ENT_QUOTES, 'UTF-8');?>
"> 
          <img width="30px" height="30px" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
whatsapp.svg" alt=""> 
          <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8');?>

         </a> 
        </div>
         <div class=" "> 
         
          <img width="120px" height="120px" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
maroof.png" alt=""> 
            
        </div>
      </div>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30020454864fc829a4ba308_84612106', 'hook_footer');
?>

    </div>
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85734946964fc829a4baa74_53769431', 'hook_footer_after');
?>

    </div>
    <div class="row copyright">
      <div class="col-md-12">
        <p class="text-sm-center">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125799310064fc829a4bb1d5_70395471', 'copyright_link');
?>

        </p>
      </div>
    </div>
  </div>
</div>
<?php }
/* {block 'hook_footer_before'} */
class Block_80845398664fc829a4b7c10_24475144 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_80845398664fc829a4b7c10_24475144',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer_contact'} */
class Block_47263702264fc829a4b8591_96395841 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_contact' => 
  array (
    0 => 'Block_47263702264fc829a4b8591_96395841',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterContact'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_contact'} */
/* {block 'hook_footer'} */
class Block_30020454864fc829a4ba308_84612106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_30020454864fc829a4ba308_84612106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_85734946964fc829a4baa74_53769431 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_85734946964fc829a4baa74_53769431',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_125799310064fc829a4bb1d5_70395471 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_125799310064fc829a4bb1d5_70395471',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <a href="https://www.prestashop.com" target="_blank" rel="noopener noreferrer nofollow">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( 'Y' )),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

            </a>
          <?php
}
}
/* {/block 'copyright_link'} */
}
