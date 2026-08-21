<?php
class ModelCatalogCollectionLocation extends Model {
	public function addCollectionLocation($data) {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "collection_location` SET `name` = '" . $this->db->escape($data['name']) . "', `address_1` = '" . $this->db->escape($data['address_1']) . "', `address_2` = '" . $this->db->escape($data['address_2']) . "', `city` = '" . $this->db->escape($data['city']) . "', `zone_id` = '" . (int)$data['zone_id'] . "', `country_id` = '" . (int)$data['country_id'] . "', `postcode` = '" . $this->db->escape($data['postcode']) . "', `phone` = '" . $this->db->escape($data['phone']) . "', `latitude` = " . ($data['latitude'] !== '' ? "'" . (float)$data['latitude'] . "'" : "NULL") . ", `longitude` = " . ($data['longitude'] !== '' ? "'" . (float)$data['longitude'] . "'" : "NULL") . ", `sort_order` = '" . (int)$data['sort_order'] . "', `status` = '" . (int)$data['status'] . "'");

		return $this->db->getLastId();
	}

	public function editCollectionLocation($collection_location_id, $data) {
		$this->db->query("UPDATE `" . DB_PREFIX . "collection_location` SET `name` = '" . $this->db->escape($data['name']) . "', `address_1` = '" . $this->db->escape($data['address_1']) . "', `address_2` = '" . $this->db->escape($data['address_2']) . "', `city` = '" . $this->db->escape($data['city']) . "', `zone_id` = '" . (int)$data['zone_id'] . "', `country_id` = '" . (int)$data['country_id'] . "', `postcode` = '" . $this->db->escape($data['postcode']) . "', `phone` = '" . $this->db->escape($data['phone']) . "', `latitude` = " . ($data['latitude'] !== '' ? "'" . (float)$data['latitude'] . "'" : "NULL") . ", `longitude` = " . ($data['longitude'] !== '' ? "'" . (float)$data['longitude'] . "'" : "NULL") . ", `sort_order` = '" . (int)$data['sort_order'] . "', `status` = '" . (int)$data['status'] . "' WHERE `collection_location_id` = '" . (int)$collection_location_id . "'");
	}

	public function deleteCollectionLocation($collection_location_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "collection_location` WHERE `collection_location_id` = '" . (int)$collection_location_id . "'");
	}

	public function getCollectionLocation($collection_location_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "collection_location` WHERE `collection_location_id` = '" . (int)$collection_location_id . "'");

		return $query->row;
	}

	public function getCollectionLocations($data = array()) {
		$sql = "SELECT * FROM `" . DB_PREFIX . "collection_location` cl";

		$sort_data = array(
			'cl.name',
			'cl.city',
			'cl.sort_order',
			'cl.status'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY cl.sort_order";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getTotalCollectionLocations() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "collection_location`");

		return $query->row['total'];
	}

	public function getTotalProductsByCollectionLocationId($collection_location_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "product` WHERE `collection_location_id` = '" . (int)$collection_location_id . "'");

		return $query->row['total'];
	}

	public function getTotalOrdersByCollectionLocationId($collection_location_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "order` WHERE `collection_location_id` = '" . (int)$collection_location_id . "'");

		return $query->row['total'];
	}
}
