<?php

namespace SecretCodes\Module\Qoyod\Entiry ;
use Db;
use PrestaShop\PrestaShop\Adapter\Entity\ObjectModel;

class QoyodCustomer extends ObjectModel
{
    public $id_customer; 
    public $status;
    public $datetime;  
    public $src_customer_id;
    public $dest_customer_id;
    
 
    public static function getCustomers()
    {
        $customers = Db::getInstance()->executeS(
            '
            SELECT  *
            FROM ' . _DB_PREFIX_ . 'qoyod_customer s 
              '
        ); 
        return $customers;
    }


    public static function getCustomerByDestCustomerId($dest_customer_id)
    { 
        $id_customer = Db::getInstance()->getValue('SELECT  `id_customer` FROM `' . _DB_PREFIX_ . 'qoyod_customer`
        WHERE   dest_customer_id  = \'' . $dest_customer_id . '\'  ');  
        if (!$id_customer) {
            return false;
        } 
        return new QoyodCustomer($id_customer);
    }

    public static function getCustomerBySrcCustomerId($src_customer_id)
    { 
        $id_customer = Db::getInstance()->getValue('SELECT  `id_customer` FROM `' . _DB_PREFIX_ . 'qoyod_customer`
        WHERE   src_customer_id  = \'' . $src_customer_id . '\'  ');  
        if (!$id_customer) {
            return false;
        } 
        return new QoyodCustomer($id_customer);
    }
 
     
 
 
        public static $definition = [
            'table' => 'qoyod_customer',
            'primary' => 'id_customer', 

            'fields' => array(
             
                'status' => [
                    'type' => self::TYPE_STRING,  
                    'size' => 25
                ],
                'datetime'    => [
                    'type' => self::TYPE_DATE, 
                ],
            
                'src_customer_id'     => [
                    'type' => self::TYPE_STRING,   
                    'size' => 25
                ],

                'dest_customer_id'     => [
                    'type' => self::TYPE_STRING,   
                    'size' => 25
                ],
            

            
             
 
            )
        ];
     
}