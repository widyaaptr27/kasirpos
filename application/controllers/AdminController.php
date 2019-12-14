<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_karyawan');
	}

	public function dashboard()
	{
		$this->load->view('admin/layout/masterpage');
	}

	public function datakaryawan()
	{
		$data['karyawan'] = $this->M_karyawan->getAllDataKaryawan();
		$this->load->view('admin/layout/masterpage',$data);
		
	}
}

/* End of file AdminController.php */
/* Location: ./application/controllers/AdminController.php */