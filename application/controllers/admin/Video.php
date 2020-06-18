<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	//load data base
	public function __construct(){
		parent::__construct();
		$this->load->model('video_model'); //data video
	}

	//index
	 public function index(){

	 $video = $this->video_model->listing();
	 //valid
	 $valid = $this->form_validation;
	 $valid->set_rules('judul', 'Judul video', 'required|is_unique[video.judul]',
						array('required' 	=> 'Judul video harus diisi',
							  'is_unique'	=> 'Ooops Judul video : <strong>'. $this->input->post('judul') .'</strong> sudah ada. Buat Judul baru' ));
	 if($valid->run() === FALSE){
	 $data = array('title' 				=> 'Data video',
	 				'video' 		    => $video,
	 				'isi'  				=> 'admin/video/list');
	 $this->load->view('admin/layout/wrapper',$data);
	}else{
		$i=$this->input;
			$data = array('judul' 			 	 => $i->post('judul'),
						  'keterangan' 			 => $i->post('keterangan'),
						  'posisi'				 => $i->post('posisi'),
						  'video'				 => $i->post('video'),
						  'id_user'				 => $this->session->userdata('id')
							 );	
			$this->video_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data video berhasil di tambah');
			redirect(base_url('admin/video'));
		}	
		//end masuk databse
	}

	//edit
	public function edit($id_video){
	 $video = $this->video_model->detail($id_video);
	 //valid
	 $valid = $this->form_validation;
	 $valid->set_rules('judul', 'Judul video', 'required',
						array('required' 	=> 'judul video harus diisi'));
	 if($valid->run() === FALSE){
	 $data = array('title' 				=> 'Edit video',
	 				'video'   			=> $video,
	 				'isi'  				=> 'admin/video/edit');
	 $this->load->view('admin/layout/wrapper',$data);
	}else{
		$i=$this->input;
			$data = array('id_video'	 		 => $id_video,
						  'judul' 			 	 => $i->post('judul'),
						  'keterangan' 			 => $i->post('keterangan'),
						  'posisi'				 => $i->post('posisi'),
						  'video'				 => $i->post('video'),
						  'id_user'				 => $this->session->userdata('id')
							 );	
			$this->video_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data video berhasil di edit');
			redirect(base_url('admin/video'));
		}	
		//end masuk databse
	}

	//delete
	public function delete($id_video) {
		$data = array( 'id_video' => $id_video );
		$this->video_model->delete($data);
		$this->session->set_flashdata('sukses', 'video telah dihapus');
		redirect(base_url('admin/video'));
	}


}