<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	//Semua method digunakan untuk proses yang berhubungan dengan database
	public function getbiodataArray()
	{
		$id = $this->session->userdata('id');

	    $this->db->where('id', $id);
	    $q = $this->db->get('user');
	    return $q->row();


		// $id = $this->session->userdata('username');
		// $query = $this->db->query("SELECT * from user where username = '$id'");
		// return $query->result_array();
	}

	public function getbiodata($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('user');
		return $query->result();
	}

}



/* End of file Biodata.php */
/* Location: ./application/models/Biodata.php */