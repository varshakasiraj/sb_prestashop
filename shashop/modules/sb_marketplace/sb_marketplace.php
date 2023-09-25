<?php

class sb_marketplace extends Module{
    public function __construct()
    {
        $this->name = 'sb_marketplace';
        $this->author = 'PrestaShop';
        $this->bootstrap = true;
        parent::__construct();
        
        $this->displayName = $this->trans('sb_marketplace');
        $this->description = $this->trans('sb_marketplace');
      
    }
    public function install()
    {
        return parent::install()&&
        $this->registerHook('actionValidateOrder');
    }
    public function uninstall(){
        return parent::uninstall();
    }
    public function hookActionObjectOrderAddAfter($params){
        $market_place_id = (string) Tools::getValue("market_place_id");
        $params['object']->market_place_id = $market_place_id ;
        var_dump($params);
        die();
    }
}
?>