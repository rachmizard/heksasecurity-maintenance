<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengamanan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pengamanan_model');
        $this->load->library('form_validation');
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'PostManager/Pengamanan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'PostManager/Pengamanan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'PostManager/Pengamanan/index.html';
            $config['first_url'] = base_url() . 'PostManager/Pengamanan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pengamanan_model->total_rows($q);
        $pengamanan = $this->Pengamanan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pengamanan_data' => $pengamanan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $data['content'] = 'pengamanan/pengamanan_list';
        $this->load->view('layouts/main', $data);
    }

    public function read($id) 
    {
        $row = $this->Pengamanan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'logo' => $row->logo,
		'caption_black' => $row->caption_black,
		'caption_red' => $row->caption_red,
		'description' => $row->description,
        'logo2' => $row->logo2,
        'caption_black2' => $row->caption_black2,
        'caption_red2' => $row->caption_red2,
        'description2' => $row->description2,
        'logo3' => $row->logo3,
        'caption_black3' => $row->caption_black3,
        'caption_red3' => $row->caption_red3,
        'description3' => $row->description3,
        'bahasa' => $row->bahasa,
	    );
            
        $data['content'] = 'pengamanan/pengamanan_read';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Pengamanan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('PostManager/Pengamanan/create_action'),
	    'id' => set_value('id'),
	    'logo' => set_value('logo'),
	    'caption_black' => set_value('caption_black'),
	    'caption_red' => set_value('caption_red'),
	    'description' => set_value('description'),
        'logo2' => set_value('logo2'),
        'caption_black2' => set_value('caption_black2'),
        'caption_red2' => set_value('caption_red2'),
        'description2' => set_value('description2'),
        'logo3' => set_value('logo3'),
        'caption_black3' => set_value('caption_black3'),
        'caption_red3' => set_value('caption_red3'),
        'description3' => set_value('description3'),
        'bahasa' => set_value('bahasa'),
	);

        $data['content'] = 'pengamanan/pengamanan_form';
        $this->load->view('layouts/main', $data);

    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'logo' => $this->input->post('logo',TRUE),
		'caption_black' => $this->input->post('caption_black',TRUE),
		'caption_red' => $this->input->post('caption_red',TRUE),
		'description' => $this->input->post('description',TRUE),
        'logo2' => $this->input->post('logo2',TRUE),
        'caption_black2' => $this->input->post('caption_black2',TRUE),
        'caption_red2' => $this->input->post('caption_red2',TRUE),
        'description2' => $this->input->post('description2',TRUE),
        'logo3' => $this->input->post('logo3',TRUE),
        'caption_black3' => $this->input->post('caption_black3',TRUE),
        'caption_red3' => $this->input->post('caption_red3',TRUE),
        'description3' => $this->input->post('description3',TRUE),
        'bahasa' => $this->input->post('bahasa',TRUE),
	    );

            $this->Pengamanan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('PostManager/Pengamanan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pengamanan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('PostManager/Pengamanan/update_action'),
		'id' => set_value('id', $row->id),
		'logo' => set_value('logo', $row->logo),
		'caption_black' => set_value('caption_black', $row->caption_black),
		'caption_red' => set_value('caption_red', $row->caption_red),
		'description' => set_value('description', $row->description),
        'logo2' => set_value('logo', $row->logo2),
        'caption_black2' => set_value('caption_black2', $row->caption_black2),
        'caption_red2' => set_value('caption_red2', $row->caption_red2),
        'description2' => set_value('description2', $row->description2),
        'logo3' => set_value('logo3', $row->logo3),
        'caption_black3' => set_value('caption_black3', $row->caption_black3),
        'caption_red3' => set_value('caption_red3', $row->caption_red3),
        'description3' => set_value('description3', $row->description3),
        'bahasa' => set_value('bahasa', $row->bahasa),
	    );

        $data['content'] = 'pengamanan/pengamanan_form';
        $this->load->view('layouts/main', $data);

        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Pengamanan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'logo' => $this->input->post('logo',TRUE),
		'caption_black' => $this->input->post('caption_black',TRUE),
		'caption_red' => $this->input->post('caption_red',TRUE),
		'description' => $this->input->post('description',TRUE),
        'logo2' => $this->input->post('logo2',TRUE),
        'caption_black2' => $this->input->post('caption_black2',TRUE),
        'caption_red2' => $this->input->post('caption_red2',TRUE),
        'description2' => $this->input->post('description2',TRUE),
        'logo3' => $this->input->post('logo3',TRUE),
        'caption_black3' => $this->input->post('caption_black3',TRUE),
        'caption_red3' => $this->input->post('caption_red3',TRUE),
        'description3' => $this->input->post('description3',TRUE),
        'bahasa' => $this->input->post('bahasa',TRUE),
	    );

            $this->Pengamanan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('PostManager/Pengamanan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pengamanan_model->get_by_id($id);

        if ($row) {
            $this->Pengamanan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('PostManager/Pengamanan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Pengamanan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('logo', 'logo', 'trim|required');
	$this->form_validation->set_rules('caption_black', 'caption black', 'trim|required');
	$this->form_validation->set_rules('caption_red', 'caption red', 'trim|required');
	$this->form_validation->set_rules('description', 'description', 'trim|required');


    $this->form_validation->set_rules('logo2', 'logo 2', 'trim|required');
    $this->form_validation->set_rules('caption_black2', 'caption black 2', 'trim|required');
    $this->form_validation->set_rules('caption_red2', 'caption red 2', 'trim|required');
    $this->form_validation->set_rules('description2', 'description 2', 'trim|required');

    $this->form_validation->set_rules('logo3', 'logo 3', 'trim|required');
    $this->form_validation->set_rules('caption_black3', 'caption black 3', 'trim|required');
    $this->form_validation->set_rules('caption_red3', 'caption red 3', 'trim|required');
    $this->form_validation->set_rules('description3', 'description 3', 'trim|required');


    $this->form_validation->set_rules('bahasa', 'bahasa', 'trim');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pengamanan.php */
/* Location: ./application/controllers/Pengamanan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-01-02 15:21:52 */
/* http://harviacode.com */