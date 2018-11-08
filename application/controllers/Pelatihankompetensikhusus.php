<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Pelatihankompetensikhusus extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('mpelkhusus');
	}
 
	public function index(){
		$this->load->view('mobile/atasan');
		$this->load->view('mobile/navbar');

		$data['pelatihankompetensikhusus_content'] = $this->mpelkhusus->ambil_data()->result();
        $this->load->view('mobile/kontenpelatihankompetensikhusus',$data);
		$this->load->view('mobile/bawahan');
	}
 
}