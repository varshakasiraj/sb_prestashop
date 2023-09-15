<?php
use PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilder;
use Symfony\Component\Form\Extension\Core\Type\FileType;
class sb_cmspage_hook extends Module{
    public function __construct()
    {
        $this->name = 'sb_cmspage_hook';
        $this->author = 'PrestaShop';
        $this->bootstrap = true;
        parent::__construct();
        $this->registerHook('actionAfterUpdateCmsPageFormHandler');
        $this->displayName = $this->trans('sb_cmspage_hook');
        $this->description = $this->trans('sb_cmspage_hook');
      
    }
    public function install()
    {
        return parent::install();
    }
    public function uninstall(){
        return parent::uninstall();
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
}
?>