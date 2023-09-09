<?php
/* Smarty version 4.3.1, created on 2023-09-09 23:22:08
  from 'C:\xampp\htdocs\prestashop_edition_basic_version_8.1.0\themes\almahtab\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64fcd3f01ef012_63730683',
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
function content_64fcd3f01ef012_63730683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11933640264fcd3f01ea000_31635977', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_86511828664fcd3f01ea6f2_15571367 extends Smarty_Internal_Block
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
class Block_156877557964fcd3f01ea346_60143921 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86511828664fcd3f01ea6f2_15571367', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_165550582864fcd3f01edae4_90288290 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_11576064964fcd3f01edf22_03774533 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
       
           
          
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_112804955764fcd3f01ed815_46095451 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165550582864fcd3f01edae4_90288290', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11576064964fcd3f01edf22_03774533', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_15377722364fcd3f01ee817_55329493 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_94156549564fcd3f01ee577_78333285 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15377722364fcd3f01ee817_55329493', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_11933640264fcd3f01ea000_31635977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11933640264fcd3f01ea000_31635977',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_156877557964fcd3f01ea346_60143921',
  ),
  'page_title' => 
  array (
    0 => 'Block_86511828664fcd3f01ea6f2_15571367',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_112804955764fcd3f01ed815_46095451',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_165550582864fcd3f01edae4_90288290',
  ),
  'page_content' => 
  array (
    0 => 'Block_11576064964fcd3f01edf22_03774533',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_94156549564fcd3f01ee577_78333285',
  ),
  'page_footer' => 
  array (
    0 => 'Block_15377722364fcd3f01ee817_55329493',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156877557964fcd3f01ea346_60143921', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112804955764fcd3f01ed815_46095451', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94156549564fcd3f01ee577_78333285', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
