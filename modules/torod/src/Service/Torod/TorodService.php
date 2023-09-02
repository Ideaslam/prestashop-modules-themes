<?php 
namespace SecretCodes\Module\Torod\Services ;  
use Exception;  
use SecretCodes\Module\Torod\Exceptions\HttpException;
use SecretCodes\Module\Torod\Exceptions\ServiceNotFoundException; 
use Throwable; 
 

 

class TorodService { 

    /** @var TorodApi */
    private $torod  ;

    /** @var \SecretCodes\Module\Torod\Interfaces\FactoryInterface */
    private $factoryInterface  ;
    
    public function __construct( TorodServiceFactory $torodFactory)
    {   
        $this->factoryInterface =$torodFactory ;
        if ($this->torod == null) { 
            try{
                $this->torod=  $this->initializeTorod();
            }catch (ServiceNotFoundException $e){

            }
           
        }
    }

    protected function initializeTorod(){ 
        try{
            return  $this->factoryInterface->createInstance();   
        }catch (Exception $e){  
            throw new ServiceNotFoundException("Service is Not Initialize") ; 
        }

        
    }

    public function isInitialized(){
        
        if($this->torod==null ){
            $this->torod=  $this->initializeTorod();
            return true ; 
        } 
        else 
           false ;     
    }
    public function checkTorodMainAddress($code)
    {
        try { 
            $addresses = $this->torod->getAddresses(); 
            foreach ($addresses as $address) { 
                if ($address->warehouse == $code) { 
                    return $address;
                }
            }
            return null;
        } catch (Throwable $e) {
            throw new Exception('Address is not created');
        }

    }


    public function getTorodCarriers() : array 
    {
        try { 
            $carrierList = $this->torod->getAllCarrierList(); 
            return  $carrierList;
        } catch (Throwable $e) {
            throw new Exception('Carrier List is not created');
        }

    }

 
    public function createAddress($warestore,$code){
        try { 
            $data = array(
                "warehouse_name" => $warestore->name,
                "warehouse" => $code,
                "contact_name" => $warestore->name,
                "phone_number" => $warestore->phone,
                "email" => $warestore->email,
                "zip_code" => $warestore->postcode,
                "type" => "address",
                "locate_address" => $warestore->address1,
                "latitude" => $warestore->latitude,
                "longitude" => $warestore->longitude
            );

            $address = $this->torod->createAddress($data);
            return $address; 
        } catch (Throwable $e) {
            throw new Exception('Address is not created');
        }
    }


    public function updateAddress($warestore,$code,$address_id){
        try { 
            $data = array(
                "warehouse_name" => $warestore->name,
                "warehouse" => $code,
                "contact_name" => $warestore->name,
                "phone_number" => $warestore->phone,
                "email" => $warestore->email,
                "zip_code" => $warestore->postcode,
                "type" => "address",
                "locate_address" => $warestore->address1,
                "latitude" => $warestore->latitude,
                "longitude" => $warestore->longitude
            );

            $address = $this->torod->updateAddress($data ,$address_id);
            return $address; 
        } catch (Throwable $e) {
            throw new Exception('Address is not created');
        }
    }
   


    public function createPreOrder($customer ,$products ,$address)
    {
        try {
            
            $total = 0;
            $item_names = "";
            $weight = 1;
            $no_of_products = count($products); 
            foreach ( $products as $product) { 
                $total = $total + $product["total"]; 
                $item_names = $item_names . ' - ' . $product["name"];
                $weight = $weight + $product["weight"];
            }
            
            $data = (object) array(
                "name" => $customer->firstname . " " . $customer->lastname,
                "email" => $customer->email,
                "phone_number" => $address->phone  ,
                "item_description" => $item_names,
                "order_total" => $total,
                "payment" => "Prepaid",
                "weight" => $weight,
                "no_of_box" => $no_of_products, 
                "type" => "address",
                "locate_address" => $address->address1,
            );

            

            $newOrder = $this->torod->createPreOrder($data);
            return $newOrder;
        } catch (Throwable $e) {
            throw new Exception('Order is not created');
        }

    }


    public function getOrderCarrierList($order_id, $warehouse_code)
    {
        try { 
            $data = array(
                "order_id" => $order_id,
                "warehouse" => $warehouse_code,
                "type" => "normal",
                "filter_by" => "fastest",

            );  
            $carrierList = $this->torod->getOrderCarrierList($data);
            return $carrierList;
        } catch (Throwable $e) {
            
            throw new Exception('Check Your Wallet');
        }

    }
    public function createOrderShippment($order_id, $warehouse_code, $courier_partner_id)
    {
        try {

            $data = array(
                "order_id" => $order_id,
                "warehouse" => $warehouse_code,
                "type" => "normal",
                "courier_partner_id" => $courier_partner_id,

            ); 
            $newOrder = $this->torod->createOrderShippment($data);
            return $newOrder;
        } catch (Throwable $e) {
            throw new Exception('Shippment is not created');
        }

    }
  
   
}