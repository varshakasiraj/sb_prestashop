<?php
class sb_clothes_cmspage extends Module{
    public function __construct()
    {
        $this->name = 'sb_clothes_cmspage';
        $this->author = 'PrestaShop';
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->trans('sb_clothes_cmspage');
        $this->description = $this->trans('clothes cms category page');
        
    }
    public function install()
    {
        return parent::install();
    }
    public function uninstall(){
        return parent::uninstall();
    }
    public function hookDisplayHeader(){
        $this->context->controller->registerStylesheet('sb_clothes_cmspage', '/modules/sb_clothes_cmspage/css/sp_banner.css', ['media' => 'all', 'priority' => 1000]);
        $this->context->controller->registerStylesheet('slick_css', '/modules/sb_clothes_cmspage/css/slick.css', ['media' => 'all', 'priority' => 1000]);
        $this->context->controller->registerJavascript('slick_js', '/modules/sb_clothes_cmspage/js/slick.min.js', ['position' => 'bottom', 'priority' => 1000]);
        $this->context->controller->registerJavascript('sb_clothes_cmspagejs', '/modules/sb_clothes_cmspage/js/sb_cmspage.js', ['position' => 'bottom', 'priority' => 1000]);
    }
    public function hookDisplayHome(){
        $this->context->smarty->assign(
            [
                'sliders' => $this->getCmsCategory(),
            ]
            );
        return  $this->display(__FILE__, 'sb_clothes_cmspage.tpl');
    }
   
    public function getContent(){
        return $this->display(__FILE__, 'sb_clothes_cmspage.tpl');
    }
    public function getCmsCategory(){
        $cmscategory = new CMS();
        foreach($cmscategory->getCMSPages(1,6) as $cmspages){
            $cmspagesdetails[] =[
                "title"=>$cmspages["head_seo_title"],
                "link_rewrite" => $cmspages["link_rewrite"],
                "cover_image" =>$cmspages["cover_image"]
            ];
        }
        return $cmspagesdetails;
    }
}
?>