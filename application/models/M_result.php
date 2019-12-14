<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_result extends CI_Model {

	public function getAllResult()

	{
	    $this->db->select('*');
	 	$this->db->FROM('tblreport','tblbarang','tblcategory');
		$this->db->Order_by('id_report','Desc');
		$query = $this->db->query('SELECT tblbarang.kode_barang, tblbarang.nama_barang, tblcategory.nama_category,tblreport.total,tblreport.id_user FROM tblreport LEFT JOIN tblbarang ON tblreport.id_barang = tblbarang.kode_barang LEFT JOIN tblcategory ON tblbarang.kode_category = tblcategory.kode_category')->result();

		return $query;
	}

}

/* End of file M_result.php */
/* Location: ./application/models/M_result.php */