<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Beritahariini extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Beritahariini_model');
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
            $config['base_url'] = base_url() . 'PostManager/Beritahariini/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'PostManager/Beritahariini/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'PostManager/Beritahariini/index.html';
            $config['first_url'] = base_url() . 'PostManager/Beritahariini/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Beritahariini_model->total_rows($q);
        $beritahariini = $this->Beritahariini_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'beritahariini_data' => $beritahariini,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['content'] = 'beritahariini/beritahariini_list';
        $this->load->view('layouts/main', $data);
    }

    public function read($id) 
    {
        $row = $this->Beritahariini_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'caption' => $row->caption,
		'gambar' => $row->gambar,
		'keterangan' => $row->keterangan,
		'no_konten' => $row->no_konten,
        'bahasa' => $row->bahasa,
        'tgl_post' => $row->tgl_post,
	    );
        $data['content'] = 'beritahariini/beritahariini_read';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Beritahariini'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('PostManager/Beritahariini/create_action'),
	    'id' => set_value('id'),
	    'caption' => set_value('caption'),
	    'gambar' => set_value('gambar'),
	    'keterangan' => set_value('keterangan'),
	    'no_konten' => set_value('no_konten'),
        'bahasa' => set_value('bahasa'),
        'tgl_post' => set_value('tgl_post'),
	);
        $data['content'] = 'beritahariini/beritahariini_form';
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
    		'no_konten' => $this->input->post('no_konten',TRUE),
            'bahasa' => $this->input->post('bahasa',TRUE),
            'tgl_post' => $this->input->post('tgl_post',TRUE),
    	    );

            $this->Beritahariini_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('PostManager/Beritahariini'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Beritahariini_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('PostManager/Beritahariini/update_action'),
		'id' => set_value('id', $row->id),
		'caption' => set_value('judul', $row->caption),
 		'gambar' => set_value('gambar', $row->gambar),
		'keterangan' => set_value('keterangan', $row->keterangan),
		'no_konten' => set_value('konten', $row->no_konten),
        'bahasa' => set_value('bahasa', $row->bahasa),
        'tgl_post' => set_value('tgl_post', $row->tgl_post),
	    );
        $data['content'] = 'beritahariini/beritahariini_form';
        $this->load->view('layouts/main', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Beritahariini'));
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
    		'no_konten' => $this->input->post('no_konten',TRUE),
            'bahasa' => $this->input->post('bahasa',TRUE),
            'tgl_post' => $this->input->post('tgl_post',TRUE),
    	    );

            $this->Beritahariini_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('PostManager/Beritahariini'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Beritahariini_model->get_by_id($id);

        if ($row) {
            $this->Beritahariini_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('PostManager/Beritahariini'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('PostManager/Beritahariini'));
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