<?php
class itjl_historyrecentViewProductModuleFrontController extends ModuleFrontController{
    public function init()
    {
        parent::init();
    } 
    public function initContent(){
 
        parent::initContent();
        $this->setTemplate('module:itjl_history/templates/itjl_history.tpl');
    }
   
}
?>
