<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->data['hasil'] = $this->model_mahasiswa->getUser('data_mahasiswa');
		$this->load->view('welcome_message', $this->data);
	}

	public function form_input(){
		$this->load->view('form-input');
	}
	public function insert(){
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$semester = $_POST['semester'];
		$ipk = $_POST['ipk'];
		$data = array('nim_mahasiswa' => $nim, 'nama' => $nama, 'semester' => $semester, 'ipk' => $ipk);
		$add = $this->model_mahasiswa->addData('data_mahasiswa',$data);
		if($add>0){
			redirect('welcome/index');
		}else{
			echo 'Data failed to be saved.';
		}
	}
	public function delete($id){
		$delete = $this->model_mahasiswa->deleteData('data_mahasiswa',$id);
		if($delete>0){
			redirect('welcome/index');
		}else{
			echo 'Data failed to be saved.';
		}
	}
	public function form_edit($id){
		$this->data['editData'] = $this->model_mahasiswa->editData('data_mahasiswa',$id);
		$this->load->view('form-edit', $this->data);
	}
	public function update($id){
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$semester = $_POST['semester'];
		$ipk = $_POST['ipk'];
		$data = array('nim_mahasiswa' => $nim, 'nama' => $nama, 'semester' => $semester, 'ipk' => $ipk);
		$edit = $this->model_mahasiswa->dataEdit('data_mahasiswa',$data,$id);
		if($edit>0){
			redirect('welcome/index');
		}else{
			echo 'Data failed to be saved.';
		}
	}
}
