<?php
class ControllerExtensionPaymentBankTransfer extends Controller {
	public function index() {
		$this->load->language('extension/payment/bank_transfer');

		$data['bank'] = nl2br($this->config->get('payment_bank_transfer_bank' . $this->config->get('config_language_id')));

		return $this->load->view('extension/payment/bank_transfer', $data);
	}

	public function confirm() {
		$json = array();
		
		try {
			if (isset($this->session->data['payment_method']['code']) && $this->session->data['payment_method']['code'] == 'bank_transfer') {

				$this->load->language('extension/payment/bank_transfer');

				$this->load->model('checkout/order');

				$comment  = $this->language->get('text_instruction') . "\n\n";
				$comment .= $this->config->get('payment_bank_transfer_bank' . $this->config->get('config_language_id')) . "\n\n";
				$comment .= $this->language->get('text_payment');

				$order_id = $this->session->data['order_id'];
				$order_status_id = $this->config->get('payment_bank_transfer_order_status_id');

				$this->model_checkout_order->addOrderHistory($order_id, $order_status_id, $comment, true);
		
				$json['redirect'] = $this->url->link('checkout/success');
			} else {
				$this->log->write('[BANK_TRANSFER_CONFIRM] payment_method does not match bank_transfer. payment_method=' . print_r($this->session->data['payment_method'] ?? 'NOT_SET', true));
			}
		} catch (\Exception $e) {
			$this->log->write('[BANK_TRANSFER_CONFIRM] EXCEPTION: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine());
		} catch (\Error $e) {
			$this->log->write('[BANK_TRANSFER_CONFIRM] ERROR: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine());
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}
}