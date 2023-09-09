<?php
/* Smarty version 4.3.1, created on 2023-09-09 17:35:05
  from 'C:\xampp\htdocs\prestashop_edition_basic_version_8.1.0\themes\almahtab\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64fc8299f15366_16749684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '231d94b0f0f672c535e30b6fcce4463fa69fb68f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_edition_basic_version_8.1.0\\themes\\almahtab\\templates\\index.tpl',
      1 => 1693664477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:custom/storefeatures.tpl' => 1,
  ),
),false)) {
function content_64fc8299f15366_16749684 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('categories', Category::getCategories((defined('id_lang') ? constant('id_lang') : null),true,false));?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60387509864fc8299f13303_71337599', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_10812179264fc8299f13615_90338305 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_211880482664fc8299f13b07_41238438 extends Smarty_Internal_Block
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
class Block_60387509864fc8299f13303_71337599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_60387509864fc8299f13303_71337599',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_10812179264fc8299f13615_90338305',
  ),
  'page_content' => 
  array (
    0 => 'Block_211880482664fc8299f13b07_41238438',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10812179264fc8299f13615_90338305', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211880482664fc8299f13b07_41238438', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
