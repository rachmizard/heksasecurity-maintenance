<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Mitrapelatihan extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('mitrapelat');
	}
 
	public function index(){
		$this->load->view('mobile/atasan');
		$this->load->view('mobile/navbar');
		$data['mitrapelatihan'] = $this->mitrapelat->ambil_data()->result();
        $this->load->view('mobile/kontenmitrapelatihan',$data);
		$this->load->view('mobile/bawahan');
	}
 
}