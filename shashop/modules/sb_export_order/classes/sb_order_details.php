<?php
class sb_order_details extends ObjectModel{
    public $order_id;
    public $order_number;
    public $order_date ;
    public $order_line_number ;
    public $item_product;
    public $item_description ;
    public $quantity_requested ;
    public $shippedquantity ;
    public $deliverydate ;
    public $current_shipping_date ;
    public $current_shipping_hours ;
    public $out_bound_protocol_number ;
    public $delivery_document_number ;
    /**
     * Summary of definition
     * @var array
     */
    public static $definition = [
        'table' => 'sb_product_order_details',
        'primary' => 'order_id',
        'fields' => [
            'order_number' => array('type' => self::TYPE_INT),
            'order_date' =>array('type' => self::TYPE_DATE),
            'order_line_number' =>array('type' => self::TYPE_INT),
            'item_product' =>array('type' => self::TYPE_STRING),
            'item_description' =>array('type' => self::TYPE_HTML),
            'quantity_requested' =>array('type' => self::TYPE_INT),
            'shippedquantity' =>array('type' => self::TYPE_INT),
            'deliverydate' =>array('type' => self::TYPE_DATE),
            'current_shipping_date' =>array('type' => self::TYPE_DATE),
            'current_shipping_hours' =>array('type' => self::TYPE_STRING),
            'out_bound_protocol_number' =>array('type' => self::TYPE_INT),
            'delivery_document_number' =>array('type' => self::TYPE_STRING),
        ]
    ];


}
?>