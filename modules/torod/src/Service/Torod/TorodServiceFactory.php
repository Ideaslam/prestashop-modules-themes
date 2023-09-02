<?php 
namespace SecretCodes\Module\Torod\Services ; 
use Configuration; 
use SecretCodes\Module\Torod\Exceptions\HttpException;
use SecretCodes\Module\Torod\Interfaces\FactoryInterface;
use SecretCodes\Module\Torod\Shared\Curl; 
use SecretCodes\Module\Torod\Exceptions\ServiceNotFoundException ;  

 

class TorodServiceFactory  implements FactoryInterface {
    
    private $service ;
    public function __construct( TorodApi $torodApi   )
    {   
        $this->service =$torodApi;
    }

    public function createInstance() : TorodApi{ 
        $clientId = Configuration::get('TOROD_ACCOUNT_CLIENT_ID', null);
        $secretKey = Configuration::get('TOROD_ACCOUNT_SECRET_KEY', null);  
        $base_url =   Configuration::get('TOROD_BASE_URL', null) ;   

        if($clientId  <> null ||  $secretKey <> null  || $base_url <> null ){ 
            $this->service->setKeys($clientId ,$secretKey , $base_url );
            try{
                $this->service->getToken();
                return $this->service;
            }catch (HttpException $e){
                throw $e ;
            } 
        }
        else{
            throw new  ServiceNotFoundException("TorodServiceNotFound",1001) ; 
        }
           
         
        
    }
    
   
 
    
}