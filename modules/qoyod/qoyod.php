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




use SecretCodes\Module\Qoyod\Entiry\QoyodCategory;
use SecretCodes\Module\Qoyod\Entiry\QoyodInvoice;
use SecretCodes\Module\Qoyod\Entiry\QoyodProduct;
use SecretCodes\Module\Qoyod\Services\QoyodApi;
use SecretCodes\Module\Qoyod\Services\QoyodService;
use SecretCodes\Module\Qoyod\Entiry\QoyodCustomer;
use Symfony\Component\Debug\Exception\FatalThrowableError;

$autoloadPath = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoloadPath)) {
    require_once $autoloadPath;
}


if (!defined('_PS_VERSION_')) {
    exit;
}

class Qoyod extends Module
{


    protected $config_form = false;
    private $production_url = "https://www.qoyod.com/api/2.0";
    private $dev_url = "https://www.qoyod.com/api/2.0";
    private $sell_account;
    private $exp_account;
    private $unit_type;
    private $qoyodService;
    private $shippment_service_id;

    public function __construct(QoyodService $qoyodService)
    {
       
        $this->qoyodService = $qoyodService;


        $this->name = 'qoyod';
        $this->tab = 'billing_invoicing';
        $this->version = '1.0.0';
        $this->author = 'Secretcodes';
        $this->need_instance = 1;

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('Qoyod');
        $this->description = $this->l('integration with Qoyod Module');

        $this->confirmUninstall = $this->l('');

        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);

 
        $this->unit_type = Configuration::get('QOYOD_UNIT_TYPE', null);
        $this->sell_account = Configuration::get('QOYOD_ACCOUNT_SELL', null);
        $this->exp_account = Configuration::get('QOYOD_ACCOUNT_EXPENSES', null); 
        $this->shippment_service_id = Configuration::get('QOYOD_SHIPPMENT_ID', null);
        
        // if ($shippment_id ==null && $this->isPrepared()) {
        //     if($this->qoyodService <> null){
        //         $this->shippment_service_id = $this->createShippmentService();
        //         Configuration::updateValue('QOYOD_SHIPPMENT_ID', $this->shippment_service_id);
        //     }
          
        // }else {
        //     $this->shippment_service_id = $shippment_id ; 
        // }



    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        
        if (extension_loaded('curl') == false) {
            require_once('../vendor/autoload.php');
                $this->_errors[] = $this->l('You have to enable the cURL extension on your server to install this module');
                return false;
            }

            
            
        Configuration::updateValue('QOYOD_LIVE_MODE', false);

        include(dirname(__FILE__) . '/sql/install.php');

