<?php
class ControllerExtensionModuleHTML extends Controller {
	public function index($setting) {
		if (isset($setting['module_description'][$this->config->get('config_language_id')])) {
			$data['heading_title'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
			$html = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['description'], ENT_QUOTES, 'UTF-8');

			if (strpos($html, '[latest_products]') !== false) {
				$html = str_replace('[latest_products]', $this->getLatestProductsSlider(), $html);
			}

			$data['html'] = $html;

			return $this->load->view('extension/module/html', $data);
		}
	}

	private function getLatestProductsSlider() {
		$this->load->model('catalog/product');
		$this->load->model('tool/image');

		$results = $this->model_catalog_product->getProducts(array(
			'sort'  => 'p.date_added',
			'order' => 'DESC',
			'start' => 0,
			'limit' => 10
		));

		$data['products'] = array();

		foreach ($results as $result) {
			$image = $result['image'] ? $result['image'] : 'placeholder.png';

			$data['products'][] = array(
				'thumb' => $this->model_tool_image->resize($image, 680, 680),
				'name'  => $result['name'],
				'href'  => $this->url->link('product/product', 'product_id=' . $result['product_id'])
			);
		}

		if ($data['products']) {
			return $this->load->view('extension/module/html_productlist', $data);
		}

		return '';
	}
}