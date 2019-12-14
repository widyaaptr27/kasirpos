<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_barang');
		$this->load->model('M_kategori');
	}

	public function index()
	{
		$data['kategori'] = $this->M_kategori->getAllKategori();
		$data['barang'] = $this->M_barang->getAllBarang();
		$this->load->view('admin/layout/masterpage',$data);
		/*$this->load->helpers('helpers/rupiah_helper');*/
	}

	public function addBarang()
	{
		
			$kode_barang = $this->input->post('kode_barang'); 
			$kode_category = $this->input->post('kode_category'); 
			$harga_barang = $this->input->post('harga_barang');
			$harga_barang = str_replace('.','',$harga_barang); 
			$stock_barang = $this->input->post('stock_barang'); 
			$nama_barang = $this->input->post('nama_barang');

		$datasimpan=array('kode_barang'=>$kode_barang,'kode_category'=>$kode_category,'harga_barang'=>$harga_barang,'stock_barang'=>$stock_barang,'nama_barang'=>$nama_barang);

		$this->M_barang->tambahBarang($datasimpan);

		redirect('BarangController','refresh');
	}

	public function updateBarang($id)
	{
		$id = $this->input->post('id');

		$data = array(
			'kode_barang' => $this->input->post('kode_barang'), 
			'kode_category' => $this->input->post('kode_category'), 
			'harga_barang' => $this->input->post('harga_barang'),
			'stock_barang' => $this->input->post('stock_barang'), 
			'nama_barang' => $this->input->post('nama_barang')
		);


		$this->M_barang->ubahBarang($data,'tblbarang',$id);
		redirect('BarangController','refresh');	

	}

	public function deleteBarang($id)
	{
		$id = $this->uri->segment(3);
		$this->M_barang->deleteData($id,'tblbarang');
		redirect('BarangController','refresh');	
	}

}

/* End of file BarangController.php */
/* Location: ./application/controllers/BarangController.php */