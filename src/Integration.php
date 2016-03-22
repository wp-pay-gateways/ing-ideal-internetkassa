<?php

/**
 * Title: ING - iDEAL Internet Kassa integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.1
 * @since 1.0.0
 */
class Pronamic_WP_Pay_Gateways_ING_IDealInternetKassa_Integration extends Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_Integration {
	public function __construct() {
		$this->id       = 'ing-ideal-internetkassa';
		$this->name     = 'ING - iDEAL Internet Kassa';
		$this->dashboard_url = array(
			'test' => 'https://twyp.secure-ing.com/ncol/test/backoffice',
			'live' => 'https://twyp.secure-ing.com/ncol/prod/backoffice',
		);
		$this->provider = 'ing';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_ING_IDealInternetKassa_ConfigFactory';
	}
}
