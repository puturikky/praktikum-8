<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class PetugasController extends CI_Controller { 
	function __construct()
	{
		parent::__construct();
		$this->load->model('Petugas');
	}
	public function index() { 
<<<<<<< HEAD
		if (!$this->session->userdata('isLoggedIn')) redirect(base_url().'login','refresh');
=======
>>>>>>> 22eae7a6fcdc249ff6899600309c4def9e7e6743
		$data['dataPetugas'] = $this->Petugas->getListPetugas();
		$this->template->load('template','petugas/index',$data);
	}
	public function create(){
<<<<<<< HEAD
		if (!$this->session->userdata('isLoggedIn')) redirect(base_url().'login','refresh');
		$this->template->load('template','petugas/create');
	}
	public function store(){
		if (!$this->session->userdata('isLoggedIn')) redirect(base_url().'login','refresh');
		$responses['status'] = 1;
		$responses['message'] = "";

		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$alamat = $this->input->post('alamat');
		$password = $this->input->post('password');
		$konfirmasiPassword = $this->input->post('konfirmasi_password');

		if(!is_null($this->Petugas->getPetugasByUsername($username))){
			$responses['status'] = 0;
			$responses['message'] = "Username telah digunakan";
		}else {
			if(strlen($password) < 6){
				$responses['status'] = 0;
				$responses['message'] = "Jumlah karakter password harus lebih dari atau sama dengan 6";
			}else {
				if($password != $konfirmasiPassword){
					$responses['status'] = 0;
					$responses['message'] = "Konfirmasi password salah";
				}else {
					$data = array(
						'nama' => $nama,
						'username' => $username,
						'alamat' => $alamat,
						'password' => ($password)
					);
					if(!$this->Petugas->insert($data)){
						$responses['status'] = 0;
						$responses['message'] = "Gagal menambahkan data";
					}
				}
			}
		}
		echo json_encode($responses);
	}
	public function delete(){
		if (!$this->session->userdata('isLoggedIn')) redirect(base_url().'login','refresh');
=======
		$this->template->load('template','petugas/create');
	}
	public function store(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat')
		);
		$result = $this->Petugas->insert($data);
		echo json_encode($result);
	}
	public function delete(){
>>>>>>> 22eae7a6fcdc249ff6899600309c4def9e7e6743
		$result = $this->Petugas->delete($this->input->post('kode_petugas'));
		echo json_encode($result);
	}	  
	public function edit($kode_petugas){
<<<<<<< HEAD
		if (!$this->session->userdata('isLoggedIn')) redirect(base_url().'login','refresh');
=======
>>>>>>> 22eae7a6fcdc249ff6899600309c4def9e7e6743
		$data['dataPetugas'] = $this->Petugas->getDataPetugas($kode_petugas);
		$this->template->load('template','petugas/edit',$data);
	}
	public function update($kode_petugas){
<<<<<<< HEAD
		if (!$this->session->userdata('isLoggedIn')) redirect(base_url().'login','refresh');
		$result = $this->Petugas->update($kode_petugas);
		echo json_encode($result);
	} 
=======
		$result = $this->Petugas->update($kode_petugas);
		echo json_encode($result);
	}
>>>>>>> 22eae7a6fcdc249ff6899600309c4def9e7e6743
}