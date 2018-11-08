<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Artikel extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('martikel');
	}

	public function index(){
		$this->load->view('mobile/atasan');
		$this->load->view('mobile/navbar');

		$data['hotnews'] = $this->martikel->hotnews_data()->result();
		$data['berita'] = $this->martikel->berita_data()->result();
		$data['artikel'] = $this->martikel->artikel_data()->result();
        $this->load->view('mobile/kontennews',$data);
		$this->load->view('mobile/bawahan');
	}
 
}