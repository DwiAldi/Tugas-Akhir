<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_Admin extends CI_Controller {

	public function index()
	{
		$this->load->model('Kategori_model_admin');
        $data["kategori"]=$this->Kategori_model_admin->getDataKategoriAdmin();
        $this->load->view('kategori_admin', $data);
	}

	public function create()
		{
			$this->load->helper('url','form');	
			$this->load->library('form_validation');
			// $this->form_validation->set_rules('nama', 'Nama Penerbit', 'trim|required|min_length[2]|max_length[30]');
			// $this->form_validation->set_rules('alamat', 'Alamat Penerbit', 'trim|required|min_length[5]|max_length[50]');
			// $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'trim|required');
			$this->form_validation->set_rules('nama', 'Nama Kategori', 'trim|required|min_length[1]|max_length[20]|is_unique|callback_cekKategoriGanda');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi Kategori', 'trim|required|min_length[3]|max_length[50]');
			
			$this->load->model('kategori_model_admin');	
			if($this->form_validation->run()==FALSE){

				$this->load->view('tambah_kategori_view');

			}else{
				
					$this->kategori_model_admin->insertKategori();
	               	redirect('kategori_admin');
				}
		}

	public function cekKategoriGanda($username)
	{
		$this->load->library('form_validation');
		$this->load->model('Kategori_model_admin');
		$is_exist = $this->kategori_model_admin->cekKategoriGanda($username);

		if ($is_exist) {
			$this->form_validation->set_message('cekKategoriGanda','Nama Kategori sudah ada.');
			return false;
		}else{
			$this->kategori_model_admin->insertKategori();
			redirect('kategori_admin','refresh');
			return true;
		}
	}

	public function update($id)
	{
		$this->load->helper('url','form', 'file');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama Kategori', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Kategori', 'trim|required');
		//sebelum update data harus ambil data lama yang akan di update
		$this->load->model('Kategori_model_admin');
		$data['kategori']=$this->Kategori_model_admin->getKategoriById($id);

		if($this->form_validation->run()==FALSE){
			$this->load->view('update_kategori',$data);
		}
		else
		{
			    $config['upload_path']          = './assets/uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000000000;
                $config['max_width']            = 10240;
                $config['max_height']           = 7680;
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);


               	if ( ! $this->upload->do_upload('userfile')){
				
					$this->Kategori_model_admin->updateKategoriTanpaFoto($id);
					$data["kategori"] = $this->Kategori_model_admin->getDataKategoriAdmin();	
					$this->load->view('kategori_admin', $data);
				
				}
				else{
					$this->Kategori_model_admin->updateKategori($id);
					$data["kategori"] = $this->Kategori_model_admin->getDataKategoriAdmin();	
					$this->load->view('kategori_admin', $data);
				}
		}
	}

	public function delete($id_kategori)
	{
		$this->load->model('Kategori_model_admin');

		$terdaftar = $this->Kategori_model_admin->kategoriTerdaftar($id_kategori);
		if ($terdaftar) {
			$this->session->set_flashdata('fail', 'Tidak dapat menghapus, Kategori tersebut telah terdaftar dalam buku!');
			redirect('kategori_admin','refresh');
		}else{
			$this->session->set_flashdata('terhapus', 'Kategori Berhasil Dihapus');
			$this->Kategori_model_admin->deleteKategori($id_kategori);
			redirect('kategori_admin','refresh');
		}		


		// $path= './assets/uploads/';
		// $where = array('id' => $id);

		// $this->Kategori_model_admin->m_delete($where,'kategori');
		// redirect('kategori_admin', 'refresh');
	}

}

/* End of file Kategori_Admin.php */
/* Location: ./application/controllers/Kategori_Admin.php */

 ?>