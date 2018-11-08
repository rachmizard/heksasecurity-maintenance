<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Home extends CI_Controller {
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
		public function getNavbar(){
			$postdata = file_get_contents("php://input");
			$request = json_decode($postdata);
			if($request){
				if($request->language != ''){
					if($request->language == 'US'){
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