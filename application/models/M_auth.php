<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

	public function checkAuth($table, $data)
	{
		$query = $this->db->get_where($table,$data);
		return $query;
	}
	

}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */