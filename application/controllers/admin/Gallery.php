<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Gallery_model');
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
            $config['base_url'] = base_url() . 'PostManager/Gallery?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'PostManager/Gallery?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'PostManager/Gallery';
            $config['first_url'] = base_url() . 'PostManager/Gallery';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Gallery_model->total_rows($q);
        $gallery = $this->Gallery_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'gallery_data' => $gallery,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

                $data['content'] = 'gallery/gallery_list';
        $this->load->view('layouts/main', $data);
    }

    public function read($id) 
    {
        $row = $this->Gallery_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'image' => $row->image,
		'tahun' => $row->tahun,
	    );

                    $data['content'] = 'gallery/gallery_read';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Gallery'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('PostManager/Gallery/create_action'),
	    'id' => set_value('id'),
	    'image' => set_value('image'),
	    'tahun' => set_value('tahun'),
	);

                $data['content'] = 'gallery/gallery_form';
        $this->load->view('layouts/main', $data);
    }
    
    public function create_action() 
    {

        $config = array(
            'upload_path' => "./public/img/gallery/",
            'allowed_types' => "gif|jpg|jpeg|png",
            'overwrite' => TRUE,
            'max_size' => "10048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "5000",
            'max_width' => "5000"
        );
        $this->load->library('upload', $config);
            if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }
            //Prepare array of user data
            $userData = array(
                'image' => $picture,
                'tahun' => $this->input->post('tahun'),
            );
            //Pass user data to model
            $this->Gallery_model->insert($userData);
            redirect(site_url('PostManager/Gallery'));
        }
    
    public function update($id) 
    {
        $row = $this->Gallery_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('PostManager/Gallery/update_action'),
		'id' => set_value('id', $row->id),
		'image' => set_value('image', $row->image),
		'tahun' => set_value('tahun', $row->tahun),
	    );

                    $data['content'] = 'gallery/gallery_form';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Gallery'));
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
		'tahun' => $this->input->post('tahun',TRUE),
	    );

            $this->Gallery_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('PostManager/Gallery'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Gallery_model->get_by_id($id);

        if ($row) {
            $this->Gallery_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('PostManager/Gallery'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Gallery'));
        }
    }

    public function _rules() 
    {

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Gallery.php */
/* Location: ./application/controllers/Gallery.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-01-02 15:21:49 */
/* http://harviacode.com */