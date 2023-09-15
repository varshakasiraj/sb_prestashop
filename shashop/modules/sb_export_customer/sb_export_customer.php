<?php
  require_once 'vendor/autoload.php';  
  use PhpOffice\PhpSpreadsheet\Spreadsheet;
  use PhpOffice\PhpSpreadsheet\Writer\Csv;
class sb_export_customer extends Module{
    public function __construct()
    {
        $this->name = 'sb_export_customer';
        $this->author = 'PrestaShop';
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->trans('sb_export_customer');
        $this->description = $this->trans('Export customer and order deatils');
    }
    public function install()
    {
        return parent::install();
    }
    public function uninstall(){
        return parent::uninstall();
    }
    public function getContent(){
        if(Tools::isSubmit('customer')){
            $this -> getCustomerDetails();
        }
       
        if(Tools::isSubmit('filterbydate')){
            $start_date = Tools::getValue('start_date');
            $end_date = Tools::getValue('end_date');
            $order_id = Tools::getValue('order_status');
            var_dump($order_id); 
            $result= $this->getCustomerDetailsFromDB($start_date,$end_date,$order_id);
            if(!empty($result)){
                $this->exportCustomerDetails($result);
            }
            
        }
        return $this->display(__FILE__, 'sb_export_customer.tpl').$this->renderForm();
    }
    public function exportCustomerDetails($result){
        
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        foreach($result  as $getcustomerdetails ){
                $orderid = $getcustomerdetails ["id_order"];
                $ProductDetailObject = new OrderDetail;
                $product_detail = $ProductDetailObject->getList($orderid);
                foreach($product_detail as $product_detail){
                        $customerdetails[] =[
                            $getcustomerdetails["email"],
                            $getcustomerdetails["firstname"],
                            $product_detail["id_order"],
                            $product_detail["product_id"]
                            
                        ] ; 
                }        
        }
        $sheet->fromArray( $customerdetails);
        $writer = new Csv($spreadsheet);
        $writer->setDelimiter(';');
        $writer->save(dirname(__DIR__)."\sb_export_customer\csv\orderdeatils.csv");
        header('Content-Type: application/csv');
        header('Content-Disposition: attachment;filename=orderdeatils.csv');
        $file_path=dirname(__DIR__)."\sb_export_customer\csv\orderdeatils.csv";
        header('Content-Length: '.filesize($file_path));
        readfile($file_path);
    }
    public function getCustomerDetailsFromDB($start_date="",$end_date="",$order_id=""){
        $db = \Db::getInstance();
        $request = "SELECT  x.`id_order`,x.`firstname`,x.`email` 
        from (
            SELECT o.`id_order`,c.`firstname`,c.`email` ,
            ROW_NUMBER() OVER (PARTITION BY o.`id_customer` Order by  o.`id_order` ASC) as groupedcustomer
            FROM `"._DB_PREFIX_."orders` as o
            LEFT JOIN `"._DB_PREFIX_."customer` as c on o.`id_customer` = c.`id_customer`
            LEFT JOIN `"._DB_PREFIX_."order_history` as ohs on o.`id_order` = ohs.`id_order` 
            Where`email` NOT LIKE '%@prestashop.com' AND c.`date_add`
         AND c.`date_add` BETWEEN '".$start_date."' AND '".$end_date."' AND ohs.`id_order_state` = ".$order_id
         .") as x  WHERE   x.groupedcustomer <=3;";
        $result = $db->executeS($request);
        return $result;
    }
    public function getCustomers(){
        $db = \Db::getInstance();
        $sql = "SELECT id_customer, CONCAT(firstname,lastname) AS name, email
                FROM " ._DB_PREFIX_. "customer
                WHERE id_shop = 1 AND email NOT LIKE '%@prestashop.com'";
        $result = $db->executeS($sql);
        return $result;

    }
    public function getCustomerDetails(){
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $customers = $this -> getCustomers();
        foreach($customers as $customer){
            $customerData[]=[
               "customermail" => $customer['email'],
                "customername" => $customer['name']
            ];
        }
        $sheet -> fromArray($customerData);
        $writer = new Csv($spreadsheet);
        $writer -> setDelimiter(';');
        $writer -> save(dirname(__DIR__)."\sb_export_customer\csv\customers.csv");
        header('Content-Type: application/csv');
        header('Content-Disposition: attachment;filename=customers.csv');
        $file_path=dirname(__DIR__)."\sb_export_customer\csv\customers.csv";
        header('Content-Length: '.filesize($file_path));
        readfile($file_path);

    }
    public function renderForm(){
        $form=[
            'form' =>[
                'input' =>array(
                    array(
                        'type' =>"text",
                        'name' => 'start_date',
                        'required' => true,
                        'label' =>$this->l('Start Date'),
                        'placeholder' => $this->l('2023-05-30')
                    ),
                    array(
                        'type' => 'text',
                        'name' => 'end_date',
                        'required' => true,
                        'label' =>'End Date',
                        'placeholder' => $this->l('2023-10-30')
                    ),
                    array(
                        'type' => 'text',
                        'name' => 'order_status',
                        'required' => true,
                        'label' =>'Order id',
                        'placeholder' => $this->l('3')
                    ),
                ),
                    'submit' =>[

                        'title' => 'insert',
                        'name' => 'filterbydate'
                    ]
                ],
            ];
        $helperform = new HelperForm();
        $helperform->table = $this->table;
        $helperform->submit_action = 'filterbydate' . $this->name;
        return $helperform->generateForm([$form]);
    }
}
?>