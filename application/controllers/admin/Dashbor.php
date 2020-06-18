<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbor extends CI_Controller {

	//load database
	public function __construct() {
		parent:: __construct();
		$this->load->model('konfigurasi_model');
	}

	public function index(){
	 $data = array('title' => 'Halaman Dashbor',
	 				'isi'  => 'admin/dashbor/list');
	 $this->load->view('admin/layout/wrapper',$data);
	}

	//konfigurasi
	public function konfigurasi(){
		$konfigurasi = $this->konfigurasi_model->listing();
	//validation
		$valid = $this->form_validation;
		$valid->set_rules('namaweb', 'namaweb', 'required',
								array('required', 'Nama organisasi/aplikasi harus diisi'));
		if($valid->run() === FALSE){

		$data = array('title'   		=> 'Konfigurasi',
					  'konfigurasi'		=> $konfigurasi,
	 				  'isi'  			=> 'admin/dashbor/umum');
		$this->load->view('admin/layout/wrapper', $data);
	//Masuk databse
		}else{
			$i 			= $this->input;
			$data = array(	'id_konfigurasi'			=> $konfigurasi->id_konfigurasi,
							'namaweb'					=> $i->post('namaweb'),
							'tagline'					=> $i->post('tagline'),
							'website'					=> $i->post('website'),
							'email'						=> $i->post('email'),
							'alamat'					=> $i->post('alamat'),
							'telepon'					=> $i->post('telepon'),
							'keywords'					=> $i->post('keywords'),
							'description'				=> $i->post('description'),
							'google_map'				=> $i->post('google_map'),
							'metatext'					=> $i->post('metatext')
							);
			$this->konfigurasi_model->edit($data);
			$this->session->set_flashdata('sukses','Konfigurasi telah di update');
			redirect(base_url('admin/dashbor/konfigurasi'));
		}
	//end masuk database
	}

	//upload logo baru
	public function logo(){
	$konfigurasi = $this->konfigurasi_model->listing();
		//validation
	 $v = $this->form_validation;
	 $v->set_rules('id_konfigurasi', 'ID Konfigurasi', 'required',
				   array('required' => 'ID Konfigurasi harus diisi' ));

	if($v->run()) {

	$config['upload_path'] 		= './assets/upload/image/thumbs/'; //lokasi folder upload
	$config['allowed_types'] 	= 'gif|jpg|png|svg|tiff'; //format file yang diizinkan
	$config['max_size']			= '15000'; // KB ukuran maksimal	
	$this->load->library('upload', $config);
	if(! $this->upload->do_upload('logo')) {

	 $data = array('title'			 => 'Tambah logo baru',
	 				'konfigurasi'	 => $konfigurasi,
	 				'error'			 => $this->upload->display_errors(),
	 				'isi' 			 => 'admin/dashbor/logo');
	 $this->load->view('admin/layout/wrapper',$data);

	 // Masuk database
		}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
				$config['new_image'] 		= './assets/upload/image/thumbs/';
				$config['create_thumb'] 	= TRUE;
				$config['quality'] 			= "100%";
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 360; // Pixel
				$config['height'] 			= 360; // Pixel
				$config['x_axis'] 			= 0;
				$config['y_axis'] 			= 0;
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				
			$i 			= $this->input;
			$data = array(	'id_konfigurasi'		=> $konfigurasi->id_konfigurasi,
							'logo'				=> $upload_data['uploads']['file_name']
							
							);
			$this->konfigurasi_model->edit($data);
			$this->session->set_flashdata('sukses','Logo telah di update');
			redirect(base_url('admin/dashbor/logo'));
		}
	}
		// End masuk database

	 $data = array('title' 			=> 'Ganti logo baru',
	 				'konfigurasi'	=> $konfigurasi,
	 				'isi'  			=> 'admin/dashbor/logo');
	 $this->load->view('admin/layout/wrapper',$data);
	}

		//upload icon baru
	public function icon(){
	$konfigurasi = $this->konfigurasi_model->listing();
		//validation
	 $v = $this->form_validation;
	 $v->set_rules('id_konfigurasi', 'ID Konfigurasi', 'required',
				   array('required' => 'ID Konfigurasi harus diisi' ));

	if($v->run()) {

	$config['upload_path'] 		= './assets/upload/image/thumbs/'; //lokasi folder upload
	$config['allowed_types'] 	= 'gif|jpg|png|svg|tiff'; //format file yang diizinkan
	$config['max_size']			= '15000'; // KB ukuran maksimal	
	$this->load->library('upload', $config);
	if(! $this->upload->do_upload('icon')) {

	 $data = array('title'			 => 'Tambah icon baru',
	 				'konfigurasi'	 => $konfigurasi,
	 				'error'			 => $this->upload->display_errors(),
	 				'isi' 			 => 'admin/dashbor/icon');
	 $this->load->view('admin/layout/wrapper',$data);

	 // Masuk database
		}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
				$config['new_image'] 		= './assets/upload/image/thumbs/';
				$config['create_thumb'] 	= TRUE;
				$config['quality'] 			= "100%";
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 360; // Pixel
				$config['height'] 			= 360; // Pixel
				$config['x_axis'] 			= 0;
				$config['y_axis'] 			= 0;
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				
			$i 			= $this->input;
			$data = array(	'id_konfigurasi'		=> $konfigurasi->id_konfigurasi,
							'icon'				=> $upload_data['uploads']['file_name']
							
							);
			$this->konfigurasi_model->edit($data);
			$this->session->set_flashdata('sukses','Icon telah di update');
			redirect(base_url('admin/dashbor/icon'));
		}
	}
		// End masuk database

	 $data = array('title' 			=> 'Ganti icon baru',
	 				'konfigurasi'	=> $konfigurasi,
	 				'isi'  			=> 'admin/dashbor/icon');
	 $this->load->view('admin/layout/wrapper',$data);
	}
}
