<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Inihome extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}
 
	public function index(){
		
		    
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'home/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'home/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'home/index.html';
            $config['first_url'] = base_url() . 'home/index.html';
        }

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'home_data' => $home,
        );
    	$this->load->view('mobile/atasan');
		$this->load->view('mobile/navbar');
        $this->load->view('mobile/kontenhome', $data);
		$this->load->view('mobile/bawahan');
	}
 
}