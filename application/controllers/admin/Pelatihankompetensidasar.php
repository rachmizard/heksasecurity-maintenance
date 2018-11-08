<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pelatihankompetensidasar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pelatihankompetensidasar_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'PostManager/Pelatihankompetensidasar/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'PostManager/Pelatihankompetensidasar/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'PostManager/Pelatihankompetensidasar/index.html';
            $config['first_url'] = base_url() . 'PostManager/Pelatihankompetensidasar/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pelatihankompetensidasar_model->total_rows($q);
        $pelatihankompetensidasar = $this->Pelatihankompetensidasar_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pelatihankompetensidasar_data' => $pelatihankompetensidasar,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

                $data['content'] = 'pelatihankompetensidasar/pelatihankompetensidasar_list';
        $this->load->view('layouts/main', $data);
    }

    public function read($id) 
    {
        $row = $this->Pelatihankompetensidasar_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'logo' => $row->logo,
		'caption_black' => $row->caption_black,
		'caption_red' => $row->caption_red,
		'description' => $row->description,
		'persyaratan' => $row->persyaratan,
		'image_jadwal' => $row->image_jadwal,
        'bahasa' => $row->bahasa,
	    );

                    $data['content'] = 'pelatihankompetensidasar/pelatihankompetensidasar_read';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pelatihankompetensidasar'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('PostManager/Pelatihankompetensidasar/create_action'),
	    'id' => set_value('id'),
	    'logo' => set_value('logo'),
	    'caption_black' => set_value('caption_black'),
	    'caption_red' => set_value('caption_red'),
	    'description' => set_value('description'),
	    'persyaratan' => set_value('persyaratan'),
	    'image_jadwal' => set_value('image_jadwal'),
        'bahasa' => set_value('bahasa'),
	);
                $data['content'] = 'pelatihankompetensidasar/pelatihankompetensidasar_form';
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
		'persyaratan' => $this->input->post('persyaratan',TRUE),
		'image_jadwal' => $this->input->post('image_jadwal',TRUE),
        'bahasa' => $this->input->post('bahasa',TRUE),
	    );

            $this->Pelatihankompetensidasar_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('PostManager/Pelatihankompetensidasar'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pelatihankompetensidasar_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('PostManager/Pelatihankompetensidasar/update_action'),
		'id' => set_value('id', $row->id),
		'logo' => set_value('logo', $row->logo),
		'caption_black' => set_value('caption_black', $row->caption_black),
		'caption_red' => set_value('caption_red', $row->caption_red),
		'description' => set_value('description', $row->description),
		'persyaratan' => set_value('persyaratan', $row->persyaratan),
		'image_jadwal' => set_value('image_jadwal', $row->image_jadwal),
        'bahasa' => set_value('bahasa', $row->bahasa),
	    );
        $data['content'] = 'pelatihankompetensidasar/pelatihankompetensidasar_form';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Pelatihankompetensidasar'));
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
		'persyaratan' => $this->input->post('persyaratan',TRUE),
		'image_jadwal' => $this->input->post('image_jadwal',TRUE),
        'bahasa' => $this->input->post('bahasa',TRUE),
	    );

            $this->Pelatihankompetensidasar_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('PostManager/Pelatihankompetensidasar'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pelatihankompetensidasar_model->get_by_id($id);

        if ($row) {
            $this->Pelatihankompetensidasar_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('PostManager/Pelatihankompetensidasar'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Pelatihankompetensidasar'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('logo', 'logo', 'trim|required');
	$this->form_validation->set_rules('caption_black', 'caption black', 'trim|required');
	$this->form_validation->set_rules('caption_red', 'caption red', 'trim|required');
	$this->form_validation->set_rules('description', 'description', 'trim|required');
	$this->form_validation->set_rules('persyaratan', 'persyaratan', 'trim|required');
	$this->form_validation->set_rules('image_jadwal', 'image jadwal', 'trim|required');
    $this->form_validation->set_rules('bahasa', 'bahasa', 'trim');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pelatihankompetensidasar.php */
/* Location: ./application/controllers/Pelatihankompetensidasar.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-01-02 15:21:51 */
/* http://harviacode.com */