<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lamarkerja extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('About_model');
        $this->load->library('form_validation');

        if($this->session->userdata('status') != "login"){
            redirect(base_url("PostManager/About"));
        }
        
    }


     public function index()
    {
            $data['content'] = 'Lamar_Kerja/index';
            $this->load->view('layouts/main', $data);
    }

}