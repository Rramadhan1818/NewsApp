<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	//load data base
	public function __construct(){
		parent::__construct();
		$this->load->model('berita_model'); //data berita model
		$this->load->model('kategori_berita_model'); //data kategori berita model
		$this->load->model('galeri_model'); //data galeri model
		$this->load->model('video_model'); //data video model
	}

	//index
	public function index(){

		$header = $this->berita_model->berita_utama();
		$berita = $this->berita_model->berita_home();
		$site   = $this->konfigurasi_model->listing();
		$slider = $this->galeri_model->home();
		$video = $this->video_model->home();

		$data = array( 'title' 		=>	'Contact '.$site->namaweb.' | '.$site->tagline,
						'header'	=>   $header,
						'berita'	=>	 $berita,
						'slider'	=>   $slider,
						'video'		=> 	 $video,
						'site'		=>	 $site,
						'isi'		=> 	'home/kontak');
		$this->load->view('layout/wrapper', $data);
	}

}