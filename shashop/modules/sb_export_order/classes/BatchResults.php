<?php
class BatchResults extends ObjectModel{
    public $batch_id ;
    public $batch_file;
    public $batch_key ;
    public $batch_date ;
    public $batch_hour ;
    public $batch_message ;
    public $ordernumber ;
    public $orderdate ;
    public $itemCode ;
    public $item_description ;
    public $row_number ;
    public $rowstatus  ;
    public $row_message ;
    public static $definition = [
        'table' => 'batch_results',
        'primary' => 'batch_id',
        'fields' => [
            'batch_file' => array('type' => self::TYPE_STRING,'required' => true),
            'batch_key'  => array('type' => self::TYPE_STRING),
            'batch_date' => array('type' => self::TYPE_DATE),
            'batch_hour' =>array('type' => self::TYPE_STRING),
            'batch_message' =>array('type' => self::TYPE_STRING) ,
            'ordernumber' =>array('type' => self::TYPE_INT) ,
            'orderdate' =>array('type' => self::TYPE_DATE),
            'itemCode' =>array('type' => self::TYPE_STRING),
            'item_description' => array('type' => self::TYPE_STRING),
            'row_number' =>array('type' => self::TYPE_INT) ,
            'rowstatus' =>array('type' => self::TYPE_STRING) ,
            'row_message' =>array('type' => self::TYPE_STRING)
        ]
        
    ];
}
?>