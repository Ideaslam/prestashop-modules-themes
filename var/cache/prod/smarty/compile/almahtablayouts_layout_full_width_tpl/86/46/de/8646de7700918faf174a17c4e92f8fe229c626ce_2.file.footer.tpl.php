<?php
/* Smarty version 4.3.1, created on 2023-09-09 23:22:08
  from 'C:\xampp\htdocs\prestashop_edition_basic_version_8.1.0\themes\almahtab\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64fcd3f068fb68_29532042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8646de7700918faf174a17c4e92f8fe229c626ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_edition_basic_version_8.1.0\\themes\\almahtab\\templates\\_partials\\footer.tpl',
      1 => 1694290709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fcd3f068fb68_29532042 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


 <?php $_smarty_tpl->_assignInScope('phone', Configuration::get('PS_SHOP_PHONE'));?>
<div class="newsletter-container">
  <div class="row">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4820688864fcd3f068a3e3_45177797', 'hook_footer_before');
?>

  </div>
</div>
<div class="footer-container">
  


  <div class="footer-body">
     <div class="row footer-contactus">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190579142364fcd3f068acd5_36471110', 'hook_footer_contact');
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


       <div class="payment-icons">
       
         
          <img   height="30px" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
payments/visa.svg" alt=""> 
          <img   height="30px" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
payments/mastercard.png" alt=""> 
          <img   height="30px" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
payments/mada.svg" alt=""> 
           <img   height="30px" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
payments/applepay.svg" alt="">  
          <img   height="30px" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
payments/tamara.svg" alt=""> 
          <img   height="30px" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
payments/tabby.svg" alt=""> 
    
      </div>
</div>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195701103564fcd3f068db11_09298847', 'hook_footer');
?>

    </div>
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56303515064fcd3f068e2b9_50938267', 'hook_footer_after');
?>

    </div>
    <div class="row copyright">
      <div class="col-md-12">
        <p class="text-sm-center">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211071847464fcd3f068ea50_63842993', 'copyright_link');
?>

        </p>
      </div>
    </div>
  </div>
</div>
<?php }
/* {block 'hook_footer_before'} */
class Block_4820688864fcd3f068a3e3_45177797 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_4820688864fcd3f068a3e3_45177797',
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
class Block_190579142364fcd3f068acd5_36471110 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_contact' => 
  array (
    0 => 'Block_190579142364fcd3f068acd5_36471110',
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
class Block_195701103564fcd3f068db11_09298847 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_195701103564fcd3f068db11_09298847',
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
class Block_56303515064fcd3f068e2b9_50938267 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_56303515064fcd3f068e2b9_50938267',
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
class Block_211071847464fcd3f068ea50_63842993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_211071847464fcd3f068ea50_63842993',
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
