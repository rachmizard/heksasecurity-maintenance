<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kontak_model');
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
            $config['base_url'] = base_url() . 'PostManager/Kontak/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'PostManager/Kontak/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'PostManager/Kontak/index.html';
            $config['first_url'] = base_url() . 'PostManager/Kontak/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Kontak_model->total_rows($q);
        $kontak = $this->Kontak_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'kontak_data' => $kontak,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
                $data['content'] = 'kontak/kontak_list';
        $this->load->view('layouts/main', $data);
    }

    public function read($id) 
    {
        $row = $this->Kontak_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'alamat' => $row->alamat,
		'telepon' => $row->telepon,
		'fax' => $row->fax,
		'no_hp' => $row->no_hp,
        'bahasa' => $row->bahasa,
	    );

             $data['content'] = 'kontak/kontak_read';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Kontak'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('PostManager/Kontak/create_action'),
	    'id' => set_value('id'),
	    'alamat' => set_value('alamat'),
	    'telepon' => set_value('telepon'),
	    'fax' => set_value('fax'),
	    'no_hp' => set_value('no_hp'),
        'bahasa' => set_value('bahasa'),
	);
         $data['content'] = 'kontak/kontak_form';
        $this->load->view('layouts/main', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'alamat' => $this->input->post('alamat',TRUE),
		'telepon' => $this->input->post('telepon',TRUE),
		'fax' => $this->input->post('fax',TRUE),
		'no_hp' => $this->input->post('no_hp',TRUE),
        'bahasa' => $this->input->post('bahasa',TRUE),
	    );

            $this->Kontak_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('PostManager/Kontak'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kontak_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('PostManager/Kontak/update_action'),
		'id' => set_value('id', $row->id),
		'alamat' => set_value('alamat', $row->alamat),
		'telepon' => set_value('telepon', $row->telepon),
		'fax' => set_value('fax', $row->fax),
		'no_hp' => set_value('no_hp', $row->no_hp),
        'bahasa' => set_value('bahasa', $row->bahasa),
	    );

             $data['content'] = 'kontak/kontak_form';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Kontak'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'alamat' => $this->input->post('alamat',TRUE),
		'telepon' => $this->input->post('telepon',TRUE),
		'fax' => $this->input->post('fax',TRUE),
		'no_hp' => $this->input->post('no_hp',TRUE),
        'bahasa' => $this->input->post('bahasa',TRUE),
	    );

            $this->Kontak_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('PostManager/Kontak'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kontak_model->get_by_id($id);

        if ($row) {
            $this->Kontak_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('PostManager/Kontak'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Kontak'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
	$this->form_validation->set_rules('fax', 'fax', 'trim|required');
	$this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');
    $this->form_validation->set_rules('bahasa', 'bahasa', 'trim');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-01-02 18:00:10 */
/* http://harviacode.com */