        return parent::install() &&
            $this->registerHook('header') &&
            $this->registerHook('displayBackOfficeHeader') &&
            $this->registerHook('actionCategoryAdd') &&
            $this->registerHook('actionCategoryUpdate') &&
            $this->registerHook('actionCustomerAccountAdd') &&
            $this->registerHook('actionCustomerAccountUpdate') &&
            $this->registerHook('actionPaymentConfirmation') &&
            $this->registerHook('actionProductAdd') &&
            $this->registerHook('actionProductUpdate') &&
            $this->registerHook('actionValidateCustomerAddressForm') &&
            $this->registerHook('actionValidateOrder') &&
            $this->registerHook('actionOrderStatusUpdate') &&
            $this->registerHook('actionOrderStatusPostUpdate') && 
            $this->registerHook('displayOrderConfirmation');
            

    }

    public function uninstall()
    {
        Configuration::deleteByName('QOYOD_LIVE_MODE');

        include(dirname(__FILE__) . '/sql/uninstall.php');

        return parent::uninstall();
    }

    /**
     * Load the configuration form
     */
    public function getContent()
    {
        /**
         * If values have been submitted in the form, process.
         */
        if (((bool) Tools::isSubmit('submitQoyodModule')) == true) { 
            $this->postProcess();
            $this->prepareQoyodModule();
        }

        $this->context->smarty->assign('module_dir', $this->_path);

        $output = $this->context->smarty->fetch($this->local_path . 'views/templates/admin/configure.tpl');

        return $output . $this->renderForm();
    }



    /**
     * Create the form that will be displayed in the configuration of your module.
     */
    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitQoyodModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(),
            /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($this->getConfigForm()));
    }

    /**
     * Create the structure of your form.
     */
    protected function getConfigForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Live mode'),
                        'name' => 'QOYOD_LIVE_MODE',
                        'is_bool' => true,
                        'desc' => $this->l('Use this module in live mode'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),

                    array(

                        'required' => true,
                        'col' => 6,
                        'type' => 'text',
                        'name' => 'QOYOD_API_KEY',
                        'prefix' => '<i class="icon icon-envelope"></i>',
                        'label' => $this->l('API KEY'),
                    ),
                    array(

                        'required' => true,
                        'col' => 2,
                        'type' => 'text',
                        'name' => 'QOYOD_ACCOUNT_SELL',
                        'prefix' => '<i class="icon icon-envelope"></i>',
                        'label' => $this->l('Sell Account Number'),
                    ),
                    array(

                        'required' => true,
                        'col' => 2,
                        'type' => 'text',
                        'name' => 'QOYOD_ACCOUNT_EXPENSES',
                        'prefix' => '<i class="icon icon-envelope"></i>',
                        'label' => $this->l('Purchase Account Number'),
                    ),

                    array(

                        'required' => true,
                        'col' => 2,
                        'type' => 'text',
                        'name' => 'QOYOD_UNIT_TYPE',
                        'prefix' => '<i class="icon icon-envelope"></i>',
                        'label' => $this->l('Unit Type'),
                    ),

                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }

    /**
     * Set values for the inputs.
     */
    protected function getConfigFormValues()
    {
        return array(
            'QOYOD_LIVE_MODE' => Configuration::get('QOYOD_LIVE_MODE', true),
            'QOYOD_API_KEY' => Configuration::get('QOYOD_API_KEY', null),
            'QOYOD_ACCOUNT_SELL' => Configuration::get('QOYOD_ACCOUNT_SELL', null),
            'QOYOD_ACCOUNT_EXPENSES' => Configuration::get('QOYOD_ACCOUNT_EXPENSES', null),
            'QOYOD_UNIT_TYPE' => Configuration::get('QOYOD_UNIT_TYPE', null),
        );

    }

    protected function isPrepared()
    {
        
           if(
            Configuration::get('QOYOD_LIVE_MODE', null ) &&
            Configuration::get('QOYOD_API_KEY', null) &&
            Configuration::get('QOYOD_UNIT_TYPE', null) &&
            Configuration::get('QOYOD_ACCOUNT_SELL', null) &&
            Configuration::get('QOYOD_ACCOUNT_EXPENSES', null)){
                return true; 
            }
            else 
            return false ;
        

    }


    /**
     * Save form data.
     */
    protected function postProcess()
    {
        $form_values = $this->getConfigFormValues();

        foreach (array_keys($form_values) as $key) {
            Configuration::updateValue($key, Tools::getValue($key));
        }
    }

    protected function prepareQoyodModule()
    {  
        if($this->qoyodService->isInitialized() ) {
            $this->prepareModuleEnvironment();
        }
       

    }

    protected function prepareModuleEnvironment()
    {

        $mode = Configuration::get('QOYOD_LIVE_MODE', false);
        $this->sell_account = Configuration::get('QOYOD_ACCOUNT_SELL', null);
        $this->exp_account = Configuration::get('QOYOD_ACCOUNT_EXPENSES', null);
        $this->unit_type = Configuration::get('QOYOD_UNIT_TYPE', null);

        $url = $this->dev_url;
        if ($mode == true) {
            $url = $this->production_url;
        }
        Configuration::updateValue('QOYOD_BASE_URL', $url);

        $shippment_id = Configuration::get('QOYOD_SHIPPMENT_ID', null);
        if ($shippment_id == null && $this->isPrepared()) {
            $this->shippment_service_id = $this->createShippmentService();
            Configuration::updateValue('QOYOD_SHIPPMENT_ID', $this->shippment_service_id);
        } 

    }
    /**
     * Add the CSS & JavaScript files you want to be loaded in the BO.
     */
    public function hookDisplayBackOfficeHeader()
    {
        if (Tools::getValue('configure') == $this->name) {
            $this->context->controller->addJS($this->_path . 'views/js/back.js');
            $this->context->controller->addCSS($this->_path . 'views/css/back.css');
        }
    }

    /**
     * Add the CSS & JavaScript files you want to be added on the FO.
     */
    public function hookHeader()
    {
        $this->context->controller->addJS($this->_path . '/views/js/front.js');
        $this->context->controller->addCSS($this->_path . '/views/css/front.css');
    }

    public function hookActionCategoryAdd($params)
    {
        /* Place your code here. */
        $this->createOrUpdateCategory($params["category"]);
        //  throw new Exception('Custom message ' . json_encode( $category));

    }

    public function hookActionCategoryUpdate($params)
    {
        $this->createOrUpdateCategory($params["category"]);
        // throw new Exception('Custom message ' . json_encode( $category));
    }

    public function hookActionCustomerAccountAdd($params)
    {
        /* Place your code here. */
        $cart = $params["cart"];
        $customer_id = $cart->id_customer;
        $address_id = $cart->id_address_delivery;
        $customer = new Customer($customer_id);
        $address = new Address($address_id);
        $this->createOrUpdateCustomer($customer, $address);
    }

    public function hookActionCustomerAccountUpdate($params)
    {
        /* Place your code here. */
        $cart = $params["cart"];
        $customer_id = $cart->id_customer;
        $address_id = $cart->id_address_delivery;
        $customer = new Customer($customer_id);
        $address = new Address($address_id);
        $this->createOrUpdateCustomer($customer, $address);
    }


    public function hookActionValidateCustomerAddressForm($params)
    {
        /* Place your code here. */
        $cart = $params["cart"];
        $customer_id = $cart->id_customer;
        $address_id = $cart->id_address_delivery;
        $customer = new Customer($customer_id);
        $address = new Address($address_id);
        $this->createOrUpdateCustomer($customer, $address);
        //   throw new Exception('Custom message ' . json_encode( $params));
    }

    public function hookActionPaymentConfirmation($params)
    {
        $this->createInvoicePayment($params["id_order"]);
    }

    public function hookActionOrderStatusUpdate($params)
    {  
        $isOrderInvoiceExist =$this->checkIfInvoiceExist($params["id_order"]);
        if($isOrderInvoiceExist == false  ){
            $order =new Order($params["id_order"]);
            $this->createOrUpdateInvoice($order);
        }

         $newStatus= $params["newOrderStatus"]; 
        if($newStatus->name == "Payment accepted"){
         
            $this->createInvoicePayment($params["id_order"]);
        }
       
    }

    public function hookActionOrderStatusPostUpdate($params)
    {  
        $isOrderInvoiceExist =$this->checkIfInvoiceExist($params["id_order"]);
        if($isOrderInvoiceExist == false  ){
            $order =new Order($params["id_order"]);
            $this->createOrUpdateInvoice($order);
        }

         $newStatus= $params["newOrderStatus"]; 
        if($newStatus->name == "Payment accepted"){
         
            $this->createInvoicePayment($params["id_order"]);
        }
       
    }

    

  
    public function  checkIfInvoiceExist($order_id){
        $qoyodInvoice = QoyodInvoice::getInvoiceBySrcInvoiceId($order_id); 
        if ($qoyodInvoice) {
            return true;
        }else {
           return false;
        }
    }
    

    public function hookActionProductAdd($params)
    {
        /* Place your code here. */


        $this->createOrUpdateProduct($params["product"]);

    }

    public function hookActionProductUpdate($params)
    {
        /* Place your code here. */


        $this->createOrUpdateProduct($params["product"]);

    }

    public function hookDisplayOrderConfirmation($params)
    {

        $this->createOrUpdateInvoice($params["order"]);
    }

    public function hookActionValidateOrder()
    {
        /* Place your code here. */

    }

    protected function createOrUpdateCategory($category)
    {

        $qoyodCategory = QoyodCategory::getCategoryBySrcCategoryId($category->id);

     
        
        $data = array(
            "name" => $category->name["1"],
            "description" => $category->description["1"],
            "parent_id" => "1"
        );

        
        if ($qoyodCategory) {

            try{
             
            $dest_category_id = $qoyodCategory->dest_category_id;
            $updatedCategory = $this->qoyodService->updateCategory($dest_category_id, $data);
            //throw new Exception(json_encode($updatedCategory)) ;
            $qoyodCategory->datetime = date("Y-m-d H:i:s");
            $qoyodCategory->status = "updated";
            $qoyodCategory->save();
            }catch (Throwable $e ){ 
                throw new Exception(json_encode($e->getMessage())) ;
                return false ;
            }
           


           

        } else { 

            try{
             
                $createdCategory = $this->qoyodService->createCategory($data);
            $newQoyodCategory = new QoyodCategory();
            $newQoyodCategory->src_category_id = $category->id;
            $newQoyodCategory->dest_category_id = $createdCategory->category->id;
            $newQoyodCategory->status = 'created';
            $newQoyodCategory->datetime = date("Y-m-d H:i:s");
            $newQoyodCategory->add();
            }catch (Throwable $e ){ 
                throw new Exception(json_encode($e->getMessage())) ;
                return false ;
            }
           


           
        

        }


    }



    protected function createOrUpdateCustomer($customer, $address = null)
    {

        $qoyodCustomer = QoyodCustomer::getCustomerBySrcCustomerId($customer->id);
        $data = array(
            "name" => $customer->firstname . ' ' . $customer->lastname,
            "email" => $customer->email,
            "phone_number" => $address == null ? "" : $address->phone,
        );
        if ($qoyodCustomer) {
            try{
                $dest_customer_id = $qoyodCustomer->dest_customer_id;
                $updatedCustomer = $this->qoyodService->updateCustomer($dest_customer_id, $data);
                $qoyodCustomer->datetime = date("Y-m-d H:i:s");
                $qoyodCustomer->status = "updated";
                $qoyodCustomer->save();
            }catch (Throwable $e ){ 
                return false ;
            }
           



            

        } else {
            try{
                $createdCustomer = $this->qoyodService->createCustomer($data);
                $newQoyodCustomer = new QoyodCustomer();
                $newQoyodCustomer->src_customer_id = $customer->id;
                $newQoyodCustomer->dest_customer_id = $createdCustomer->contact->id;
                $newQoyodCustomer->status = 'created';
                $newQoyodCustomer->datetime = date("Y-m-d H:i:s");
                $newQoyodCustomer->add();
            }catch (Throwable $e ){ 
                return false ;
            }


            
        }

    }


    protected function createOrUpdateProduct($product)
    {
       
        $qoyodProduct = QoyodProduct::getProductBySrcProductId($product->id);

        $src_category_id = $product->id_category_default;
        $qoyod_category = QoyodCategory::getCategoryBySrcCategoryId($src_category_id);
        $dest_category_id = $qoyod_category->dest_category_id;


        $data = array(
            "sku" => $product->reference,
            "name_ar" => $product->name["1"],
            "name_en" => $product->name["2"],
            "description" => $product->description_short["1"],
            "category_id" => $dest_category_id,
            "track_quantity" => "0",
            "purchase_item" => "1",
            "buying_price" => "1",
            "expense_account_id" => $this->exp_account,
            "selling_price" => $product->price,
            "sales_account_id" => $this->sell_account,
            "product_unit_type_id" => $this->unit_type,
            "sale_item" => "1",
            "tax_id" => "1",
            "type" => 1
        );


         
      
        if ($qoyodProduct) {

            try{
                $dest_product_id = $qoyodProduct->dest_product_id;
                $updatedProduct = $this->qoyodService->updateProduct($dest_product_id, $data);
                $qoyodProduct->datetime = date("Y-m-d H:i:s");
                $qoyodProduct->status = "updated";
                $qoyodProduct->save();
            }catch (Throwable $e ){  
                return false ;
            }
           

        } else {

            try{
                $createdProduct = $this->qoyodService->createProduct($data);
                $newQoyodProduct = new QoyodProduct();
                $newQoyodProduct->src_product_id = $product->id;
                $newQoyodProduct->dest_product_id = $createdProduct->product->id;
                $newQoyodProduct->status = 'created';
                $newQoyodProduct->datetime = date("Y-m-d H:i:s");
                $newQoyodProduct->add();
            }catch (Throwable $e ){  
                return false ;
            }

            
        }


    }



    protected function createShippmentService()
    {
        
        $data = array(
            "sku" => "SHIPP",
            "name_ar" => "Shippment",
            "name_en" => "Shippment",
            "description" => "Shippment",
            "category_id" => 1,
            "track_quantity" => "0",
            "purchase_item" => "1",
            "buying_price" => "1",
            "expense_account_id" => $this->exp_account,
            "selling_price" => "1",
            "sales_account_id" => $this->sell_account,
            "product_unit_type_id" => $this->unit_type,
            "sale_item" => "1",
            "tax_id" => "1",
            "type" => 2
        );  

        try{
            $createdProduct = $this->qoyodService->createProduct($data); 
            return $createdProduct->product->id;
        }catch(Throwable $e){
            $this->adminDisplayInformation('Error'. json_encode($e->getMessage()));
            return false ;
        }
        
      

    }


    protected function createInvoicePayment($order_id)
    { 
        $qoyodInvoice = QoyodInvoice::getInvoiceBySrcInvoiceId($order_id); 
        if ($qoyodInvoice) {
            if($qoyodInvoice->status !="payed"){
                $dest_invoice_id = $qoyodInvoice->dest_invoice_id;
                $referece = $order_id;
                $order = new Order($order_id);
    
                $data = array(
    
                    "reference" => $referece . '_PY',
                    "invoice_id" => $dest_invoice_id,
                    "account_id" => 7,
                    "date" => date("Y-m-d H:i:s"),
                    "amount" => $order->total_paid,
                );
    
                $createdPayment = $this->qoyodService->createInvoicePayment($data);
                $qoyodInvoice->status = 'payed';
                $qoyodInvoice->datetime = date("Y-m-d H:i:s");
                $qoyodInvoice->save();
            } 
        }



    }


    protected function createOrUpdateInvoice($order)
    {


        $qoyodInvoice = QoyodInvoice::getInvoiceBySrcInvoiceId($order->id);
        $src_customer_id = $order->id_customer;
        $qoyod_customer = QoyodCustomer::getCustomerBySrcCustomerId($src_customer_id);
        $dest_customer_id = $qoyod_customer->dest_customer_id;
        $referece = $order->id;
        $o = new Order($order->id);
        $products = $o->getProducts();

 


        $line_items = array();
        foreach ($products as $product) {
          

            $qoyod_product = QoyodProduct::getProductBySrcProductId($product["id_product"]);
            if (!$qoyod_product) {
                return false;
            }

            $item = array(
                "product_id" => $qoyod_product->dest_product_id,
                "description" => $product["product_name"],
                "quantity" => $product["product_quantity"],
                "unit_price" => $product["original_product_price"],
                "discount" => 0,
                "discount_type" => "percentage",
                "tax_percent" => 15,
                "is_inclusive" => true
            );
            array_push($line_items, $item);
        }


        $shippment_service = array(
            "product_id" => $this->shippment_service_id,
            "description" => "Shippment",
            "quantity" => 1,
            "unit_price" => $order->total_shipping_tax_excl,
            "discount" => 0,
            "discount_type" => "percentage",
            "tax_percent" => 15 ,
            "is_inclusive" => true
        );
        // add shippment 

        array_push($line_items,$shippment_service);

        $data = array(
            "contact_id" => $dest_customer_id,
            "reference" => $referece,
            "description" => "New Order from store",
            "issue_date" => date("Y-m-d H:i:s"),
            "due_date" => date("Y-m-d H:i:s"),
            "status" => "Approved",
            "inventory_id" => 1,
            "line_items" => $line_items,
           

        );

         
        if ($qoyodInvoice) {


            try{
                $dest_invoice_id = $qoyodInvoice->dest_invoice_id;
            $updatedProduct = $this->qoyodService->updateInvoice($dest_invoice_id, $data);
            $qoyodInvoice->datetime = date("Y-m-d H:i:s");
            $qoyodInvoice->status = "updated";
            $qoyodInvoice->save();
            }catch (Throwable $e ){ 
                return false ;
            }


           

        } else {

            try{
                $createdInvoice = $this->qoyodService->createInvoice($data);
                $newQoyodInvoice = new QoyodInvoice();
                $newQoyodInvoice->src_invoice_id = $order->id;
                $newQoyodInvoice->dest_invoice_id = $createdInvoice->invoice->id;
                $newQoyodInvoice->status = 'created';
                $newQoyodInvoice->datetime = date("Y-m-d H:i:s");
                $newQoyodInvoice->add();
            }catch (Throwable $e ){ 
                return false ;
            }

           
           
        }


    }




}