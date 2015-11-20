<?php

/**
 * Title: ING - iDEAL Internet Kassa config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_ING_IDealInternetKassa_ConfigTest extends Pronamic_WP_Pay_Gateways_ING_IDealInternetKassa_Config {
	public function get_payment_server_url() {
		return 'https://twyp.secure-ing.com/ncol/test/orderstandard.asp';
	}
}
