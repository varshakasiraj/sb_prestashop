<?php 
use PhpParser\Node\Expr\Array_;
class AngarSliderOverride  extends AngarSlider{
   
   
    protected function _postProcess()
    {
        $errors = array();
        $shop_context = Shop::getContext();

        /* Processes Slider */
        if (Tools::isSubmit('submitSlider')) {
            $shop_groups_list = array();
            $shops = Shop::getContextListShopID();

            foreach ($shops as $shop_id) {
                $shop_group_id = (int)Shop::getGroupFromShop($shop_id, true);

                if (!in_array($shop_group_id, $shop_groups_list)) {
                    $shop_groups_list[] = $shop_group_id;
                }

                $res = Configuration::updateValue('ANGARSLIDER_WIDTH', (int)Tools::getValue('ANGARSLIDER_WIDTH'), false, $shop_group_id, $shop_id);
                $res &= Configuration::updateValue('ANGARSLIDER_SPEED', (int)Tools::getValue('ANGARSLIDER_SPEED'), false, $shop_group_id, $shop_id);
                $res &= Configuration::updateValue('ANGARSLIDER_PAUSE', (int)Tools::getValue('ANGARSLIDER_PAUSE'), false, $shop_group_id, $shop_id);
                $res &= Configuration::updateValue('ANGARSLIDER_LOOP', (int)Tools::getValue('ANGARSLIDER_LOOP'), false, $shop_group_id, $shop_id);
            }

            /* Update global shop context if needed*/
            switch ($shop_context) {
                case Shop::CONTEXT_ALL:
                    $res = Configuration::updateValue('ANGARSLIDER_WIDTH', (int)Tools::getValue('ANGARSLIDER_WIDTH'));
                    $res &= Configuration::updateValue('ANGARSLIDER_SPEED', (int)Tools::getValue('ANGARSLIDER_SPEED'));
                    $res &= Configuration::updateValue('ANGARSLIDER_PAUSE', (int)Tools::getValue('ANGARSLIDER_PAUSE'));
                    $res &= Configuration::updateValue('ANGARSLIDER_LOOP', (int)Tools::getValue('ANGARSLIDER_LOOP'));
                    if (count($shop_groups_list)) {
                        foreach ($shop_groups_list as $shop_group_id) {
                            $res = Configuration::updateValue('ANGARSLIDER_WIDTH', (int)Tools::getValue('ANGARSLIDER_WIDTH'), false, $shop_group_id);
                            $res &= Configuration::updateValue('ANGARSLIDER_SPEED', (int)Tools::getValue('ANGARSLIDER_SPEED'), false, $shop_group_id);
                            $res &= Configuration::updateValue('ANGARSLIDER_PAUSE', (int)Tools::getValue('ANGARSLIDER_PAUSE'), false, $shop_group_id);
                            $res &= Configuration::updateValue('ANGARSLIDER_LOOP', (int)Tools::getValue('ANGARSLIDER_LOOP'), false, $shop_group_id);
                        }
                    }
                    break;
                case Shop::CONTEXT_GROUP:
                    if (count($shop_groups_list)) {
                        foreach ($shop_groups_list as $shop_group_id) {
                            $res = Configuration::updateValue('ANGARSLIDER_WIDTH', (int)Tools::getValue('ANGARSLIDER_WIDTH'), false, $shop_group_id);
                            $res &= Configuration::updateValue('ANGARSLIDER_SPEED', (int)Tools::getValue('ANGARSLIDER_SPEED'), false, $shop_group_id);
                            $res &= Configuration::updateValue('ANGARSLIDER_PAUSE', (int)Tools::getValue('ANGARSLIDER_PAUSE'), false, $shop_group_id);
                            $res &= Configuration::updateValue('ANGARSLIDER_LOOP', (int)Tools::getValue('ANGARSLIDER_LOOP'), false, $shop_group_id);
                        }
                    }
                    break;
            }

            $this->clearCache();

            if (!$res) {
                $errors[] = $this->displayError($this->l('The configuration could not be updated.'));
            } else {
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=6&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
            }
        } /* Process Slide status */
        elseif (Tools::isSubmit('changeStatus') && Tools::isSubmit('id_slide')) {
            
            $slide = new AngarSlide((int)Tools::getValue('id_slide'));
            if ($slide->active == 0) {
                $slide->active = 1;
            } else {
                $slide->active = 0;
            }
            $res = $slide->update();
            $this->clearCache();
            $this->_html .= ($res ? $this->displayConfirmation($this->l('Configuration updated')) : $this->displayError($this->l('The configuration could not be updated.')));
        } /* Processes Slide */
        elseif (Tools::isSubmit('submitSlide')) {
            /* Sets ID if needed */
            $active_newtab =Configuration::get('active_newtab');
            $active_newtab_id = (int)Tools::getValue('id_slide');
            $slider_id_string = $this->validateActiveNewtab( $active_newtab,$active_newtab_id);
            Configuration::updateValue("active_newtab", $slider_id_string); 
            if (Tools::getValue('id_slide')) {
                $slide = new AngarSlide((int)Tools::getValue('id_slide'));
                if (!Validate::isLoadedObject($slide)) {
                    $this->_html .= $this->displayError($this->l('Invalid slide ID'));
                    return false;
                }
            } else {
                $slide = new AngarSlide();
            }
            /* Sets position */
            $slide->position = (int)Tools::getValue('position');
            /* Sets active */
            $slide->active = (int)Tools::getValue('active_slide');
            /* Sets each langue fields */
            $languages = Language::getLanguages(false);

            foreach ($languages as $language) {
                $slide->title[$language['id_lang']] = Tools::getValue('title_'.$language['id_lang']);
                $slide->url[$language['id_lang']] = Tools::getValue('url_'.$language['id_lang']);
                $slide->legend[$language['id_lang']] = Tools::getValue('legend_'.$language['id_lang']);
                $slide->description[$language['id_lang']] = Tools::getValue('description_'.$language['id_lang']);

                /* Uploads image and sets slide */
                $type = Tools::strtolower(Tools::substr(strrchr($_FILES['image_'.$language['id_lang']]['name'], '.'), 1));
                $imagesize = @getimagesize($_FILES['image_'.$language['id_lang']]['tmp_name']);
                if (isset($_FILES['image_'.$language['id_lang']]) &&
                    isset($_FILES['image_'.$language['id_lang']]['tmp_name']) &&
                    !empty($_FILES['image_'.$language['id_lang']]['tmp_name']) &&
                    !empty($imagesize) &&
                    in_array(
                        Tools::strtolower(Tools::substr(strrchr($imagesize['mime'], '/'), 1)),
                        array(
                            'jpg',
                            'gif',
                            'jpeg',
                            'png'
                        )
                    ) &&
                    in_array($type, array('jpg', 'gif', 'jpeg', 'png'))
                ) {
                    $salt = sha1(microtime());
                    if ($error = ImageManager::validateUpload($_FILES['image_'.$language['id_lang']])) {
                        $errors[] = $error;
                    }elseif (!move_uploaded_file($_FILES['image_'.$language['id_lang']]['tmp_name'],'C:\xamp\xampp\htdocs\shashop\modules\angarslider/views/img/images/'.$salt.'_'.$_FILES['image_'.$language['id_lang']]['name'])) {
                        $errors[] = $this->displayError($this->l('An error occurred during the image upload process.'));
                    }
                    $slide->image[$language['id_lang']] = $salt.'_'.$_FILES['image_'.$language['id_lang']]['name'];
                } elseif (Tools::getValue('image_old_'.$language['id_lang']) != '') {
                    $slide->image[$language['id_lang']] = Tools::getValue('image_old_'.$language['id_lang']);
                }
            }

            /* Processes if no errors  */
            if (!$errors) {
                /* Adds */
                if (!Tools::getValue('id_slide')) {

                    if (!$slide->add()) {
                       
                        $errors[] = $this->displayError($this->l('The slide could not be added.'));
                    }else{
                        $active_newtab =Configuration::get('active_newtab');
                        $slider_id_string = $this->validateActiveNewtab( $active_newtab,$slide->id);
                        Configuration::updateValue("active_newtab", $slider_id_string); 
                    }
                } /* Update */
                elseif (!$slide->update()) {
                    
                    $errors[] = $this->displayError($this->l('The slide could not be updated.'));
                }
                $this->clearCache();
            }
        } /* Deletes */
        elseif (Tools::isSubmit('delete_id_slide')) {
            $slide = new AngarSlide((int)Tools::getValue('delete_id_slide'));
            $res = $slide->delete();
            $this->clearCache();
            if (!$res) {
                $this->_html .= $this->displayError('Could not delete.');
            } else {
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=1&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
            }
        }

        /* Display errors if needed */
        if (count($errors)) {
            $this->_html .= $this->displayError(implode('<br />', $errors));
        } elseif (Tools::isSubmit('submitSlide') && Tools::getValue('id_slide')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        } elseif (Tools::isSubmit('submitSlide')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=3&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        }
    }
    public function validateActiveNewtab( $active_newtab,$slide_id){
        $newtab_active_array = array();
        $newtab_active_array  = explode(',',$active_newtab);      
       
        
        if(Tools::getValue('active_newtab')== 1){ 
            if(!in_array($slide_id ,$newtab_active_array)){
                array_push($newtab_active_array,$slide_id);
            }   
        }
        else{
            if(in_array($slide_id ,$newtab_active_array)){
                $index=array_search($slide_id,$newtab_active_array);
                unset($newtab_active_array[$index]);
            }
        }
        return implode(',',$newtab_active_array);  
    }
    protected function _prepareHook()
    {
        if (!$this->isCached('angarslider.tpl', $this->getCacheId())) {
            $slides = $this->getSlides(true);
            if (is_array($slides)) {
                
                foreach ($slides as &$slide) {
                    $slide['sizes'] = @getimagesize((dirname(__FILE__).DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$slide['image']));
                   
                    if (isset($slide['sizes'][3]) && $slide['sizes'][3]) {
                        $slide['size'] = $slide['sizes'][3];
                    }
                }
            }
            if (!$slides) {
                return false;
            }
            $get_newtab_id_from_Configuration = Configuration::get("active_newtab");
            $newtab_array  = explode(',', $get_newtab_id_from_Configuration);
            $this->smarty->assign(array('angarslider_slides' => $slides,
            'active_newtab_id' => $newtab_array
        ));
        }
        return true;
    }
    
