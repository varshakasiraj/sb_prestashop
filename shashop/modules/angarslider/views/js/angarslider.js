/*
* @author      Krzysztof Pecak
* @copyright   2017 Krzysztof Pecak
* @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/

jQuery(document).ready(function(){
	if (jQuery("#angarslider").length) {
		if (typeof(angarslider_speed) == 'undefined')
			angarslider_speed = 500;
		if (typeof(angarslider_pause) == 'undefined')
			angarslider_pause = 3000;
		if (typeof(angarslider_loop) == 'undefined')
			angarslider_loop = true;
		if (typeof(angarslider_width) == 'undefined')
			angarslider_width = 1920;

		if (jQuery().slick) {
			$("#angarslider").slick({
				lazyLoad: 'ondemand',
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				dots:true,
				autoplay: true,
				autoplaySpeed: 5000,
			});
		}
	}
});