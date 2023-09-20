<section class="sb_lastseen">
{var_dump($products_details)}
        {foreach $products_details as $product_detail}
            <div class="sb_lastviewed">
                    {* <div class="sb_lastviewedimage">
                    <a href="{$slider["link_rewrite"]}"> <img src="/shashop/img/cms/{$slider["cover_image"]}"/></a>  
                    </div> *}
                    <div class="sb_lastviewed_name">
                        <h5>{$product_detail["name"]}</h5>
                    </div>
                    <div class="sb_lastviewed_description">
                        <h5>{$product_detail["description"]}</h5>
                    </div>
                    <div class="sb_lastviewed_short_description">
                        <h5>{$product_detail["description_short"]}</h5>
                    </div>
                    <div class="sb_lastviewed_price">
                        <h5>{$product_detail["price"]}</h5>
                    </div>
            </div>
        {/foreach}
</section>
