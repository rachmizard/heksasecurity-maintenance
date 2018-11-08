<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Gallery extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('mgalery');
	}
 
	public function index(){
		$this->load->view('mobile/atasan');
		$this->load->view('mobile/navbar');

$data['gallery'] = $this->mgalery->ambil_data()->result();


        $this->load->view('mobile/kontengallery',$data);
		$this->load->view('mobile/bawahan');
	}
 
}