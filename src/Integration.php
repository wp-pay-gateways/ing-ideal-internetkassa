<?php

class Pronamic_WP_Pay_Gateways_ING_IDealInternetKassa_Integration extends Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_Integration {
	public function __construct() {
		$this->id       = 'ing-ideal-internetkassa';
		$this->name     = 'ING - iDEAL Internet Kassa';
		$this->provider = 'ing';
	}
}
