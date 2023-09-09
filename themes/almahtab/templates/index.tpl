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
{extends file='page.tpl'}

 {assign var='phone' value=Configuration::get('PS_SHOP_PHONE')}
{assign var='categories' value=Category::getCategories($smarty.const.id_lang, true, false)}

    {block name='page_content_container'} 
      <section id="content" class="page-home">
        {block name='page_content_top'}{/block}

        {block name='page_content'}


      <section class="clearfix top-section" >
        <div class="slider-container"> 
            <div class="slider-body">
                {hook h="displayHomeLeft"} 
            </div>

            
         
             {hook h="displayHomeRight"}
             
           
          
          
         </div>

           <div class="whatsapp-fixed"> 
          <a target="_blank" href="https://api.whatsapp.com/send?phone={str_replace('+','00',$phone)}"> 
          <img width="50px" height="50px" src="{$urls.img_url}whatsapp.svg" alt=""> 
         
         </a> 
  </div>

       
      </section>   
         
          {include file='custom/storefeatures.tpl'} 
          {hook h="displayMiddle"}
          
          {hook h="displayBottom"}
        {/block}
      </section>
    {/block}



