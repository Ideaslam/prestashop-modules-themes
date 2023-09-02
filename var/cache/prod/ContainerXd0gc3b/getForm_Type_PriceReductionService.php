<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.price_reduction' shared service.

return $this->services['form.type.price_reduction'] = new \PrestaShopBundle\Form\Admin\Type\PriceReductionType(($this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? $this->getCurrencyDataProviderService())->getDefaultCurrency(), ($this->services['form.event_listener.price_reduction'] ?? ($this->services['form.event_listener.price_reduction'] = new \PrestaShopBundle\Form\Admin\Type\EventListener\PriceReductionListener())), ($this->services['prestashop.core.form.choice_provider.tax_inclusion'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_TaxInclusionService.php')));