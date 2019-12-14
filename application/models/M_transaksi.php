<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {



	public function tambahTransaksi($data,$tabel)
	{
		$this->db->insert($tabel,$data);
	}

	public function export()
	{

		$query = $this->db->query('SELECT tbluser.username,tblbarang.kode_barang, tblbarang.nama_barang, tblcategory.nama_category,tblreport.total,tblreport.id_user FROM tblreport LEFT JOIN tblbarang ON tblreport.id_barang = tblbarang.kode_barang LEFT JOIN tblcategory ON tblbarang.kode_category = tblcategory.kode_category LEFT JOIN tbluser ON tblreport.id_user = tbluser.username ')->result();

		return $query;
	}

	public function view_row(){
		return $this->db->get('tblbarang')->result();
	}

}

/* End of file M_transaksi.php */
/* Location: ./application/models/M_transaksi.php */