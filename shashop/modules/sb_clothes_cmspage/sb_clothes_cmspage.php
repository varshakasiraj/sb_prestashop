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
        return parent::install()&&
        $this->registerHook('displayHeader')&&
        $this->registerHook('displayHome')&&
        $this->registerHook('actionCmsPageFormBuilderModifier')&&
        $this->registerHook('actionAfterCreateCmsPageFormHandler')&&
        $this->registerHook('actionAfterUpdateCmsPageFormHandler');
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
    public function hookActionCmsPageFormBuilderModifier($params){
        $formBuilder = $params['form_builder'];
        $allFields = $formBuilder->all();
        foreach ($allFields as  $inputField => $input) {
            $formBuilder->add($input);
            $formBuilder->add(
                'cover_image', 
                FileType::class, 
                ['label' => 'coverimage']
            );
        }
    }
    public function hookActionAfterUpdateCmsPageFormHandler($params){
        $this->insertImageToDb($params["id"]);
    }

    public function hookActionAfterCreateCmsPageFormHandler($params){
       $this->insertImageToDb($params["id"]);
    }
    public function insertImageToDb($id){
        global $_POST;
        global $asset_uri, $error,$errors,$img_path;
        $allowed_img_extension = array("png", "jpg", "jpeg", "jfif");
        $basename = basename($_FILES['cms_page']['name']['cover_image']);
        $extension = substr(strrchr($basename, '.'), 1);
        if (in_array($extension, $allowed_img_extension)) {
            $path =$_FILES['cms_page']['tmp_name']['cover_image'];
            $image_path = "C:\\xamp\\xampp\htdocs\shashop\img\cms\\".$basename;
            move_uploaded_file($path, $image_path);
            $cms = new CMS($id);
            $cms->cover_image = $basename;
            $cms->update();
        } 
    }
    public function getContent(){
        return $this->display(__FILE__, 'sb_clothes_cmspage.tpl');
    }
    public function getCmsCategory(){
        $cmscategory = new CMS();
        $link = new Link();
     
        foreach($cmscategory->getCMSPages(1,6) as $cmspages){
            $cmspagesdetails[] =[
                "title"=>$cmspages["head_seo_title"],
                "link_rewrite" => $link->getCMSLink($cmspages['id_cms']),
                "cover_image" =>$cmspages["cover_image"]
            ];
        }
        return $cmspagesdetails;
    }
}
?>