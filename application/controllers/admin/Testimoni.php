<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Testimoni extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Testimoni_model');
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
            $config['base_url'] = base_url() . 'PostManager/Testimoni?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'PostManager/Testimoni?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'PostManager/Testimoni';
            $config['first_url'] = base_url() . 'PostManager/Testimoni';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Testimoni_model->total_rows($q);
        $testimoni = $this->Testimoni_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'testimoni_data' => $testimoni,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['content'] = 'testimoni/testimoni_list';
        $this->load->view('layouts/main', $data);

    }

    public function read($id) 
    {
        $row = $this->Testimoni_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'image' => $row->image,
	    );

                    $data['content'] = 'testimoni/testimoni_read';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Testimoni'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('PostManager/Testimoni/create_action'),
	    'id' => set_value('id'),
	    'image' => set_value('image'),
	);

                $data['content'] = 'testimoni/testimoni_form';
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
	    );

            $this->Testimoni_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('PostManager/Testimoni/create'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Testimoni_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('PostManager/Testimoni/update_action'),
		'id' => set_value('id', $row->id),
		'image' => set_value('image', $row->image),
	    );

                    $data['content'] = 'testimoni/testimoni_form';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Testimoni'));
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
	    );

            $this->Testimoni_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('PostManager/Testimoni'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Testimoni_model->get_by_id($id);

        if ($row) {
            $this->Testimoni_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('PostManager/Testimoni'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Testimoni'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('image', 'image', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Testimoni.php */
/* Location: ./application/controllers/Testimoni.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-01-02 15:21:52 */
/* http://harviacode.com */