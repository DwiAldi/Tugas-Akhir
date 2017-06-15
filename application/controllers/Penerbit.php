<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerbit extends CI_Controller {

	public function index()
	{
		$this->load->model('Penerbit_Model');
		$data["penerbit_list"] = $this->Penerbit_Model->getDataPenerbit();
		$this->load->view('penerbit',$data);
	}

	public function create()
	{
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama Penerbit', 'trim|required|min_length[2]|max_length[30]');
		$this->form_validation->set_rules('alamat', 'Alamat Penerbit', 'trim|required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'trim|required');
		
		$this->load->model('Penerbit_Model');	
		if($this->form_validation->run()==FALSE){

			$this->load->view('tambah_penerbit_view');

		}else{
			
				$this->Penerbit_Model->insertPenerbit();
               	redirect('penerbit/');
			}
	}

	public function update($id)
	{
		$this->load->helper('url','form', 'file');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('namaPenerbit', 'Nama Penerbit', 'trim|required|min_length[5]|max_length[30]');
		$this->form_validation->set_rules('alamatPenerbit', 'Alamat Penerbit', 'trim|required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'trim|required|min_length[5]|max_length[12]');

		//sebelum update data harus ambil data lama yang akan di update
		$this->load->model('Penerbit_Model');
		$data['penerbit']=$this->Penerbit_Model->getPenerbitById($id);

		if($this->form_validation->run()==FALSE){
			$this->load->view('update_penerbit',$data);
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
				
					$this->Penerbit_Model->updatePenerbitTanpaFoto($id);
					$data["penerbit_list"] = $this->Penerbit_Model->getDataPenerbit();	
					$this->load->view('penerbit', $data);
				
				}
				else{
					$this->Penerbit_Model->updatePenerbit($id);
					$data["penerbit_list"] = $this->Penerbit_Model->getDataPenerbit();	
					$this->load->view('penerbit', $data);
				}
		}
	}

	public function delete($id)
	{
		$this->load->model('Penerbit_Model');
		$path= './assets/uploads/';
		$where = array('id' => $id);

		$this->Penerbit_Model->m_delete($where,'penerbit');
		redirect('penerbit', 'refresh');
	}

}

/* End of file Penerbit.php */
/* Location: ./application/controllers/Penerbit.php */ ?>