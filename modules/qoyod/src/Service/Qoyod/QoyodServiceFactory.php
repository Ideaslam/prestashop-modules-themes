<?php 
namespace SecretCodes\Module\Qoyod\Services ; 
use Configuration; 
use SecretCodes\Module\Qoyod\Exceptions\HttpException;
use SecretCodes\Module\Qoyod\Interfaces\FactoryInterface;
use SecretCodes\Module\Qoyod\Shared\Curl; 
use SecretCodes\Module\Qoyod\Exceptions\ServiceNotFoundException ;  

 

class QoyodServiceFactory  implements FactoryInterface {
    
    private $service ;
    public function __construct( QoyodApi $qoyodApi   )
    {   
        $this->service =$qoyodApi;
    }

    public function createInstance() : QoyodApi{ 
        $api_key=     Configuration::get('QOYOD_API_KEY', null) ; 
        $base_url =   Configuration::get('QOYOD_BASE_URL', null) ;   
         
        if($api_key  <> null ||  $base_url <> null ){ 
            $this->service->setKeys($api_key ,  $base_url );
            try{ 
                return $this->service;
            }catch (HttpException $e){
                throw $e ;
            } 
        }
        else{
            throw new  ServiceNotFoundException("QoyodServiceNotFound",1001) ; 
        }
           
         
        
    }
    
   
 
    
}