<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_oprec extends CI_model {

	private $table = "form";

	public function insert($data)
	{
		return $this->db->insert($this->table,$data);
	}

	public function getAllPendaftar()
	{
		$db = $this->db->query("SELECT * FROM form ORDER BY tgl_daftar DESC");
		return $db->result();
	} 

	public function getOnePendaftar($id)
	{
		return $this->db->query("SELECT * FROM form WHERE id = '".$id."' LIMIT 1")->row();
	}

	public function update($id,$data)
	{
		$this->db->where('id',$id);
		return $this->db->update('form',$data);
	}
	public function print($id)
	{
		$this->db->where('id',$id);
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete('form');
	}
}