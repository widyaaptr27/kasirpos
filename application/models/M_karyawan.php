<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_karyawan extends CI_Model {

	public function getAllDataKaryawan()
	{
		
		$query =$this->db->order_by('id_user', 'DESC')->get('tbluser');
		return $query->result();
	}
	
	public function inputKaryawan($data)
	{
		return $this->db->insert('tbluser',$data);
	}

	public function deleteData($id)
	{
		$idnya = $this->db->where('id_user', $id);
		$this->db->delete('tbluser',$idnya);
	
	}

	public function cekStatus($id)
	{
		$query = $this->db->get_where('tbluser',array('id_user' => $id))->result();
		return $query;
	}



	public function changeDataKaryawan($data,$tabel,$id)
	{	
			$this->db->where('id_user', $id);
		$query = $this->db->update($tabel, $data);
	
	}

}

/* End of file KaryawanModel.php */
/* Location: ./application/models/karyawan/KaryawanModel.php */