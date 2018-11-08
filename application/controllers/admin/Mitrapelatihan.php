<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mitrapelatihan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mitrapelatihan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'PostManager/Mitrapelatihan?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'PostManager/Mitrapelatihan?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'PostManager/Mitrapelatihan';
            $config['first_url'] = base_url() . 'PostManager/Mitrapelatihan';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Mitrapelatihan_model->total_rows($q);
        $mitrapelatihan = $this->Mitrapelatihan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'mitrapelatihan_data' => $mitrapelatihan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
         $data['content'] = 'mitrapelatihan/mitrapelatihan_list';
        $this->load->view('layouts/main', $data);
    }

    public function read($id) 
    {
        $row = $this->Mitrapelatihan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama' => $row->nama,
		'tempat' => $row->tempat,
		'tahun' => $row->tahun,
        'bahasa' => $row->bahasa,
	    );


         $data['content'] = 'mitrapelatihan/mitrapelatihan_read';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Mitrapelatihan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('PostManager/Mitrapelatihan/create_action'),
	    'id' => set_value('id'),
	    'nama' => set_value('nama'),
	    'tempat' => set_value('tempat'),
	    'tahun' => set_value('tahun'),
        'bahasa' => set_value('bahasa'),
	);
                 $data['content'] = 'mitrapelatihan/mitrapelatihan_form';
        $this->load->view('layouts/main', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'tempat' => $this->input->post('tempat',TRUE),
		'tahun' => $this->input->post('tahun',TRUE),
        'bahasa' => $this->input->post('bahasa',TRUE),
	    );

            $this->Mitrapelatihan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('PostManager/Mitrapelatihan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Mitrapelatihan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('PostManager/Mitrapelatihan/update_action'),
		'id' => set_value('id', $row->id),
		'nama' => set_value('nama', $row->nama),
		'tempat' => set_value('tempat', $row->tempat),
		'tahun' => set_value('tahun', $row->tahun),
        'bahasa' => set_value('bahasa', $row->bahasa),
	    );
         $data['content'] = 'mitrapelatihan/mitrapelatihan_form';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Mitrapelatihan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'tempat' => $this->input->post('tempat',TRUE),
		'tahun' => $this->input->post('tahun',TRUE),
        'bahasa' => $this->input->post('bahasa',TRUE),
	    );

            $this->Mitrapelatihan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('PostManager/Mitrapelatihan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Mitrapelatihan_model->get_by_id($id);

        if ($row) {
            $this->Mitrapelatihan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('PostManager/Mitrapelatihan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Mitrapelatihan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('tempat', 'tempat', 'trim');
	$this->form_validation->set_rules('tahun', 'tahun', 'trim');
    $this->form_validation->set_rules('bahasa', 'bahasa', 'trim');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Mitrapelatihan.php */
/* Location: ./application/controllers/Mitrapelatihan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-01-02 15:21:50 */
/* http://harviacode.com */