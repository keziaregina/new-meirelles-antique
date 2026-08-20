<?php
class ControllerExtensionPaymentNabDirectPost extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/payment/nab_direct_post');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('payment_nab_direct_post', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['username'])) {
			$data['error_username'] = $this->error['username'];
		} else {
			$data['error_username'] = '';
		}
		
		if (isset($this->error['password'])) {
			$data['error_password'] = $this->error['password'];
		} else {
			$data['error_password'] = '';
		}
		
		if (isset($this->error['password_test_mode'])) {
			$data['error_password_test_mode'] = $this->error['password_test_mode'];
		} else {
			$data['error_password_test_mode'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true)
		);
		
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/payment/nab_direct_post', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/payment/nab_direct_post', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true);

		if (isset($this->request->post['payment_nab_direct_post_username'])) {
			$data['payment_nab_direct_post_username'] = $this->request->post['payment_nab_direct_post_username'];
		} else {
			$data['payment_nab_direct_post_username'] = $this->config->get('payment_nab_direct_post_username');
		}
		
		if (isset($this->request->post['payment_nab_direct_post_password'])) {
			$data['payment_nab_direct_post_password'] = $this->request->post['payment_nab_direct_post_password'];
		} else {
			$data['payment_nab_direct_post_password'] = $this->config->get('payment_nab_direct_post_password');
		}
		
		if (isset($this->request->post['payment_nab_direct_post_password_test_mode'])) {
			$data['payment_nab_direct_post_password_test_mode'] = $this->request->post['payment_nab_direct_post_password_test_mode'];
		} else {
			$data['payment_nab_direct_post_password_test_mode'] = $this->config->get('payment_nab_direct_post_password_test_mode');
		}

		if (isset($this->request->post['payment_nab_direct_post_test'])) {
			$data['payment_nab_direct_post_test'] = $this->request->post['payment_nab_direct_post_test'];
		} else {
			$data['payment_nab_direct_post_test'] = $this->config->get('payment_nab_direct_post_test');
		}
		
		//transaction methods
		$data['transaction_methods'] = array(
				'0' => $this->language->get('text_payment_mode'),
				'1' => $this->language->get('text_authorization'),
				'2' => $this->language->get('text_payment_riskm'),
				'3' => $this->language->get('text_authorization_riskm')
			);
		//
		if (isset($this->request->post['payment_nab_direct_post_transaction'])) {
			$data['payment_nab_direct_post_transaction'] = $this->request->post['payment_nab_direct_post_transaction'];
		} else {
			$data['payment_nab_direct_post_transaction'] = $this->config->get('payment_nab_direct_post_transaction');
		}

		if (isset($this->request->post['payment_nab_direct_post_debug'])) {
			$data['payment_nab_direct_post_debug'] = $this->request->post['payment_nab_direct_post_debug'];
		} else {
			$data['payment_nab_direct_post_debug'] = $this->config->get('payment_nab_direct_post_debug');
		}

		if (isset($this->request->post['payment_nab_direct_post_total'])) {
			$data['payment_nab_direct_post_total'] = $this->request->post['payment_nab_direct_post_total'];
		} else {
			$data['payment_nab_direct_post_total'] = $this->config->get('payment_nab_direct_post_total');
		}

		if (isset($this->request->post['payment_nab_direct_post_completed_status_id'])) {
			$data['payment_nab_direct_post_completed_status_id'] = $this->request->post['payment_nab_direct_post_completed_status_id'];
		} else {
			$data['payment_nab_direct_post_completed_status_id'] = $this->config->get('payment_nab_direct_post_completed_status_id');
		}

		if (isset($this->request->post['payment_nab_direct_post_failed_status_id'])) {
			$data['payment_nab_direct_post_failed_status_id'] = $this->request->post['payment_nab_direct_post_failed_status_id'];
		} else {
			$data['payment_nab_direct_post_failed_status_id'] = $this->config->get('payment_nab_direct_post_failed_status_id');
		}

		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		if (isset($this->request->post['payment_nab_direct_post_geo_zone_id'])) {
			$data['payment_nab_direct_post_geo_zone_id'] = $this->request->post['payment_nab_direct_post_geo_zone_id'];
		} else {
			$data['payment_nab_direct_post_geo_zone_id'] = $this->config->get('payment_nab_direct_post_geo_zone_id');
		}

		$this->load->model('localisation/geo_zone');

		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

		if (isset($this->request->post['payment_nab_direct_post_status'])) {
			$data['payment_nab_direct_post_status'] = $this->request->post['payment_nab_direct_post_status'];
		} else {
			$data['payment_nab_direct_post_status'] = $this->config->get('payment_nab_direct_post_status');
		}

		if (isset($this->request->post['payment_nab_direct_post_sort_order'])) {
			$data['payment_nab_direct_post_sort_order'] = $this->request->post['payment_nab_direct_post_sort_order'];
		} else {
			$data['payment_nab_direct_post_sort_order'] = $this->config->get('payment_nab_direct_post_sort_order');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/payment/nab_direct_post', $data));
	}

	private function validate() {
		if (!$this->user->hasPermission('modify', 'extension/payment/nab_direct_post')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['payment_nab_direct_post_username']) {
			$this->error['username'] = $this->language->get('error_username');
		}
		
		//check password if live mode is set
		if (!$this->request->post['payment_nab_direct_post_password'] && !$this->request->post['payment_nab_direct_post_test']) {
			$this->error['password'] = $this->language->get('error_password');
		}
		
		//check test password if test mode is set
		if (!$this->request->post['payment_nab_direct_post_password_test_mode'] && $this->request->post['payment_nab_direct_post_test']) {
			$this->error['password_test_mode'] = $this->language->get('error_password_test_mode');
		}

		return !$this->error;
	}
}