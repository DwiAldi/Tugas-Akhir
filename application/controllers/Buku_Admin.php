<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_Admin extends CI_Controller {

	public function index()
	{
		$this->load->model('Buku_Model_Admin');
		$data["buku_list"] = $this->Buku_Model_Admin->getDataBuku();
		$this->load->view('Buku_Admin',$data);		
	}

	public function create()
	{
		// $this->load->model('Buku_Model_Admin');
		
		// $this->load->view('tambah_buku_view', $data);
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('judulBuku', 'Judul Buku', 'trim|required|min_length[5]|max_length[100]');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Buku', 'trim|required|min_length[5]|max_length[1000]');
		$this->load->model('Buku_Model_Admin');
		$data['penerbit'] = $this->Buku_Model_Admin->getComboBoxPenerbit();
		$data['pengarang']=$this->Buku_Model_Admin->getComboBoxPengarang();
		$data['kategori']=$this->Buku_Model_Admin->getComboBoxKategori();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('tambah_buku_view', $data);
		} else{
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
				window.location.href='http://localhost/tugas_akhir/index.php/Buku_Admin/';</script>";	
			}else{
				$this->Buku_Model_Admin->create();
				$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Tambah Buku berhasil</div></div>");
				redirect('Buku_Admin');
			}
			
		}
	}

	public function delete($id)
	{
		$this->load->model('Buku_Model_Admin');
		$path= './assets/uploads/';
		$where = array('idBuku' => $id);
		$rowdel = $this->Buku_Model_Admin->get_byimage($where,'buku');
		@unlink($path.$rowdel->foto);

		$this->Buku_Model_Admin->m_delete($where,'buku');
		redirect('Buku_Admin/', 'refresh');
	}

}

/* End of file Buku_Admin.php */
/* Location: ./application/controllers/Buku_Admin.php */ ?>