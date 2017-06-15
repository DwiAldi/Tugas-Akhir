<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		
	}

	public function index()
	{
		$this->load->view('register');
		
	}

	public function daftar() //create data user
	{
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->load->model('user');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|callback_cekUsername');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[konfirmasi_password]');
		$this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('nim', 'Nim', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('no_telp', 'NomorTelepon', 'trim|required');
		$this->form_validation->set_rules('tgl_lahir', 'TanggalLahir', 'trim|required');
		$this->form_validation->set_rules('level', 'Level', 'trim|required');


		if($this->form_validation->run()==false){
			$this->load->view('register');
		}else{
			$config['upload_path']			='./assets/uploads';
			$config['allowed_types']		='gif|jpg|png';
			$config['max_size']				=1000000000;
			$config['max_width']			=10240;
			$config['max_height']			=7680;

			$this->load->library('upload', $config);
			
			if( ! $this->upload->do_upload('userfile'))
			{
				$error = array('error' => $this->upload->display_errors());
				echo "<script> alert('Gambar belum diisi'); 
				window.location.href='http://localhost/tugas_akhir/index.php/register/index/';</script>";	
			}else{
				$this->user->daftar();
				$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Registrasi berhasil</div></div>");
				redirect('login');
			}
			
		}
	}

	public function cekUsername($username) //cek username 
	{
	$this->load->library('form_validation');
    $this->load->model('user');
    $is_exist = $this->user->select_username($username);

    if ($is_exist) {
        $this->form_validation->set_message('cekUsername', 'Username Sudah ada.');    
        return false;
    } else {
        return true;
    }
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */
