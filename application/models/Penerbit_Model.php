<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerbit_Model extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

	public function getDataPenerbit()
	{
		$this->db->select('id,namaPenerbit,alamatPenerbit,no_telp');
		$query = $this->db->get('penerbit');
		return $query->result();
	}

	public function getPenerbitById($id)
	{
		$this->db->where('id', $id);	
		$query = $this->db->get('penerbit',1);
		return $query->result();
	}

	public function insertPenerbit()
	{
		$insert_penerbit = array(
			'namaPenerbit' => $this->input->post('nama'),
			'alamatPenerbit' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp'),
		);
		$this->db->insert('penerbit', $insert_penerbit);
	}

	public function updatePenerbit($id)
	{
		$data = array(
			'namaPenerbit' => $this->input->post('namaPenerbit'),
			'alamatPenerbit' => $this->input->post('alamatPenerbit'),
			'no_telp' => $this->input->post('no_telp'),
		);
		$this->db->where('id', $id);
		$this->db->update('penerbit', $data);
	}

	public function updatePenerbitTanpaFoto($id)
		{
			$data = array(
				'namaPenerbit' => $this->input->post('namaPenerbit'),
				'alamatPenerbit' => $this->input->post('alamatPenerbit'),
				'no_telp' => $this->input->post('no_telp'),
			);
			$this->db->where('id', $id);
			$this->db->update('penerbit', $data);
		}

	public function deletePenerbit($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('penerbit');
	}

	public function m_delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

}

/* End of file Penerbit_Model.php */
/* Location: ./application/models/Penerbit_Model.php */ ?>