<?php

use PrestaShop\PrestaShop\Core\Payment\PaymentOption;

if (!defined('_PS_VERSION_')) {
    exit;
}

class itjl_cash_on_delivery extends PaymentModule
{
	public function __construct()
	{
	    $this->name = 'itjl_cash_on_delivery';
        $this->tab = 'payments_gateways';
        $this->version = '1.0';
        $this->author = 'ITJL';
        $this->currencies = true;
        $this->currencies_mode = 'checkbox';
		$this->controllers = ['payment', 'validation'];
		
		parent::__construct();
		
        $this->displayName = $this->trans('Płatność gotówką przy odbiorze', [], 'Modules.itjl_cash_on_delivery.Admin');
        $this->description = $this->trans('Płatność gotówką przy odbiorze', [], 'Modules.itjl_cash_on_delivery.Admin');
        $this->confirmUninstall = $this->trans('Are you sure you want to delete these details?', [], 'Modules.itjl_cash_on_delivery.Admin');
        $this->ps_versions_compliancy = ['min' => '1.6', 'max' => '1.7.99'];
		$this->bootstrap = true;

	}

    public function install()
	{
		return (parent::install()
            && $this->registerHook('paymentOptions')
            && $this->registerHook('paymentReturn'));	
	}
	
	public function uninstall()
	{
		return parent::uninstall();
	}

	public function hookPaymentOptions($params)
    {
		if (!$this->active) {
            return;
        }
        if (!$this->checkCurrency($params['cart'])) {
            
            return;
        }
        $total_cart_value = $params['cart']->getOrderTotal(); 
        $newOption = new PaymentOption();
        $newOption->setModuleName($this->name)
          ->setCallToActionText($this->trans('Płatność gotówką przy odbiorze', [], 'Modules.itjl_cash_on_delivery.Admin'))
          ->setAction($this->context->link->getModuleLink($this->name, 'validation', [], true))
          ->setAdditionalInformation($this->fetch(_PS_MODULE_DIR_.'itjl_cash_on_delivery/views/templates/front/payment_info.tpl'));
        
          if($total_cart_value <= 5000){
            return [$newOption];
        }
         
		
    }

    public function checkCurrency($cart)
    {
        
        $currency_order = new Currency((int) ($cart->id_currency));
        $currencies_module = $this->getCurrency((int) $cart->id_currency);

        if (is_array($currencies_module)) {
            foreach ($currencies_module as $currency_module) {
                if ($currency_order->id == $currency_module['id_currency']) {
                    return true;
                }
            }
        }
        return false;
    }
    public function hookPaymentReturn($params)
    {
        if (!$this->active) {
            return;
        }

        return $this->fetch('module:itjl_cash_on_delivery/views/templates/hook/payment_return.tpl');
    }

}
?>