<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');		
	}

	public function cekLogin()
	{
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
		if($this->form_validation->run()==false){
			$this->load->view('login');
		}else{
			redirect('home','refresh');
		}

		// $data = array('username' => $this->input->post('username', TRUE),
		// 				'password' => md5($this->input->post('password', TRUE)),
		// 	);
		// $this->load->model('User'); // load model_user
		// $hasil = $this->User->cek_user($data);
		// if ($hasil->num_rows() == 1) {
		// 	foreach ($hasil->result() as $sess) {
		// 		$sess_data['logged_in'] = 'Sudah Loggin';
		// 		$sess_data['uid'] = $sess->uid;
		// 		$sess_data['username'] = $sess->username;
		// 		$sess_data['level'] = $sess->level;
		// 		$sess_data['nama'] = $sess->nama;
		// 		$sess_data['nim'] = $sess->nim;
		// 		$sess_data['alamat'] = $sess->alamat;
		// 		$sess_data['tgl_lahir'] = $sess->tgl_lahir;
		// 		$sess_data['no_telp'] = $sess->no_telp;
		// 		$sess_data['foto'] = $sess->foto;
		// 		$this->session->set_userdata($sess_data);
		// 	}
		// 	if ($this->session->userdata('level')=='admin') {
		// 		redirect('home_admin/');
		// 	}
		// 	elseif ($this->session->userdata('level')=='member') {
		// 		redirect('home/');
		// 	}		
		// }
		// else {
		// 	echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		// }

	}

	public function cekDb($password)
	{
		$this->load->model('user');
		$username = $this->input->post('username');
		$result = $this->user->login($username,$password);
		if($result){
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array(
					'id'=>$row->id,
					'username'=> $row->username,
					'level'=>$row->level,
				);
				$this->session->set_userdata('logged_in',$sess_array);
			}
			return true;
		}else{
			$this->form_validation->set_message('cekDb',"Login Gagal Username dan Password tidak valid");
			return false;
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */

 ?>