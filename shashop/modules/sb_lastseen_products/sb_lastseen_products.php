<?php 
class sb_lastseen_products extends Module{
    public function __construct()
    {
        $this->name = 'sb_lastseen_products';
        $this->author = 'PrestaShop';
        $this->bootstrap = true;

        parent::__construct();
        $this->registerHook('displayHeader');
        $this->registerHook('displayHome');
        $this->displayName = $this->trans('sb_lastseen_products');
        $this->description = $this->trans('View Lastseen Products');
    }
    public function install()
    {
        return parent::install();
    }
    public function uninstall(){
        return parent::uninstall();
    }
    public function hookDisplayHeader(){
        // if ($this->context->controller instanceof ProductController){
        //     $id_product = (int) Tools::getValue('id_product');
        //    // $this->context->smarty->assign('id_product', $id_product);
        //     Media::addJsDef(array('id_product' => $id_product));
        // }
        $id_product = (int) Tools::getValue('id_product');
        Media::addJsDef(array('id_product' => $id_product));
        $this->context->controller->registerJavascript('sb_lastseen_products', '/modules/sb_lastseen_products/js/sb_lastseen_products.js', ['position' => 'bottom', 'priority' => 1000]);
        
    }
    public  function hookDisplayTop(){

    }
    public function hookDisplayHome(){
        $this->context->smarty->assign(
            [
            ]
            );
        return  $this->display(__FILE__, 'sb_lastseen_products.tpl');
    }
    public function getContent(){
           session_start();
        $_SESSION["id_product"] = "hi";
    }
}
?>