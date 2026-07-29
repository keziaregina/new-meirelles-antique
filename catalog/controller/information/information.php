<?php
class ControllerInformationInformation extends Controller {
	public function index() {
		$this->load->language('information/information');

		$this->load->model('catalog/information');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		if (isset($this->request->get['information_id'])) {
			$information_id = (int)$this->request->get['information_id'];
		} else {
			$information_id = 0;
		}

		$information_info = $this->model_catalog_information->getInformation($information_id);

		$data['slug_page'] = false;

		if (isset($this->request->get['slug'])) {
			$slug = $this->request->get['slug'];

			$pages = [
				'traditional-leather-upholstery' => [
					'title'         => 'Detail Restorations',
					'section_title' => 'Traditional leather upholstery',
					'before_label'  => 'Before',
					'after_label'   => 'After',
					'before_image'  => 'image/catalog/restoration/P1200004-1248x1780.jpg',
					'after_image'   => 'image/catalog/restoration/P1220616-768x1024.jpg',
					'description'   => 'Our workshop can source leather hides to a customer\'s specific requests and uses good quality upholsterers able to work with traditional leather techniques, including the use of brass or bronze studs on edging.'
				],
				'a-cuban-mahogany-desk' => [
					'title'         => 'Detail Restorations',
					'section_title' => 'A Cuban mahogany desk',
					'before_label'  => 'Before',
					'after_label'   => 'After',
					'before_image'  => 'image/catalog/restoration/P1460551-898x602.jpg',
					'after_image'   => 'image/catalog/restoration/P1480515-1836x1049.jpg',
					'description'   => 'Here is an example of a 19th century French Cuban mahogany desk, the timbers with a wonderful, faded patination that was very important to preserve. French polished and then waxed and buffed for a \'soft\' finish. Replaced leather with natural hide. Each steel and brass key was fitted to the original working locks.'
				],
				'large-pair-of-french-doors' => [
					'title'         => 'Detail Restorations',
					'section_title' => 'Large pair of French Doors',
					'before_label'  => 'Before',
					'after_label'   => 'After',
					'before_image'  => 'image/catalog/restoration/P1200375-1106x1958.jpg',
					'after_image'   => 'image/catalog/restoration/P1490274-1167x1904.jpg',
					'description'   => 'When these doors were found in France they were painted a strong red. Once sold, they were stripped back to the natural oak, shortened in height to suit the house, and fully restored. They were to be fitted onto the front of a beach house, and therefore were finished with clear marine varnish and fitted with fly screens and safety glass.'
				],
				'a-grand-piano' => [
					'title'         => 'Detail Restorations',
					'section_title' => 'A grand piano',
					'before_label'  => 'Before',
					'after_label'   => 'After',
					'before_image'  => 'image/catalog/restoration/Before-P1490288-2048x1536.jpg',
					'after_image'   => 'image/catalog/restoration/P1130869-3072x2304.jpg',
					'description'   => 'This grand piano was brought to us by the owner who had brought it into Australia from Russia. The interior was in good condition, including all its ivory and ebony keys. The aim here was to give it back its glowing, ebonised finish and to make it look well maintained, not freshly restored. The element with the pedals was left disconnected from the piano, for ease of transport.'
				],
				'a-disaster-put-right' => [
					'title'         => 'Detail Restorations',
					'section_title' => 'A Disaster put right',
					'before_label'  => 'Before',
					'after_label'   => 'After',
					'before_image'  => 'image/catalog/restoration/P1430532-1536x2048.jpg',
					'after_image'   => 'image/catalog/restoration/DSC8821-645x1070.jpg',
					'description'   => 'This is what happened to a client\'s mantle mirror which had been badly attached to the wall. A painstaking restoration and replacement mirror \'brought it back to life\'.'
				],
				'restoration-of-antique-doors' => [
					'title'         => 'Detail Restorations',
					'section_title' => 'A Disaster put right',
					'before_label'  => 'Before',
					'after_label'   => 'After',
					'before_image'  => 'image/catalog/restoration/img1-239x435.jpg',
					'after_image'   => 'image/catalog/restoration/dscn2914-300x546.jpg',
					'description'   => 'A pair of French oak entrance doors brought back to the natural oak colour and varnished, the windows fitted with safety glass.'
				]
			];

			if (isset($pages[$slug])) {
				$data['slug_page'] = $pages[$slug];
			}
		}

		if ($information_info) {
			$this->document->setTitle($information_info['meta_title']);
			$this->document->setDescription($information_info['meta_description']);
			$this->document->setKeywords($information_info['meta_keyword']);

			if ($data['slug_page']) {
				$data['breadcrumbs'][] = array(
					'text' => 'Restoration',
					'href' => $this->url->link('information/information', 'information_id=' . $information_id)
				);
				$data['breadcrumbs'][] = array(
					'text' => $data['slug_page']['section_title'],
					'href' => $this->url->link('information/information', 'information_id=' . $information_id . '&slug=' . $slug)
				);
			} else {
				$data['breadcrumbs'][] = array(
					'text' => $information_info['title'],
					'href' => $this->url->link('information/information', 'information_id=' . $information_id)
				);
			}

			$data['heading_title'] = $information_info['title'];

			$data['description'] = html_entity_decode($information_info['description'], ENT_QUOTES, 'UTF-8');

			$data['continue'] = $this->url->link('common/home');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('information/information', $data));
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('information/information', 'information_id=' . $information_id)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$data['heading_title'] = $this->language->get('text_error');

			$data['text_error'] = $this->language->get('text_error');

			$data['continue'] = $this->url->link('common/home');

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}

	public function agree() {
		$this->load->model('catalog/information');

		if (isset($this->request->get['information_id'])) {
			$information_id = (int)$this->request->get['information_id'];
		} else {
			$information_id = 0;
		}

		$output = '';

		$information_info = $this->model_catalog_information->getInformation($information_id);

		if ($information_info) {
			$output .= html_entity_decode($information_info['description'], ENT_QUOTES, 'UTF-8') . "\n";
		}

		$this->response->addHeader('X-Robots-Tag: noindex');

		$this->response->setOutput($output);
	}
}
