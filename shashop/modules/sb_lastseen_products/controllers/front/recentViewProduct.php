<?php
class sb_lastseen_productsrecentViewProductModuleFrontController extends ModuleFrontController{
    public function init()
    {
        parent::init();
    } 
    public function initContent(){
 
        parent::initContent();
        $this->setTemplate('module:sb_lastseen_products/templates/sb_lastviewed_product.tpl');
    }
   
}
?>
