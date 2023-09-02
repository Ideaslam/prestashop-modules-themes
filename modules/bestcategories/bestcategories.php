<?php
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
use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
class BestCategories extends Module  implements WidgetInterface
{
    private $templateFile;

    public function __construct()
    {
        $this->name = 'bestcategories';
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

        $this->displayName = $this->trans('Top Categories ', [], 'Modules.BestCategories.Admin');
        $this->description = $this->trans('Show your visitors what are your top-selling Categories directly on your homepage.', [], 'Modules.Bestsellers.Admin');

        $this->templateFile = 'module:bestcategories/views/templates/hook/bestcategories.tpl';
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
        if (Tools::isSubmit('submitTopCategories')) {
            
        }

        return $output . $this->renderForm();
    }

    public function renderForm()
    {
        $fields_form = [
            'form' => [
                'legend' => [
                    'title' => $this->trans('Settings', [], 'Admin.Global'),
                    'icon' => 'icon-cogs',
                ], 
            ],
        ];

        $lang = new Language((int) Configuration::get('PS_LANG_DEFAULT'));

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitTopCategories';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false) . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = [ 
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        ];

        return $helper->generateForm([$fields_form]);
    }

 

    public function renderWidget($hookName, array $configuration)
    { 
        if (!$this->isCached($this->templateFile, $this->getCacheId('bestcategories'))) {
            $variables = $this->getWidgetVariables($hookName, $configuration);
            echo empty($variables) ; 
            if (empty($variables)) {
                return false;
            }

            $this->smarty->assign($variables);
        }

        return $this->fetch($this->templateFile, $this->getCacheId('bestcategories'));
    }

    public function getWidgetVariables($hookName, array $configuration)
    {
        $categories = $this->getTopCategories(); 
        if (!empty($categories)) {
            foreach ($categories as &$category) { 
                // $category['image_url'] = $this->context->link->getBaseLink()  ."c/". $category['id_category'] 
                // ."-category_default/" . $category['link_rewrite'] .".jpg"  ; 

                $category['image_url'] = $this->context->link->getCatImageLink($category['name'],$category['id_category']) ;    ;
                $category['link'] =$this->context->link->getCategoryLink($category['id_category']) ; 
            }
            return [
                'categories' => $categories  
            ];
        }

        return false;
    }

    private function getTopCategories()
    {
        
        $categories = [];
        $result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS('
			SELECT   *
			FROM `' . _DB_PREFIX_ . 'category` c
			INNER JOIN `' . _DB_PREFIX_ . 'category_lang` cl ON (c.`id_category` = cl.`id_category` AND cl.`id_lang` = ' . (int) $this->context->language->id . Shop::addSqlRestrictionOnLang('cl') . ')
			INNER JOIN `' . _DB_PREFIX_ . 'category_shop` cs ON (cs.`id_category` = c.`id_category` AND cs.`id_shop` = ' . (int) $this->context->shop->id . ')
			 where c.level_depth =  2  and active =1 '  ) ;  

              
            $categories  = $result ;  
             return      $categories  ;  
    }
}
