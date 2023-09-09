<?php
use FacebookAds\Object\ProductCatalog;
use PrestaShop\Module\PsxMarketingWithGoogle\DTO\Remarketing\ProductData;
use PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductDetails;
use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;
/*
* 2007-2016 PrestaShop
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
 

if (!defined('_PS_VERSION_')) {
    exit;
}
 
class Productday extends Module  implements WidgetInterface
{
    private $templateFile;

    public function __construct()
    {
 
        $this->name = 'productday';
        $this->tab = 'front_office_features';
        $this->author = 'SecretCodes';
        $this->version = '1.0.6';
        $this->need_instance = 0;

        $this->ps_versions_compliancy = [
            'min' => '1.7.0.0',
            'max' => _PS_VERSION_,
        ];

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->trans('Product Day ', [], 'Modules.Productday.Admin');
        $this->description = $this->trans('Show your visitors what are your top-selling Product Of Day directly on your homepage.', [], 'Modules.Productday.Admin');

        $this->templateFile = 'module:productday/views/templates/hook/productday.tpl';

 
    }

    public function install()
    {
        $this->_clearCache('*');

        return parent::install() 
            && $this->registerHook('displayHome') ;
            
        ;
    }

    public function uninstall()
    {
        $this->_clearCache('*');

        if (!parent::uninstall()  ) {
            return false;
        }

        return true;
    }

   

    
  
  
    public function _clearCache($template, $cache_id = null, $compile_id = null)
    {
        parent::_clearCache($this->templateFile);
    }

    public function getContent()
    {
        $output = '';
        if (Tools::isSubmit('submitProductDay')) {
            $this->postProcess();
    
        }
      
        return $output . $this->renderForm();
    }

    protected function postProcess()
    {
        $form_values = $this->getConfigFormValues();

        foreach (array_keys($form_values) as $key) {
            Configuration::updateValue($key, Tools::getValue($key));
        }
    }
    protected function getConfigFormValues()
    {
        return array(
            'PRODUCTDAY_ID' => Configuration::get('PRODUCTDAY_ID', 0), 
        );

    }

    public function renderForm()
    {
        $fields_form = [
            'form' => [
                'legend' => [
                    'title' => $this->trans('Settings', [], 'Admin.Global'),
                    'icon' => 'icon-cogs',
                    
                ], 
                'input' => array( 
                    array( 
                        'required' => true,
                        'col' => 6,
                        'type' => 'text',
                        'name' => 'PRODUCTDAY_ID',
                        'prefix' => '<i class="icon icon-envelope"></i>',
                        'label' => $this->l('Product Day Id'),
                    ), 
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ],
        ];

        $lang = new Language((int) Configuration::get('PS_LANG_DEFAULT'));

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitProductDay';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false) . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = [ 
            'fields_value' => $this->getConfigFormValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        ];
        
        return $helper->generateForm([$fields_form]);
    }

 

    public function renderWidget($hookName, array $configuration)
    {    
     //   if (!$this->isCached($this->templateFile, $this->getCacheId('productday'))) {
          
            $variables = $this->getWidgetVariables($hookName, $configuration);
            echo empty($variables) ; 
            if (empty($variables)) {
                return false;
            }

            $this->smarty->assign($variables);
       // }
       
        return $this->fetch($this->templateFile, $this->getCacheId('productday'));
    }

    public function getWidgetVariables($hookName, array $configuration)
    {
        $products = $this->getProductDay();  
        if (!empty($products)) { 
            foreach ($products as &$product) { 
                $product['image_url'] = $this->context->link->getProductLink($product['id_product'])  ;
            } 
            return   [
                "products" => $products 
            ]   ;
           
        }
        
        return false;
    }

    private function getProductDay()
    {

        
        if (Configuration::get('PS_CATALOG_MODE')) {
            return false;
        }
        $newProducts = false;
        if(Configuration::get('PRODUCTDAY_ID')){
           
            $id= Configuration::get('PRODUCTDAY_ID');
            $prodDay= new ProductCore($id ) ; 
            $productId = (int)Tools::getValue('id_product'); // get current product id
            $productData = new Product($productId); // get product object with id 
            $link    = $productData->getLink(); // get product link

            $productData = (array)$productData;
            $productData['id_product'] = $id;  
            $newProducts =array( (array) $productData) ; 

            
        }
     
         

        // if (Configuration::get('PS_NB_DAYS_NEW_PRODUCT')) {
        //     $newProducts = Product::getNewProducts(
        //         (int)$this->context->language->id,
        //         0,
        //         (int)Configuration::get('NEW_PRODUCTS_NBR')
        //     );
        // }
          
      


        $assembler = new ProductAssembler($this->context);

        $presenterFactory = new ProductPresenterFactory($this->context);
        $presentationSettings = $presenterFactory->getPresentationSettings();
        $presenter = new ProductListingPresenter(
            new ImageRetriever(
                $this->context->link
            ),
            $this->context->link,
            new PriceFormatter(),
            new ProductColorsRetriever(),
            $this->context->getTranslator()
        );

        $products_for_template = array();

        if (is_array($newProducts)) {
            $index=1; 
            foreach ($newProducts as $rawProduct) {
              
                $products_for_template[] = $presenter->present(
                    $presentationSettings,
                    $assembler->assembleProduct( $rawProduct   ),
                    $this->context->language
                );
             
                if($index==1 )
                break; 
            }
        }
       // echo json_encode($products_for_template);
        return $products_for_template;
    }
}
