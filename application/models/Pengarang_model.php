<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengarang_Model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

		public function getDataPengarang()
		{
			$this->db->select("id,namaPengarang");
			$query = $this->db->get('pengarang');
			return $query->result();
		}



		public function create()
		{
			// $insert_pegawai = array(
			// 	'id'=>$this->input->post('id'),
			// 	'nama'=>$this->input->post('nama'),
			// 	'tanggallahir' => $this->input->post('tanggallahir'),
			
			// );

			// $this->db->insert('pengarang', $insert_pegawai);
			$nama = $this->input->post('namaPengarang');
			$object = array(
					'nama'=>$nama,
				);	
			$this->db->insert('pengarang', $object);
			
		}


		public function getPengarang($id)
		{
			$this->db->where('id', $id);	
			$query = $this->db->get('pengarang',1);
			return $query->result();
		}

		public function updateById($id)
		{
			$data = array(
				'namaPengarang' => $this->input->post('nama'), 
				);
			$this->db->where('id', $id);
			$this->db->update('pengarang', $data);
		}
		public function deleteById($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('pengarang');	
		}


}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>