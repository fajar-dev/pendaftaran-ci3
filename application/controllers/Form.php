<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function __construct()
	{
		//list models
		parent:: __construct();
		$models = array(
			'M_oprec' 		=> 'form',			
		);
		//Load multiple models
		foreach ($models as $file => $object_name) {
			$this->load->model($file, $object_name);
		}
	}

	public function viewpublic()
	{		
		$this->load->view('oprec/v_form');
		 

	}

	public function insertform()
	{			
		$config['upload_path'] 		= './assets/img/data';
		$config['allowed_types'] 	= 'jpg|png|jpeg|gif';
		$config['max_size']  		= '2048';
		$config['max_width']  		= '10024';
		$config['max_height']  		= '11768';
		
		$this->load->library('upload', $config);
		
		if ( $this->upload->do_upload('gambar'))
		{
			$dataGambar = $this->upload->data();

			$data = array (
				'nama_depan' => $this->input->post('nama_depan'),
				'asal' => $this->input->post('nama_belakang'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'agama' => $this->input->post('agama'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'asal_sekolah' => $this->input->post('asal_sekolah'),
				'nohp' => $this->input->post('nohp'),
				'instagram' => $this->input->post('instagram'),
				'email' => $this->input->post('email'),
				'pass_apl' => $this->input->post('pass_apl'),
				'gambar' => $dataGambar['file_name']

			);

			$this->form->insert($data);
			redirect('form/sukses');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('gagal','File yang Anda upload/masukkan salah!. Mohon input data ulang!. Ekstensi file harus .jpg .jpeg atau .png');
			redirect("", $error);			
		}
	}

	public function sukses(){
		 $data['content']=$this->db->get('form');
		$this->load->view('oprec/v_sukses', $data);
		
    
	}

	public function index(){
		$this->model_squrity->getsqurity();
		$isi['content'] 	= 'oprec/index';
		$isi['judul']		= 'master';
		$isi['sub_judul1']	= 'Data';
		$isi['sub_judul2']	= 'Data Pendaftar';
		$isi['data'] = $this->form->getAllPendaftar();	
		$this->load->view('home_admin/tampilan_home',$isi);
	}

	public function insert(){
		if(isset($_POST['submit'])){
			$this->model_squrity->getsqurity();
			$config['upload_path'] 		= './assets/img/data';
			$config['allowed_types'] 	= 'jpg|png|jpeg|gif';
			$config['max_size']  		= '2048';
			$config['max_width']  		= '10024';
			$config['max_height']  		= '11768';
		
		$this->load->library('upload', $config);
		
		if ( $this->upload->do_upload('gambar'))
		{
			$dataGambar = $this->upload->data();

			$data = array(
				'nama_depan' => $this->input->post('nama_depan'),
				'asal' => $this->input->post('nama_belakang'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'agama' => $this->input->post('agama'),
				'instagram' => $this->input->post('instagram'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'asal_sekolah' => $this->input->post('asal_sekolah'),
				'nohp' => $this->input->post('nohp'),
				'email' => $this->input->post('email'),
				'pass_apl' => $this->input->post('pass_apl'),
				'gambar' => $dataGambar['file_name']
			);

			$this->form->insert($data);
			$this->session->set_flashdata('sukses',' Data Berhasil Ditambah!');
			redirect('form');
		}}
		else{
			$this->model_squrity->getsqurity();
			$isi['content'] 	= 'oprec/form_insert';
			$isi['judul']		= 'master';
			$isi['sub_judul1']	= 'Data';
			$isi['sub_judul2']	= 'Input Data Pendaftar';

			$this->load->view('home_admin/tampilan_home',$isi);
			}
	} 

	public function update($id){
		$this->model_squrity->getsqurity();
		$isi['data']		= $this->form->getOnePendaftar($id);
		$isi['content'] 	= 'oprec/form_update';
		$isi['judul']		= 'master';
		$isi['sub_judul1']	= 'Data';
		$isi['sub_judul2']	= 'Update Data';
		$this->load->view('home_admin/tampilan_home',$isi);
 	}


 	public function update_data($id)
	{
		$this->model_squrity->getsqurity();
		$config['upload_path'] 		= './assets/img/data';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
		$config['max_size']  		= '10000';
		$config['max_width']  		= '10024';
		$config['max_height']  		= '11768';
		
		$this->load->library('upload', $config);
		
		if ( $this->upload->do_upload('gambar'))
		{
			$dataGambar = $this->upload->data();

			$data = array (
				'nama_depan' => $this->input->post('nama_depan'),
				'asal' => $this->input->post('nama_belakang'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'agama' => $this->input->post('agama'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'asal_sekolah' => $this->input->post('asal_sekolah'),
				'nohp' => $this->input->post('nohp'),
				'instagram' => $this->input->post('instagram'),
				'email' => $this->input->post('email'),
				'pass_apl' => $this->input->post('pass_apl'),
				'gambar' => $dataGambar['file_name']

			);

			$this->form->update($id,$data);
			$this->session->set_flashdata('sukses','Data Berhasil Diupdate!');
			redirect('form');
		}
		else
		{
			//$error = array('error' => $this->upload->display_errors());
			//$this->load->view('mahasiswa/form_insert', $error);
			$this->form_validation->set_rules('nama_depan', 'nama_depan', 'required');
			if($this->form_validation->run() !=false)
			{

			$data = array (
				'nama_depan' => $this->input->post('nama_depan'),
				'asal' => $this->input->post('nama_belakang'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'agama' => $this->input->post('agama'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'asal_sekolah' => $this->input->post('asal_sekolah'),
				'nohp' => $this->input->post('nohp'),
				'instagram' => $this->input->post('instagram'),
				'email' => $this->input->post('email'),
				'pass_apl' => $this->input->post('pass_apl'),
			

			);

			$this->form->update($id,$data);
			$this->session->set_flashdata('sukses','Data Berhasil Diupdate!');
			redirect('form');
		}
		else
		{
			redirect('form/update_view');
		}			
	  }
	}

	public function print($id){
		$this->model_squrity->getsqurity();
		$isi['data']		= $this->form->getOnePendaftar($id);
		$this->load->view('oprec/print',$isi);
 	}
 	public function cetak(){
		$this->model_squrity->getsqurity();
		$isi['data'] = $this->form->getAllPendaftar();	
		$this->load->view('oprec/cetak_full',$isi);
	}
	public function export(){
		$this->model_squrity->getsqurity();
		$isi['data'] = $this->form->getAllPendaftar();	
		$this->load->view('oprec/excel',$isi);
	}

	public function deletedata($id){
		if($this->session->userdata('role')=='admin'){	
			$this->model_squrity->getsqurity();
			$this->form->delete($id);
			$this->session->set_flashdata('sukses',' Data Berhasil Dihapus!');
			redirect('form');
		}
	}
}