<?php 

namespace SecretCodes\Module\Torod\Shared ;
use Exception;
use Symfony\Component\Debug\Exception\FatalThrowableError;
use Throwable;  

class Curl  implements Ihttp {

    public function __construct(){
             
    }
   
    public function  post ($url   ,$data=null,$token=null){
        try{
            $headers =array(
                'Content-Type:multipart/form-data',  
             );
            
             if($token <> null ){
                array_push($headers,"Authorization:Bearer ". $token);
            }
          
            $curl = curl_init($url); 
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt( $curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            $result  = curl_exec($curl);  
                curl_close($curl); 
                return  $result;
        }catch (Throwable $e) {
            throw $e ;
          
        }
        

    }

    public function get ($url, $token=null){
        try{
            $headers =array(
                'Content-Type:application/json',  
             );
            
            if($token <> null ){
                array_push($headers,"Authorization:Bearer ". $token);
            }
            
            
            $curl = curl_init($url); 
             
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
            curl_setopt( $curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_POST, false);  
            $result = curl_exec($curl); 
            curl_close($curl);
            return  $result;
        }catch (Throwable $e) {
            throw $e ;
          
        }
 

    }

}