<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class About extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('About_model');
        $this->load->library('form_validation');

        if($this->session->userdata('status') != "login"){
            redirect(base_url("PostManager/About"));
        }
        
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'PostManager/Aboutq=' . urlencode($q);
            $config['first_url'] = base_url() . 'PostManager/Aboutq=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'PostManager/About';
            $config['first_url'] = base_url() . 'PostManager/About';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->About_model->total_rows($q);
        $about = $this->About_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'about_data' => $about,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['content'] = 'about/about_list';
        $this->load->view('layouts/main', $data);
    }

    public function read($id) 
    {
        $row = $this->About_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'caption' => $row->caption,
		'logo' => $row->logo,
		'detail' => $row->detail,
		'detail_description' => $row->detail_description,
        'bahasa' => $row->bahasa,
	    );

            $data['content'] = 'about/about_read';
            $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/About'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('PostManager/About/create_action'),
	    'id' => set_value('id'),
	    'caption' => set_value('caption'),
	    'logo' => set_value('logo'),
	    'detail' => set_value('detail'),
	    'detail_description' => set_value('detail_description'),
        'bahasa' => set_value('bahasa'),
        
	);
        $data['content'] = 'about/about_form';
       $this->load->view('layouts/main', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $config = array(
                'upload_path' => "assets/images/logo/",
                'allowed_types' => "gif|jpg|jpeg|png",
                'overwrite' => TRUE,
                'max_size' => "10048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "5000",
                'max_width' => "5000"
             );
        $this->load->library('upload', $config);
            if($this->upload->do_upload('logo')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
            }
            $data = array(
        		'caption' => $this->input->post('caption',TRUE),
        		'logo' => $config['upload_path'].$picture,
        		'detail' => $this->input->post('detail',TRUE),
        		'detail_description' => $this->input->post('detail_description',TRUE),
                'bahasa' => $this->input->post('bahasa',TRUE),
	           );

            $this->About_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('PostManager/About'));
        }

    }
    
    public function update($id) 
    {
        $row = $this->About_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('PostManager/About/update_action'),
        		'id' => set_value('id', $row->id),
        		'caption' => set_value('caption', $row->caption),
        		'logo' => set_value('logo', $row->logo),
        		'detail' => set_value('detail', $row->detail),
        		'detail_description' => set_value('detail_description', $row->detail_description),
        'bahasa' => set_value('bahasa', $row->bahasa),
	    );
$data['content'] = 'about/about_form';
        $this->load->view('layouts/main', $data);

        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/About'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            
                $config = array(
                'upload_path' => "assets/images/logo/",
                'allowed_types' => "gif|jpg|jpeg|png",
                'overwrite' => TRUE,
                'max_size' => "10048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "5000",
                'max_width' => "5000"
             );
                $this->load->library('upload', $config);
                if($this->upload->do_upload('logo')){
                        $uploadData = $this->upload->data();
                        $picture = $config['upload_path'].$uploadData['file_name'];
                }else{
                    $picture = $config['upload_path'].$this->input->post('logo_old');
                }
            $data = array(
        		'caption' => $this->input->post('caption',TRUE),
        		'logo' => $picture,
        		'detail' => $this->input->post('detail',TRUE),
        		'detail_description' => $this->input->post('detail_description',TRUE),
                'bahasa' => $this->input->post('bahasa',TRUE),
    	    );

            $this->About_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('PostManager/About'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->About_model->get_by_id($id);

        if ($row) {
            $this->About_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('PostManager/About'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/About'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('caption', 'caption', 'trim|required');
	$this->form_validation->set_rules('logo', 'logo', 'trim');
	$this->form_validation->set_rules('detail', 'detail', 'trim');
	$this->form_validation->set_rules('detail_description', 'detail description', 'trim');
    $this->form_validation->set_rules('bahasa', 'bahasa', 'trim');
    

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-01-02 15:21:49 */
/* http://harviacode.com */
