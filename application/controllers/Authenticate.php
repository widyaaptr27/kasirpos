<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticate extends CI_Controller {

	public function auth()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$auth = array(
			'username' => $username, 
			'password' => md5($password), 
		);
		$checkData = $this->M_auth->checkAuth('tbluser',$auth);

		if ($checkData->num_rows() > 0) {
			$data = $checkData->row_array();
			$this->session->set_userdata('login',TRUE);
			$this->session->set_userdata('level',$data['level']);
			$this->session->set_userdata('sess_name',$data['username']);
			redirect('AdminController/dashboard','refresh');
		}else{
			$data = $this->session->set_flashdata('Logerror','Username / Password Salah !');
			redirect('LoginController','refresh');

		}
	}

	public function logout()
	{
		session_destroy();
		redirect('LoginController','refresh');
	}

}

/* End of file Authenticate.php */
/* Location: ./application/controllers/Authenticate.php */