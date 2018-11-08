<?php
class Lamarkerja extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
    }

    function index()
    {
        //set validation rules
        $this->form_validation->set_rules('nama', 'nama', 'trim|required|callback_alpha_space_only');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
        $this->form_validation->set_rules('noktp', 'noktp', 'trim|required');
        $this->form_validation->set_rules('ttl', 'ttl', 'trim|required');
        $this->form_validation->set_rules('jk', 'jk', 'trim|required');
        $this->form_validation->set_rules('pendidikan_terakhir', 'pendidikan_terakhir', 'trim|required');
        $this->form_validation->set_rules('tinggi', 'tinggi', 'trim|required');
        $this->form_validation->set_rules('berat', 'berat', 'trim|required');
        $this->form_validation->set_rules('pilihan', 'pilihan', 'trim|required');

        $this->form_validation->set_rules('perusahaan', 'perusahaan', 'trim|required');
        $this->form_validation->set_rules('masa_kerja', 'masa_kerja', 'trim|required');
        $this->form_validation->set_rules('tahun', 'tahun', 'trim|required');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');

        //run validation on form input
        if ($this->form_validation->run() == FALSE)
        {
            //validation fails
        		$this->load->view('mobile/kariratas');
        		$this->load->view('mobile/navbar');
        		$this->load->view('mobile/formkarir');
        		$this->load->view('mobile/kbawahan');
        }
        else
        {
            //get the form data
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $email = $this->input->post('email');
            $telepon = $this->input->post('telepon');
            $noktp = $this->input->post('noktp');
            $ttl = $this->input->post('ttl');
            $jk = $this->input->post('jk');
            $pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
            $tinggi = $this->input->post('tinggi');
            $berat = $this->input->post('berat');
            $pilihan = $this->input->post('pilihan');
            $perusahaan = $this->input->post('perusahaan');
            $masa_kerja = $this->input->post('masa_kerja');
            $tahun = $this->input->post('tahun');
            $jabatan = $this->input->post('jabatan');


            //set to_email id to which you want to receive mails
            $to_email = 'alfiansaniputra77@gmail.com';

            //configure email settings
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'saniputragroup@gmail.com';
            $config['smtp_pass'] = 'poipoi123poipoi123';
            $config['mailtype'] = 'html';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n"; //use double quotes
            //$this->load->library('email', $config);
            $this->email->initialize($config);                        

            //send mail

    			$from = "test@helsasecurity.com";    
    			$to = "alfiansaniputra77@gmail.com";    
    			$subject = "Lamaran Kerja PT Heksa garda Utama";
    			$message = 
    		"

BIODATA

Nama              :	$nama
Alamat            :	$alamat
E-mail            :	$email
Telepon         :	$telepon
NIk             :	$noktp
Lahir           :   $ttl
Jenis kelamin   :   $jk
Pendidikan      :	$pendidikan_terakhir
Tinggi          :	$tinggi
Berat           :	$berat
Kompetensi      :	$pilihan
			
PENGALAMAN KERJA
            
Nama Perusahaan :    $perusahaan
Masa Kerja      :    $masa_kerja
Tahun           :    $tahun
Jabatan         :    $jabatan
            
            
            
            
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
?>