    public function  renderAddForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Slide information'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'file_lang',
                        'label' => $this->l('Select a file'),
                        'name' => 'image',
                        'required' => true,
                        'lang' => true,
                        'desc' => sprintf($this->l('Maximum image size: %s.'), ini_get('upload_max_filesize'))
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Slide title'),
                        'name' => 'title',
                        'required' => true,
                        'lang' => true,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Target URL'),
                        'name' => 'url',
                        'required' => true,
                        'lang' => true,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Caption'),
                        'name' => 'legend',
                        'required' => true,
                        'lang' => true,
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => $this->l('Description'),
                        'name' => 'description',
                        'autoload_rte' => true,
                        'lang' => true,
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('New Tab'),
                        'name' => 'active_newtab',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'Tab_on',
                                'value' => 1,
                                'label' => $this->l('Yes')
                            ),
                            array(
                                'id' => 'Tab_off',
                                'value' => 0,
                                'label' => $this->l('No')
                            )
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Enabled'),
                        'name' => 'active_slide',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Yes')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No')
                            )
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                )
            ),
        );
        if (Tools::isSubmit('id_slide') && $this->slideExists((int)Tools::getValue('id_slide'))) {
            $slide = new AngarSlide((int)Tools::getValue('id_slide'));
            $fields_form['form']['input'][] = array('type' => 'hidden', 'name' => 'id_slide');
            $fields_form['form']['images'] = $slide->image;

            $has_picture = true;

            foreach (Language::getLanguages(false) as $lang) {
                if (!isset($slide->image[$lang['id_lang']])) {
                    $has_picture &= false;
                }
            }

            if ($has_picture) {
                $fields_form['form']['input'][] = array('type' => 'hidden', 'name' => 'has_picture');
            }
        }

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();
        $helper->module = $this;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitSlide';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $language = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->tpl_vars = array(
            'base_url' => $this->context->shop->getBaseURL(),
            'language' => array(
                'id_lang' => $language->id,
                'iso_code' => $language->iso_code
            ),
            'fields_value' => $this->getAddFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
            'image_baseurl' => $this->_path.'views/img/images/'
        );

        $helper->override_folder = '/';

        $languages = Language::getLanguages(false);

        if (count($languages) > 1) {
            return $this->getMultiLanguageInfoMsg().$helper->generateForm(array($fields_form));
        } else {
            return $helper->generateForm(array($fields_form));
        }
    }
    public function getAddFieldsValues()
    {
        $fields = array();

        if (Tools::isSubmit('id_slide') && $this->slideExists((int)Tools::getValue('id_slide'))) {
            $slide = new AngarSlide((int)Tools::getValue('id_slide'));
            $fields['id_slide'] = (int)Tools::getValue('id_slide', $slide->id);
        } else {
            $slide = new AngarSlide();
        }
        $slide_id = (int)Tools::getValue('id_slide');
        $sliderId = Configuration::get('active_newtab');
        $newtab_active_id = explode(',',$sliderId);
        if(in_array($slide_id,$newtab_active_id )){
            $fields['active_newtab'] = 1;
        }else{
            $fields['active_newtab'] = 0;
        }
        $fields['active_slide'] = Tools::getValue('active_slide', $slide->active);
        $fields['has_picture'] = true;

        $languages = Language::getLanguages(false);

        foreach ($languages as $lang) {
            $fields['image'][$lang['id_lang']] = Tools::getValue('image_'.(int)$lang['id_lang']);
            $fields['title'][$lang['id_lang']] = Tools::getValue('title_'.(int)$lang['id_lang'], $slide->title[$lang['id_lang']]);
            $fields['url'][$lang['id_lang']] = Tools::getValue('url_'.(int)$lang['id_lang'], $slide->url[$lang['id_lang']]);
            $fields['legend'][$lang['id_lang']] = Tools::getValue('legend_'.(int)$lang['id_lang'], $slide->legend[$lang['id_lang']]);
            $fields['description'][$lang['id_lang']] = Tools::getValue('description_'.(int)$lang['id_lang'], $slide->description[$lang['id_lang']]);
           // $fields['active_newtab'] [$lang['id_lang']]  = Tools::getValue('active_newtab'.(int)$lang['id_lang'], $slide->title[$lang['id_lang']]);
        }

        return $fields;
    }
}
?>