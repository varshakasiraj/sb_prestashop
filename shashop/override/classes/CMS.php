<?php
class CMS extends CMSCore{
    public $cover_image;
    public static $definition = [
        'table' => 'cms',
        'primary' => 'id_cms',
        'multilang' => true,
        'multilang_shop' => true,
        'fields' => [
            'id_cms_category' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
            'position' => ['type' => self::TYPE_INT],
            'indexation' => ['type' => self::TYPE_BOOL],
            'active' => ['type' => self::TYPE_BOOL],

            /* Lang fields */
            'meta_description' => ['type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 512],
            'meta_keywords' => ['type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 255],
            'meta_title' => ['type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'required' => true, 'size' => 255],
            'head_seo_title' => ['type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 255],
            'link_rewrite' => ['type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isLinkRewrite', 'required' => true, 'size' => 128],
            'content' => ['type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 3999999999999],
            'cover_image' => ['type' => self::TYPE_STRING, 'lang' => true],
        ],
       
    ];
   
}
?>