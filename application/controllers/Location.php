<?php
/**
 * @Author: Jobayer Mojumder
 * @Date:   2018-07-29
 * @Last Modified by:   jobayermojumder
 * @Last Modified time: 2018-07-30 10:41:50
 */

defined('BASEPATH') OR exit('No direct script access allowed');
class Location extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Location_model');
		$this->load->library('form_validation');
		$this->load->library('email');
		//error_reporting(1);
	}

	public function atmDivision(){
		$divison  = $this->Location_model->get_all_division();
		$atm = $this->Location_model->get_all_atm();
		foreach ($divison as $d) {
			foreach ($atm as $a) {
				if ($a->division == $d->division_name) {
					$postdata['division'] = $d->div_id;
					$result = $this->Location_model->atm_update($a->bid, $postdata);

					if ($result) {
						echo "Done!<br>";
					}
				}
			}
		}
	}


	public function atmDistrict(){
		$district  = $this->Location_model->get_all_district();
		$atm = $this->Location_model->get_all_atm();
		foreach ($district as $d) {
			foreach ($atm as $a) {
				if ($a->district == $d->district_name) {
					$postdata['district'] = $d->dis_id;
					$result = $this->Location_model->atm_update($a->bid, $postdata);

					if ($result) {
						echo "Done!<br>";
					}
				}
			}
		}
	}


	public function location(){
		$atm = $this->Location_model->get_all_atm();
		foreach ($atm as $a) {
			if ($a->latitude && $a->longitude) {
				$postdata['location'] = $a->latitude.','.$a->longitude;
				$result = $this->Location_model->atm_update($a->bid, $postdata);

				if ($result) {
					echo "Done!<br>";
				}
			}
		}
	}


}