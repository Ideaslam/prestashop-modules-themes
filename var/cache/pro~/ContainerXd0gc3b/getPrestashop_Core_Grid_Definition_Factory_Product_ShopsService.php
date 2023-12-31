<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.definition.factory.product.shops' shared service.

$this->services['prestashop.core.grid.definition.factory.product.shops'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\ProductShopsGridDefinitionFactory(($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? $this->load('getMultistoreFeatureService.php')), ($this->services['prestashop.adapter.shop.context'] ?? ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context())), ($this->services['form.factory'] ?? $this->load('getForm_FactoryService.php')), ($this->privates['PrestaShop\\PrestaShop\\Core\\Grid\\Action\\Row\\AccessibilityChecker\\ProductSingleShopAssociatedAccessibilityChecker'] ?? $this->load('getProductSingleShopAssociatedAccessibilityCheckerService.php')), ($this->privates['PrestaShop\\PrestaShop\\Core\\Grid\\Action\\Row\\AccessibilityChecker\\ProductMultipleShopsAssociatedAccessibilityChecker'] ?? $this->load('getProductMultipleShopsAssociatedAccessibilityCheckerService.php')));

$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));

return $instance;
