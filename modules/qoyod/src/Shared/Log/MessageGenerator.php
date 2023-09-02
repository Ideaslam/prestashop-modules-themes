<?php 

// src/Service/MessageGenerator.php
namespace SecretCodes\Module\Qoyod\Shared; 

use PrestaShop\Module\Ps_metrics\Adapter\LoggerAdapter;
use Psr\Log\LoggerInterface;
use Symfony\Component\Translation\TranslatorInterface; 
 
class MessageGenerator
{
    private $logger; 
    public function __construct(
        LoggerAdapter $logger 
    )
    {  
          $this->logger = $logger;
    }

    public function getHappyMessage(): string
    {
        $this->logger->info('About to find a happy message!');
        return 'About to find a happy messagtttte!' ; 
    }


    public function printMessage(string $message ) 
    {
        $this->logger->info($message);
    
    }
}