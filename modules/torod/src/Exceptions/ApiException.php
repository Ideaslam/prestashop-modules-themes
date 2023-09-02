<?php
namespace   SecretCodes\Module\Torod\Exceptions ;
use Exception;  
class ApiException extends  HttpException
{
    // Redefine the exception so message isn't optional
    public function __construct($message , $code = 3001, \Throwable $previous = null) {
        // some code

        // make sure everything is assigned properly
        parent::__construct($message, $code, $previous);
    }

    // custom string representation of object
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    public function customFunction() {
        echo "A PhoneNotValidException for Service instantiation type of exception\n";
    }
}