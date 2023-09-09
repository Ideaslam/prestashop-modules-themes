<?php
/* Smarty version 4.3.1, created on 2023-09-09 23:22:08
  from 'C:\xampp\htdocs\prestashop_edition_basic_version_8.1.0\themes\almahtab\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64fcd3f01d3fb1_30579250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '231d94b0f0f672c535e30b6fcce4463fa69fb68f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_edition_basic_version_8.1.0\\themes\\almahtab\\templates\\index.tpl',
      1 => 1694288193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:custom/storefeatures.tpl' => 1,
  ),
),false)) {
function content_64fcd3f01d3fb1_30579250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


 <?php $_smarty_tpl->_assignInScope('phone', Configuration::get('PS_SHOP_PHONE'));
$_smarty_tpl->_assignInScope('categories', Category::getCategories((defined('id_lang') ? constant('id_lang') : null),true,false));?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14502818264fcd3f01d1390_57822316', 'page_content_container');
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_42601351964fcd3f01d16a0_64809245 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_211902722364fcd3f01d1b95_68678313 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



      <section class="clearfix top-section" >
        <div class="slider-container"> 
            <div class="slider-body">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHomeLeft"),$_smarty_tpl ) );?>
 
            </div>

            
         
             <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHomeRight"),$_smarty_tpl ) );?>

             
           
          
          
         </div>

           <div class="whatsapp-fixed"> 
          <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo htmlspecialchars((string) str_replace('+','00',$_smarty_tpl->tpl_vars['phone']->value), ENT_QUOTES, 'UTF-8');?>
"> 
          <img width="50px" height="50px" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
whatsapp.svg" alt=""> 
         
         </a> 
  </div>

       
      </section>   
         
          <?php $_smarty_tpl->_subTemplateRender('file:custom/storefeatures.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayMiddle"),$_smarty_tpl ) );?>

          
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBottom"),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14502818264fcd3f01d1390_57822316 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_14502818264fcd3f01d1390_57822316',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_42601351964fcd3f01d16a0_64809245',
  ),
  'page_content' => 
  array (
    0 => 'Block_211902722364fcd3f01d1b95_68678313',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42601351964fcd3f01d16a0_64809245', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211902722364fcd3f01d1b95_68678313', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
