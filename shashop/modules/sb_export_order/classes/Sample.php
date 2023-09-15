<?php

class samples extends ObjectModel{
    public $id ;
    public $name;
    public static $definition = [
        'table' => 'sample',
        'primary' => 'id',
        'fields' => [
            'name' => array('type' => self::TYPE_STRING,'required' => true),
        ]
        
    ];
}
?>
