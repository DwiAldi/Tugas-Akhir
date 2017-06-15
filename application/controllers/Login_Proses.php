<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Proses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged_in')){
			$this->load->model('Transaksi_Model');
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$level = $session_data['level'];			
		}else{
			redirect('login/cekLogin','refresh');
		}
	}
	public function index()
	{
		if($this->session->userdata('logged_in')){
			$this->load->model('Transaksi_Model');
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$level = $session_data['level'];			
		}else{
			redirect('login/cekLogin','refresh');
		}

		if(!isset($id) && $level =='member'){
			$data = array('level' => $level,
			'username' => $username, );
			$this->load->view('home',$data);
		}elseif(!isset($id) && $level == 'admin'){
			$data = array('buku_list' => $this->Transaksi_Model->getBukuAll(),
			'level'=>$level,
			'username'=>$username,);
			$this->load->view('home_admin',$data);
		}
	}

}

/* End of file Login_Proses.php */
/* Location: ./application/controllers/Login_Proses.php */