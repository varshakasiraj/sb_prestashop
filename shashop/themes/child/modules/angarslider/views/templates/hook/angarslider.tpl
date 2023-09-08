{*
* @author	Krzysztof Pecak
* @copyright	2017 Krzysztof Pecak
* @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*}
<link rel="stylesheet" href="https://capitools.com/modules/angarslider/views/templates/hook/css/sliderprix.css">
<!-- Module AngarSlider -->
    {if isset($angarslider_slides)}
		<div id="homepage-slider">
			{if isset($angarslider_slides.0) && isset($angarslider_slides.0.sizes.1)}{capture name='height'}{$angarslider_slides.0.sizes.1|escape:'html':'UTF-8'}{/capture}{/if}
			<div id="angarslider"{if isset($smarty.capture.height) && $smarty.capture.height} style="max-height:{$smarty.capture.height|escape:'htmlall':'UTF-8'}px;"{/if}>
				{foreach from=$angarslider_slides item=slide}
                    
					{if $slide.active}
						<div class="angarslider-container">
                           
                                <a href="{$slide.url|escape:'html':'UTF-8'}" title="{$slide.legend|escape:'html':'UTF-8'}" 
					                {if in_array($slide.id_slide,$active_newtab_id) } target="_blank" {/if}>
                            
                                    {if $slide@index==0}
                                        <img src="{$link->getMediaLink("`$smarty.const._MODULE_DIR_`angarslider/views/img/images/`$slide.image|escape:'htmlall':'UTF-8'`")}"{if isset($slide.size) && $slide.size} {$slide.size}{else} width="100%" height="100%"{/if} alt="{$slide.legend|escape:'htmlall':'UTF-8'}" />
                                    {else}
                                        <img loading="lazy" data-lazy="{$link->getMediaLink("`$smarty.const._MODULE_DIR_`angarslider/views/img/images/`$slide.image|escape:'htmlall':'UTF-8'`")}"{if isset($slide.size) && $slide.size} {$slide.size}{else} width="100%" height="100%"{/if} alt="{$slide.legend|escape:'htmlall':'UTF-8'}" />
                                    {/if}
                                </a>
                                <div class="Block-prix">
                                    <div id="{$slide.legend|escape:'htmlall':'UTF-8'}" class="valeurPrix"></div>
                                </div>
                                {if isset($slide.description) && trim($slide.description) != ''}
                                    <div class="angarslider-description">{$slide.description} {*HTML CONTENT*}</div>
                                {/if}
						</div>
					{/if}
				{/foreach}
			</div>
		</div>
		{* {literal}
		<script type="text/javascript">
			setTimeout(function(){
				$('.valeurPrix').each(function () {
					var idproduit = $(this).attr('id');
					var thata = $(this);
					//alert(idproduit);
					if($.isNumeric( idproduit )) {
						$.ajax({
							url: 'https://www.capitools.com/admin667/ajax_help.php',
							type: 'POST',
							data: {priceslider: "priceslider", id_produi: idproduit},
							dataType: 'html',
							success: function (code_html, statut) { // code_html contient le HTML renvoyé
								var a = code_html;
							}
						}).then(function (a) {
							thata.html(a);
						})
					}
				});
			}, 200);
		</script>
	{/literal} *}
	{/if}
<!-- /Module AngarSlider -->