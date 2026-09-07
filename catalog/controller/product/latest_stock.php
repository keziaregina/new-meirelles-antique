<?php
class ControllerProductLatestStock extends Controller {
	public function index() {
		$this->load->language('product/latest_stock');

		$this->load->model('setting/module');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('product/latest_stock')
		);

		// Render the configured Latest module (oc_module id 92 -> latest_cat)
		$data['content_top'] = '';

		$module_settings = $this->model_setting_module->getModule(92);

		$settings = array(
			'limit'  => 5,
			'width'  => 310,
			'height' => 310,
			'status' => true
		);

		if (!empty($module_settings)) {
			$settings = array_merge($settings, $module_settings);
		}

		if (!empty($settings['status'])) {
			$data['content_top'] = $this->load->controller('extension/module/latest', $settings);
		}

		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('product/latest_stock', $data));
	}
}