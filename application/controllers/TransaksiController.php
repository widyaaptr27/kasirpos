<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransaksiController extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_barang');
		$this->load->model('M_kategori');
		$this->load->model('M_transaksi');
		$this->load->model('M_result');
	}
	public function index()
	{
	/*	$data['barang'] = $this->M_transaksi->view_row();*/
		$data['result'] = $this->M_result->getAllResult();
		$data['barang'] = $this->M_barang->getAllBarang();
		
		$this->load->view('admin/layout/masterpage',$data);
		/*$this->load->view('admin/page/v_transaksi',$data);*/
	}

	public function addTransaksi()
	{
		$kode_barang = $this->input->post('kode_barang');
		$username = $this->input->post('username');
		$cekStok = $this->M_barang->cekBarang($kode_barang);


		$total = $this->input->post('total');

		foreach ($cekStok as $row) {
			$hasilakhir = $row->harga_barang * $total;
			$stocks = $row->stock_barang - $total;
		}

		$data1 = array(
			'stock_barang' => $stocks);

		$this->M_barang->updateStock($data1,'tblbarang',$kode_barang);

		$data = array(
			'total' => $hasilakhir, 
			'id_user' => $username, 
			'id_barang' => $kode_barang, 
		);

		$this->M_transaksi->tambahTransaksi($data,'tblreport');

		redirect('TransaksiController','refresh');
	}

	public function export_excel()
	{
		$data['result'] = $this->M_transaksi->export();
		$data['title'] = "testing";
		$this->load->view('admin/page/v_export_result',$data);
	}

	// public function cetak(){
	// ob_start();
 //    $data['barang'] = $this->M_transaksi->view_row();
 //    $this->load->view('admin/page/print', $data);
 //    $html = ob_get_contents();
 //    ob_end_clean();
        
 //    require_once('assets/html2pdf/html2pdf.class.php');
 //    $pdf = new HTML2PDF('P','A4','en');
 //    $pdf->WriteHTML($html);
 //    $pdf->Output('Data Siswa.pdf', 'D');
	// }

}

/* End of file TransaksController.php */
/* Location: ./application/controllers/TransaksController.php */