<?php
class sb_lastseen_productsController extends ModuleFrontController{
    public function initContent(){

    }
    public function getProduct(){
        if($_GET["product_ids"]){
            $get_localstorage_product_ids = explode(',',$_GET["product_ids"]);  
            $i=0;
            $products_details = array();
            foreach($get_localstorage_product_ids as $product_ids){
                  if($i==0){
                      $i++;
                      continue;
                  }
                  $product=new Product($product_ids,true,1,1);
                  $product_details[] = array(
                      "name" =>$product->name,
                      "description"=>$product->description,
                      "description_short"=>$product->description_short,
                      "price"=>$product->price
                  );   
            } 
        }
        return $products_details;
    }
    public function getProductTemplate($product_details){
        $assembler = new ProductAssembler($this->context);
        $presenterFactory = new ProductPresenterFactory($this->context);
    }
}
?>
