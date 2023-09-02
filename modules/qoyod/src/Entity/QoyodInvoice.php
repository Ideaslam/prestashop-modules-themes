<?php

namespace SecretCodes\Module\Qoyod\Entiry ;
use Db;
use PrestaShop\PrestaShop\Adapter\Entity\ObjectModel;

class QoyodInvoice extends ObjectModel
{
    public $id_invoice; 
    public $status;
    public $datetime;  
    public $src_invoice_id;
    public $dest_invoice_id; 
    
 
    public static function getInvoices()
    {
        $invoices = Db::getInstance()->executeS(
            '
            SELECT  *
            FROM ' . _DB_PREFIX_ . 'qoyod_invoice s 
              '
        ); 
        return $invoices;
    }


    public static function getInvoiceByDestInvoiceId($dest_invoice_id)
    { 
        $id_invoice = Db::getInstance()->getValue('SELECT  `id_invoice` FROM `' . _DB_PREFIX_ . 'qoyod_invoice`
        WHERE   dest_invoice_id  = \'' . $dest_invoice_id . '\'  ');  
        if (!$id_invoice) {
            return false;
        } 
        return new QoyodInvoice($id_invoice);
    }

    public static function getInvoiceBySrcInvoiceId($src_invoice_id)
    { 
        $id_invoice = Db::getInstance()->getValue('SELECT  `id_invoice` FROM `' . _DB_PREFIX_ . 'qoyod_invoice`
        WHERE   src_invoice_id  = \'' . $src_invoice_id . '\'  ');  
        if (!$id_invoice) {
            return false;
        } 
        return new QoyodInvoice($id_invoice);
    }
 
    public static function getNotPayedInvoiceBySrcInvoiceId($src_invoice_id)
    { 
        $id_invoice = Db::getInstance()->getValue('SELECT  `id_invoice` FROM `' . _DB_PREFIX_ . 'qoyod_invoice`
        WHERE   src_invoice_id  = \'' . $src_invoice_id . '\'  and status <> \'payed\'  ');  
        if (!$id_invoice) {
            return false;
        } 
        return new QoyodInvoice($id_invoice);
    }
 
 
 
     
 
 
        public static $definition = [
            'table' => 'qoyod_invoice',
            'primary' => 'id_invoice', 

            'fields' => array(
             
                'status' => [
                    'type' => self::TYPE_STRING,  
                    'size' => 25
                ],
                'datetime'    => [
                    'type' => self::TYPE_DATE, 
                ],
            
                'src_invoice_id'     => [
                    'type' => self::TYPE_STRING,   
                    'size' => 25
                ],

                'dest_invoice_id'     => [
                    'type' => self::TYPE_STRING,   
                    'size' => 25
                ],
            

            
             
 
            )
        ];
     
}