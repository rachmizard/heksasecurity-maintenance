<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Pengamanan extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('mpengamanan');

	}
 
	public function index(){
		$this->load->view('mobile/atasan');
		$this->load->view('mobile/navbar');

		$data['pengamanan'] = $this->mpengamanan->ambil_data()->result();
        $this->load->view('mobile/kontenpengamanan',$data);
		$this->load->view('mobile/bawahan');
	}
 
}