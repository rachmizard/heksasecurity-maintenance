<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Filtermitra extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mfiltermitra');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'filter_mitra/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'filter_mitra/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'filter_mitra/index.html';
            $config['first_url'] = base_url() . 'filter_mitra/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Mfiltermitra->total_rows($q);
        $filter_mitra = $this->Mfiltermitra->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'filter_mitra_data' => $filter_mitra,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['content'] = 'filter/filter_list';
        $this->load->view('layouts/main', $data);
    }

    public function read($id) 
    {
        $row = $this->Mfiltermitra->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'tahun' => $row->tahun,
        'objek' => $row->objek,
        'provinsi' => $row->provinsi,
        'status' => $row->status,
        
	    );
            $data['content'] = 'filter/filter_read';
            $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Filtermitra/Filtermitra'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('PostManager/Filtermitra/create_action'),
	    'id' => set_value('id'),
        'tahun' => set_value('objek'),
	    'objek' => set_value('objek'),
        'provinsi' => set_value('provinsi'),
        'status' => set_value('status'),
	);
        $data['content'] = 'filter/filter_form';
       $this->load->view('layouts/main', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tahun' => $this->input->post('tahun',TRUE),
        'objek' => $this->input->post('objek',TRUE),
        'provinsi' => $this->input->post('provinsi',TRUE),
        'status' => $this->input->post('status',TRUE),
	    );

            $this->Mfiltermitra->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('PostManager/Filtermitra'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Mfiltermitra->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('PostManager/Filtermitra/update_action'),
		'id' => set_value('id', $row->id),
		'tahun' => set_value('tahun', $row->tahun),
        'objek' => set_value('objek', $row->objek),
        'provinsi' => set_value('provinsi', $row->provinsi),
        'status' => set_value('status', $row->status),
	    );
        $data['content'] = 'filter/filter_form';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Filtermitra'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'tahun' => $this->input->post('tahun',TRUE),
        'objek' => $this->input->post('objek',TRUE),
        'provinsi' => $this->input->post('provinsi',TRUE),
        'status' => $this->input->post('status',TRUE),
	    );

            $this->Mfiltermitra->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('PostManager/Filtermitra'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Mfiltermitra->get_by_id($id);

        if ($row) {
            $this->Mfiltermitra->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('PostManager/Filtermitra'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Filtermitra'));
        }
    }

    public function _rules() 
    {

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file filter_mitra.php */
/* Location: ./application/controllers/filter_mitra.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-01-02 15:21:49 */
/* http://harviacode.com */