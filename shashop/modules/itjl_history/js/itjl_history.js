var sb = sb || {};
sb.core = function () {
    var self = {
        load: function () {
            jQuery(document).ready(self.ready);
        },
        ready: function () {
            self.getlocalstorageproductsid();
            self.displayRecentlyViewedCount();
        },
         getlocalstorageproductsid:function(){
            var get_product_ids = localStorage.getItem("product_ids");
            var productDataUrl = '/shashop/modules/itjl_history/ajaxcall.php?product_ids='+get_product_ids;
            $.ajax({
                url: productDataUrl,
                type : 'POST',
                data : {
                    ajax: true,
                    action: "fetchTPL",
                },
                success: function (response) {
                    $(".recently_viewed_product").append(response);
                }
            });
        },
        displayRecentlyViewedCount:function(){
            var get_product_ids = localStorage.getItem("product_ids"); 
            var get_localstorage_product_ids = get_product_ids.split(','); 
            var i=0;
            var count = 0;
            get_localstorage_product_ids .forEach(function(value) {
                if(i==0){
                    i++;
                    return true;
                }
                count = count+1;
            });
            console.log(count);
            $(".historyCount").append(count);
        }
    };
    return self;
}();
sb.core.load();