<?php

namespace SecretCodes\Module\Torod\Entity ;
use Db;
use PrestaShop\PrestaShop\Adapter\Entity\ObjectModel;

class Transaction extends ObjectModel
{
    public $id_transaction;
    public $cart_id;
    public $order_status;
    public $datetime;  
    public $carrier_id;
    public $partner_id;
    public $customer_id;
    public $transaction_id;
    public $order_id;
    public $rate;
    public $tracking_id;
    public $label;

 
    public static function getTransactions()
    {
        $transactions = Db::getInstance()->executeS(
            '
            SELECT  *
            FROM ' . _DB_PREFIX_ . 'transaction s 
              '
        ); 
        return $transactions;
    }


    public static function getTransactionByCartId($cart_id)
    { 
        $id_transaction = Db::getInstance()->getValue('SELECT  `id_transaction` FROM `' . _DB_PREFIX_ . 'transaction`
        WHERE   cart_id  = \'' . $cart_id . '\'  '); 

   
        if (!$id_transaction) {
            return false;
        }

        return new Transaction($id_transaction);
    }

    public static function getTransactionByOrderId($order_id)
    {
        $id_transaction = Db::getInstance()->getValue('SELECT `id_transaction` FROM `' . _DB_PREFIX_ . 'transaction`
        WHERE   transaction_id  = \'' . $order_id . '\'  ');

        if (!$id_transaction) {
            return false;
        }

        return new Transaction($id_transaction);
    }

  

    public static function getPendingTransactionByCartId($cart_id)
    {
        $id_transaction = Db::getInstance()->getValue('SELECT  `id_transaction`  FROM `' . _DB_PREFIX_ . 'transaction`
        WHERE   cart_id  = \'' . $cart_id . '\'  and order_status =\'pending\'');
        if (!$id_transaction) {
            return false;
        }

        return new Transaction($id_transaction);
    }
 
    public static function getSucceedTransactionByCartId($cart_id)
    {
        $id_transaction = Db::getInstance()->getValue('SELECT  `id_transaction`  FROM `' . _DB_PREFIX_ . 'transaction`
        WHERE   cart_id  = \'' . $cart_id . '\'  and order_status =\'success\'');
        if (!$id_transaction) {
            return false;
        }

        return new Transaction($id_transaction);
    }
     
 
 
        public static $definition = [
            'table' => 'transaction',
            'primary' => 'id_transaction', 

            'fields' => array(
                'cart_id'  => [
                    'type'   => self::TYPE_INT  ,   
                    'required'=>true 
                ],  
                'order_status' => [
                    'type' => self::TYPE_STRING,  
                    'size' => 25
                ],
                'datetime'    => [
                    'type' => self::TYPE_DATE, 
                ],
                'carrier_id'       => [
                    'type' =>    self::TYPE_INT , 
                    'size' => 25
                ],
                'partner_id'     => [
                    'type' => self::TYPE_STRING,   
                    'size' => 25
                ],
                'customer_id'          => [
                    'type' =>    self::TYPE_INT ,   
                    'size' => 25
                ],

                'transaction_id'          => [
                    'type' => self::TYPE_STRING,  
                    'size' => 25
                ],

                'order_id'          => [
                    'type' => self::TYPE_STRING, 
                    'validate' => 'isString',
                    'size' => 25
                ],

                'rate'          => [
                    'type' => self::TYPE_FLOAT,   
                ],

                'tracking_id'          => [
                    'type' => self::TYPE_STRING, 
                    'validate' => 'isString',
                    'size' => 25
                ],

                'label'          => [
                    'type' => self::TYPE_STRING, 
                    'validate' => 'isString',
                    'size' => 3999999999999
                ],
            )
        ];
     
}