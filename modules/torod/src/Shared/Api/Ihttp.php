<?php
namespace SecretCodes\Module\Torod\Shared ;
interface  Ihttp   { 
    public function get ($url,$token); 
    public function post ($url , $data,$token);
}