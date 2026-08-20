<?php
class ControllerExtensionPaymentNabDirectPost extends Controller {
	public function index() {

		$this->load->language('extension/payment/nab_direct_post');
		$this->load->model('checkout/order');

		$data['text_testmode'] = $this->language->get('text_testmode');
		$data['button_confirm'] = $this->language->get('button_confirm');
		
		$data['text_credit_card'] = $this->language->get('text_credit_card');
		$data['entry_cc_number'] = $this->language->get('entry_cc_number');
		$data['entry_cc_expire_date'] = $this->language->get('entry_cc_expire_date');
		$data['entry_cc_ccv'] = $this->language->get('entry_cc_ccv');

		$data['testmode'] = $this->config->get('payment_nab_direct_post_test');

		//Transaction URLs
		if (!$this->config->get('payment_nab_direct_post_test')) {
			$data['action'] = 'https://transact.nab.com.au/live/directpostv2/authorise';
			$pw = $this->config->get('payment_nab_direct_post_password');
		} else {
			// $data['action'] = 'https://transact.nab.com.au/test/directpostv2/authorise'; old url
			$data['action'] = 'https://demo.transact.nab.com.au/directpostv2/authorise';
			$pw = $this->config->get('payment_nab_direct_post_password_test_mode');
		}
		
		//Merchant ID - EPS_MERCHANT
		$data['merchant_id'] = $this->config->get('payment_nab_direct_post_username');
		//Transaction Type
		$data['transaction_type'] = $this->config->get('payment_nab_direct_post_transaction');

		if (!isset($this->session->data['order_id'])) {
			$this->log->write('NAB DEBUG: ERROR - session order_id not set');
			return '';
		}

		$order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);

		if ($order_info) {

			//mandatory fields
			//Payment Reference - EPS_REFERENCEID order id used
			$data['ref_id'] = $this->session->data['order_id'];
			//Transaction Amount - EPS_AMOUNT the account has to be set for multi currenci if the site uses more currencies
			$data['amount'] = number_format($this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false), 2, '.', '');
			$data['currency'] = $order_info['currency_code'];
			//GMT Timestamp - EPS_TIMESTAMP
			/*"YYYYMMDDHHMMSS*/
			$data['timestamp'] = gmdate('YmdHis');
			//Fingerprint - EPS_FINGERPRINT
			/*SHA1 hash
			EPS_MERCHANT|TransactionPassword|EPS_TXNTYPE|EPS_REFERENCEID|EPS_AMOUNT|EPS_TIMESTAMP
			*/
			$data['fingerprint'] = sha1($data['merchant_id'] . '|' . $pw . '|' . $data['transaction_type'] . '|' . $data['ref_id'] . '|' . $data['amount'] . '|' . $data['timestamp']);
			//Transaction Result URL - EPS_RESULTURL
			//$data['result_url'] = $this->url->link('checkout/success', '', true);
			$data['result_url'] = $this->url->link('extension/payment/nab_direct_post/callback', '', true);
			//Callback URL - EPS_CALLBACKURL
			//$data['callback'] = $this->url->link('extension/payment/nab_direct_post/callback', '', true);
			
			//card expiry date
			$data['months'] = array();
			for ($i = 1; $i <= 12; $i++) {
				$data['months'][] = array(
					'text'  => strftime('%B', mktime(0, 0, 0, $i, 1, 2000)),
					'value' => sprintf('%02d', $i)
				);
			}
			$today = getdate();
			$data['year_expire'] = array();
			for ($i = $today['year']; $i < $today['year'] + 11; $i++) {
				$data['year_expire'][] = array(
					'text'  => strftime('%Y', mktime(0, 0, 0, 1, 1, $i)),
					'value' => strftime('%Y', mktime(0, 0, 0, 1, 1, $i))
				);
			}
			//risk management data
			if ( ($this->config->get('payment_nab_direct_post_transaction') == 2) || ($this->config->get('nab_direct_post_transaction') == 3) ) {
				$data['ip'] = $this->request->server['REMOTE_ADDR'];
				$data['zip_code'] = $order_info['payment_postcode'];
				$data['city'] = $order_info['payment_city'];
				$data['billing_country'] = $order_info['payment_iso_code_2'];
				$data['delivery_country'] = $order_info['shipping_iso_code_2'];
				$data['email'] = $order_info['email'];
			}

