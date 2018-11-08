<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Welcome extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('mhome');
	}
 
	public function index(){
		$this->load->view('mobile/atasan');
		$this->load->view('mobile/navbar');
		$data['home'] = $this->mhome->ambil_data()->result();
        $this->load->view('mobile/kontenhome',$data);
		$this->load->view('mobile/bawahan');
	}
 
}