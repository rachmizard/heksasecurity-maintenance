<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class About extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('mabout');
	}
 
	public function index(){
		$this->load->view('mobile/atasan');
		$this->load->view('mobile/navbar');

		$data['about'] = $this->mabout->ambil_data()->result();
        $this->load->view('mobile/kontenlegalitas',$data);
        
		$this->load->view('mobile/bawahan');



	}
 
}


