<?php
class ControllerCheckoutCheckout extends Controller {
	public function index() {
		// Validate cart has products and has stock.
		if ((!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout'))) {
			$this->response->redirect($this->url->link('checkout/cart'));
		}

		// Validate minimum quantity requirements.
		$products = $this->cart->getProducts();

		foreach ($products as $product) {
			$product_total = 0;

			foreach ($products as $product_2) {
				if ($product_2['product_id'] == $product['product_id']) {
					$product_total += $product_2['quantity'];
				}
			}

			if ($product['minimum'] > $product_total) {
				$this->response->redirect($this->url->link('checkout/cart'));
			}
		}

		$this->load->language('checkout/checkout');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js');
		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js');
		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js');
		$this->document->addStyle('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css');

		// Required by klarna
		if ($this->config->get('payment_klarna_account') || $this->config->get('payment_klarna_invoice')) {
			$this->document->addScript('http://cdn.klarna.com/public/kitt/toc/v1.0/js/klarna.terms.min.js');
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_cart'),
			'href' => $this->url->link('checkout/cart')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('checkout/checkout', '', true)
		);

		$data['text_checkout_option'] = sprintf($this->language->get('text_checkout_option'), 1);
		$data['text_checkout_account'] = sprintf($this->language->get('text_checkout_account'), 2);
		$data['text_checkout_payment_address'] = sprintf($this->language->get('text_checkout_payment_address'), 2);
		$data['text_checkout_shipping_address'] = sprintf($this->language->get('text_checkout_shipping_address'), 3);
		$data['text_checkout_shipping_method'] = sprintf($this->language->get('text_checkout_shipping_method'), 4);
		
		if ($this->cart->hasShipping()) {
			$data['text_checkout_payment_method'] = sprintf($this->language->get('text_checkout_payment_method'), 5);
			$data['text_checkout_confirm'] = sprintf($this->language->get('text_checkout_confirm'), 6);
		} else {
			$data['text_checkout_payment_method'] = sprintf($this->language->get('text_checkout_payment_method'), 3);
			$data['text_checkout_confirm'] = sprintf($this->language->get('text_checkout_confirm'), 4);	
		}

		if (isset($this->session->data['error'])) {
			$data['error_warning'] = $this->session->data['error'];
			unset($this->session->data['error']);
		} else {
			$data['error_warning'] = '';
		}

		$data['logged'] = $this->customer->isLogged();

		if (isset($this->session->data['account'])) {
			$data['account'] = $this->session->data['account'];
		} else {
			$data['account'] = '';
		}

		$data['shipping_required'] = $this->cart->hasShipping();

		$data['login_url'] = $this->url->link('account/login', '', true);
		$data['text_contact'] = $this->language->get('text_contact');
		$data['text_delivery'] = $this->language->get('text_delivery');
		$data['text_newsletter'] = $this->language->get('text_newsletter');
		$data['text_sign_in'] = $this->language->get('text_sign_in');

		// Earliest available pickup datetime
		$now = new DateTime();
		$today_noon = new DateTime('today 12:30');
		if ($now < $today_noon) {
			$earliest = $today_noon;
		} else {
			$earliest = new DateTime('tomorrow 12:30');
		}

		$days = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
		$months = array('', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

		$data['earliest_available_text'] = sprintf(
			'Earliest available - %s, %s %d, %s at 17.00 pm',
			$days[(int)$earliest->format('w')],
			$months[(int)$earliest->format('m')],
			$earliest->format('d'),
			$earliest->format('Y')
		);

		// Pickup locations for Local Collection tab
		$data['pickup_locations'] = $this->getPickupLocations();

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('checkout/checkout', $data));
	}

	public function country() {
		$json = array();

		$this->load->model('localisation/country');

		$country_info = $this->model_localisation_country->getCountry($this->request->get['country_id']);

		if ($country_info) {
			$this->load->model('localisation/zone');

			$json = array(
				'country_id'        => $country_info['country_id'],
				'name'              => $country_info['name'],
				'iso_code_2'        => $country_info['iso_code_2'],
				'iso_code_3'        => $country_info['iso_code_3'],
				'address_format'    => $country_info['address_format'],
				'postcode_required' => $country_info['postcode_required'],
				'zone'              => $this->model_localisation_zone->getZonesByCountryId($this->request->get['country_id']),
				'status'            => $country_info['status']
			);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function save_shipping_address() {
		$json = array();

		if (!$this->cart->hasShipping()) {
			$json['redirect'] = $this->url->link('checkout/checkout', '', true);
		}

		if (!$json) {
			$this->load->model('localisation/country');
			$this->load->model('localisation/zone');

			$country_info = $this->model_localisation_country->getCountry($this->request->post['country_id']);
			$zone_info = $this->model_localisation_zone->getZone($this->request->post['zone_id']);

			if ($country_info && $zone_info) {
				$this->session->data['shipping_address'] = array(
					'firstname'      => $this->request->post['firstname'],
					'lastname'       => $this->request->post['lastname'],
					'company'        => isset($this->request->post['company']) ? $this->request->post['company'] : '',
					'address_1'      => $this->request->post['address_1'],
					'address_2'      => isset($this->request->post['address_2']) ? $this->request->post['address_2'] : '',
					'postcode'       => $this->request->post['postcode'],
					'city'           => $this->request->post['city'],
					'zone_id'        => $this->request->post['zone_id'],
					'zone'           => $zone_info['name'],
					'zone_code'      => $zone_info['code'],
					'country_id'     => $this->request->post['country_id'],
					'country'        => $country_info['name'],
					'iso_code_2'     => $country_info['iso_code_2'],
					'iso_code_3'     => $country_info['iso_code_3'],
					'address_format' => $country_info['address_format']
				);

				unset($this->session->data['shipping_method']);
				unset($this->session->data['shipping_methods']);
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function save_payment_address() {
		$json = array();

		if (!$json) {
			$this->load->model('localisation/country');
			$this->load->model('localisation/zone');

			$country_info = $this->model_localisation_country->getCountry($this->request->post['country_id']);
			$zone_info = $this->model_localisation_zone->getZone($this->request->post['zone_id']);

			if ($country_info && $zone_info) {
				$this->session->data['payment_address'] = array(
					'firstname'      => $this->request->post['firstname'],
					'lastname'       => $this->request->post['lastname'],
					'company'        => isset($this->request->post['company']) ? $this->request->post['company'] : '',
					'address_1'      => $this->request->post['address_1'],
					'address_2'      => isset($this->request->post['address_2']) ? $this->request->post['address_2'] : '',
					'postcode'       => $this->request->post['postcode'],
					'city'           => $this->request->post['city'],
					'zone_id'        => $this->request->post['zone_id'],
					'zone'           => $zone_info['name'],
					'zone_code'      => $zone_info['code'],
					'country_id'     => $this->request->post['country_id'],
					'country'        => $country_info['name'],
					'iso_code_2'     => $country_info['iso_code_2'],
					'iso_code_3'     => $country_info['iso_code_3'],
					'address_format' => $country_info['address_format']
				);

				unset($this->session->data['payment_method']);
				unset($this->session->data['payment_methods']);
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function copy_shipping_to_payment() {
		$json = array();

		if (isset($this->session->data['shipping_address'])) {
			$this->session->data['payment_address'] = $this->session->data['shipping_address'];

			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
		} else {
			$json['error'] = 'No shipping address available';
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function payment_button() {
		$json = array();

		if (!isset($this->session->data['payment_method']['code'])) {
			$json['error'] = 'No payment method selected';
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($json));
			return;
		}
		
		if (!isset($this->session->data['order_id'])) {
			$this->createOrder();
		} else {
			$this->updateOrder();
		}

		if (isset($this->session->data['order_id'])) {
			$json['payment'] = $this->load->controller('extension/payment/' . $this->session->data['payment_method']['code']);
		} else {
			$json['error'] = 'Failed to create order';
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	private function buildOrderData() {
		$totals = array();
		$taxes = $this->cart->getTaxes();
		$total = 0;

		$total_data = array(
			'totals' => &$totals,
			'taxes'  => &$taxes,
			'total'  => &$total
		);

		$this->load->model('setting/extension');

		$sort_order = array();
		$results = $this->model_setting_extension->getExtensions('total');

		foreach ($results as $key => $value) {
			$sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
		}

		array_multisort($sort_order, SORT_ASC, $results);

		foreach ($results as $result) {
			if ($this->config->get('total_' . $result['code'] . '_status')) {
				$this->load->model('extension/total/' . $result['code']);
				$this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
			}
		}

		$sort_order = array();
		foreach ($totals as $key => $value) {
			$sort_order[$key] = $value['sort_order'];
		}
		array_multisort($sort_order, SORT_ASC, $totals);

		$this->load->language('checkout/checkout');

		$order_data = array();
		$order_data['totals'] = $totals;
		$order_data['invoice_prefix'] = $this->config->get('config_invoice_prefix');
		$order_data['store_id'] = $this->config->get('config_store_id');
		$order_data['store_name'] = $this->config->get('config_name');

		if ($order_data['store_id']) {
			$order_data['store_url'] = $this->config->get('config_url');
		} else {
			if ($this->request->server['HTTPS']) {
				$order_data['store_url'] = HTTPS_SERVER;
			} else {
				$order_data['store_url'] = HTTP_SERVER;
			}
		}

		$this->load->model('account/customer');

		if ($this->customer->isLogged()) {
			$customer_info = $this->model_account_customer->getCustomer($this->customer->getId());

			$order_data['customer_id'] = $this->customer->getId();
			$order_data['customer_group_id'] = $customer_info['customer_group_id'];
			$order_data['firstname'] = $customer_info['firstname'];
			$order_data['lastname'] = $customer_info['lastname'];
			$order_data['email'] = $customer_info['email'];
			$order_data['telephone'] = $customer_info['telephone'];
			$order_data['custom_field'] = json_decode($customer_info['custom_field'], true);
		} elseif (isset($this->session->data['guest'])) {
			$order_data['customer_id'] = 0;
			$order_data['customer_group_id'] = $this->session->data['guest']['customer_group_id'] ?? '';
			$order_data['firstname'] = $this->session->data['guest']['firstname'] ?? '';
			$order_data['lastname'] = $this->session->data['guest']['lastname'] ?? '';
			$order_data['email'] = isset($this->session->data['guest']['email']) ? $this->session->data['guest']['email'] : '';
			$order_data['telephone'] = $this->session->data['guest']['telephone'] ?? '';
			$order_data['custom_field'] = isset($this->session->data['guest']['custom_field']) ? $this->session->data['guest']['custom_field'] : array();
		} else {
			$order_data['customer_id'] = 0;
			$order_data['customer_group_id'] = $this->config->get('config_customer_group_id');
			$order_data['firstname'] = '';
			$order_data['lastname'] = '';
			$order_data['email'] = '';
			$order_data['telephone'] = '';
			$order_data['custom_field'] = array();
		}

		$order_data['payment_firstname'] = $this->session->data['payment_address']['firstname'];
		$order_data['payment_lastname'] = $this->session->data['payment_address']['lastname'];
		$order_data['payment_company'] = $this->session->data['payment_address']['company'];
		$order_data['payment_address_1'] = $this->session->data['payment_address']['address_1'];
		$order_data['payment_address_2'] = $this->session->data['payment_address']['address_2'];
		$order_data['payment_city'] = $this->session->data['payment_address']['city'];
		$order_data['payment_postcode'] = $this->session->data['payment_address']['postcode'];
		$order_data['payment_zone'] = $this->session->data['payment_address']['zone'];
		$order_data['payment_zone_id'] = $this->session->data['payment_address']['zone_id'];
		$order_data['payment_country'] = $this->session->data['payment_address']['country'];
		$order_data['payment_country_id'] = $this->session->data['payment_address']['country_id'];
		$order_data['payment_address_format'] = $this->session->data['payment_address']['address_format'];
		$order_data['payment_custom_field'] = (isset($this->session->data['payment_address']['custom_field']) ? $this->session->data['payment_address']['custom_field'] : array());

		if (isset($this->session->data['payment_method']['title'])) {
			$order_data['payment_method'] = $this->session->data['payment_method']['title'];
		} else {
			$order_data['payment_method'] = '';
		}

		if (isset($this->session->data['payment_method']['code'])) {
			$order_data['payment_code'] = $this->session->data['payment_method']['code'];
		} else {
			$order_data['payment_code'] = '';
		}

		if ($this->cart->hasShipping()) {
			$order_data['shipping_firstname'] = $this->session->data['shipping_address']['firstname'];
			$order_data['shipping_lastname'] = $this->session->data['shipping_address']['lastname'];
			$order_data['shipping_company'] = $this->session->data['shipping_address']['company'];
			$order_data['shipping_address_1'] = $this->session->data['shipping_address']['address_1'];
			$order_data['shipping_address_2'] = $this->session->data['shipping_address']['address_2'];
			$order_data['shipping_city'] = $this->session->data['shipping_address']['city'];
			$order_data['shipping_postcode'] = $this->session->data['shipping_address']['postcode'];
			$order_data['shipping_zone'] = $this->session->data['shipping_address']['zone'];
			$order_data['shipping_zone_id'] = $this->session->data['shipping_address']['zone_id'];
			$order_data['shipping_country'] = $this->session->data['shipping_address']['country'];
			$order_data['shipping_country_id'] = $this->session->data['shipping_address']['country_id'];
			$order_data['shipping_address_format'] = $this->session->data['shipping_address']['address_format'];
			$order_data['shipping_custom_field'] = (isset($this->session->data['shipping_address']['custom_field']) ? $this->session->data['shipping_address']['custom_field'] : array());

			if (isset($this->session->data['shipping_method']['title'])) {
				$order_data['shipping_method'] = $this->session->data['shipping_method']['title'];
			} else {
				$order_data['shipping_method'] = '';
			}

			if (isset($this->session->data['shipping_method']['code'])) {
				$order_data['shipping_code'] = $this->session->data['shipping_method']['code'];
			} else {
				$order_data['shipping_code'] = '';
			}
		} else {
			$order_data['shipping_firstname'] = '';
			$order_data['shipping_lastname'] = '';
			$order_data['shipping_company'] = '';
			$order_data['shipping_address_1'] = '';
			$order_data['shipping_address_2'] = '';
			$order_data['shipping_city'] = '';
			$order_data['shipping_postcode'] = '';
			$order_data['shipping_zone'] = '';
			$order_data['shipping_zone_id'] = '';
			$order_data['shipping_country'] = '';
			$order_data['shipping_country_id'] = '';
			$order_data['shipping_address_format'] = '';
			$order_data['shipping_custom_field'] = array();
			$order_data['shipping_method'] = '';
			$order_data['shipping_code'] = '';
		}

		$order_data['collection_location_id'] = isset($this->session->data['collection_location_id']) ? $this->session->data['collection_location_id'] : 0;
		$order_data['pickup_datetime'] = isset($this->session->data['pickup_datetime']) ? $this->session->data['pickup_datetime'] : '';

		$order_data['products'] = array();

		foreach ($this->cart->getProducts() as $product) {
			$option_data = array();

			foreach ($product['option'] as $option) {
				$option_data[] = array(
					'product_option_id'       => $option['product_option_id'],
					'product_option_value_id' => $option['product_option_value_id'],
					'option_id'               => $option['option_id'],
					'option_value_id'         => $option['option_value_id'],
					'name'                    => $option['name'],
					'value'                   => $option['value'],
					'type'                    => $option['type']
				);
			}

			$order_data['products'][] = array(
				'product_id' => $product['product_id'],
				'name'       => $product['name'],
				'model'      => $product['model'],
				'option'     => $option_data,
				'download'   => $product['download'],
				'quantity'   => $product['quantity'],
				'subtract'   => $product['subtract'],
				'price'      => $product['price'],
				'total'      => $product['total'],
				'tax'        => $this->tax->getTax($product['price'], $product['tax_class_id']),
				'reward'     => $product['reward']
			);
		}

		$order_data['vouchers'] = array();

		if (!empty($this->session->data['vouchers'])) {
			foreach ($this->session->data['vouchers'] as $voucher) {
				$order_data['vouchers'][] = array(
					'description'      => $voucher['description'],
					'code'             => token(10),
					'to_name'          => $voucher['to_name'],
					'to_email'         => $voucher['to_email'],
					'from_name'        => $voucher['from_name'],
					'from_email'       => $voucher['from_email'],
					'voucher_theme_id' => $voucher['voucher_theme_id'],
					'message'          => $voucher['message'],
					'amount'           => $voucher['amount']
				);
			}
		}

		$order_data['comment'] = isset($this->session->data['comment']) ? $this->session->data['comment'] : '';
		$order_data['total'] = $total_data['total'];

		if (isset($this->request->cookie['tracking'])) {
			$order_data['tracking'] = $this->request->cookie['tracking'];

			$subtotal = $this->cart->getSubTotal();

			$affiliate_info = $this->model_account_customer->getAffiliateByTracking($this->request->cookie['tracking']);

			if ($affiliate_info) {
				$order_data['affiliate_id'] = $affiliate_info['customer_id'];
				$order_data['commission'] = ($subtotal / 100) * $affiliate_info['commission'];
			} else {
				$order_data['affiliate_id'] = 0;
				$order_data['commission'] = 0;
			}

			$this->load->model('checkout/marketing');
			$marketing_info = $this->model_checkout_marketing->getMarketingByCode($this->request->cookie['tracking']);

			if ($marketing_info) {
				$order_data['marketing_id'] = $marketing_info['marketing_id'];
			} else {
				$order_data['marketing_id'] = 0;
			}
		} else {
			$order_data['affiliate_id'] = 0;
			$order_data['commission'] = 0;
			$order_data['marketing_id'] = 0;
			$order_data['tracking'] = '';
		}

		$order_data['language_id'] = $this->config->get('config_language_id');
		$order_data['currency_id'] = $this->currency->getId($this->session->data['currency']);
		$order_data['currency_code'] = $this->session->data['currency'];
		$order_data['currency_value'] = $this->currency->getValue($this->session->data['currency']);
		$order_data['ip'] = $this->request->server['REMOTE_ADDR'];

		if (!empty($this->request->server['HTTP_X_FORWARDED_FOR'])) {
			$order_data['forwarded_ip'] = $this->request->server['HTTP_X_FORWARDED_FOR'];
		} elseif (!empty($this->request->server['HTTP_CLIENT_IP'])) {
			$order_data['forwarded_ip'] = $this->request->server['HTTP_CLIENT_IP'];
		} else {
			$order_data['forwarded_ip'] = '';
		}

		if (isset($this->request->server['HTTP_USER_AGENT'])) {
			$order_data['user_agent'] = $this->request->server['HTTP_USER_AGENT'];
		} else {
			$order_data['user_agent'] = '';
		}

		if (isset($this->request->server['HTTP_ACCEPT_LANGUAGE'])) {
			$order_data['accept_language'] = $this->request->server['HTTP_ACCEPT_LANGUAGE'];
		} else {
			$order_data['accept_language'] = '';
		}
		
		return $order_data;
	}

	private function createOrder() {
		if ($this->cart->hasShipping()) {
			if (!isset($this->session->data['shipping_address']) || !isset($this->session->data['shipping_method'])) {
				return;
			}
		}

		if (!isset($this->session->data['payment_address']) || !isset($this->session->data['payment_method'])) {
			return;
		}

		$order_data = $this->buildOrderData();

		$this->load->model('checkout/order');

		$this->session->data['order_id'] = $this->model_checkout_order->addOrder($order_data);
	}

	private function updateOrder() {
		if (!isset($this->session->data['order_id'])) {
			return;
		}

		$this->load->model('checkout/order');

		$this->model_checkout_order->editOrder($this->session->data['order_id'], $this->buildOrderData());
	}

	public function update_order() {
		$json = array();
		if (isset($this->session->data['order_id']) && isset($this->session->data['payment_address']) && isset($this->session->data['payment_method'])) {
			if ($this->cart->hasShipping()) {
				if (isset($this->session->data['shipping_address']) && isset($this->session->data['shipping_method'])) {
					$this->updateOrder();
					$json['success'] = true;
				}
			} else {
				$this->updateOrder();
				$json['success'] = true;
			}
		} else {
			$json['success'] = false;
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function save_guest_email() {
		$json = array();

		if (isset($this->request->post['email']) && $this->request->post['email']) {
			$email = trim($this->request->post['email']);

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$json['error'] = 'Invalid email address';
			} else {
				if (!isset($this->session->data['guest'])) {
					$this->session->data['guest'] = array();
				}

				$this->session->data['guest']['email'] = $email;
			}
		} else {
			$json['error'] = 'Email is required';
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function customfield() {
		$json = array();

		$this->load->model('account/custom_field');

		// Customer Group
		if (isset($this->request->get['customer_group_id']) && is_array($this->config->get('config_customer_group_display')) && in_array($this->request->get['customer_group_id'], $this->config->get('config_customer_group_display'))) {
			$customer_group_id = $this->request->get['customer_group_id'];
		} else {
			$customer_group_id = $this->config->get('config_customer_group_id');
		}

		$custom_fields = $this->model_account_custom_field->getCustomFields($customer_group_id);

		foreach ($custom_fields as $custom_field) {
			$json[] = array(
				'custom_field_id' => $custom_field['custom_field_id'],
				'required'        => $custom_field['required']
			);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function save_pickup() {
		$json = array();

		if (!$this->cart->hasShipping()) {
			$json['redirect'] = $this->url->link('checkout/checkout', '', true);
		}

		if (!isset($this->request->post['collection_location_id']) || !$this->request->post['collection_location_id']) {
			$json['error'] = 'Please select a collection location';
		}

		if (!$json) {
			$pickup_locations = $this->getPickupLocations();
			$location = null;
			foreach ($pickup_locations as $loc) {
				if ($loc['collection_location_id'] == $this->request->post['collection_location_id']) {
					$location = $loc;
					break;
				}
			}

			if (!$location) {
				$json['error'] = 'Invalid collection location';
			}
		}

		if (!$json) {
			$firstname = '';
			$lastname = '';
			if ($this->customer->isLogged()) {
				$this->load->model('account/customer');
				$customer_info = $this->model_account_customer->getCustomer($this->customer->getId());
				$firstname = $customer_info['firstname'];
				$lastname = $customer_info['lastname'];
			} elseif (isset($this->session->data['guest'])) {
				$firstname = $this->session->data['guest']['firstname'] ?? '';
				$lastname = $this->session->data['guest']['lastname'] ?? '';
			}

			$this->session->data['shipping_address'] = array(
				'firstname'      => $firstname,
				'lastname'       => $lastname,
				'company'        => '',
				'address_1'      => $location['address_1'],
				'address_2'      => $location['address_2'] ?? '',
				'postcode'       => $location['postcode'],
				'city'           => $location['city'],
				'zone_id'        => $location['zone_id'],
				'zone'           => $location['zone'],
				'zone_code'      => $location['zone_code'],
				'country_id'     => $location['country_id'],
				'country'        => $location['country'],
				'iso_code_2'     => $location['iso_code_2'],
				'iso_code_3'     => $location['iso_code_3'],
				'address_format' => $location['address_format'],
			);

			$this->session->data['shipping_method'] = array(
				'code'         => 'pickup.pickup',
				'title'        => 'Local Collection',
				'cost'         => 0.00,
				'tax_class_id' => 0,
				'text'         => 'Free'
			);

			$this->session->data['collection_location_id'] = (int)$this->request->post['collection_location_id'];
			$this->session->data['pickup_datetime'] = isset($this->request->post['pickup_datetime']) ? $this->request->post['pickup_datetime'] : '';

			$this->session->data['payment_address'] = $this->session->data['shipping_address'];

			unset($this->session->data['shipping_methods']);
			unset($this->session->data['payment_methods']);

			$json['success'] = true;
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	private function getPickupLocations() {
		$this->load->model('localisation/zone');
		$this->load->model('localisation/country');

		// Only locations linked to local collection products currently in the cart
		$cart_query = $this->db->query(
			"SELECT DISTINCT p.collection_location_id FROM " . DB_PREFIX . "cart c
			JOIN " . DB_PREFIX . "product p ON (c.product_id = p.product_id)
			WHERE c.api_id = '" . (isset($this->session->data['api_id']) ? (int)$this->session->data['api_id'] : 0) . "'
			AND c.customer_id = '" . (int)$this->customer->getId() . "'
			AND c.session_id = '" . $this->db->escape($this->session->getId()) . "'
			AND p.status = '1' AND p.shipping_local_collection = '1' AND p.collection_location_id > 0"
		);

		$location_ids = array();

		foreach ($cart_query->rows as $row) {
			$location_ids[] = (int)$row['collection_location_id'];
		}

		if (!$location_ids) {
			return array();
		}

		$query = $this->db->query(
			"SELECT * FROM " . DB_PREFIX . "collection_location WHERE status = 1 AND collection_location_id IN (" . implode(',', $location_ids) . ") ORDER BY sort_order ASC"
		);

		$locations = array();
		foreach ($query->rows as $row) {
			$loc = array(
				'collection_location_id' => $row['collection_location_id'],
				'name'                   => $row['name'],
				'address_1'              => $row['address_1'] ?? '',
				'address_2'              => $row['address_2'] ?? '',
				'city'                   => $row['city'] ?? '',
				'zone_id'                => $row['zone_id'] ?? 0,
				'zone'                   => '',
				'zone_code'              => '',
				'country_id'             => $row['country_id'] ?? 0,
				'country'                => '',
				'iso_code_2'             => '',
				'iso_code_3'             => '',
				'postcode'               => $row['postcode'] ?? '',
			'phone'                  => $row['phone'] ?? '',
			'address_format'         => '',
			);

			if ($loc['zone_id']) {
				$zone = $this->model_localisation_zone->getZone($loc['zone_id']);
				if ($zone) {
					$loc['zone'] = $zone['name'];
					$loc['zone_code'] = $zone['code'];
				}
			}

			if ($loc['country_id']) {
				$country = $this->model_localisation_country->getCountry($loc['country_id']);
				if ($country) {
					$loc['country'] = $country['name'];
					$loc['iso_code_2'] = $country['iso_code_2'];
					$loc['iso_code_3'] = $country['iso_code_3'];
					$loc['address_format'] = $country['address_format'];
				}
			}

			$locations[] = $loc;
		}

		return $locations;
	}
}