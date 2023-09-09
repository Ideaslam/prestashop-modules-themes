<div>
  {foreach $categories as $category} 
   {if !empty($category.image_url)}
    
     <div class="block-category card card-block">
            <h1 class="h1">{$category.name}</h1>  
            <div class="block-category-inner">  
                    <div class="category-cover">
                        <img src="{$category.image_url }"  loading="lazy" width="100%" height="100%">
                    </div> 
            </div>
     </div>
        
  
 {/if}
  {/foreach}
  <div>