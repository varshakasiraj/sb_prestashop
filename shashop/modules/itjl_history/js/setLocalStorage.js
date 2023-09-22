var sb = sb || {};
sb.core = function () {
    var self = {
        load: function () {
            jQuery(document).ready(self.ready);
        },
        ready: function () {
            var get_product_ids = localStorage.getItem("product_ids");
            var current_product_id = jQuery("#product_page_product_id").attr("value");
            
            if(get_product_ids == null){
                localStorage.setItem("product_ids", "");
            }
            if(current_product_id.length != 0){
                productArray = self.savearrayinlocalstorage(current_product_id,get_product_ids);
            }
            localStorage.setItem("product_ids", productArray);
            
         },
         savearrayinlocalstorage: function(current_product_id ,get_product_ids){
                var  Array_product = get_product_ids.split(',');    
                if(Array_product.indexOf(current_product_id) === -1){
                    Array_product.push(current_product_id);
                }
                var implodedArray =  Array_product.join(",");
                return implodedArray ;
         },
       
    };
    return self;
}();
sb.core.load();