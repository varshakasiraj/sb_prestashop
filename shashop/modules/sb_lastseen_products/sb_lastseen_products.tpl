<section class="home-module sb_lastseen clearfix"  id="sb_lastseen">
    {foreach from=$products_details key=index item=single_block}
            <div class="block">    
                <div class="right-block ">
                     <div class="products">
                        {foreach from=$single_block item="product"}
                            <div>
                                <div class="thumbnail-container">
                                    {block name='product_thumbnail'}
                                    {if $product.cover}
                                        <a href="{$product.url}" class="thumbnail product-thumbnail">
                                        <img
                                            src="{$product.cover.bySize.home_default.url}"
                                            alt="{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
                                            loading="lazy"
                                            data-full-size-image-url="{$product.cover.large.url}"
                                            width="250"
                                            height="250"
                                        />
                                        </a>
                                    {else}
                                        <a href="{$product.url}" class="thumbnail product-thumbnail">
                                        <img
                                            src="{$urls.no_picture_image.bySize.home_default.url}"
                                            loading="lazy"
                                            width="250"
                                            height="250"
                                        />
                                        </a>
                                    {/if}
                                    {/block}
                                </div>
                                <div class="product-description">
                                    <p class="reference">{$product.reference}</p>
                                    {block name='product_name'}
                                    <h3 class="h3 product-title"><a href="{$product.url}" content="{$product.url}">{$product.name|truncate:75:'...'}</a></h3>
                                    {/block}
                                </div>
                                
                            </div>
                        {/foreach}
                    </div>
                </div>
            </div>    
    {/foreach}
</section>
