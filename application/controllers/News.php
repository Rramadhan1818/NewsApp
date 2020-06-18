<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	//load data base
	public function __construct(){
		parent::__construct();
		$this->load->model('berita_model'); //data berita model
		$this->load->model('kategori_berita_model'); //data kategori berita model
	}

	//index
	public function index(){


		$berita = $this->berita_model->berita_news();

		$data = array( 'title' 		=>	'Latest News | Smekda Media',

						'berita'	=>	 $berita,
						'isi'		=> 	'news/list');
		$this->load->view('layout/wrapper', $data);
	}

	//Read news
	public function read($slug_berita){
		$berita = $this->berita_model->read($slug_berita);

		$data = array( 'title' 		=>	 $berita->judul,
						'berita'	=>	 $berita,
						'isi'		=> 	'news/detail');
		$this->load->view('layout/wrapper', $data);
	}

}