<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Hotnews extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Hotnews_model');
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
            $config['base_url'] = base_url() . 'PostManager/Hotnews/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'PostManager/Hotnews/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'PostManager/Hotnews/index.html';
            $config['first_url'] = base_url() . 'PostManager/Hotnews/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Hotnews_model->total_rows($q);
        $artikel = $this->Hotnews_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'artikel_data' => $artikel,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['content'] = 'hotnews/hotnews_list';
        $this->load->view('layouts/main', $data);
    }

    public function read($id) 
    {
        $row = $this->Artikel_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'caption' => $row->caption,
		'gambar' => $row->gambar,
		'keterangan' => $row->keterangan,
        'bahasa' => $row->bahasa,
        'tgl_post' => $row->tgl_post,
	    );
        $data['content'] = 'hotnews/hotnews_read';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Hotnews'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('PostManager/Hotnews/create_action'),
	    'id' => set_value('id'),
	    'caption' => set_value('caption'),
	    'gambar' => set_value('gambar'),
	    'keterangan' => set_value('keterangan'),
        'bahasa' => set_value('bahasa'),
        'tgl_post' => set_value('tgl_post'),
	);
        $data['content'] = 'hotnews/hotnews_form';
        $this->load->view('layouts/main', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $config = array(
                'upload_path' => "../public/img/assetImage/",
                'allowed_types' => "gif|jpg|jpeg|png",
                'overwrite' => TRUE,
                'max_size' => "10048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "5000",
                'max_width' => "5000"
            );
            $this->load->library('upload', $config);
            if($this->upload->do_upload('gambar')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
            }
                
            $data = array(
    		'caption' => $this->input->post('caption',TRUE),
    		'gambar' => "public/img/assetImage/".$picture,
    		'keterangan' => $this->input->post('keterangan',TRUE),
            'bahasa' => $this->input->post('bahasa',TRUE),
            'tgl_post' => $this->input->post('tgl_post',TRUE),
    	    );

            $this->Hotnews_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('PostManager/Hotnews'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Hotnews_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('PostManager/Hotnews/update_action'),
		'id' => set_value('id', $row->id),
		'caption' => set_value('caption', $row->caption),
 		'gambar' => set_value('gambar', $row->gambar),
		'keterangan' => set_value('keterangan', $row->keterangan),
        'bahasa' => set_value('bahasa', $row->bahasa),
        'tgl_post' => set_value('tgl_post', $row->tgl_post),
	    );
        $data['content'] = 'hotnews/hotnews_form';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Hotnews'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $config = array(
                'upload_path' => "../public/img/assetImage/",
                'allowed_types' => "gif|jpg|jpeg|png",
                'overwrite' => TRUE,
                'max_size' => "10048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "5000",
                'max_width' => "5000"
            );
            $this->load->library('upload', $config);
            if($this->upload->do_upload('gambar')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
            }
            
            $data = array(
    		'caption' => $this->input->post('caption',TRUE),
    		'gambar' => "public/img/assetImage/".$picture,
    		'keterangan' => $this->input->post('keterangan',TRUE),
            'bahasa' => $this->input->post('bahasa',TRUE),
            'tgl_post' => $this->input->post('tgl_post',TRUE),
    	    );

            $this->Hotnews_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('PostManager/Hotnews'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Hotnews_model->get_by_id($id);

        if ($row) {
            $this->Hotnews_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('PostManager/Hotnews'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Hotnews'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('caption', 'caption', 'trim|required');
// 	$this->form_validation->set_rules('gambar', 'gambar', 'trim|required');
    $this->form_validation->set_rules('gambar', 'Document', 'callback_file_check');
	$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
    $this->form_validation->set_rules('bahasa', 'bahasa', 'trim');
    $this->form_validation->set_rules('tgl_post', 'tgl_post', 'trim');
	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
    
    public function file_check(){
       $this->form_validation->set_message('file_check', 'Please select file.');
    if (empty($_FILES['gambar']['name'])) {
            return false;
        }else{
            return true;
        }
    }

}

/* End of file Beritahariini.php */
/* Location: ./application/controllers/Beritahariini.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-01-27 17:18:38 */
/* http://harviacode.com */