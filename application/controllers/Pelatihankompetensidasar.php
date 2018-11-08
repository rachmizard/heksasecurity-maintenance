<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Pelatihankompetensidasar extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('mpelatihandasar');
	}
 
	public function index(){
		$this->load->view('mobile/pengatasan');
		$this->load->view('mobile/navbar');

		$data['pelatihankompetensidasar'] = $this->mpelatihandasar->ambil_data()->result();
        $this->load->view('mobile/kontenpelatihankompetensidasar',$data);
		$this->load->view('mobile/pelbawahan');
	}
 
}