<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KaryawanController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_karyawan');
	}

	public function addKaryawan()
	{
		$name_user = $this->input->post('nama');
		$jabatan   = $this->input->post('jabatan');
		$username  = $this->input->post('username','is_unique[tbluser.username]');
		$status  = $this->input->post('status');
		$password  = md5($this->input->post('password'));
		
		  $datasimpan=array('nama_user'=>$name_user,'jabatan'=>$jabatan,'username'=>$username,'status'=>$status,'password'=>$password);
		  $save=$this->M_karyawan->inputKaryawan($datasimpan);

	       if ($save == TRUE) {
	       		redirect('AdminController/Datakaryawan');
	       	# code...
	       }else{
	       	echo "assssss";
	       }
	       

		}

		


	public function updateKaryawan($id)
	{
		$id = $this->input->post('id');
		$name_user = $this->input->post('nama_user');
		$jabatan   = $this->input->post('jabatan');
		$username  = $this->input->post('username');
		$status  = $this->input->post('status');
		$password  = md5($this->input->post('password'));

		$data = array(
				'nama_user' => $name_user, 
				'jabatan' => $jabatan, 
				'username' => $username, 
				'password' => $password, 
				'status' => $status 

			);

		$this->M_karyawan->changeDataKaryawan($data,'tbluser',$id);
	redirect('AdminController/Datakaryawan','refresh');	

	}

	public function deleteKaryawan($id)
	{
		$id = $this->uri->segment(3);

		$test = $this->M_karyawan->cekStatus($id);


		foreach ($test as $row) {
			$cek = $row->status;
		}

		if ($cek =="active") {
			echo "<script>
	       	alert('There are no fields to generate');
	       	</script>
	       	";
			/*echo "<a href='AdminController/Datakaryawan'>BACK </a>";*/
		}else{
			$this->M_karyawan->deleteData($id,'tbluser');
		redirect('AdminController/Datakaryawan','refresh');	
		}
		
	}


}

/* End of file KaryawanController.php */
/* Location: ./application/controllers/KaryawanController.php */