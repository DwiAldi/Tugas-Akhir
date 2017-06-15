<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_admin extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	if($this->session->userdata('logged_in')){
	// 		$session_data = $this->session->userdata('logged_in');
	// 		$data['username'] = $session_data['username'];
	// 	}else{
	// 		redirect('login','refresh');
	// 	}		
	// }
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function data_server()
	{
        $this->load->library('Datatables');
        $this->datatables
                ->select('id,username,password,konfirmasi_password,nama,nim,alamat, tgl_lahir, foto,level')
                ->from('username');
        echo $this->datatables->generate();
	}

	public function index()
	{
		$this->load->model('User');
		$data["user_list"]=$this->User->getDataUser();
		$this->load->view('home_admin',$data);
	}

	public function update($id)
	{
		$this->load->helper('url','form', 'file');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('konfirmasi_password', 'konfirmasi_password', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('nim', 'nim', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'trim|required|min_length[5]|max_length[12]');


		//sebelum update data harus ambil data lama yang akan di update
		$this->load->model('User');
		$data['user']=$this->User->getUserById($id);

		if($this->form_validation->run()==FALSE){
			$this->load->view('update_user',$data);
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
				
					$this->User->updateUserTanpaFoto($id);
					$data["user_list"] = $this->User->getDataUser();	
					$this->load->view('home_admin', $data);
				
				}
				else{
					$this->User->updateUser($id);
					$data["user_list"] = $this->User->getDataUser();	
					$this->load->view('home_admin', $data);
				}
		}
	}

	public function delete($id)
	{
		$this->load->model('User');
		$path= './assets/uploads/';
		$where = array('id' => $id);
		$rowdel = $this->User->get_byimage($where,'user');
		@unlink($path.$rowdel->foto);

		$this->User->m_delete($where,'user');
		redirect('home_admin/', 'refresh');
	}

	public function coba()
	{
		$this->load->model('User');
		$data["user_list"]=$this->User->getDataUser();
		$this->load->view('home_admin2',$data);
	}
}

/* End of file Home_admin.php */
/* Location: ./application/controllers/Home_admin.php */