<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengarang extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	if($this->session->userdata('logged_in')){
	// 		$session_data = $this->session->userdata('logged_in');
	// 		$data['username'] = $session_data['username'];
	// 	}else{
	// 		redirect('login','refresh');
	// 	}

	// 	$this->load->model('pengarang_model');
	// }

	public function index()
	{
		$this->load->model('pengarang_model');
		$data["pengarang_list"] = $this->pengarang_model->getDataPengarang();
		$this->load->view('pengarang',$data);	
	}

	public function datatable()
	{
		$this->load->model('pengarang_model');
		$data["pengarang_list"] = $this->pegawai_model->getDataPegawai();
		$this->load->view('pengarang_datatable', $data);
		
	}
	public function create()
	{
		// $this->load->helper('url','form');	
		// $this->load->library('form_validation');

		// $this->form_validation->set_rules('nama', 'Name', 'trim|required');
		// $this->form_validation->set_rules('tanggallahir', 'Tanggal Lahir', 'trim|required');
		// $this->load->model('pengarang_model');	
		// if($this->form_validation->run()==FALSE){

		// 	$this->load->view('tambah_pengarang_view');

		// }else{
				
		// 	$this->pengarang_model->insertPengarang();
		// 	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Ditambah !!</div></div>");
  //             redirect('pengarang');
  //         }
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->load->model('Pengarang_model');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('tambah_pengarang');	
		}else{
			$this->Pengarang_model->create();
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Ditambah !!</div></div>");
			redirect('pengarang','refresh');		
		}

	}
	//method update butuh parameter id berapa yang akan di update
	public function update($id)
	{
		//load library
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Name', 'trim|required');
		$this->load->model('pengarang_model');
		
		//sebelum update data harus ambil data lama yang akan di update
		
		$data['pengarang']=$this->pengarang_model->getPengarang($id);
		
		//var_dump($data['pegawai']);
		//$namaFile = $data['pegawai']->foto;
		
		//var dump liat index nya
		//skeleton code
		if($this->form_validation->run()==FALSE){

		//setelah load data dikirim ke view
			$this->load->view('update_pengarang',$data);

		}else{
				//$this->pegawai_model->insertPegawai();
			
				//$this->load->view('tambah_pegawai_view', $error);/
				//hapus foto yang lama
			
				$this->pengarang_model->updateById($id);
				$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Diedit !!</div></div>");
               	redirect('pengarang');
				//$this->load->view('tambah_pegawai_sukses');//

				

			}

	}
	

	public function delete($id)
	{
		$where=array('id'=>$id);
		$this->load->model('pengarang_model');
		$this->pengarang_model->deleteById($id);
	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">information has been slain</div></div>");
		redirect('pengarang','refresh');
	}
	//method update butuh parameter id berapa yang akan di update

}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */

 ?>