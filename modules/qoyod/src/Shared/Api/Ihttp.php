<?php
namespace SecretCodes\Module\Qoyod\Shared ;
interface  Ihttp   { 
    public function get ($url,$token); 
    public function post ($url , $data,$token);
      public function put ($url , $data,$token);
}