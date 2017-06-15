<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_Model_Admin extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

	public function getDataBuku()
	{
		// $this->db->select('id,id_kategori,judul,deskripsi,pengarang,penerbit,foto');
		// $query = $this->db->get('buku');
		// return $query->result();

		$this->db->select('*');
		$this->db->from('buku');
		$this->db->join('kategori', 'buku.id_kategori = kategori.id','left');
		$this->db->join('penerbit', 'buku.id_penerbit = penerbit.id', 'left');
		$this->db->join('pengarang', 'buku.id_pengarang = pengarang.id', 'left');
		$query = $this->db->get();
		return $query->result();
	}

	public function getBukuById($id)
	{
		$this->db->where('id', $id);	
		$query = $this->db->get('buku',1);
		return $query->result();
	}

	public function getComboBoxPenerbit()
	{
		$data = array();
        $query = $this->db->get('penerbit');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
	}

	public function getComboBoxPengarang()
	{
		$data = array();
		$query = $this->db->get('pengarang');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	public function getComboBoxKategori()
	{
		$data = array();
		$query = $this->db->get('kategori');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	public function create()
	{
		$insert_kategori = array(
			'judul' => $this->input->post('judulBuku'), 
			'deskripsi' => $this->input->post('deskripsi'),
			'id_kategori' => $this->input->post('kategori'),
			'id_pengarang' => $this->input->post('pengarang'),
			'id_penerbit' => $this->input->post('penerbit'), 
			'foto' => $this->upload->data('file_name'),  
		);
		$this->db->insert('buku', $insert_kategori);
	}

	public function deleteBuku($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('buku');
	}

	public function m_delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function get_byimage($where,$table) {
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
 
	        if ($query->num_rows() == 1) {
	            return $query->row();
	        }
    	}

}

/* End of file Buku_Model_Admin.php */
/* Location: ./application/models/Buku_Model_Admin.php */ ?>