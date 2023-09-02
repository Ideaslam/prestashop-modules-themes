<?php
namespace SecretCodes\Module\Torod\Services;

use SecretCodes\Module\Torod\Classes\CreateTorodOrderResponse;
use Exception;
use SecretCodes\Module\Torod\Exceptions\ApiException;
use SecretCodes\Module\Torod\Exceptions\CheckWalletException;
use SecretCodes\Module\Torod\Exceptions\HttpException;
use SecretCodes\Module\Torod\Exceptions\UnauthorizedException; 
use SecretCodes\Module\Torod\Shared\Curl;
use Throwable;

use SecretCodes\Module\Torod\Shared\Ihttp;



class TorodApi extends Curl
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
     * @param string $clientId
     * @param string $secretKey
     */
    public function setKeys($clientId, $secretKey, $baseUrl)
    {
        $this->clientId = $clientId;
        $this->secretKey = $secretKey;
        $this->baseUrl = $baseUrl;

    }

    private function validateResponse($resp)
    {
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


    public function getToken()
    {
        try {

            $url = $this->baseUrl . '/token';
            $data = array(
                "client_id" => $this->clientId,
                "client_secret" => $this->secretKey
            );
            $resp = $this->http->post($url, $data, null); 
            $decoded = json_decode($resp);
            $this->validateResponse($decoded); 
            $this->token = $decoded->data->bearer_token;
            return $this->token;
        } catch (Throwable $e) { 
            throw new HttpException($e->getMessage());
        }
    }

    public function getAddresses()
    {
        try {
            $this->getToken();
            $url = $this->baseUrl . '/address/list';
            $resp = $this->http->get($url, $this->token);
            $decoded = json_decode($resp);
            $this->validateResponse($decoded);
            return $decoded->data;
        } catch (Throwable $e) { 
            throw new HttpException($e->getMessage());
        }
    }

    public function createAddress($data)
    {
        try {
            $this->getToken();
            $url = $this->baseUrl . '/create/address';
            $resp = $this->http->post($url, $data, $this->token);

            $decoded = json_decode($resp);
            $this->validateResponse($decoded);
            return $decoded->data;
        } catch (Throwable $e) { 
            throw new HttpException($e->getMessage());
        }

    }


    public function updateAddress($data, $addressId)
    {
        try {
            $this->getToken();
            $url = $this->baseUrl . 'update/address/' . $addressId;
            $resp = $this->http->post($url, $data, $this->token);
            $decoded = json_decode($resp);
            $this->validateResponse($decoded);
            return $decoded->data;
        } catch (Throwable $e) { 
            throw new HttpException($e->getMessage());
        }


    }



    public function createPreOrder($data)
    {
        try {
            $this->getToken();
            $url = $this->baseUrl . '/order/create';
            $resp = $this->http->post($url, $data, $this->token);
            $decoded = json_decode($resp);
            $this->validateResponse($decoded); 
            return $decoded->data;
        } catch (Throwable $e) { 
            throw new HttpException($e->getMessage());
        }

    }


    public function getAllCarrierList()
    {
        try {
            $this->getToken();
            $url = $this->baseUrl . '/get-all/courier/partners';
            $resp = $this->http->get($url, $this->token);  
             $decoded = json_decode($resp);
            $this->validateResponse($decoded);
            return $decoded->data;
        }catch (Throwable $e) { 
            throw new HttpException($e->getMessage());
        }

    }

    public function getAddressList()
    {
        try {
            $this->getToken();
            $url = $this->baseUrl . '/address/list';
            $resp = $this->http->get($url, $this->token);

            $decoded = json_decode($resp);
            $this->validateResponse($decoded);
            return $decoded->data;
        }catch (Throwable $e) { 
            throw new HttpException($e->getMessage());
        }

    }


    public function getOrderCarrierList($data)
    {
        try {
            $this->getToken();
            $url = $this->baseUrl . '/courier/partners';
            $resp = $this->http->post($url, $data, $this->token);
            $decoded = json_decode($resp); 
            $this->validateResponse($decoded);
            return $decoded->data;
        } catch (Throwable $e) { 
            throw new HttpException($e->getMessage());
        }

    }

    public function createOrderShippment($data)
    {
        try {
            $this->getToken();
            $url = $this->baseUrl . '/order/ship/process';
            $resp = $this->http->post($url, $data, $this->token);
            $decoded = json_decode($resp);
            $this->validateResponse($decoded);
            return $decoded->data;
        }catch (Throwable $e) { 
            throw new HttpException($e->getMessage());
        }

    }
}