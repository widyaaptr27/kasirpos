<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

	public function getAllBarang()
	{
		$query =$this->db->order_by('kode_barang', 'DESC')->get('tblbarang');
		return $query->result();
	}

	public function tambahBarang($data)
	{
		return $this->db->insert('tblbarang',$data);
	}

	public function ubahBarang($data,$tabel,$id)
	{
		$this->db->where('kode_barang', $id);
		$query = $this->db->update($tabel, $data);
		return $query;

	}

	public function updateStock($data1,$tabel,$kode_barang)
	{
		$this->db->where('kode_barang', $kode_barang);
		$query = $this->db->update($tabel, $data1);
		return $query;

	}

	public function deleteData($id)
	{
		$idnya = $this->db->where('kode_barang', $id);
		$this->db->delete('tblbarang',$idnya);
	}

	public function cekBarang($kode_barang)
	{
		$query = $this->db->get_where('tblbarang',array('kode_barang' => $kode_barang))->result();
		return $query;
	}
}

/* End of file M_barang.php */
/* Location: ./application/models/M_barang.php */