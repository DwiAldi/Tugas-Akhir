<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Controller {
	

	
	public function __construct() {
		parent::__construct('kategori');
		$this->load->model('kategori_model');
		$this->load->model('buku_model');
	}
	
	public function index()
	{
		$this->load->model('Kategori_model');
        $data["kategori"]=$this->Kategori_model->getDataKategori();
        $this->load->view('kategori', $data);
	}

	// public function indexAdmin()
	// {
	// 	$this->load->model('Kategori_model');
 //        $data["kategori"]=$this->Kategori_model->getDataKategoriAdmin();
 //        $this->load->view('kategori_admin', $data);
	// }
	
	public function create()
	{
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		// $this->form_validation->set_rules('nama', 'Nama Penerbit', 'trim|required|min_length[2]|max_length[30]');
		// $this->form_validation->set_rules('alamat', 'Alamat Penerbit', 'trim|required|min_length[5]|max_length[50]');
		// $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Kategori', 'trim|required|min_length[1]|max_length[20]');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Kategori', 'trim|required|min_length[3]|max_length[50]');
		
		$this->load->model('kategori_model');	
		if($this->form_validation->run()==FALSE){

			$this->load->view('tambah_kategori_view');

		}else{
			
				$this->kategori_model->insertKategori();
               	redirect('kategori/indexAdmin');
			}
	}

	public function update($id)
	{
		$this->load->helper('url','form', 'file');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama Kategori', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Kategori', 'trim|required');
		//sebelum update data harus ambil data lama yang akan di update
		$this->load->model('kategori_model');
		$data['kategori']=$this->kategori_model->getKategoriById($id);

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
				
					$this->kategori_model->updateKategoriTanpaFoto($id);
					$data["kategori_list"] = $this->kategori_model->getDataKategoriAdmin();	
					$this->load->view('kategori/indexAdmin', $data);
				
				}
				else{
					$this->kategori_model->updateKategori($id);
					$data["kategori_list"] = $this->kategori_model->getDataKategoriAdmin();	
					$this->load->view('kategori/indexAdmin', $data);
				}
		}
	}

 }

/* End of file kategori.php */
/* Location: ./application/controllers/kategori.php */