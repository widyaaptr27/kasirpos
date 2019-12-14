<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriBarang extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kategori');
	}
	public function index()
	{
		$data['kategori'] = $this->M_kategori->getAllKategori();
		$this->load->view('admin/layout/masterpage',$data);
		/*$this->db->select()->from('tblcategory')->order_by('kode_category', 'desc');*/
	}

	public function addKategori()
	{
		$kode = $this->input->post('kode_kategori');
		$nama = $this->input->post('nama_kategori');
		$gmbar = $_FILES['gbr_brg'] ['name'];
		if($gmbar =''){}else{
			$config['upload_path'] = './images/Barang';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('gbr_brg')){
					echo "upload gagal"; die();
			}else{
				$gmbar = $this->upload->data('file_name');
			}
		}

		$simpan = array(
			'kode_category' => $kode,
			'nama_category' => $nama,
			'gbr_brg' => $gmbar  
		);

		$this->M_kategori->inputKategori($simpan,'tblcategory');

		redirect('KategoriBarang','refresh');
	}

	public function updateKategori($kode)
	{
		$kode = $this->input->post('kode');
		$kode = $this->input->post('kode_category');
		$nama = $this->input->post('nama_category');

		$simpan = array(
			'kode_category' => $kode,
			'nama_category' => $nama  
		);

		$this->M_kategori->changeKategori($simpan,'tblcategory',$kode);
		redirect('KategoriBarang','refresh');
	}

	public function deleteKategori($kode)
	{
		$kode = $this->uri->segment(3);
		$this->M_kategori->deleteData($kode,'tblcategory');
		redirect('KategoriBarang','refresh');
	}

}

/* End of file KategoriBarang.php */
/* Location: ./application/controllers/KategoriBarang.php */