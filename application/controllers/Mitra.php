<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Mitra extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('mmitra');
	}
 
	public function index(){
		$this->load->view('mobile/atasan');
		$this->load->view('mobile/navbar');
		$data['mitra'] = $this->mmitra->ambil_data()->result();
        $this->load->view('mobile/kontenmitra',$data);
		$this->load->view('mobile/bawahan');
	}
 
}