<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mitrapengamanan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mitrapengamanan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'PostManager/Mitrapengamanan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'PostManager/Mitrapengamanan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'PostManager/Mitrapengamanan/';
            $config['first_url'] = base_url() . 'PostManager/Mitrapengamanan/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Mitrapengamanan_model->total_rows($q);
        $mitrapengamanan = $this->Mitrapengamanan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'mitrapengamanan_data' => $mitrapengamanan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

                $data['content'] = 'mitrapengamanan/mitrapengamanan_list';
        $this->load->view('layouts/main', $data);
    }

    public function read($id) 
    {
        $row = $this->Mitrapengamanan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'logo' => $row->logo,
		'caption' => $row->caption,
        'bahasa' => $row->bahasa,
        'filter' => $row->filter,
        
	    );

                            $data['content'] = 'mitrapengamanan/mitrapengamanan_read';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Mitrapengamanan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('PostManager/Mitrapengamanan/create_action'),
	    'id' => set_value('id'),
	    'logo' => set_value('logo'),
	    'caption' => set_value('caption'),
        'bahasa' => set_value('bahasa'),
        'filter' => set_value('filter'),
	);

                        $data['content'] = 'mitrapengamanan/mitrapengamanan_form';
        $this->load->view('layouts/main', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $config = array(
                'upload_path' => "public/img/assetImage/",
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
        		'logo' => $config['upload_path'].$picture,
        		'caption' => $this->input->post('caption',TRUE),
                'bahasa' => $this->input->post('bahasa',TRUE),
                'filter' => $this->input->post('filter',TRUE)
    	    );

            $this->Mitrapengamanan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('PostManager/Mitrapengamanan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Mitrapengamanan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('PostManager/Mitrapengamanan/update_action'),
		'id' => set_value('id', $row->id),
		'logo' => set_value('logo', $row->logo),
		'caption' => set_value('caption', $row->caption),
        'bahasa' => set_value('bahasa', $row->bahasa),
        'filter' => set_value('filter', $row->filter),
	    );

                            $data['content'] = 'mitrapengamanan/mitrapengamanan_form';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Mitrapengamanan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $config = array(
                'upload_path' => "public/img/assetImage/",
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
		'logo' => $picture,
		'caption' => $this->input->post('caption',TRUE),
        'bahasa' => $this->input->post('bahasa',TRUE),
        'filter' => $this->input->post('filter',TRUE),
	    );

            $this->Mitrapengamanan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('PostManager/Mitrapengamanan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Mitrapengamanan_model->get_by_id($id);

        if ($row) {
            $this->Mitrapengamanan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('PostManager/Mitrapengamanan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Mitrapengamanan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('logo', 'logo', 'trim');
	$this->form_validation->set_rules('caption', 'caption', 'trim|required');
    $this->form_validation->set_rules('bahasa', 'bahasa', 'trim');
    $this->form_validation->set_rules('filter', 'filter', 'trim');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Mitrapengamanan.php */
/* Location: ./application/controllers/Mitrapengamanan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-01-02 15:21:51 */
/* http://harviacode.com */
