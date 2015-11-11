<?php

class Pronamic_WP_Pay_Gateways_ING_IDealInternetKassa_Integration {
	public function __construct() {
		$this->id       = 'ing-ideal-internetkassa';
		$this->name     = 'ING - iDEAL Internet Kassa';
		$this->provider = 'ing';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_Gateway';
	}
}
