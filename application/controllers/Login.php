<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('login/v_login');
	}

	public function getlogin()
	{
		$u = $this->input->post('username');
		$p = $this->input->post('password');
		$this->load->model('m_login');
		$this->m_login->getlogin($u,$p);
	}


	public function admin()
	{
		if($this->session->userdata('role')=='admin')
		{
		$this->model_squrity->getsqurity();
		$isi['content'] 	= 'login/index';
		$isi['judul']		= 'master';
		$isi['sub_judul1']	= 'Admin';
		$isi['sub_judul2']	= '';
		$isi['data'] = $this->m_login->getAllAdmin();
		$this->load->view('home_admin/tampilan_home',$isi);	
		}	
	}

	public function tambah()
	{	
		if($this->session->userdata('role')=='admin')
		{
		$this->model_squrity->getsqurity();
		$isi['content'] 	= 'login/form_insert';
		$isi['judul']		= 'master';
		$isi['sub_judul1']	= 'Tambah admin';
		$isi['sub_judul2']	= '';
		$this->load->view('home_admin/tampilan_home',$isi);
		}
	}

	public function insert_data()
	{
		if($this->session->userdata('role')=='admin')
		{
		$this->model_squrity->getsqurity();
		
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[repeat_password]');
		$this->form_validation->set_rules('repeat_password', 'Password', 'required|matches[password]');
		if($this->form_validation->run() !=false)
		{
			$data = array (
					//'id_siswa' => $this->input->post('id_siswa'),
					'nama_lengkap' => $this->input->post('nama_lengkap'),
					'username' => $this->input->post('username'),
					'password' => md5 ($this->input->post('password')),
					'repeat_password' => md5 ($this->input->post('repeat_password')),
					'role' => $this->input->post('role'),

			);
			$this->m_login->insert_user($data);
			$this->session->set_flashdata('sukses','User Berhasil Ditambah!');
			redirect('login/admin');
		}
		else
		{
			$this->session->set_flashdata('err','Password Tidak Match'); 
			redirect('login/tambah');
		}
		}
	}

	public function update_view($id)
	{
		if($this->session->userdata('role')=='admin')
		{
		$this->model_squrity->getsqurity();
		$isi['data'] 		= $this->m_login->getOneUser($id);
		$isi['content'] 	= 'login/form_update';
		$isi['judul']		= 'master';
		$isi['sub_judul1']	= 'Update Admin';
		$isi['sub_judul2']	= '';
		$this->load->view('home_admin/tampilan_home',$isi);
		}
	}

	public function update_data($id)
	{
		$this->form_validation->set_rules('nama_lengkap', 'Nama', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[repeat_password]');
		$this->form_validation->set_rules('repeat_password', 'Password', 'required|matches[password]');

		if ($this->form_validation->run() !=false)
		{
			$data = array(
					'nama_lengkap' => $this->input->post('nama_lengkap'),
					'username' => $this->input->post('username'),
					'password' => md5 ($this->input->post('password')),
					'repeat_password' => md5 ($this->input->post('repeat_password'))

			);

			$this->m_login->updateUser($id,$data);
			$this->session->set_flashdata('sukses','User Berhasil Di Update!');
			redirect('login/admin');	
		}
		else
		{
			$this->session->set_flashdata('sukses','Password Tidak Match, Gagal Update!'); 
			redirect('login/admin');
		}
	}

	public function delete_data($id)
	{
		if($this->session->userdata('role')=='admin')
		{
		$this->model_squrity->getsqurity();
		$this->m_login->deleteUser($id);
		$this->session->set_flashdata('sukses','User Berhasil Di Hapus!');
		redirect('login/admin');
		}
	}
}
