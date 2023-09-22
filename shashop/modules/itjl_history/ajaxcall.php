<?php
include_once('../../config/config.inc.php');
include_once('../../init.php');
if($_GET["product_ids"]){
    $itjl_history = Module::getInstanceByName('itjl_history');
    $products_details = $itjl_history->getProduct($_GET["product_ids"],true,1,1);
}
$smarty = new Smarty();
$smarty->assign("products_details",$products_details);
$response = $smarty->fetch(_PS_MODULE_DIR_.'itjl_history/itjl_history.tpl');
echo $response;
?>