<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	//load data base
	public function __construct(){
		parent::__construct();
		$this->load->model('video_model'); //data video model
	}

	//index
	public function index(){
		
		$site   = $this->konfigurasi_model->listing();
		$video = $this->video_model->video();

		$data = array(  'title' 		=>	'Video - '.$site->namaweb.' | '.$site->tagline,
						'video'			=>   $video,
						'modal'			=>	 $video,
						'isi'			=> 	'video/list');
		$this->load->view('layout/wrapper', $data);
	}

}