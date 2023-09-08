<section class="sb_clothes_cmspage">
<h2 class="sb_clothes_cmspage_title"></h2>  
<div class="sb_clothes_cmspage_container">
    <div class="sb_clothes_cmspage_wrapper">
        {foreach $sliders as $slider}
            <div class="sb_clothes_cmspage_card one">
                    <div class="sb_clothes_cmspage_image">
                        <a href="{$slider["link_rewrite"]}"><img src="C:\\xamp\\xampp\htdocs\shashop\img\cms\\{$slider["cover_image"]}"
                        
                        /></a>
                        {var_dump("C:\\xamp\\xampp\\htdocs\\shashop\\img\\cms\\{$slider["cover_image"]}")}
                    </div>
                    <div class="sb_clothes_cmspage_description 1">
                        <h5>{$slider["title"]}</h5>
                    </div>
            </div>
        {/foreach}
    </div>
</div>
</section>