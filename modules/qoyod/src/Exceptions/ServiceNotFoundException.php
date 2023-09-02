<?php
namespace   SecretCodes\Module\Qoyod\Exceptions ;
use Exception;  
class ServiceNotFoundException extends  Exception
{
    // Redefine the exception so message isn't optional
    public function __construct($message, $code = 0, \Throwable $previous = null) {
        // some code

        // make sure everything is assigned properly
        parent::__construct($message, $code, $previous);
    }

    // custom string representation of object
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    public function customFunction() {
        echo "A ServiceNotFoundException for Service instantiation type of exception\n";
    }
}