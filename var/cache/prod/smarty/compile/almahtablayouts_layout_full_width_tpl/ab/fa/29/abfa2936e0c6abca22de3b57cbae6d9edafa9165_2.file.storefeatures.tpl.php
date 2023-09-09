<?php
/* Smarty version 4.3.1, created on 2023-09-09 23:22:08
  from 'C:\xampp\htdocs\prestashop_edition_basic_version_8.1.0\themes\almahtab\templates\custom\storefeatures.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64fcd3f04c7147_92647854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abfa2936e0c6abca22de3b57cbae6d9edafa9165' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_edition_basic_version_8.1.0\\themes\\almahtab\\templates\\custom\\storefeatures.tpl',
      1 => 1692361508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fcd3f04c7147_92647854 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="clearfix">
  
   <div class="features-container">
    <div class="feature-item">
         <div class="item-img"> 
            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
ship.svg">
         </div>

         <div class="item-text">
               <div class="item-title"> 
                  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Speed Shippment','d'=>'Shop.Speedshippment'),$_smarty_tpl ) );?>
</h4>
               </div>

               <div class="item-desc"> 
               <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Speed Shippment Anywhere','d'=>'Shop.Speedshippmentdesc'),$_smarty_tpl ) );?>
</p>
               </div> 
         </div> 
    </div>


    <div class="feature-item">
         <div class="item-img"> 
            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
pay.svg">
         </div>

         <div class="item-text">
               <div class="item-title"> 
                  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Safe Payment','d'=>'Shop.Safepayment'),$_smarty_tpl ) );?>
</h4>
               </div>

               <div class="item-desc"> 
               <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More than one safe payment method','d'=>'Shop.Safepaymentdesc'),$_smarty_tpl ) );?>
</p>
               </div> 
         </div> 
    </div>


    <div class="feature-item">
         <div class="item-img"> 
            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
refund.svg">
         </div>

         <div class="item-text">
               <div class="item-title"> 
                  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Easy Refund','d'=>'Shop.Easyrefund'),$_smarty_tpl ) );?>
</h4>
               </div>

               <div class="item-desc"> 
               <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In the event of a problem with the product','d'=>'Shop.Easyrefunddesc'),$_smarty_tpl ) );?>
</p>
               </div> 
         </div> 
    </div>



    <div class="feature-item">
         <div class="item-img"> 
            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
ship.svg">
         </div>

         <div class="item-text">
               <div class="item-title"> 
                  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Installation services','d'=>'Shop.Installationservices'),$_smarty_tpl ) );?>
</h4>
               </div>

               <div class="item-desc"> 
               <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Installation team','d'=>'Shop.Installationteamdesc'),$_smarty_tpl ) );?>
</p>
               </div> 
         </div> 
    </div>

  </div>
</section>
<?php }
}
