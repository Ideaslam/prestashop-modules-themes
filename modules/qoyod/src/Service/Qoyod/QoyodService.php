<?php 
namespace SecretCodes\Module\Qoyod\Services ;  
use Exception;  
use SecretCodes\Module\Qoyod\Exceptions\HttpException;
use SecretCodes\Module\Qoyod\Exceptions\ServiceNotFoundException; 
use Throwable; 
 

 

class QoyodService { 

    /** @var QoyodApi */
    private $qoyod  ;

    /** @var \SecretCodes\Module\Qoyod\Interfaces\FactoryInterface */
    private $factoryInterface  ;
    
    public function __construct( QoyodServiceFactory $qoyodFactory)
    {   
        $this->factoryInterface =$qoyodFactory ;
        if ($this->qoyod == null) { 
            try{ 
                $this->qoyod=  $this->initializeQoyod();
            }catch (ServiceNotFoundException $e){

            }
           
        }
    }

    protected  function initializeQoyod(){ 
        try{
            return $this->factoryInterface->createInstance();  
        }catch (Exception $e){  
            throw new ServiceNotFoundException("Service is Not Initialize") ; 
        }

        
    }

    public function isInitialized(){ 
        if($this->qoyod==null ){
            $this->qoyod=  $this->initializeQoyod(); 
        }  
        return true ;      
    }
 
 

    public function createCategory($params){
        try { 
            $data = array(
                "category"=>array(
                    "name"=>$params["name"],
                    "description"=> $params["description"],
                    "parent_id"=>"1" 
                )
              
            );

            $category = $this->qoyod->createCategory($data);
            return $category; 
        } catch (Throwable $e) { 
            throw $e;
        }
    }

    public function updateCategory($id,$params){
        try { 
           
            $data = array(
                "category"=>array( 
                    "name"=>$params["name"],
                    "description"=> $params["description"],
                    "parent_id"=>"1"  
                )
            );
           
            
            $category = $this->qoyod->updateCategory($id,$data);
            return $category; 
        } catch (Throwable $e) {
            throw new Exception($e->getMessage());
        }
    }


    public function createCustomer($params){
        try { 
 
            $data = array(
                "contact"=>array(
                    "name"=> $params["name"], 
                    "organization" => "",
                     "email"=> $params["email"],   
                     "phone_number"=> $params["phone_number"],  
                     "tax_number"=>"",
                     "status"=> "Active"
                )
              
            );

            $customer = $this->qoyod->createCustomer($data);  
            return $customer; 
        } catch (Throwable $e) { 
            throw $e;
        }
    }


    public function updateCustomer($id,$params){
        try { 
            $data = array(
                "contact"=>array(
                    "name"=> $params["name"],   
                    "organization" => "",
                     "email"=> $params["email"],   
                     "phone_number"=> $params["phone_number"],  
                     "tax_number"=>"",
                     "status"=> "Active"
                )
            );

            $customer = $this->qoyod->updateCustomer($id,$data);
            return $customer; 
        } catch (Throwable $e) { 
            throw $e;
        }
    }


    public function createProduct($params){
        try { 

            
            $data = array(
                "product"=>array(
                    "sku"=>  $params["sku"], 
                    "name_ar"=>  $params["name_ar"],
                    "name_en"=>  $params["name_en"],
                    "description"=>  $params["description"], 
                    "category_id"=>  $params["category_id"], 
                    "track_quantity"=>  $params["track_quantity"],  
                    "purchase_item" => "1",
                    "buying_price" =>"1",
                    "expense_account_id" =>  $params["expense_account_id"],  
                    "selling_price"=> $params["selling_price"],
                    "sales_account_id"=>  $params["sales_account_id"],  
                    "product_unit_type_id"=> $params["product_unit_type_id"],
                    "sale_item"=>  $params["sale_item"] ,
                    "tax_id"=>  $params["tax_id"] ,
                    "type" => $params["type"] 
                    
                )
              
            );
          
           $product = $this->qoyod->createProduct($data);  
           return $product; 
       
        } catch (Throwable $e) {  
            throw $e;
        }
    }


    public function updateProduct($id,$params){
        try { 
            
            $data = array(
                "product"=>array(
                    "sku"=>  $params["sku"], 
                    "name_ar"=>  $params["name_ar"],
                    "name_en"=>  $params["name_en"],
                    "description"=>  $params["description"], 
                    "category_id"=>  $params["category_id"], 
                    "track_quantity"=>  $params["track_quantity"],  
                    "purchase_item" => "1",
                    "buying_price" =>"1",
                    "expense_account_id" =>  $params["expense_account_id"],  
                    "selling_price"=> $params["selling_price"],
                    "sales_account_id"=>  $params["sales_account_id"],  
                    "product_unit_type_id"=> $params["product_unit_type_id"],
                    "sale_item"=>  $params["sale_item"] ,
                    "tax_id"=>  $params["tax_id"] ,
                    "type" => $params["type"] 
                )
            );

            $product = $this->qoyod->updateProduct($id,$data);
            return $product; 
        } catch (Throwable $e) { 
            throw $e;
        }
    }
  


    public function createInvoice($params){
        try { 
 
            $data = array(
                "invoice"=>array(
                    "contact_id"=> $params["contact_id"],
                    "reference"=> $params["reference"],
                    "description"=>$params["description"],
                    "issue_date"=> $params["issue_date"],
                    "due_date"=> $params["due_date"],
                    "status"=> "Approved",
                    "inventory_id"=> 1,
                    "line_items"=>  $params["line_items"], 
                )
              
            );
           
            $invoice = $this->qoyod->createInvoice($data);  
            return $invoice; 
        } catch (Throwable $e) { 
            throw $e;
        }
    }


    public function updateInvoice($id,$params){
        try { 
 
            $data = array(
                "invoice"=>array(
                    "contact_id"=> $params["contact_id"],
                    "reference"=> $params["reference"],
                    "description"=>$params["description"],
                    "issue_date"=> $params["issue_date"],
                    "due_date"=> $params["due_date"],
                    "status"=> "Approved",
                    "inventory_id"=> 1,
                    "line_items"=>  $params["line_items"],  
                )
              
            );

            $invoice = $this->qoyod->updateInvoice($id,$data);  
            return $invoice; 
        } catch (Throwable $e) { 
            throw $e;
        }
    }



    public function createInvoicePayment($params){
        try { 
 
            $data = array(
                "invoice_payment"=>array( 
                    "reference" =>  $params["reference"],
                    "invoice_id"=>  $params["invoice_id"],
                    "account_id"=>  $params["account_id"],
                    "date"=>  $params["date"],
                    "amount"=>  $params["amount"]
                )
              
            );
        
            $payment = $this->qoyod->createInvoicePayment($data);  
            return $payment; 
        } catch (Throwable $e) { 
            throw $e;
        }
    }
  
   
}