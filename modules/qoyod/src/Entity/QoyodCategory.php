<?php

namespace SecretCodes\Module\Qoyod\Entiry ;
use Db;
use PrestaShop\PrestaShop\Adapter\Entity\ObjectModel;

class QoyodCategory extends ObjectModel
{
    public $id_category; 
    public $status;
    public $datetime;  
    public $src_category_id;
    public $dest_category_id;
    
 
    public static function getCategorys()
    {
        $categories = Db::getInstance()->executeS(
            '
            SELECT  *
            FROM ' . _DB_PREFIX_ . 'qoyod_category s 
              '
        ); 
        return $categories;
    }


    public static function getCategoryByDestCategoryId($dest_category_id)
    { 
        $id_category = Db::getInstance()->getValue('SELECT  `id_category` FROM `' . _DB_PREFIX_ . 'qoyod_category`
        WHERE   dest_category_id  = \'' . $dest_category_id . '\'  ');  
        if (!$id_category) {
            return false;
        } 
        return new QoyodCategory($id_category);
    }
 
     
 
    public static function getCategoryBySrcCategoryId($src_category_id)
    { 
        $id_category = Db::getInstance()->getValue('SELECT  `id_category` FROM `' . _DB_PREFIX_ . 'qoyod_category`
        WHERE   src_category_id  = \'' . $src_category_id . '\'  ');  
        if (!$id_category) {
            return false;
        } 
        return new QoyodCategory($id_category);
    }
 
     
 
        public static $definition = [
            'table' => 'qoyod_category',
            'primary' => 'id_category', 

            'fields' => array(
             
                'status' => [
                    'type' => self::TYPE_STRING,  
                    'size' => 25
                ],
                'datetime'    => [
                    'type' => self::TYPE_DATE, 
                ],
            
                'src_category_id'     => [
                    'type' => self::TYPE_STRING,   
                    'size' => 25
                ],

                'dest_category_id'     => [
                    'type' => self::TYPE_STRING,   
                    'size' => 25
                ],
            

            
             
 
            )
        ];
     
}