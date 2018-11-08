<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Karir extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('mkarir');
	}
 
	public function index(){
		$this->load->view('mobile/up');
		$this->load->view('mobile/navbar');

		$data['karir'] = $this->mkarir->ambil_data()->result();
        $this->load->view('mobile/contentcareer',$data);
     	$this->load->view('mobile/down',$data);
           
	}

	public function getNavbar(){
		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);
		if($request){
			if($request->language != ''){
				if($request->language == 'ENG'){
					if($request->menu == ''){
						$request->menu = 'Home';
					}
					$data['url'] = $request->urlbase.'en/'.$request->menu;
					$data['status'] = 'success';
					echo json_encode($data);
				}else {
					$data['url'] = $request->urlbase.$request->menu;
					$data['status'] = 'success';
					echo json_encode($data);
				}
			}
		}else {
			$data['status'] = 'failed';
			echo json_encode($data);
		}
	}
 
}