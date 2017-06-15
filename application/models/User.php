<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function getDataUser()
	{
		$this->db->select("id,username,password,konfirmasi_password,nama,nim,alamat,no_telp,DATE_FORMAT(tgl_lahir,'%d-%m-%Y') as tgl_lahir, foto,level");
		$query = $this->db->get('user');
		return $query->result();
	}

	public function daftar() //create user
	{
		$id = $this->input->POST('');
		$username = $this->input->POST('username');
		$password = md5($this->input->POST('password'));
		$konfirmasi_password = md5($this->input->POST('konfirmasi_password'));
		$nama = $this->input->POST('nama');
		$nim = $this->input->POST('nim');
		$alamat = $this->input->POST('alamat');
		$no_telp = $this->input->POST('no_telp');
		$tgl_lahir = $this->input->POST('tgl_lahir');
		$foto = $this->input->POST('foto');
		$level = $this->input->POST('level');
		$foto = $this->upload->data('file_name');

		$data = array (
			'id' => $id,
   			'username' => $username,
   			'password'  => $password,
  			'konfirmasi_password'  => $konfirmasi_password,
  			'nama'  => $nama,
  			'nim'  => $nim,
  			'alamat'  => $alamat,
  			'no_telp' => $no_telp,
  			'tgl_lahir'  => $tgl_lahir,
  			'foto' => $foto,
   			'level' => $level,

  		); 
		$this->db->insert('user',$data);
	}

	public function login($username,$password)
	{
		$this->db->select('id,username,password,level');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', MD5($password));
		$query = $this->db->get();
		if($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}

	public function cek_user($data)
	{
		$query = $this->db->get_where('user', $data);
		return $query;
	}

	public function select_username($username) //filter username
	{		 
		$this->db->select('id,username,password');
		$this->db->from('user');
    	$this->db->where('username', $username);
    	$query = $this->db->get();

    	if ($query->num_rows() > 0) {
        	return true;
    	} else {
        	return false;
    	}
	}

	public function getUserById($id)
	{
		$this->db->where('id', $id);	
		$query = $this->db->get('user',1);
		return $query->result();
	}
	
	public function updateUser($id)
		{
			$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->POST('password')),
				'konfirmasi_password' => md5($this->input->POST('konfirmasi_password')),
				'nama' => $this->input->post('nama'), 
				'nim' => $this->input->post('nim'),
				'alamat' => $this->input->post('alamat'),
				'no_telp' => $this->input->post('no_telp'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'foto' => $this->upload->data('file_name'),
			);
			$this->db->where('id', $id);
			$this->db->update('user', $data);
		}
		public function updateUserTanpaFoto($id)
		{
			$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->POST('password')),
				'konfirmasi_password' => md5($this->input->POST('konfirmasi_password')),
				'nama' => $this->input->post('nama'), 
				'nim' => $this->input->post('nim'),
				'alamat' => $this->input->post('alamat'),
				'no_telp' => $this->input->post('no_telp'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
			);
			$this->db->where('id', $id);
			$this->db->update('user', $data);
		}

		public function deleteById($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('user');
		}

		public function m_delete($where,$table)
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

/* End of file User.php */
/* Location: ./application/models/User.php */

 ?>