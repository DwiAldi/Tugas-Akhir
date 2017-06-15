<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class History_Model extends CI_Model {
	
	public function getIdByUsername($username)
	{
		$this->db->select('id');
		$this->db->where('username',$username);
		$query = $this->db->get('user');
		return $query->result();
	}	

	public function getDataPeminjamanByUser($fk_user)
	{
		$this->db->select('*');
		$this->db->from('peminjaman');
		$this->db->join('buku', 'peminjaman.fk_buku = buku.idBuku');
		$this->db->join('user', 'peminjaman.fk_user = user.id');
		$this->db->where('peminjaman.fk_user', $fk_user);
		$query = $this->db->get();
		return $query->result_array();

	}		
	
	}
	
	/* End of file History_Model.php */
	/* Location: ./application/models/History_Model.php */	
?>