			$output = $this->load->view('extension/payment/nab_direct_post', $data);
			return $output;
		} else {
			$this->log->write('NAB DEBUG: ERROR - order_info is null for order_id = ' . $this->session->data['order_id']);
			return '';
		}
	}
	
	public function callback() {
		$debug = 'NAB Direct Post :: RESPONSE: ';
		$payment = 0;
		//check get parameters
		//summarycode 1 = Approved, 2,3  Declined
		if (isset($this->request->get['summarycode'])) {
			$summarycode = $this->request->get['summarycode'];
		} else {
			$summarycode = '';
		}
		//rescode  00, 08 and 11 indicate approved 
		if (isset($this->request->get['rescode'])) {
			$rescode = $this->request->get['rescode'];
		} else {
			$rescode = 0;
		}
		//restext result text - see documentation
		if (isset($this->request->get['restext'])) {
			$restext = $this->request->get['restext'];
		} else {
			$restext = '';
		}
		//refid returned for verification
		if (isset($this->request->get['refid'])) {
			$order_id = $this->request->get['refid'];
		} else {
			$order_id = 0;
		}
		//txnid  bank transaction ID
		if (isset($this->request->get['txnid'])) {
			$txnid = $this->request->get['txnid'];
		} else {
			$txnid = '';
		}
		//settdate  The bank settlement date
		if (isset($this->request->get['settdate'])) {
			$settdate = $this->request->get['settdate'];
		} else {
			$settdate = '';
		}
		//merchant  The EPS_MERCHANT value
		if (isset($this->request->get['merchant']) && ($this->request->get['merchant'] == $this->config->get('payment_nab_direct_post_username'))) {
			$merchant = $this->request->get['merchant'];
		} else {
			$merchant = '';
		}
		//timestamp to be used for verification
		if (isset($this->request->get['timestamp'])) {
			$timestamp = $this->request->get['timestamp'];
		} else {
			$timestamp = '';
		}
		if (!$this->config->get('nab_direct_post_test')) {
			$pw = $this->config->get('payment_nab_direct_post_password');
		} else {
			$pw = $this->config->get('payment_nab_direct_post_password_test_mode');
		}
		//fingerprint merchant, transaction password, reference, amount, timestamp, summarycode
		if (isset($this->request->get['fingerprint'])) {
			$fingerprint = $this->request->get['fingerprint'];
		} else {
			$fingerprint = false;
		}
		
		$this->load->model('checkout/order');
		$order_info = $this->model_checkout_order->getOrder($order_id);
		if ($order_info) {
			$currency = $order_info['currency_code'];
			$amount = number_format($this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false), 2, '.', '');
		} else {
			$amount = '';
		}
		
		//check the fingerprint
		/*SHA1 hash
		merchant, transaction password, reference, amount, timestamp, summarycode
		*/
		$fp = sha1($merchant . '|' . $pw . '|' . $order_id . '|' . $amount . '|' . $timestamp . '|' . $summarycode);
		if ($fp == $fingerprint) {
			$check = true;
			$debug_value = 'OK';
		} else {
			$check = false;
			$debug_value = 'Fingerprint doesnt match ' . $fingerprint . ' timestamp ' . $timestamp . ' merchant ' . $merchant;
		}
		if ($this->request->get['summarycode'] == 1) {
			$payment = 1;
		}
		
		//log
		if ($this->config->get('payment_nab_direct_post_debug')) {
		    $this->log->write($debug . ' summarycode: ' . $summarycode . ' rescode ' . $rescode . ' restext ' . $restext . ' order_id ' . $order_id . 'amount ' . $amount . ' check ' . $debug_value );
		}

		if ($order_info) {
			if ( ($payment == 1) && ($check == true) ) {
				$order_status_id = $this->config->get('payment_nab_direct_post_completed_status_id');
				$this->model_checkout_order->addOrderHistory($order_id, $order_status_id, '', true);
				$this->response->redirect($this->url->link('checkout/success', '', true));
			} else { 
				$order_status_id = $this->config->get('payment_nab_direct_post_failed_status_id');
				$this->session->data['error'] = "Payment Failed";
				$this->response->redirect($this->url->link('checkout/checkout', '', true));
			}
		} else {
			$this->response->redirect($this->url->link('checkout/checkout', '', true));
		}
	}
}