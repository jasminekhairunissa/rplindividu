<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_mahasiswa extends CI_Model {
	public function getUser($table_name)
	{
		$get_user = $this->db->get($table_name);
		return $get_user->result_array();
	}

	public function addData($table_name,$data){
		$add = $this->db->insert($table_name,$data);
		return $add;
	}

	public function deleteData($table_name,$id){
		$this->db->where('nim_mahasiswa',$id);
		$delete = $this->db->delete($table_name);
		return $delete;
	}

	public function editData($table_name,$id){
		$this->db->where('nim_mahasiswa',$id);
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}

	public function dataEdit($table_name,$data,$id){
		$this->db->where('nim_mahasiswa',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}
}
