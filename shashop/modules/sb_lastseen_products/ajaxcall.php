<?php
include_once('../../config/config.inc.php');
include_once('../../init.php');
if($_GET["product_ids"]){
    $sb_lastseen_products = Module::getInstanceByName('sb_lastseen_products');
    $products_details = $sb_lastseen_products->getProduct($_GET["product_ids"],true,1,1);
}
$smarty = new Smarty();
$smarty->assign("products_details",$products_details);
$response = $smarty->fetch(_PS_MODULE_DIR_.'sb_lastseen_products/sb_lastseen_products.tpl');
echo $response;
?>