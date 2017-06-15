<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Peminjaman extends CI_Controller {
	
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
				$session_data = $this->session->userdata('logged_in');
				$username = $session_data['username'];
				$level = $session_data['level'];
				$fk_user = $session_data['id'];
			}else{
				redirect('login/cekLogin','refresh');
			}

			$this->load->helper('url','form');	
			$this->load->library('form_validation');
			$this->form_validation->set_rules('tgl_pinjam', 'Tanggal Pinjam',"trim|required");	

			$this->load->model('Transaksi_Model');

			$cek=$this->Transaksi_Model->getIdByUsername($username);
				foreach ($cek as $key) {
					$fk_user=$key->id;
				}

			if($this->form_validation->run()== FALSE || $this->cekDB($fk_user)==FALSE){
				if(!isset($id) && $level == 'member'){
					
				$data = array('level' => $level,
					'username' => $username,
					'judul_list' => $this->Transaksi_Model->getBukuAll() );

				if($this->cekDB($fk_user)==FALSE)
				{
				$this->session->set_flashdata('pinjam', 'Peminjaman anda telah melampaui batas maksimal peminjaman');
				}
				$this->load->view('tambah_peminjaman', $data);
				}	

			}else{
				// if(!isset($id) && $level == 'anggota'){
				$data = array(
				'level' => $level,
				'username' => $username,
				 );
				$this->Transaksi_Model->insertPeminjamanByJml($fk_user);
				echo "<script>alert('Form sudah dikirim ke admin, silahkan menuju admin untuk konfirmasi');history.go(-1);</script>";
				redirect('home','refresh');
			}
	}

	public function cekDB($fk_user)
	{
		$hasil = $this->Transaksi_Model->hitung_pinjam($fk_user);
		if($hasil){
			return true;
		}else{
			return false;

		}
	}
}
	
	/* End of file Peminjaman.php */
	/* Location: ./application/controllers/Peminjaman.php */
	
?>