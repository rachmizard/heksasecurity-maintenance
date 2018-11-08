<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pelatihankompetensikhusus_header extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pelatihankompetensikhusus_header_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pelatihankompetensikhusus_header/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pelatihankompetensikhusus_header/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pelatihankompetensikhusus_header/index.html';
            $config['first_url'] = base_url() . 'pelatihankompetensikhusus_header/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pelatihankompetensikhusus_header_model->total_rows($q);
        $pelatihankompetensikhusus_header = $this->Pelatihankompetensikhusus_header_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pelatihankompetensikhusus_header_data' => $pelatihankompetensikhusus_header,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('pelatihankompetensikhusus_header/pelatihankompetensikhusus_header_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pelatihankompetensikhusus_header_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'background' => $row->background,
		'caption_header' => $row->caption_header,
		'description' => $row->description,
	    );
            $this->load->view('pelatihankompetensikhusus_header/pelatihankompetensikhusus_header_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pelatihankompetensikhusus_header'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pelatihankompetensikhusus_header/create_action'),
	    'id' => set_value('id'),
	    'background' => set_value('background'),
	    'caption_header' => set_value('caption_header'),
	    'description' => set_value('description'),
	);
        $this->load->view('pelatihankompetensikhusus_header/pelatihankompetensikhusus_header_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'background' => $this->input->post('background',TRUE),
		'caption_header' => $this->input->post('caption_header',TRUE),
		'description' => $this->input->post('description',TRUE),
	    );

            $this->Pelatihankompetensikhusus_header_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pelatihankompetensikhusus_header'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pelatihankompetensikhusus_header_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pelatihankompetensikhusus_header/update_action'),
		'id' => set_value('id', $row->id),
		'background' => set_value('background', $row->background),
		'caption_header' => set_value('caption_header', $row->caption_header),
		'description' => set_value('description', $row->description),
	    );
            $this->load->view('pelatihankompetensikhusus_header/pelatihankompetensikhusus_header_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pelatihankompetensikhusus_header'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'background' => $this->input->post('background',TRUE),
		'caption_header' => $this->input->post('caption_header',TRUE),
		'description' => $this->input->post('description',TRUE),
	    );

            $this->Pelatihankompetensikhusus_header_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pelatihankompetensikhusus_header'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pelatihankompetensikhusus_header_model->get_by_id($id);

        if ($row) {
            $this->Pelatihankompetensikhusus_header_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pelatihankompetensikhusus_header'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pelatihankompetensikhusus_header'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('background', 'background', 'trim|required');
	$this->form_validation->set_rules('caption_header', 'caption header', 'trim|required');
	$this->form_validation->set_rules('description', 'description', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pelatihankompetensikhusus_header.php */
/* Location: ./application/controllers/Pelatihankompetensikhusus_header.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-01-02 15:21:51 */
/* http://harviacode.com */