<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Contact extends CI_Controller{
	
	function __construct(){
		parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
		$this->load->model('mkontak');
	}
 
	public function index(){

		//set validation rules
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('subject', 'subject', 'trim|required');
        $this->form_validation->set_rules('coment', 'coment', 'trim|required');

//run validation on form input
        if ($this->form_validation->run() == FALSE)
        {
            //validation fails
        $this->load->view('mobile/atasan');
		$this->load->view('mobile/navbar');
		$data['kontak'] = $this->mkontak->ambil_data()->result();
        $this->load->view('mobile/kontencontact',$data);
        $this->load->view('mobile/bawahan');
        }
        else
        {
            //get the form data
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $coment = $this->input->post('coment');
            //set to_email id to which you want to receive mails
            $to_email = 'alfiansaniputra77@gmail.com';

            //configure email settings
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'saniputragroup@gmail.com';
            $config['smtp_pass'] = 'poipoi123poipoi123';
            $config['mailtype'] = '<!DOCTYPE html>
            <html>
            <head>
                <title></title>
            </head>
            <body>
            
            </body>
            </html>';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n"; //use double quotes
            //$this->load->library('email', $config);
            $this->email->initialize($config);                        

            //send mail

    			$from = "info@heksasecurity.com";    
    			$to = "alfiansaniputra77@gmail.com";    
    			$subject = "Lamaran Kerja PT Heksa garda Utama";
    			$message = 
    		"

BIODATA

nama           :	$nama
email          :	$email
subject        :	$subject
coment         :	$coment
            
            
            
            
    		";    
    			$headers = "From:" . $from;    
            	mail($to,$subject,$message, $headers);
            if ($this->email->send())
            {
                // mail sent
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your mail has been sent successfully!</div>');
                redirect('lamarkerja/index');
            }
            else
            {
                //error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">There is error in sending mail! Please try again later</div>');
                redirect('lamarkerja/index');
            }
        }
    }
    
    //custom validation function to accept only alphabets and space input
    function alpha_space_only($str)
    {
        if (!preg_match("/^[a-zA-Z ]+$/",$str))
        {
            $this->form_validation->set_message('alpha_space_only', 'The %s field must contain only alphabets and space');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }


	}
 
