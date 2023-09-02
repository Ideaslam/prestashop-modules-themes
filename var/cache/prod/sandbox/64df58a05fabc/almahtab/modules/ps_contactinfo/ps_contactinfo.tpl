{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}

<div id="contact-infos" class="block-contact col-md-12 links wrapper  ">
   <div>
        <span class="logo-footer">
              {renderLogo} 
        </span>
   </div>
   
   {if $contact_infos.phone}
    <div  class="contact contact-phone"> 

     <div class="contact-icon">
       <i class="material-icons" aria-hidden="true">call</i> 
     </div>

     <div class="contact-phone-info">
       <div class="contact-phone-label contact-label">
        {l s='Phone' d="phone"}
       </div>
     <div>

        {* [1][/1] is for a HTML tag. *}
      {l s='Call us:' s='[1]%phone%[/1]'
        sprintf=[
        '[1]' => '<span>',
        '[/1]' => '</span>',
        '%phone%' => $contact_infos.phone
        ]
        d='Shop.Theme.Global'
      } 

      </div>
     </div>
      
    </div>
    {/if}


 {if $contact_infos.email && $display_email}
    <div  class="contact contact-email"> 
       <div class="contact-icon">
          <i class="material-icons" aria-hidden="true">mail</i> 
       </div> 
       <div>
       

       <div class="contact-email-label contact-label"> 
          {l s='Email' d="email"}
       </div>
       
       <div>
       {mailto address=$contact_infos.email encode="javascript"}
       </div>
        
       </div>
        
  
  </div>
 {/if}

 <div  class="contact-social"> 
      <div>
      <img height="20px" src="{$urls.img_url}facebook.svg">
      </div>

       <div>
         <img height="20px" src="{$urls.img_url}twitter.svg">
        </div> 

       <div>
        <img height="20px" src="{$urls.img_url}snapchat.svg">
      </div>
  </div>

  

</div>
