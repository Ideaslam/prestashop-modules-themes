<?php
namespace SecretCodes\Module\Qoyod\Services;

use SecretCodes\Module\Qoyod\Classes\CreateQoyodOrderResponse;
use Exception;
use SecretCodes\Module\Qoyod\Exceptions\ApiException;
use SecretCodes\Module\Qoyod\Exceptions\CheckWalletException;
use SecretCodes\Module\Qoyod\Exceptions\HttpException;
use SecretCodes\Module\Qoyod\Exceptions\UnauthorizedException; 
use SecretCodes\Module\Qoyod\Shared\Curl;
use Throwable;

use SecretCodes\Module\Qoyod\Shared\Ihttp;



class QoyodApi extends Curl
{
    /** @var string */
    private $baseUrl;

    /** @var Ihttp  */
    private $http;


    /** @var string */
    private $clientId;

    /** @var string */
    private $secretKey;

    /** @var string */
    private $token;


    public function __construct( Curl $curl)
    { 
       $this->http = $curl;
    }

    /**
     * @param string $api_token
     * @param string $baseUrl
     */
    public function setKeys($api_token, $baseUrl)
    { 
        $this->baseUrl = $baseUrl;
        $this->token =$api_token;

    }

    private function validateResponse($resp)
    { 
    
     if(isset($resp->errors ) != false ){ 
        throw new  ApiException(json_encode($resp->errors));
     }
 
     if(isset($resp->error) != false ){ 
        throw new  ApiException(json_encode($resp->error ));
     }
 
    

    
     if(isset($resp->code) != false ){
        if($resp->code == 401 ){
            throw new  UnauthorizedException($resp->message);
        }
        else if($resp->code == 406 ){
            throw new  CheckWalletException($resp->message);
        }
        else if ($resp->code <> 200) {
            throw new  ApiException($resp->message);
        }
    }
    }


    public function createCategory($data)
    {
        try {  
            $url = $this->baseUrl . '/categories';
            $resp = $this->http->post($url,json_encode($data) , $this->token);
           
            $decoded = json_decode($resp);
            $this->validateResponse($decoded);
            return $decoded ;
        } catch (Throwable $e) { 
            throw new HttpException($e->getMessage());
        }

    }

    public function updateCategory($id,$data)
    {
        try {
            
             
            $url = $this->baseUrl . '/categories/'.$id; 
            $resp = $this->http->put($url,   json_encode($data)  , $this->token); 
            $decoded = json_decode($resp); 
            $this->validateResponse($decoded);
            return $decoded ;
        } catch (Throwable $e) { 
            throw new HttpException($e->getMessage());
        }

    }


    public function createCustomer($data)
    {
        try {  
            $url = $this->baseUrl . '/customers';
            $resp = $this->http->post($url,json_encode($data) , $this->token);
           
            $decoded = json_decode($resp);
            $this->validateResponse($decoded);
            return $decoded ;
        } catch (Throwable $e) { 
            throw new HttpException($e->getMessage());
        }

    }


    


    public function updateCustomer($id , $data)
    {
        try {  
            $url = $this->baseUrl . '/customers/'.$id;
            $resp = $this->http->put($url,json_encode($data) , $this->token);
           
            $decoded = json_decode($resp);
            $this->validateResponse($decoded);
            return $decoded ;
        } catch (Throwable $e) { 
            throw new HttpException($e->getMessage());
        }

    }



    public function createProduct($data)
    {
        try {   
            
            $url = $this->baseUrl . '/products';
            $resp = $this->http->post($url,json_encode($data) , $this->token);    
            $decoded = json_decode($resp); 
            $this->validateResponse($decoded); 
            return $decoded ;
        } catch (Throwable $e) {  
            throw new HttpException($e->getMessage());
        }

    }

    public function updateProduct($id , $data)
    {
        try {  
            $url = $this->baseUrl . '/products/'.$id; 
            $resp = $this->http->put($url,json_encode($data) , $this->token);  
            $decoded = json_decode($resp);
            $this->validateResponse($decoded);
       
            return $decoded ;
        } catch (Throwable $e) { 
            throw new HttpException($e->getMessage());
        }

    }


    public function createInvoice($data)
    {
        try {   
            $url = $this->baseUrl . '/invoices';
            $resp = $this->http->post($url,json_encode($data) , $this->token); 
            $decoded = json_decode($resp); 
            $this->validateResponse($decoded); 

            return $decoded ;
        } catch (Throwable $e) { 
            throw new HttpException($e->getMessage());
        }

    }


    public function updateInvoice($id,$data)
    {
        try {   
            $url = $this->baseUrl . '/invoices/'.$id;
            $resp = $this->http->put($url,json_encode($data) , $this->token); 
            $decoded = json_decode($resp);
            $this->validateResponse($decoded); 
            return $decoded ;
        } catch (Throwable $e) { 
            throw new HttpException($e->getMessage());
        }

    }


    public function createInvoicePayment($data)
    {
        try {   
            $url = $this->baseUrl . '/invoice_payments';
            $resp = $this->http->post($url,json_encode($data) , $this->token); 
            $decoded = json_decode($resp); 
           $this->validateResponse($decoded); 
            return $decoded ;
        } catch (Throwable $e) { 
            throw new HttpException($e->getMessage());
        }

    }
 
 
}