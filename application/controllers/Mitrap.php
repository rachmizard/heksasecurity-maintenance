<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Mitrap extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Mmp');
	}
 
	public function index(){

		 $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'Mitrapengamanan?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'Mitrapengamanan?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'Mitrapengamanan/';
            $config['first_url'] = base_url() . 'Mitrapengamanan/';
        }

        $config['per_page'] = 200;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Mmp->total_rows($q);
        $mitrapengamanan = $this->Mmp->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'mitrapengamanan_data' => $mitrapengamanan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

		$this->load->view('mobile/atasan');
		$this->load->view('mobile/navbar_en');
		$data['mitrapengamanan'] = $this->Mmp->ambil_data();
        $this->load->view('mobile/kontenmitrapengaman',$data);
		$this->load->view('mobile/bawahan');
	}
}