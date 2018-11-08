<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pelatihankompetensikhusus_content extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pelatihankompetensikhusus_content_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'PostManager/Pelatihankompetensikhusus_content?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'PostManager/Pelatihankompetensikhusus_content?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'PostManager/Pelatihankompetensikhusus_content';
            $config['first_url'] = base_url() . 'PostManager/Pelatihankompetensikhusus_content';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pelatihankompetensikhusus_content_model->total_rows($q);
        $pelatihankompetensikhusus_content = $this->Pelatihankompetensikhusus_content_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pelatihankompetensikhusus_content_data' => $pelatihankompetensikhusus_content,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

                $data['content'] = 'pelatihankompetensikhusus_content/pelatihankompetensikhusus_content_list';
        $this->load->view('layouts/main', $data);
    }

    public function read($id) 
    {
        $row = $this->Pelatihankompetensikhusus_content_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'image' => $row->image,
		'caption' => $row->caption,
        'bahasa' => $row->bahasa,
	    );

                            $data['content'] = 'pelatihankompetensikhusus_content/pelatihankompetensikhusus_content_read';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Pelatihankompetensikhusus_content'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('PostManager/Pelatihankompetensikhusus_content/create_action'),
	    'id' => set_value('id'),
	    'image' => set_value('image'),
	    'caption' => set_value('caption'),
        'bahasa' => set_value('bahasa'),
	);

                        $data['content'] = 'pelatihankompetensikhusus_content/pelatihankompetensikhusus_content_form';
        $this->load->view('layouts/main', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'image' => $this->input->post('image',TRUE),
		'caption' => $this->input->post('caption',TRUE),
        'bahasa' => $this->input->post('bahasa',TRUE),
	    );

            $this->Pelatihankompetensikhusus_content_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('PostManager/Pelatihankompetensikhusus_content'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pelatihankompetensikhusus_content_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('PostManager/Pelatihankompetensikhusus_content/update_action'),
		'id' => set_value('id', $row->id),
		'image' => set_value('image', $row->image),
		'caption' => set_value('caption', $row->caption),
        'bahasa' => set_value('bahasa', $row->bahasa),
	    );
                            $data['content'] = 'pelatihankompetensikhusus_content/pelatihankompetensikhusus_content_form';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Pelatihankompetensikhusus_content'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'image' => $this->input->post('image',TRUE),
		'caption' => $this->input->post('caption',TRUE),
        'bahasa' => $this->input->post('bahasa',TRUE),
	    );

            $this->Pelatihankompetensikhusus_content_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('PostManager/Pelatihankompetensikhusus_content'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pelatihankompetensikhusus_content_model->get_by_id($id);

        if ($row) {
            $this->Pelatihankompetensikhusus_content_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('PostManager/Pelatihankompetensikhusus_content'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Pelatihankompetensikhusus_content'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('image', 'image', 'trim|required');
	$this->form_validation->set_rules('caption', 'caption', 'trim|required');
    $this->form_validation->set_rules('bahasa', 'bahasa', 'trim');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pelatihankompetensikhusus_content.php */
/* Location: ./application/controllers/Pelatihankompetensikhusus_content.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-01-02 15:21:51 */
/* http://harviacode.com */