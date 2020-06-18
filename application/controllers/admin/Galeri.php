<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	//load data base
	public function __construct(){
		parent::__construct();
		$this->load->model('galeri_model'); //data galeri model
	}

	//index
	 public function index(){
	 $galeri = $this->galeri_model->listing();
	 $data = array('title' => 'Data Galeri',
	 				'galeri' => $galeri,
	 				'isi'  => 'admin/galeri/list');
	 $this->load->view('admin/layout/wrapper',$data);
	}

	//tambah
	 public function tambah(){
	//validation
	 $v = $this->form_validation;
	 $v->set_rules('judul', 'Judul', 'required',
				   array('required' => 'Judul harus diisi' ));

if($v->run()) {

	$config['upload_path'] 		= './assets/upload/image/thumbs/'; //lokasi folder upload
	$config['allowed_types'] 	= 'gif|jpg|png|svg|tiff'; //format file yang diizinkan
	$config['max_size']			= '15000'; // KB ukuran maksimal	
	$this->load->library('upload', $config);
	if(! $this->upload->do_upload('gambar')) {

	 $data = array('title' => 'Tambah galeri',
	 				'error'		=> $this->upload->display_errors(),
	 				'isi'  => 'admin/galeri/tambah');
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
			$data = array(	'id_user'				=> $this->session->userdata('id'),
							'judul'					=> $i->post('judul'),
							'keterangan'			=> $i->post('keterangan'),
							'posisi'				=> $i->post('posisi'),
							'website'				=> $i->post('website'),
							'gambar'				=> $upload_data['uploads']['file_name']
							
							);
			$this->galeri_model->tambah($data);
			$this->session->set_flashdata('sukses','galeri telah ditambah');
			redirect(base_url('admin/galeri'));
		}
	}
		// End masuk database

	 $data = array('title' => 'Tambah galeri',
	 				'isi'  => 'admin/galeri/tambah');
	 $this->load->view('admin/layout/wrapper',$data);
	} 

	//edit
	 public function edit($id_galeri){
	 $galeri    = $this->galeri_model->detail($id_galeri); 
	
	//validation
	 $v = $this->form_validation;
	 $v->set_rules('judul', 'Judul', 'required',
				   array('required' => 'Judul harus diisi' ));


if($v->run()) {
	//kalau ada gambar
	if(!empty($_FILES['gambar']['name'])) {

	$config['upload_path'] 		= './assets/upload/image/thumbs/'; //lokasi folder upload
	$config['allowed_types'] 	= 'gif|jpg|png|svg|tiff'; //format file yang diizinkan
	$config['max_size']			= '15000'; // KB ukuran maksimal	
	$this->load->library('upload', $config);
	if(! $this->upload->do_upload('gambar')) {

	 $data = array(	'title' 		=> 'Edit galeri',
	 				'galeri'		=> $galeri,
	 				'error'			=> $this->upload->display_errors(),
	 				'isi'  			=> 'admin/galeri/edit');
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

				//hapus gambar lama
			if($galeri->gambar != "") {
			unlink('./assets/upload/image/'.$galeri->gambar);
			unlink('./assets/upload/image/thumbs'.$galeri->gambar);
			}
				//end hapus gambar lama
				
			$i 			= $this->input;
			$data = array(	'id_galeri'				=> $id_galeri,
							'id_user'				=> $this->session->userdata('id'),
							'judul'					=> $i->post('judul'),
							'keterangan'			=> $i->post('keterangan'),
							'posisi'				=> $i->post('posisi'),
							'website'				=> $i->post('website'),
							'gambar'				=> $upload_data['uploads']['file_name']
							);

			$this->galeri_model->edit($data);
			$this->session->set_flashdata('sukses','Galeri telah diedit');
			redirect(base_url('admin/galeri'));
			}}else{
			//edit tanpa ganti gambar
			$i 			= $this->input;
			$data = array(	'id_galeri'				=> $id_galeri,
							'id_user'				=> $this->session->userdata('id'),
							'judul'					=> $i->post('judul'),
							'keterangan'			=> $i->post('keterangan'),
							'posisi'				=> $i->post('posisi'),
							'website'				=> $i->post('website')
							);

			$this->galeri_model->edit($data);
			$this->session->set_flashdata('sukses','Galeri telah diupdate');
			redirect(base_url('admin/galeri'));
		}}
		// End masuk database
	 $data = array('title' => 'Edit Galeri',
	 				'galeri'	=> $galeri,
	 				'isi'  => 'admin/galeri/edit');
	 $this->load->view('admin/layout/wrapper',$data);
	} 


	//delete
	public function delete($id_galeri) {
		$galeri = $this->galeri_model->detail($id_galeri);
		//hapus gambar
		if($galeri->gambar != "") {
			unlink('./assets/upload/image/'.$galeri->gambar);
			unlink('./assets/upload/image/thumbs'.$galeri->gambar);
		}
		//end hapus gambar
		$data = array( 'id_galeri' => $id_galeri );
		$this->galeri_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data galeri telah dihapus');
		redirect(base_url('admin/galeri'));
	}

}