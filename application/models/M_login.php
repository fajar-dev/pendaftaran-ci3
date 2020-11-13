<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_model {

	private $table = "admins";

	public function getlogin($u,$p)
	{
		$pwd = md5($p);
		$this->db->where('username', $u);
		$this->db->where('password', $pwd);
		$query = $this->db->get('admins');
		$row = $query->row();

		if($query->num_rows()>0)
		{
				
			$sess = array(
				'username'     	=>$row->username,
				'role'			=>$row->role,
				'id_user'		=>$row->id_user,
			);

				$this->session->set_userdata($sess);
				redirect('home_admin');
			
		}
		else
		{
			$this->session->set_flashdata('info', 'Maaf Username atau Password Salah!');
			redirect('login');
		}
	}

	public function getAllAdmin()
	{
		$db = $this->db->query("SELECT * FROM admins");
		return $db->result();
	}

	public function insert_user($data)
	{	
		return $this->db->insert($this->table,$data);
	}

	public function getOneUser($id)
	{
		return $this->db->query("SELECT * FROM admins where id_user = '".$id."' LIMIT 1")->row();
	}

	public function updateUser($id,$data)
	{
		$this->db->where('id_user',$id);
		return $this->db->update('admins',$data);
	}

	public function deleteUser($id)
	{
		$this->db->where('id_user',$id);
		return $this->db->delete('admins');
	}

}