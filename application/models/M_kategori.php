<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model {

	public function getAllKategori()
	{
		$this->db->order_by('kode_category', 'DESC');
		$query = $this->db->get('tblcategory')->result();

		return $query;
	}

	public function inputKategori($simpan,$table)
	{
		$this->db->insert($table,$simpan);
	}

	public function changeKategori($simpan,$tabel,$kode)
	{
		$this->db->where('kode_category', $kode);
		$query = $this->db->update($tabel, $simpan);
		return $query;
	}

	public function deleteData($kode)
	{
		$idnya = $this->db->where('kode_category', $kode);
		$this->db->delete('tblcategory',$idnya);
	}	

}

/* End of file M_kategori.php */
/* Location: ./application/models/M_kategori.php */