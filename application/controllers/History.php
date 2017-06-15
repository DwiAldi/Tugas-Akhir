<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
         if($this->session->userdata('logged_in')){
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
			$session_data = $this->session->userdata('logged_in');
			$this->load->model('History_Model');
			$username = $session_data['username'];
			$level = $session_data['level'];			
		}else{
			redirect('login/cekLogin','refresh');
		}

		$cek=$this->History_Model->getIdByUsername($username);
			foreach ($cek as $key) {
				$fk_user=$key->id;
			}

		if(!isset($id) && $level == 'member'){
			$data = array(
			'history_list' => $this->History_Model->getDataPeminjamanByUser($fk_user),	
			'level' => $level,
			'username' => $username, );
			$this->load->view('history', $data);
		}
	}

	public function index1()
	{
		$this->load->view('select2');
	}

}

/* End of file History.php */
/* Location: ./application/controllers/History.php */