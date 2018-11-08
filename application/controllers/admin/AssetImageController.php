<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AssetImageController extends CI_Controller {
	function __construct() {
		parent::__construct();
	}

	public function index(){
		$data['content'] = 'admin/p_assetimage';
		$this->load->view('layouts/main', $data);
	}
}