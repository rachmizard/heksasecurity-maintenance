<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pelatihan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pelatihan_model');
        $this->load->library('form_validation');
        if($this->session->userdata('status') != "login"){
            redirect(base_url("PostManager/Pelatihan"));
        }
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'PostManager/Pelatihan?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'PostManager/Pelatihan?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'PostManager/Pelatihan';
            $config['first_url'] = base_url() . 'PostManager/Pelatihan';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pelatihan_model->total_rows($q);
        $pelatihan = $this->Pelatihan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pelatihan_data' => $pelatihan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['content'] = 'pelatihan/pelatihan_list';
        $this->load->view('layouts/main', $data);

    }

    public function read($id) 
    {
        $row = $this->Pelatihan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
        'captionb' => $row->captionb,
        'captionr' => $row->captionr,
        'captionb2' => $row->captionb2,
        'captionr2' => $row->captionr2,
        'sambutan' => $row->sambutan,
        'h1' => $row->h1,
        'h2' => $row->h2,
        'h3' => $row->h3,
        'bahasa' => $row->bahasa,
	    );

        $data['content'] = 'pelatihan/pelatihan_read';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Pelatihan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('PostManager/Pelatihan/create_action'),
	     'id' => set_value('id'),
        'captionb' => set_value('captionb'),
        'captionr' => set_value('captionr'),
        'captionb2' => set_value('captionb2'),
        'captionr2' => set_value('captionr2'),
        'sambutan' => set_value('sambutan'),
        'h1' => set_value('h1'),
        'h2' => set_value('h2'),
        'h3' => set_value('h3'),
        'bahasa' => set_value('bahasa'),
	);

        $data['content'] = 'pelatihan/pelatihan_form';
        $this->load->view('layouts/main', $data);

    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'captionb' => $this->input->post('captionb',TRUE),
        'captionr' => $this->input->post('captionr',TRUE),
        'captionb2' => $this->input->post('captionb2',TRUE),
        'captionr2' => $this->input->post('captionr2',TRUE),
        'sambutan' => $this->input->post('sambutan',TRUE),
        'h1' => $this->input->post('h1',TRUE),
        'h2' => $this->input->post('h2',TRUE),
        'h3' => $this->input->post('h3',TRUE),

        'bahasa' => $this->input->post('bahasa',TRUE),
	    );

            $this->Pelatihan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('PostManager/Pelatihan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pelatihan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('PostManager/Pelatihan/update_action'),
		'id' => set_value('id', $row->id),
        'captionb' => set_value('captionb', $row->captionb),
        'captionr' => set_value('captionr', $row->captionr),
        'captionb2' => set_value('captionb2', $row->captionb2),
        'captionr2' => set_value('captionr2', $row->captionr2),
        'sambutan' => set_value('sambutan', $row->sambutan),
        'h1' => set_value('h1', $row->bahasa),
        'h2' => set_value('h2', $row->bahasa),
        'h3' => set_value('h3', $row->bahasa),
        'bahasa' => set_value('bahasa', $row->bahasa),
	    );

                    $data['content'] = 'pelatihan/pelatihan_form';
        $this->load->view('layouts/main', $data);

        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Pelatihan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'captionb' => $this->input->post('captionb',TRUE),
        'captionr' => $this->input->post('captionr',TRUE),
        'captionb2' => $this->input->post('captionb2',TRUE),
        'captionr2' => $this->input->post('captionr2',TRUE),
        'sambutan' => $this->input->post('sambutan',TRUE),
        'h1' => $this->input->post('h1',TRUE),
        'h2' => $this->input->post('h2',TRUE),
        'h3' => $this->input->post('h3',TRUE),
        'bahasa' => $this->input->post('bahasa',TRUE),
	    );

            $this->Pelatihan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('PostManager/Pelatihan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pelatihan_model->get_by_id($id);

        if ($row) {
            $this->Pelatihan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('PostManager/Pelatihan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Pelatihan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('captionb', 'captionb', 'trim');
    $this->form_validation->set_rules('captionr', 'captionr', 'trim');
    $this->form_validation->set_rules('captionb2', 'captionb2', 'trim');
    $this->form_validation->set_rules('captionr2', 'captionr2', 'trim');
    $this->form_validation->set_rules('sambutan', 'sambutan', 'trim');
    $this->form_validation->set_rules('h1', 'h1', 'trim');
    $this->form_validation->set_rules('h2', 'h2', 'trim');
    $this->form_validation->set_rules('h3', 'h3', 'trim');
    $this->form_validation->set_rules('bahasa', 'bahasa', 'trim');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pelatihan.php */
/* Location: ./application/controllers/Pelatihan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-01-02 15:21:51 */
/* http://harviacode.com */