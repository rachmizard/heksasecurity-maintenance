<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Karir extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Karir_model');
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
            $config['base_url'] = base_url() . 'PostManager/Karir/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'PostManager/Karir/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'PostManager/Karir/index.html';
            $config['first_url'] = base_url() . 'PostManager/Karir/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Karir_model->total_rows($q);
        $karir = $this->Karir_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'karir_data' => $karir,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $data['content'] = 'karir/karir_list';
        $this->load->view('layouts/main', $data);

    }

    public function read($id) 
    {
        $row = $this->Karir_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'pengumuman_security' => $row->pengumuman_security,
		'persyaratan_security' => $row->persyaratan_security,
		'pengumuman_nonsecurity' => $row->pengumuman_nonsecurity,
		'persyaratan_nonsecurity' => $row->persyaratan_nonsecurity,
        'bahasa' => $row->bahasa,
	    );

                    $data['content'] = 'karir/karir_read';
        $this->load->view('layouts/main', $data);

        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Karir'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('PostManager/Karir/create_action'),
	    'id' => set_value('id'),
	    'pengumuman_security' => set_value('pengumuman_security'),
	    'persyaratan_security' => set_value('persyaratan_security'),
	    'pengumuman_nonsecurity' => set_value('pengumuman_nonsecurity'),
	    'persyaratan_nonsecurity' => set_value('persyaratan_nonsecurity'),
        'bahasa' => set_value('bahasa'),
	);

                $data['content'] = 'karir/karir_form';
        $this->load->view('layouts/main', $data);

    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'pengumuman_security' => $this->input->post('pengumuman_security',TRUE),
		'persyaratan_security' => $this->input->post('persyaratan_security',TRUE),
		'pengumuman_nonsecurity' => $this->input->post('pengumuman_nonsecurity',TRUE),
		'persyaratan_nonsecurity' => $this->input->post('persyaratan_nonsecurity',TRUE),
        'bahasa' => $this->input->post('bahasa',TRUE),
	    );

            $this->Karir_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('PostManager/Karir'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Karir_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('PostManager/Karir/update_action'),
		'id' => set_value('id', $row->id),
		'pengumuman_security' => set_value('pengumuman_security', $row->pengumuman_security),
		'persyaratan_security' => set_value('persyaratan_security', $row->persyaratan_security),
		'pengumuman_nonsecurity' => set_value('pengumuman_nonsecurity', $row->pengumuman_nonsecurity),
		'persyaratan_nonsecurity' => set_value('persyaratan_nonsecurity', $row->persyaratan_nonsecurity),
        'bahasa' => set_value('bahasa', $row->bahasa),
	    );

                    $data['content'] = 'karir/karir_form';
        $this->load->view('layouts/main', $data);

        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Karir'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'pengumuman_security' => $this->input->post('pengumuman_security',TRUE),
		'persyaratan_security' => $this->input->post('persyaratan_security',TRUE),
		'pengumuman_nonsecurity' => $this->input->post('pengumuman_nonsecurity',TRUE),
		'persyaratan_nonsecurity' => $this->input->post('persyaratan_nonsecurity',TRUE),
        'bahasa' => $this->input->post('bahasa',TRUE),
	    );

            $this->Karir_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('PostManager/Karir'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Karir_model->get_by_id($id);

        if ($row) {
            $this->Karir_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('PostManager/Karir'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Karir'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('pengumuman_security', 'pengumuman security', 'trim|required');
	$this->form_validation->set_rules('persyaratan_security', 'persyaratan security', 'trim|required');
	$this->form_validation->set_rules('pengumuman_nonsecurity', 'pengumuman nonsecurity', 'trim|required');
	$this->form_validation->set_rules('persyaratan_nonsecurity', 'persyaratan nonsecurity', 'trim|required');
    $this->form_validation->set_rules('bahasa', 'bahasa', 'trim');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Karir.php */
/* Location: ./application/controllers/Karir.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-01-02 15:21:50 */
/* http://harviacode.com */