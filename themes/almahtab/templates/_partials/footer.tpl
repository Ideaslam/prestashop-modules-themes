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


 {assign var='phone' value=Configuration::get('PS_SHOP_PHONE')}
<div class="newsletter-container">
  <div class="row">
    {block name='hook_footer_before'}
      {hook h='displayFooterBefore'}
    {/block}
  </div>
</div>
<div class="footer-container">
  


  <div class="footer-body">
     <div class="row footer-contactus">
      {block name='hook_footer_contact'}
        {hook h='displayFooterContact'}
      {/block}

    </div>
    <hr>

    <div class="row footer-links">
      <div class="col-md-6">
        <p class="h3">{l s='Shop Aboutus Title' d='Shop.Aboutus'}</p>
        <p class="aboutus-text">{l s='Shop Aboutus Text' d='Shop.Aboutus'}</p>
         <div class=" "> 
          <a target="_blank" href="https://api.whatsapp.com/send?phone={str_replace('+','00',$phone)}"> 
          <img width="30px" height="30px" src="{$urls.img_url}whatsapp.svg" alt=""> 
          {$phone}
         </a> 
        </div>
         <div class=" "> 
         
          <img width="120px" height="120px" src="{$urls.img_url}maroof.png" alt=""> 
            
        </div>


       <div class="payment-icons">
       
         
          <img   height="30px" src="{$urls.img_url}payments/visa.svg" alt=""> 
          <img   height="30px" src="{$urls.img_url}payments/mastercard.png" alt=""> 
          <img   height="30px" src="{$urls.img_url}payments/mada.svg" alt=""> 
           <img   height="30px" src="{$urls.img_url}payments/applepay.svg" alt="">  
          <img   height="30px" src="{$urls.img_url}payments/tamara.svg" alt=""> 
          <img   height="30px" src="{$urls.img_url}payments/tabby.svg" alt=""> 
    
      </div>
</div>

      {block name='hook_footer'}
        {hook h='displayFooter'}
      {/block}
    </div>
    <div class="row">
      {block name='hook_footer_after'}
        {hook h='displayFooterAfter'}
      {/block}
    </div>
    <div class="row copyright">
      <div class="col-md-12">
        <p class="text-sm-center">
          {block name='copyright_link'}
            <a href="https://www.prestashop.com" target="_blank" rel="noopener noreferrer nofollow">
              {l s='%copyright% %year% - Ecommerce software by %prestashop%' sprintf=['%prestashop%' => 'PrestaShop™', '%year%' => 'Y'|date, '%copyright%' => '©'] d='Shop.Theme.Global'}
            </a>
          {/block}
        </p>
      </div>
    </div>
  </div>
</div>
