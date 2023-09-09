<?php
/* Smarty version 4.3.1, created on 2023-09-09 23:22:08
  from 'module:ps_contactinfops_contactinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64fcd3f06deb08_25558595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:ps_contactinfops_contactinfo.tpl',
      1 => 1692361508,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fcd3f06deb08_25558595 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop_edition_basic_version_8.1.0\\vendor\\smarty\\smarty\\libs\\plugins\\function.mailto.php','function'=>'smarty_function_mailto',),));
?>

<div id="contact-infos" class="block-contact col-md-12 links wrapper  ">
   <div>
        <span class="logo-footer">
              <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>
 
        </span>
   </div>
   
   <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
    <div  class="contact contact-phone"> 

     <div class="contact-icon">
       <i class="material-icons" aria-hidden="true">call</i> 
     </div>

     <div class="contact-phone-info">
       <div class="contact-phone-label contact-label">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone','d'=>"phone"),$_smarty_tpl ) );?>

       </div>
     <div>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 

      </div>
     </div>
      
    </div>
    <?php }?>


 <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email'] && $_smarty_tpl->tpl_vars['display_email']->value) {?>
    <div  class="contact contact-email"> 
       <div class="contact-icon">
          <i class="material-icons" aria-hidden="true">mail</i> 
       </div> 
       <div>
       

       <div class="contact-email-label contact-label"> 
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','d'=>"email"),$_smarty_tpl ) );?>

       </div>
       
       <div>
       <?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email'],'encode'=>"javascript"),$_smarty_tpl);?>

       </div>
        
       </div>
        
  
  </div>
 <?php }?>

 <div  class="contact-social"> 
      <div>
      <img height="20px" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
facebook.svg">
      </div>

       <div>
         <img height="20px" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
twitter.svg">
        </div> 

       <div>
        <img height="20px" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
snapchat.svg">
      </div>
  </div>

  

</div>
<?php }
}
