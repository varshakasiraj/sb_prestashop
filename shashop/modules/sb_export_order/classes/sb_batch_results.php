<?php
class sb_batch_results extends ObjectModel{
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
    public static $definition = array(
        'table' => 'pl_batch_results',
        'primary' => 'batch_id',
        'fields' => array(
            'batch_file' => array('type' => self::TYPE_STRING, 'required' => true),
            'batch_key'  => array('type' => self::TYPE_STRING, 'required' => true),
            'batch_date' => array('type' => self::TYPE_DATE, 'required' => true),
            'batch_hour ' =>array('type' => self::TYPE_DATE, 'required' => true),
            'batch_message' =>array('type' => self::TYPE_STRING) ,
            'ordernumber' =>array('type' => self::TYPE_INT, 'required' => true) ,
            'orderdate ' =>array('type' => self::TYPE_DATE, 'required' => true),
            'itemCode ' =>array('type' => self::TYPE_STRING, 'required' => true),
            'item_description' => array('type' => self::TYPE_STRING),
            'row_number' =>array('type' => self::TYPE_INT, 'required' => true) ,
            'rowstatus ' =>array('type' => self::TYPE_STRING, 'required' => true) ,
            'row_message ' =>array('type' => self::TYPE_STRING)
        )
        
        );
}
?>