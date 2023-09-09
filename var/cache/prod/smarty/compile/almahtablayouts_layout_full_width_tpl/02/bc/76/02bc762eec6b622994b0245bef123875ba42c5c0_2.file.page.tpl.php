<?php
/* Smarty version 4.3.1, created on 2023-09-09 17:35:05
  from 'C:\xampp\htdocs\prestashop_edition_basic_version_8.1.0\themes\almahtab\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64fc8299f361b2_56413863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02bc762eec6b622994b0245bef123875ba42c5c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_edition_basic_version_8.1.0\\themes\\almahtab\\templates\\page.tpl',
      1 => 1692361508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fc8299f361b2_56413863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32151282664fc8299f30cc0_05071647', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_10681990064fc8299f31414_97323594 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_1160214964fc8299f31038_16259125 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10681990064fc8299f31414_97323594', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_82287785564fc8299f34c17_35875702 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_52361348164fc8299f35044_97771066 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
       
           
          
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_90748168464fc8299f34917_01526122 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82287785564fc8299f34c17_35875702', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52361348164fc8299f35044_97771066', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_205257340164fc8299f35949_51662551 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_181808135564fc8299f356b2_89755941 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205257340164fc8299f35949_51662551', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_32151282664fc8299f30cc0_05071647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_32151282664fc8299f30cc0_05071647',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1160214964fc8299f31038_16259125',
  ),
  'page_title' => 
  array (
    0 => 'Block_10681990064fc8299f31414_97323594',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_90748168464fc8299f34917_01526122',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_82287785564fc8299f34c17_35875702',
  ),
  'page_content' => 
  array (
    0 => 'Block_52361348164fc8299f35044_97771066',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_181808135564fc8299f356b2_89755941',
  ),
  'page_footer' => 
  array (
    0 => 'Block_205257340164fc8299f35949_51662551',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1160214964fc8299f31038_16259125', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90748168464fc8299f34917_01526122', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181808135564fc8299f356b2_89755941', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
