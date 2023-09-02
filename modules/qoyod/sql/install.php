<?php
/**
* 2007-2023 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2023 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
$sql = array();

$sql[0] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'qoyod` (
    `id_qoyod` int(11) NOT NULL AUTO_INCREMENT,
    PRIMARY KEY  (`id_qoyod`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';


$sql[1] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'qoyod_customer` (
    `id_customer` int(11) NOT NULL AUTO_INCREMENT,
    `status`  varchar(25)  ,
    `datetime` DATETIME  ,
    `src_customer_id` varchar(25)   ,
    `dest_customer_id` varchar(25) ,
     
    PRIMARY KEY  (`id_customer`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';



$sql[2] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'qoyod_category` (
    `id_category` int(11) NOT NULL AUTO_INCREMENT,
    `status`  varchar(25)  ,
    `datetime` DATETIME  ,
    `src_category_id` varchar(25)   ,
    `dest_category_id` varchar(25) ,
     
    PRIMARY KEY  (`id_category`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';


$sql[3] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'qoyod_product` (
    `id_product` int(11) NOT NULL AUTO_INCREMENT,
    `status`  varchar(25)  ,
    `datetime` DATETIME  ,
    `src_product_id` varchar(25)   ,
    `dest_product_id` varchar(25) ,
     
    PRIMARY KEY  (`id_product`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

$sql[4] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'qoyod_invoice` (
    `id_invoice` int(11) NOT NULL AUTO_INCREMENT,
    `status`  varchar(25)  ,
    `datetime` DATETIME  ,
    `src_invoice_id` varchar(25)   ,
    `dest_invoice_id` varchar(25) ,
     
    PRIMARY KEY  (`id_invoice`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';




foreach ($sql as $query) {
    if (Db::getInstance()->execute($query) == false) {
        return false;
    }
}
