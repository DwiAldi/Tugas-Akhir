<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
public function __construct()
{
	parent::__construct();
	//Do your magic here
}
	public function index()
	{
		if($this->session->userdata('logged_in')){
			$this->load->model('Transaksi_Model');
			$this->load->model('User');
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$level = $session_data['level'];			
		}else{
			redirect('login/cekLogin','refresh');
		}

		if(!isset($id) && $level =='member'){
			$data = array(
			'buku_list' => $this->Transaksi_Model->getBukuAll(),
			'level' => $level,
			'username' => $username, );
			$this->load->view('home',$data);
		}elseif(!isset($id) && $level == 'admin'){
			$data = array(
			'buku_list' => $this->Transaksi_Model->getBukuAll(),
			'level'=>$level,
			'username'=>$username,);
			$data["user_list"] = $this->User->getDataUser();
			$this->load->view('home_admin',$data);
		}elseif(!isset($id) && $level == 'member'){
			$data = array('level' => $level,
			'username' => $username, );
			$this->load->view('tambah_peminjaman', $data);
		}
	}

	public function index1()
	{
		$this->load->model('Biodata');
		$data['biodata']=$this->Biodata->getbiodataArray();
 		$this->load->view('biodata_user', $data);
	}
}
