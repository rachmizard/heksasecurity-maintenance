<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
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
            $config['base_url'] = base_url() . 'PostManager/Berita/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'PostManager/Berita/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'PostManager/Berita/index.html';
            $config['first_url'] = base_url() . 'PostManager/Berita/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Berita_model->total_rows($q);
        $berita = $this->Berita_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'berita_data' => $berita,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $data['content'] = 'berita/berita_list';
        $this->load->view('layouts/main', $data);
    }

    public function read($id) 
    {
        $row = $this->Berita_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'image_slider_1' => $row->image_slider_1,
		'caption_slider_1' => $row->caption_slider_1,
		'image_slider_2' => $row->image_slider_2,
		'caption_slider_2' => $row->caption_slider_2,
		'image_slider_3' => $row->image_slider_3,
		'caption_slider_3' => $row->caption_slider_3,
		'image_artikel_1' => $row->image_artikel_1,
		'caption_artikel_1' => $row->caption_artikel_1,
		'image_artikel_2' => $row->image_artikel_2,
		'caption_artikel_2' => $row->caption_artikel_2,
		'image_artikel_3' => $row->image_artikel_3,
		'caption_artikel_3' => $row->caption_artikel_3,
		'image_berita_1' => $row->image_berita_1,
		'caption_berita_1' => $row->caption_berita_1,
		'image_berita_2' => $row->image_berita_2,
		'caption_berita_2' => $row->caption_berita_2,
		'image_berita_3' => $row->image_berita_3,
		'caption_berita_3' => $row->caption_berita_3,
        'bahasa' => $row->bahasa,
	    );

        $data['content'] = 'berita/berita_read';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Berita'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('PostManager/Berita/create_action'),
	    'id' => set_value('id'),
	    'image_slider_1' => set_value('image_slider_1'),
	    'caption_slider_1' => set_value('caption_slider_1'),
	    'image_slider_2' => set_value('image_slider_2'),
	    'caption_slider_2' => set_value('caption_slider_2'),
	    'image_slider_3' => set_value('image_slider_3'),
	    'caption_slider_3' => set_value('caption_slider_3'),
	    'image_artikel_1' => set_value('image_artikel_1'),
	    'caption_artikel_1' => set_value('caption_artikel_1'),
	    'image_artikel_2' => set_value('image_artikel_2'),
	    'caption_artikel_2' => set_value('caption_artikel_2'),
	    'image_artikel_3' => set_value('image_artikel_3'),
	    'caption_artikel_3' => set_value('caption_artikel_3'),
	    'image_berita_1' => set_value('image_berita_1'),
	    'caption_berita_1' => set_value('caption_berita_1'),
	    'image_berita_2' => set_value('image_berita_2'),
	    'caption_berita_2' => set_value('caption_berita_2'),
	    'image_berita_3' => set_value('image_berita_3'),
	    'caption_berita_3' => set_value('caption_berita_3'),
        'bahasa' => set_value('bahasa'),
	);

        $data['content'] = 'berita/berita_form';
        $this->load->view('layouts/main', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'image_slider_1' => $this->input->post('image_slider_1',TRUE),
		'caption_slider_1' => $this->input->post('caption_slider_1',TRUE),
		'image_slider_2' => $this->input->post('image_slider_2',TRUE),
		'caption_slider_2' => $this->input->post('caption_slider_2',TRUE),
		'image_slider_3' => $this->input->post('image_slider_3',TRUE),
		'caption_slider_3' => $this->input->post('caption_slider_3',TRUE),
		'image_artikel_1' => $this->input->post('image_artikel_1',TRUE),
		'caption_artikel_1' => $this->input->post('caption_artikel_1',TRUE),
		'image_artikel_2' => $this->input->post('image_artikel_2',TRUE),
		'caption_artikel_2' => $this->input->post('caption_artikel_2',TRUE),
		'image_artikel_3' => $this->input->post('image_artikel_3',TRUE),
		'caption_artikel_3' => $this->input->post('caption_artikel_3',TRUE),
		'image_berita_1' => $this->input->post('image_berita_1',TRUE),
		'caption_berita_1' => $this->input->post('caption_berita_1',TRUE),
		'image_berita_2' => $this->input->post('image_berita_2',TRUE),
		'caption_berita_2' => $this->input->post('caption_berita_2',TRUE),
		'image_berita_3' => $this->input->post('image_berita_3',TRUE),
		'caption_berita_3' => $this->input->post('caption_berita_3',TRUE),
        'bahasa' => $this->input->post('bahasa',TRUE),
	    );

            $this->Berita_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('PostManager/Berita'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Berita_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('PostManager/Berita/update_action'),
		'id' => set_value('id', $row->id),
		'image_slider_1' => set_value('image_slider_1', $row->image_slider_1),
		'caption_slider_1' => set_value('caption_slider_1', $row->caption_slider_1),
		'image_slider_2' => set_value('image_slider_2', $row->image_slider_2),
		'caption_slider_2' => set_value('caption_slider_2', $row->caption_slider_2),
		'image_slider_3' => set_value('image_slider_3', $row->image_slider_3),
		'caption_slider_3' => set_value('caption_slider_3', $row->caption_slider_3),
		'image_artikel_1' => set_value('image_artikel_1', $row->image_artikel_1),
		'caption_artikel_1' => set_value('caption_artikel_1', $row->caption_artikel_1),
		'image_artikel_2' => set_value('image_artikel_2', $row->image_artikel_2),
		'caption_artikel_2' => set_value('caption_artikel_2', $row->caption_artikel_2),
		'image_artikel_3' => set_value('image_artikel_3', $row->image_artikel_3),
		'caption_artikel_3' => set_value('caption_artikel_3', $row->caption_artikel_3),
		'image_berita_1' => set_value('image_berita_1', $row->image_berita_1),
		'caption_berita_1' => set_value('caption_berita_1', $row->caption_berita_1),
		'image_berita_2' => set_value('image_berita_2', $row->image_berita_2),
		'caption_berita_2' => set_value('caption_berita_2', $row->caption_berita_2),
		'image_berita_3' => set_value('image_berita_3', $row->image_berita_3),
		'caption_berita_3' => set_value('caption_berita_3', $row->caption_berita_3),
        'bahasa' => set_value('bahasa', $row->bahasa),
	    );


        $data['content'] = 'berita/berita_form';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Berita'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'image_slider_1' => $this->input->post('image_slider_1',TRUE),
		'caption_slider_1' => $this->input->post('caption_slider_1',TRUE),
		'image_slider_2' => $this->input->post('image_slider_2',TRUE),
		'caption_slider_2' => $this->input->post('caption_slider_2',TRUE),
		'image_slider_3' => $this->input->post('image_slider_3',TRUE),
		'caption_slider_3' => $this->input->post('caption_slider_3',TRUE),
		'image_artikel_1' => $this->input->post('image_artikel_1',TRUE),
		'caption_artikel_1' => $this->input->post('caption_artikel_1',TRUE),
		'image_artikel_2' => $this->input->post('image_artikel_2',TRUE),
		'caption_artikel_2' => $this->input->post('caption_artikel_2',TRUE),
		'image_artikel_3' => $this->input->post('image_artikel_3',TRUE),
		'caption_artikel_3' => $this->input->post('caption_artikel_3',TRUE),
		'image_berita_1' => $this->input->post('image_berita_1',TRUE),
		'caption_berita_1' => $this->input->post('caption_berita_1',TRUE),
		'image_berita_2' => $this->input->post('image_berita_2',TRUE),
		'caption_berita_2' => $this->input->post('caption_berita_2',TRUE),
		'image_berita_3' => $this->input->post('image_berita_3',TRUE),
		'caption_berita_3' => $this->input->post('caption_berita_3',TRUE),
        'bahasa' => $this->input->post('bahasa',TRUE),
	    );

            $this->Berita_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('PostManager/Berita'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Berita_model->get_by_id($id);

        if ($row) {
            $this->Berita_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('PostManager/Berita'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Berita'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('image_slider_1', 'image slider 1', 'trim|required');
	$this->form_validation->set_rules('caption_slider_1', 'caption slider 1', 'trim|required');
	$this->form_validation->set_rules('image_slider_2', 'image slider 2', 'trim|required');
	$this->form_validation->set_rules('caption_slider_2', 'caption slider 2', 'trim|required');
	$this->form_validation->set_rules('image_slider_3', 'image slider 3', 'trim|required');
	$this->form_validation->set_rules('caption_slider_3', 'caption slider 3', 'trim|required');
	$this->form_validation->set_rules('image_artikel_1', 'image artikel 1', 'trim|required');
	$this->form_validation->set_rules('caption_artikel_1', 'caption artikel 1', 'trim|required');
	$this->form_validation->set_rules('image_artikel_2', 'image artikel 2', 'trim|required');
	$this->form_validation->set_rules('caption_artikel_2', 'caption artikel 2', 'trim|required');
	$this->form_validation->set_rules('image_artikel_3', 'image artikel 3', 'trim|required');
	$this->form_validation->set_rules('caption_artikel_3', 'caption artikel 3', 'trim|required');
	$this->form_validation->set_rules('image_berita_1', 'image berita 1', 'trim|required');
	$this->form_validation->set_rules('caption_berita_1', 'caption berita 1', 'trim|required');
	$this->form_validation->set_rules('image_berita_2', 'image berita 2', 'trim|required');
	$this->form_validation->set_rules('caption_berita_2', 'caption berita 2', 'trim|required');
	$this->form_validation->set_rules('image_berita_3', 'image berita 3', 'trim|required');
	$this->form_validation->set_rules('caption_berita_3', 'caption berita 3', 'trim|required');
    $this->form_validation->set_rules('bahasa', 'bahasa', 'trim');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-01-03 17:50:21 */
/* http://harviacode.com */