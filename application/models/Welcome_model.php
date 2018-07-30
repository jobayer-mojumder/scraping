<?php
class Welcome_model extends CI_Model {

	function data_update($name, $designation, $branch){

	$query = $this->db->query("Update service_branch set branch_man='$name', branch_man_info='$designation', man_status = '1' where branch_name like '%".$branch."%' ");
	echo "Update service_branch set branch_man='$name', branch_man_info='$designation' where branch_name like '%".$branch."%' ";
	echo "<br>";		
	}	
	

}