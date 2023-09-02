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
use SecretCodes\Module\Torod\Services\TorodService;
use SecretCodes\Module\Torod\Services\TorodServiceFactory;
use SecretCodes\Module\Torod\Services\TorodApi;
use SecretCodes\Module\Torod\Entity\Transaction;
use SecretCodes\Module\Torod\Exceptions\CheckWalletException;
use SecretCodes\Module\Torod\Exceptions\HttpException;
use SecretCodes\Module\Torod\Exceptions\PhoneNotValidException;
use SecretCodes\Module\Torod\Exceptions\ServiceNotFoundException;
use SecretCodes\Module\Torod\Exceptions\ValidationException; 
use SecretCodes\Module\Torod\Shared\Curl; 


$autoloadPath = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoloadPath)) {
    require_once $autoloadPath;
}


if (!defined('_PS_VERSION_')) {
    exit;
} 
class Torod extends CarrierModule
{
    // you can use to assign each carrier; 
    public $id_carrier;
    private $torodService;

    protected $config_form = false;
    protected $wareHouseCode;
    public $serviceContainer;
    public $partner_list;
    private $production_url = "https://torod.co/en/api";
    private $dev_url = "https://demo.stage.torod.co/en/api";

    private $translator;

    public function __construct(TorodService $torodService)
    { 
     //  $this->torodService = new TorodService(new TorodServiceFactory(new TorodApi(new Curl()))); 
        $this->torodService = $torodService;

        $this->name = 'torod';
        $this->tab = 'shipping_logistics';
        $this->version = '1.0.0';
        $this->author = 'secretcode';
        $this->need_instance = 1;
        $this->wareHouseCode = "MAINSTORE";
        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;


        parent::__construct();
        $this->displayName = $this->l('Torod Module');
        $this->description = $this->l('Torod Module ,is a shipping module');

        $this->confirmUninstall = $this->l('');
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);

    }



    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        if (extension_loaded('curl') == false) {
            $this->_errors[] = $this->l('You have to enable the cURL extension on your server to install this module');
            return false;
        }



        Configuration::updateValue('TOROD_LIVE_MODE', false);

        include(dirname(__FILE__) . '/sql/install.php');



        return parent::install() &&
            $this->registerHook('header') &&
            $this->registerHook('displayBackOfficeHeader') &&
            $this->registerHook('updateCarrier') &&
            $this->registerHook('actionCarrierProcess') &&
            $this->registerHook('actionCarrierUpdate') &&
            $this->registerHook('displayCarrierList') &&
            $this->registerHook('displayBeforeCarrier') &&
            $this->registerHook('actionCheckoutRender') &&
            $this->registerHook('actionValidateCustomerAddressForm') &&
            $this->registerHook('actionSubmitCustomerAddressForm') &&
            $this->registerHook('displayAddressSelectorBottom') &&
            $this->registerHook('displayAdditionalCustomerAddressFields') &&
            $this->registerHook('displayOrderConfirmation');




    }

    public function uninstall()
    {
        Configuration::deleteByName('TOROD_LIVE_MODE');
        Configuration::deleteByName('TOROD_MAIN_ADDRESS_ID');
        Configuration::deleteByName('TOROD_MAIN_ADDRESS_CODE');
        Configuration::deleteByName('TOROD_ACCOUNT_SECRET_KEY');
        Configuration::deleteByName('TOROD_ACCOUNT_CLIENT_ID');




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
        if (((bool) Tools::isSubmit('submitTorodModule')) == true) {
            $this->postProcess();
            // prepare module 
            // save keys
            // store all carriers
            // send main store location
            $this->prepareTorodModule();
        }

        $this->context->smarty->assign('module_dir', $this->_path);

        $output = $this->context->smarty->fetch($this->local_path . 'views/templates/admin/configure.tpl');

        return $output . $this->renderForm();
    }



    protected function prepareTorodModule()
    {
        $this->prepareModuleEnvironment();
        if ($this->torodService->isInitialized()) {
            $this->storeMainAddressToTorod($this->wareHouseCode);
            $this->storeAllCarriers();
        } 
    }

    protected function prepareModuleEnvironment()
    {
        $mode = Configuration::get('TOROD_LIVE_MODE', false);
        $url = $this->dev_url;
        if ($mode == true) {
            $url = $this->production_url;
        }
        Configuration::updateValue('TOROD_BASE_URL', $url);

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
        $helper->submit_action = 'submitTorodModule';
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
                        'name' => 'TOROD_LIVE_MODE',
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
                        'col' => 6,
                        'required' => true,
                        'type' => 'text',
                        'prefix' => '<i class="icon icon-envelope"></i>',
                        'desc' => $this->l('Enter Client ID'),
                        'name' => 'TOROD_ACCOUNT_CLIENT_ID',
                        'label' => $this->l('Client Id'),
                    ),
                    array(

                        'required' => true,
                        'col' => 6,
                        'type' => 'text',
                        'name' => 'TOROD_ACCOUNT_SECRET_KEY',
                        'prefix' => '<i class="icon icon-envelope"></i>',
                        'label' => $this->l('Secret Key'),
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
            'TOROD_LIVE_MODE' => Configuration::get('TOROD_LIVE_MODE', true),
            'TOROD_ACCOUNT_CLIENT_ID' => Configuration::get('TOROD_ACCOUNT_CLIENT_ID', null),
            'TOROD_ACCOUNT_SECRET_KEY' => Configuration::get('TOROD_ACCOUNT_SECRET_KEY', null),
        );
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


    protected function storeMainAddressToTorod($code)
    {
        try {
            $address = $this->torodService->checkTorodMainAddress($code);
            $mainAddressDb = $this->getMainAddressCodeFromConfiguration();

            if ($address == null) {
                $stores = Store::getStores($this->context->language->id);
                if (count($stores) == 0)
                    return false;

                $mainStore = ((object) $stores[0]);
                $address = $this->createWarehouseAddress($mainStore, $code);
            }
            if ($mainAddressDb == null) {
                $this->storeWareHouseAddressInConfiguration($address->id, $address->warehouse);
            }
            $this->adminDisplayInformation('Main Address Stored Correctly');
            return true;

        } catch (Throwable $e) {
            $this->adminDisplayWarning('Please Add Store Address First');
            return false;
        }

    }

    protected function storeAllCarriers()
    {
        try {
            $carrierList = $this->torodService->getTorodCarriers();
            foreach ($carrierList as $carrier) {
                $this->storeCarrier($carrier);
            }
            $this->adminDisplayInformation('All Carriers Stored Correctly');
            return true;
        } catch (Throwable $e) {
            throw new Exception('Carriers is Not Stored');
        }

    }


    protected function storeCarrier($carrier)
    {
        $title = $carrier->method;
        $time = $carrier->approximate_delivery_time;
        $logo = $carrier->carrier_logo;
        $carrier = $this->addCarrier($title, $time, $logo);
        if ($carrier <> false) {
            $this->addZones($carrier);
            $this->addGroups($carrier);
            $this->addRanges($carrier);
        }
    }

    protected function storeWareHouseAddressInConfiguration($address_id, $address_code)
    {
        Configuration::updateValue('TOROD_MAIN_ADDRESS_ID', $address_id);
        Configuration::updateValue('TOROD_MAIN_ADDRESS_CODE', $address_code);
    }

    protected function getMainAddressCodeFromConfiguration()
    {
        return Configuration::get('TOROD_MAIN_ADDRESS_CODE', null);
    }



    public function getOrderShippingCost($params, $shipping_cost)
    {


        if (Context::getContext()->customer == null)
            return 0;

        if (Context::getContext()->customer->logged == true) {
            $cart_id = $params->id;
            $rate = 0;

            // if selected , save in db 
            if ($params->id_carrier <> 0) {

                $selectedCarrier_id = $params->id_carrier;
                $transaction = Transaction::getTransactionByCartId($cart_id);
                if ($transaction) {
                    //save selected carrier 
                    if (count((Array) $this->partner_list) > 0) {
                        $selected_partner = $this->findPartnerFromCarrierList($selectedCarrier_id);
                        if ($selected_partner == false) {
                            // to hide other carriers
                            return false;
                        }
                        $transaction->carrier_id = $selectedCarrier_id;
                        $transaction->partner_id = $selected_partner->id;
                        $transaction->rate = $selected_partner->rate;
                        $transaction->save();
                    }
                }
            }


            if (count((Array) $this->partner_list) > 0) {
                $partner = $this->findPartnerFromCarrierList($this->id_carrier);
                if ($partner == false) {
                    // to hide other carriers
                    return false;
                }
                $rate = $partner->rate;

            } else {
                $transaction = Transaction::getTransactionByCartId($cart_id);
                if ($transaction) {
                    $rate = $transaction->rate;

                    if ($rate == 0 )
                    return false ;

                } else {
                    return false;
                }

            }

            return $rate;


        }
        return false;
    }

    protected function findPartnerFromCarrierList($carrier_id)
    {
        
        foreach ($this->partner_list as $partner) {
            $carrier = Carrier::getCarrierByReference($carrier_id);
            if ($partner->method == $carrier->name) {
                return $partner;
            }
        }
        return false;
    }



    public function getOrderShippingCostExternal($params)
    {
        return $this->getOrderShippingCost($params, 0);
    }

    protected function createWarehouseAddress($store, $code)
    {
        try {
            $address = $this->torodService->createAddress($store, $code);
            return $address;
        } catch (Throwable $e) {
            throw new Exception('Address is not created');
        }

    }


    protected function getCarrierByName($name)
    {
        $id_carrier = Db::getInstance()->getValue('SELECT `id_carrier` FROM `' . _DB_PREFIX_ . 'carrier`
        WHERE   name  = \'' . $name . '\' AND deleted = 0');
        if (!$id_carrier) {
            return false;
        }

        return new Carrier($id_carrier);
    }
    protected function addCarrier($title, $time, $logo)
    {
        $carrier = $this->getCarrierByName($title);

        //if exsit 
        if ($carrier == true) {
            return false;
        }


        $carrier = new Carrier();

        $carrier->name = $this->l($title);
        $carrier->is_module = true;
        $carrier->active = 1;
        $carrier->range_behavior = 1;
        $carrier->need_range = 1;
        $carrier->shipping_external = true;
        $carrier->range_behavior = 0;
        $carrier->external_module_name = $this->name;
        $carrier->shipping_method = 2;



        foreach (Language::getLanguages() as $lang)
            $carrier->delay[$lang['id_lang']] = $this->l($time);

        if ($carrier->add() == true) {

            if ($logo <> null) {
                @copy($logo, _PS_SHIP_IMG_DIR_ . '/' . (int) $carrier->id . '.jpg');
            } else {
                @copy(dirname(__FILE__) . '/views/img/carrier_image.jpg', _PS_SHIP_IMG_DIR_ . '/' . (int) $carrier->id . '.jpg');
            }

            Configuration::updateValue('TOROD_CARRIER_ID', (int) $carrier->id);
            return $carrier;
        }

        return false;
    }

    protected function addGroups($carrier)
    {
        $groups_ids = array();
        $groups = Group::getGroups(Context::getContext()->language->id);
        foreach ($groups as $group)
            $groups_ids[] = $group['id_group'];

        $carrier->setGroups($groups_ids);
    }

    protected function addRanges($carrier)
    {
        $range_price = new RangePrice();
        $range_price->id_carrier = $carrier->id;
        $range_price->delimiter1 = '0';
        $range_price->delimiter2 = '10000';
        $range_price->add();

        $range_weight = new RangeWeight();
        $range_weight->id_carrier = $carrier->id;
        $range_weight->delimiter1 = '0';
        $range_weight->delimiter2 = '10000';
        $range_weight->add();
    }

    protected function addZones($carrier)
    {
        $zones = Zone::getZones();

        foreach ($zones as $zone)
            $carrier->addZone($zone['id_zone']);
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

    public function hookUpdateCarrier($params)
    {
        /**
         * Not needed since 1.5
         * You can identify the carrier by the id_reference
         */
    }

    public function hookActionCarrierProcess()
    {
        //  echo 'test CarrierProcess ' ;
        /* Place your code here. */

    }

    public function hookActionCarrierUpdate()
    {
        /* Place your code here. */
       // echo '<p style="background-color: red;font-size:20px ; padding:10px ;color :white" > Phone Number 1</p>';
    }

    public function hookDisplayAddressSelectorBottom()
    {
        /* Place your code here. */
        return $this->display(__FILE__, '/views/templates/admin/configure.tpl');
        //echo '<p style="background-color: red;font-size:20px ; padding:10px ;color :white" > Phone Number 2 </p>'   ;
    }

    public function hookDisplayAdditionalCustomerAddressFields()
    {
         /* Place your code here. */
         // echo 'rrrr' ;
         // return $this->display(__FILE__, '/views/templates/admin/configure.tpl');
        // echo '<p style="background-color: red;font-size:20px ; padding:10px ;color :white" > Phone Number 2 </p>'   ;
    }


    public function hookDisplayCarrierList()
    {

       // echo 'test CarrierList ';
        /* Place your code here. */
    }

    public function hookDisplayOrderConfirmation($params)
    { 
       $cart_id = ((object) $params)->order->id_cart;
       $order_id =((object) $params)->order->id;
       $this->createShippment($order_id , $cart_id);
    }


    public function createShippment($order_id,$cart_id){ 
         $this->createShippmentProcess($cart_id,$order_id); 
         $this->updateShippmentSlip($order_id ,$cart_id);
    }

    public function updateShippmentSlip($order_id,$cart_id){
        $order = new Order($order_id);   
        $transaction =  Transaction::getTransactionByCartId($cart_id) ;
        $order->setWsShippingNumber($transaction->tracking_id) ;  
    }



    public function hookActionSubmitCustomerAddressForm($address)
    {

        return true;
    }
    public function hookActionValidateCustomerAddressForm($address)
    {

        return true;
    }
    public function hookDisplayBeforeCarrier($checkoutProcess)
    {
        $process = (object) $checkoutProcess;

        $address_id = $process->cart->id_address_delivery;

        if ($address_id == 0)
            return false;

        $address = new Address((int) $address_id);

        try {
            $this->validateUserAddress($address);
        } catch (ValidationException $e) {
            echo '<p style="background-color: red;font-size:20px ; padding:10px ;color :white" >' . $e->getMessage() . '</p>';
            return false;
        } catch (Throwable $e) {
            return false;
        }


    }





    public function hookActionCheckoutRender($checkoutProcess)
    {

        $this->updateOrderCarrierList($checkoutProcess);
    }


    protected function createShippmentProcess($cart_id,$order_id)
    {

        $transaction = Transaction::getPendingTransactionByCartId($cart_id);
        if ($transaction) {
            $partner_id = $transaction->partner_id;
            $transaction_id = $transaction->transaction_id;
           // echo $partner_id;
            try {
                $orderShippmentProcess = $this->torodService->createOrderShippment(
                    $transaction_id,
                    $this->wareHouseCode,
                    $partner_id
                );

                $transaction->order_status = "success";
                $transaction->tracking_id = $orderShippmentProcess->tracking_id;
                $transaction->label = $orderShippmentProcess->aws_label;
                $transaction->order_id = $order_id ; 
                $transaction->save();



            } catch (CheckWalletException $e) {
              
              
              //  echo $e->getMessage();
            } catch (HttpException $e) {
                //echo 'also here';
               // echo $e->getMessage();
            } catch (Throwable $e) {
               // echo 'exception catch';
            }
        }
    }

    protected function updateOrderCarrierList($checkoutProcess)
    {
        $process = (object) $checkoutProcess;
        $cart_id = $process->cart->id;
        $cart = new Cart($cart_id);
        $address_id = $cart->id_address_delivery;
        $customer_id = $cart->id_customer;
 

        if ($address_id == 0 || $customer_id == 0){ 
            return false;
        }
       
             
        $transaction = Transaction::getTransactionByCartId($cart_id);
        if (!$transaction) {
            try {
                
                
                $preOrder = (object) $this->createPreOrder($cart);  
                if ($preOrder <> null) {
                    if(isset($preOrder->order_id ) != false ){
                        $order_id = $preOrder->order_id;
                        $transaction = new Transaction();
                        $transaction->cart_id = $cart_id;
                        $transaction->order_status = "pending";
                        $transaction->datetime = date("Y-m-d H:i:s");
                        $transaction->customer_id = $cart->id_customer;
                        $transaction->transaction_id = $order_id;
                        $transaction->add();
                    }
                    
                }


                try {
                    if ($preOrder <> false) {
                        $this->partner_list = $this->torodService->getOrderCarrierList($order_id, $this->wareHouseCode);
                    }

                } catch (CheckWalletException $e) {
                   // echo $e->getMessage();

                } catch (HttpException $e) {
                   // echo $e->getMessage();
                } catch (Throwable $e) {
                    return false;
                }

            } catch (CheckWalletException $e) {
               // echo $e->getMessage();

            } catch (HttpException $e) {
              //  echo $e->getMessage();
            } catch (Throwable $e) {
                return false;
            }



        } else {  
            if ($transaction){
                if($transaction->transaction_id == null ){ 
                    $transaction->delete();
                    return false; 
                }
            }
            if ($this->partner_list == null) {

                $transaction_id = $transaction->transaction_id;
                try {

                    $this->partner_list = $this->torodService->getOrderCarrierList($transaction_id, $this->wareHouseCode);

                } catch (Throwable $e) {

                }
            }
        }
    }


    protected function createPreOrder($cart)
    {

        $products = $cart->getProducts(); 
        $address_id = $cart->id_address_delivery;
        $customer_id = $cart->id_customer;

        if ($address_id == 0 || $customer_id == 0)
            return false;


        $address = new Address((int) $address_id);
        $customer = new Customer((int) $customer_id);


        try {
            $this->validateUserAddress($address); 
            return $this->torodService->createPreOrder($customer, $products, $address);
        } catch (ValidationException $e) {
            echo $e->getMessage();
        }



    }


    protected function validateUserAddress($address)
    {
        $phone = $address->phone;
        if (strlen($phone) <> 10) {
            throw new PhoneNotValidException();
        }
        return true;
    }



    protected function trans($id, array $parameters = [], $domain = null, $locale = null)
    {
        $parameters['legacy'] = 'htmlspecialchars';

        return $this->translator->trans($id, $parameters, $domain, $locale);
    }


}