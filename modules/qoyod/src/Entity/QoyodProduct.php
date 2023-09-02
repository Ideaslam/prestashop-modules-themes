<?php

namespace SecretCodes\Module\Qoyod\Entiry ;
use Db;
use PrestaShop\PrestaShop\Adapter\Entity\ObjectModel;

class QoyodProduct extends ObjectModel
{
    public $id_product; 
    public $status;
    public $datetime;  
    public $src_product_id;
    public $dest_product_id; 
    
 
    public static function getProducts()
    {
        $products = Db::getInstance()->executeS(
            '
            SELECT  *
            FROM ' . _DB_PREFIX_ . 'qoyod_product s 
              '
        ); 
        return $products;
    }


    public static function getProductByDestProductId($dest_product_id)
    { 
        $id_product = Db::getInstance()->getValue('SELECT  `id_product` FROM `' . _DB_PREFIX_ . 'qoyod_product`
        WHERE   dest_product_id  = \'' . $dest_product_id . '\'  ');  
        if (!$id_product) {
            return false;
        } 
        return new QoyodProduct($id_product);
    }

    public static function getProductBySrcProductId($src_product_id)
    { 
        $id_product = Db::getInstance()->getValue('SELECT  `id_product` FROM `' . _DB_PREFIX_ . 'qoyod_product`
        WHERE   src_product_id  = \'' . $src_product_id . '\'  ');  
        if (!$id_product) {
            return false;
        } 
        return new QoyodProduct($id_product);
    }
 
 
     
 
 
        public static $definition = [
            'table' => 'qoyod_product',
            'primary' => 'id_product', 

            'fields' => array(
             
                'status' => [
                    'type' => self::TYPE_STRING,  
                    'size' => 25
                ],
                'datetime'    => [
                    'type' => self::TYPE_DATE, 
                ],
            
                'src_product_id'     => [
                    'type' => self::TYPE_STRING,   
                    'size' => 25
                ],

                'dest_product_id'     => [
                    'type' => self::TYPE_STRING,   
                    'size' => 25
                ],
            

            
             
 
            )
        ];
     
}