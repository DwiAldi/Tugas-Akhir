<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Biodata');
	}

	public function index()
	{
		$this->session->userdata('id');
		$data['row'] = $this->Biodata->getbiodataArray();
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */