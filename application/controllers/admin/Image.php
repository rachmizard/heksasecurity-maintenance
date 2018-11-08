<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Image extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('Image_model');
  }
  
  public function index(){
    $data['gambar'] = $this->Image_model->view();
    $this->load->view('gambar/view', $data);
  }
  
  public function tambah(){
    $data = array();
    
    if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
      // lakukan upload file dengan memanggil function upload yang ada di Image_model.php
      $upload = $this->Image_model->upload();
      
      if($upload['result'] == "success"){ // Jika proses upload sukses
         // Panggil function save yang ada di Image_model.php untuk menyimpan data ke database
        $this->Image_model->save($upload);
        
        redirect('gambar'); // Redirect kembali ke halaman awal / halaman view data
      }else{ // Jika proses upload gagal
        $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
      }
    }
    
    $this->load->view('gambar/form', $data);
  }
}