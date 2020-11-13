<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_admin extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
		$isi['content']		= 'home_admin/tampilan_content';
		$isi['judul']		= 'home';
		$isi['sub_judul1']	= '';
		$isi['sub_judul2']	= '';
		$this->load->view('home_admin/tampilan_home',$isi);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		{
			redirect('login');
		}
	}

}