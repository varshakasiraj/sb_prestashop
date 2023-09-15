<?php
 include_once(_PS_MODULE_DIR_.'sb_export_order/classes/sb_order_details.php');
 require_once(_PS_MODULE_DIR_.'sb_export_order/classes/BatchResults.php');
 require_once(_PS_MODULE_DIR_.'sb_export_order/classes/Sample.php');
class sb_export_order extends Module{
    public function __construct()
    {
        $this->name = 'sb_export_order';
        $this->author = 'PrestaShop';
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->trans('sb_export_order');
        $this->description = $this->trans('Export customer and order deatils');
        $this->insertFiledIntoProductOrderdetails();
        $this->insertFiledIntoExportOrderTable();
    }
    public function install()
    {
        return parent::install() && $this->createExportOrderTable()
        && $this->createOrderDetailsTable();
    }
    public function uninstall(){
        return parent::uninstall();
    }
    public function createOrderDetailsTable(){
        
        $db = \Db::getInstance();
        $request = "CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."sb_product_order_details`(
            `order_id` int  AUTO_INCREMENT,
            `order_number` int(50) NOT NULL,
            `order_date`   DATE,
            `order_line_number` int(50),
            `item_product`  varchar(255),
            `item_description`  varchar(255),
            `quantity_requested` int(10),
            `shippedquantity` int(10) ,
            `deliverydate` DATE,
            `current_shipping_date` DATE,
            `current_shipping_hours` varchar(50),
            `out_bound_protocol_number` int(10),
            `delivery_document_number` varchar(50), 
            PRIMARY KEY(`order_id`)
        ) ";
        $result = $db->execute($request);
        return $result;
    }
    public function createExportOrderTable(){
        $db = \Db::getInstance();
        $request = "CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."batch_results`(
            `batch_id` int AUTO_INCREMENT,
            `batch_file` varchar(255) NOT NULL,
            `batch_key` varchar(40) NOT NULL ,
            `batch_date`  DATE NOT NULL,
            `batch_hour` varchar(40) NOT NULL,
            `batch_message` varchar(255),
            `ordernumber` int(50) NOT NULL,
            `orderdate` DATE NOT NULL,
            `itemCode` varchar(50) NOT NULL ,
            `item_description` varchar(205),
            `row_number` int(10) NOT NULL,
            `rowstatus`  varchar(50) NOT NULL ,
            `row_message` varchar(255),
            PRIMARY KEY(`batch_id`)
        )";
        $result = $db->execute($request);
        return $result;
    }
    public function insertFiledIntoProductOrderdetails(){
        $exportOrder = new sb_order_details();
         $exportOrder->order_number = 1000125;
        $exportOrder->order_date ="2003-05-11";
        $exportOrder->order_line_number= 1 ;
        $exportOrder->item_product="DIODE-LED-RG ";
        $exportOrder->item_description='TUBE LED H134 ROUGE ';
        $exportOrder->quantity_requested=12 ;
        $exportOrder->shippedquantity = 1 ;
        $exportOrder->deliverydate ="2003-05-11";
        $exportOrder->current_shipping_date ="2003-05-11";
        $exportOrder->current_shipping_hours='16.14.00';
        $exportOrder->out_bound_protocol_number = 12068318 ;
        $exportOrder->delivery_document_number='BL898989';
       $exportOrder->add();
    }
    public function insertFiledIntoExportOrderTable(){
        $exportOrder = new BatchResults();
        $exportOrder->batch_file ="sbtest2";
        $exportOrder->batch_key ="DIODE-LED-RG ";
        $exportOrder->batch_date="2003-05-11";
        $exportOrder->batch_hour="2003-05-11";
        $exportOrder->batch_message="TUBE LED H134 ROUGE";
        $exportOrder->ordernumber = 234;
        $exportOrder->orderdate ="2003-05-11";
        $exportOrder->itemCode ="TUBE LED H134 ROUGE";
        $exportOrder->item_description="TUBE LED H134 ROUGE";
        $exportOrder->row_number="TUBE LED H134 ROUGE";
        $exportOrder->rowstatus ="TUBE LED H134 ROUGE";
        $exportOrder->row_message="TUBE LED H134 ROUGE";
        $exportOrder->add();
    }

}
?>
