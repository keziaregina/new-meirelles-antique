<?php
class ControllerCatalogCollectionLocation extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('catalog/collection_location');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/collection_location');

		$this->getList();
	}

	public function add() {
		$this->load->language('catalog/collection_location');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/collection_location');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_catalog_collection_location->addCollectionLocation($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('catalog/collection_location', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('catalog/collection_location');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/collection_location');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_catalog_collection_location->editCollectionLocation($this->request->get['collection_location_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('catalog/collection_location', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('catalog/collection_location');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/collection_location');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $collection_location_id) {
				$this->model_catalog_collection_location->deleteCollectionLocation($collection_location_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('catalog/collection_location', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}

	protected function getList() {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'cl.sort_order';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/collection_location', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['add'] = $this->url->link('catalog/collection_location/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = $this->url->link('catalog/collection_location/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['collection_locations'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$collection_location_total = $this->model_catalog_collection_location->getTotalCollectionLocations();

		$results = $this->model_catalog_collection_location->getCollectionLocations($filter_data);

		foreach ($results as $result) {
			$data['collection_locations'][] = array(
				'collection_location_id' => $result['collection_location_id'],
				'name'                   => $result['name'],
				'city'                   => $result['city'],
				'sort_order'             => $result['sort_order'],
				'status'                 => $result['status'],
				'edit'                   => $this->url->link('catalog/collection_location/edit', 'user_token=' . $this->session->data['user_token'] . '&collection_location_id=' . $result['collection_location_id'] . $url, true)
			);
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_name'] = $this->url->link('catalog/collection_location', 'user_token=' . $this->session->data['user_token'] . '&sort=cl.name' . $url, true);
		$data['sort_city'] = $this->url->link('catalog/collection_location', 'user_token=' . $this->session->data['user_token'] . '&sort=cl.city' . $url, true);
		$data['sort_sort_order'] = $this->url->link('catalog/collection_location', 'user_token=' . $this->session->data['user_token'] . '&sort=cl.sort_order' . $url, true);
		$data['sort_status'] = $this->url->link('catalog/collection_location', 'user_token=' . $this->session->data['user_token'] . '&sort=cl.status' . $url, true);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $collection_location_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('catalog/collection_location', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($collection_location_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($collection_location_total - $this->config->get('config_limit_admin'))) ? $collection_location_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $collection_location_total, ceil($collection_location_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/collection_location_list', $data));
	}

	protected function getForm() {
		$data['text_form'] = !isset($this->request->get['collection_location_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}

		if (isset($this->error['latitude'])) {
			$data['error_latitude'] = $this->error['latitude'];
		} else {
			$data['error_latitude'] = '';
		}

		if (isset($this->error['longitude'])) {
			$data['error_longitude'] = $this->error['longitude'];
		} else {
			$data['error_longitude'] = '';
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/collection_location', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		if (!isset($this->request->get['collection_location_id'])) {
			$data['action'] = $this->url->link('catalog/collection_location/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['action'] = $this->url->link('catalog/collection_location/edit', 'user_token=' . $this->session->data['user_token'] . '&collection_location_id=' . $this->request->get['collection_location_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('catalog/collection_location', 'user_token=' . $this->session->data['user_token'] . $url, true);

		if (isset($this->request->get['collection_location_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$collection_location_info = $this->model_catalog_collection_location->getCollectionLocation($this->request->get['collection_location_id']);
		}

		$data['user_token'] = $this->session->data['user_token'];

		$this->load->model('localisation/country');

		$data['countries'] = $this->model_localisation_country->getCountries();

		$fields = array(
			'name',
			'address_1',
			'address_2',
			'city',
			'postcode',
			'phone'
		);

		foreach ($fields as $field) {
			if (isset($this->request->post[$field])) {
				$data[$field] = $this->request->post[$field];
			} elseif (!empty($collection_location_info)) {
				$data[$field] = $collection_location_info[$field];
			} else {
				$data[$field] = '';
			}
		}

		if (isset($this->request->post['country_id'])) {
			$data['country_id'] = (int)$this->request->post['country_id'];
		} elseif (!empty($collection_location_info)) {
			$data['country_id'] = (int)$collection_location_info['country_id'];
		} else {
			$data['country_id'] = 0;
		}

		if (isset($this->request->post['zone_id'])) {
			$data['zone_id'] = (int)$this->request->post['zone_id'];
		} elseif (!empty($collection_location_info)) {
			$data['zone_id'] = (int)$collection_location_info['zone_id'];
		} else {
			$data['zone_id'] = 0;
		}

		if (isset($this->request->post['latitude'])) {
			$data['latitude'] = $this->request->post['latitude'];
		} elseif (!empty($collection_location_info)) {
			$data['latitude'] = $collection_location_info['latitude'];
		} else {
			$data['latitude'] = '';
		}

		if (isset($this->request->post['longitude'])) {
			$data['longitude'] = $this->request->post['longitude'];
		} elseif (!empty($collection_location_info)) {
			$data['longitude'] = $collection_location_info['longitude'];
		} else {
			$data['longitude'] = '';
		}

		if (isset($this->request->post['sort_order'])) {
			$data['sort_order'] = $this->request->post['sort_order'];
		} elseif (!empty($collection_location_info)) {
			$data['sort_order'] = $collection_location_info['sort_order'];
		} else {
			$data['sort_order'] = 0;
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($collection_location_info)) {
			$data['status'] = $collection_location_info['status'];
		} else {
			$data['status'] = 1;
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/collection_location_form', $data));
	}

	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'catalog/collection_location')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 128)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		if ($this->request->post['latitude'] !== '' && (!is_numeric($this->request->post['latitude']) || (float)$this->request->post['latitude'] < -90 || (float)$this->request->post['latitude'] > 90)) {
			$this->error['latitude'] = $this->language->get('error_latitude');
		}

		if ($this->request->post['longitude'] !== '' && (!is_numeric($this->request->post['longitude']) || (float)$this->request->post['longitude'] < -180 || (float)$this->request->post['longitude'] > 180)) {
			$this->error['longitude'] = $this->language->get('error_longitude');
		}

		if ($this->error && !isset($this->error['warning'])) {
			$this->error['warning'] = $this->language->get('error_warning');
		}

		return !$this->error;
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'catalog/collection_location')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		foreach ($this->request->post['selected'] as $collection_location_id) {
			$product_total = $this->model_catalog_collection_location->getTotalProductsByCollectionLocationId($collection_location_id);

			if ($product_total) {
				$this->error['warning'] = sprintf($this->language->get('error_product'), $product_total);
			}

			$order_total = $this->model_catalog_collection_location->getTotalOrdersByCollectionLocationId($collection_location_id);

			if ($order_total) {
				$this->error['warning'] = sprintf($this->language->get('error_order'), $order_total);
			}
		}

		return !$this->error;
	}
}
