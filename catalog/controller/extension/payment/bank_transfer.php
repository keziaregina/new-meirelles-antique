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
				$this->log->write('[BANK_TRANSFER_CONFIRM] payment_method code matches bank_transfer');

				$this->load->language('extension/payment/bank_transfer');
				$this->log->write('[BANK_TRANSFER_CONFIRM] language loaded');

				$this->load->model('checkout/order');
				$this->log->write('[BANK_TRANSFER_CONFIRM] model checkout/order loaded');

				$comment  = $this->language->get('text_instruction') . "\n\n";
				$comment .= $this->config->get('payment_bank_transfer_bank' . $this->config->get('config_language_id')) . "\n\n";
				$comment .= $this->language->get('text_payment');
				$this->log->write('[BANK_TRANSFER_CONFIRM] comment built: ' . strlen($comment) . ' chars');

				$order_id = $this->session->data['order_id'];
				$order_status_id = $this->config->get('payment_bank_transfer_order_status_id');
				$this->log->write('[BANK_TRANSFER_CONFIRM] order_id=' . ($order_id ?? 'NULL') . ', order_status_id=' . ($order_status_id ?? 'NULL'));

				$this->model_checkout_order->addOrderHistory($order_id, $order_status_id, $comment, true);
				$this->log->write('[BANK_TRANSFER_CONFIRM] addOrderHistory success');
		
				$json['redirect'] = $this->url->link('checkout/success');
				$this->log->write('[BANK_TRANSFER_CONFIRM] redirect URL set');
			} else {
				$this->log->write('[BANK_TRANSFER_CONFIRM] payment_method does not match bank_transfer. payment_method=' . print_r($this->session->data['payment_method'] ?? 'NOT_SET', true));
			}
		} catch (\Exception $e) {
			$this->log->write('[BANK_TRANSFER_CONFIRM] EXCEPTION: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine());
		} catch (\Error $e) {
			$this->log->write('[BANK_TRANSFER_CONFIRM] ERROR: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine());
		}

		$this->log->write('[BANK_TRANSFER_CONFIRM] response: ' . json_encode($json));
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}
}