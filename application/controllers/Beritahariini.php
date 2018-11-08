<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Beritahariini extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('mbh');
	}

	public function index(){
	    if(isset($_GET['id'])){
    	    $id = $_GET['id'];
    	    $data['beritahariini'] = $this->mbh->ambil_data_berita($id)->result();
    	    $data["txt_header"] = "Artikel dan Berita";
    		$this->load->view('mobile/atasan');
    		$this->load->view('mobile/navbar');
            $this->load->view('mobile/singglecontent',$data);
    		$this->load->view('mobile/bawahan');
	    }
	}
 
}