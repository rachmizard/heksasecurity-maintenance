<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Testimoni extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('mtestimoni');
	}
 
	public function index(){
		$this->load->view('mobile/atasan');
		$this->load->view('mobile/navbar');

		$data['testimoni'] = $this->mtestimoni->ambil_data()->result();
        $this->load->view('mobile/kontentestimoni',$data);
		$this->load->view('mobile/bawahan');
	}
 
}