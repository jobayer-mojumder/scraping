<?php
class Location_model extends CI_Model {

	public function get_all_division(){
		$query = $this->db->get('division');
		$result = $query->result();
		return $result;
	}

	public function get_all_district(){
		$query = $this->db->get('district');
		$result = $query->result();
		return $result;
	}

	public function get_all_atm(){
		$query = $this->db->get('locations_atm');
		$result = $query->result();
		return $result;
	}

	function atm_update($id, $data) {
		$this->db->where('bid', $id);
		$result = $this->db->update('locations_atm', $data);
		return $result;
	}

}