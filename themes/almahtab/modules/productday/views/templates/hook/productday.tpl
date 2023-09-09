 
 <div class="productday" >  
 
{capture assign="productClasses"}{if !empty($productClass)}{$productClass}{else}col-xs-12 col-sm-12 col-xl-12{/if}{/capture}

 
   
<div class="productday-container products{if !empty($cssClass)} {$cssClass}{/if}">
    {foreach from=$products item="product" key="position"}
        {include file="catalog/_partials/miniatures/productday.tpl" product=$product position=$position productClasses=$productClasses}
    {/foreach}
</div>

 </div> 
