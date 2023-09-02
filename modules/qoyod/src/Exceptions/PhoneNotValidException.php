<?php
namespace   SecretCodes\Module\Qoyod\Exceptions ;
use Exception;  
class PhoneNotValidException extends  ValidationException
{
    // Redefine the exception so message isn't optional
    public function __construct($message="Phone is Not Valid, Change to  format : 05xxxxxxxx ", $code = 20001, \Throwable $previous = null) {
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