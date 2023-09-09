 
 <div class="categories-section">
 <h4>{l s='Top Categories' mod='Topcategories'}</h3></h4>
<div class="categories-container">

  {foreach $categories as $category} 
   {if !empty($category.image_url)}
    <a href="{$category.link }"> 
     <div class="block-category card card-block">
            <h6 class="">{$category.name}</h6>  
            <div class="block-category-inner">  
                    <div class="category-cover">
                        <img src="{$category.image_url }"  loading="lazy" width="100%"  >
                    </div> 
            </div>
     </div>
  </a> 
  
 {/if}
  {/foreach}
  </div>
  </div>