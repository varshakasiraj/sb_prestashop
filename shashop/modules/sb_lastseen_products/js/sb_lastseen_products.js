$(document).ready(function() {
// console.log(jQuery("#product_page_product_id").attr("value"));
var product_id  = new Array();
var product_id_value =  jQuery("#product_page_product_id").attr("value");
product_id.push(product_id_value);
console.log(product_id );
// $("img").click(function(){
//     console.log(jQuery(".product-miniature js-product-miniature").find("data-id-product").attr("data-id-product"));
// })
let productArray = JSON.stringify(product_id)
localStorage.setItem("product_id", productArray);
console.log(localStorage.getItem("product_id"));
});