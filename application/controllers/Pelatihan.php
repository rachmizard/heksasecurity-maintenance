<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Pelatihan extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('mpelatihan');
	}
 
	public function index(){
		$this->load->view('mobile/atasan');
		$this->load->view('mobile/navbar');
		$data['pelatihan'] = $this->mpelatihan->ambil_data()->result();
        $this->load->view('mobile/kontenpelatihan',$data);
		$this->load->view('mobile/bawahan');
	}
 
}