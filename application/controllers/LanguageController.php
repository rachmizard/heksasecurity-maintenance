<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LanguageController extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('HomeModel');
	}

	public function Home(){
		$this->load->view('mobile/atasan');
		$this->load->view('mobile/navbar_en');
		$data['home'] = $this->HomeModel->HomeENG()->result();
		$this->load->view('mobile/kontenhome', $data);
		$this->load->view('mobile/bawahan');
	}
	public function About(){		
		$this->load->view('mobile/atasan');
		$this->load->view('mobile/navbar_en');
		$data['about'] = $this->HomeModel->AboutENG()->result();
        $this->load->view('mobile/kontenlegalitas',$data);
        $this->load->view('mobile/bawahan');
	}
	public function Mitra(){

		$this->load->view('mobile/atasan');
		$this->load->view('mobile/navbar_en');
		$data['mitra'] = $this->HomeModel->MitraENG()->result();
		$this->load->view('mobile/kontenmitra',$data);
		$this->load->view('mobile/bawahan');
	}
	public function Mitrapengamanan(){
        $this->load->view('mobile/atasan');
        $this->load->view('mobile/navbar_en');
        $data['mitrapengamanan'] = $this->HomeModel->MitrapengamananENG()->result();
        $this->load->view('mobile/kontenmitrapengaman',$data);
        $this->load->view('mobile/bawahan');
	}
	public function Mitrapelatihan(){        
        $this->load->view('mobile/atasan');
		$this->load->view('mobile/navbar_en');
		$data['mitrapelatihan'] = $this->HomeModel->MitrapelatihanENG()->result();
		$this->load->view('mobile/kontenmitrapelatihan',$data);
        $this->load->view('mobile/bawahan');
	}
    public function KompetensiDasar(){
		
		$this->load->view('mobile/pengatasan');
		$this->load->view('mobile/navbar_en');
		$data['pelatihankompetensidasar'] = $this->HomeModel->KompetensiDasarENG()->result();
        $this->load->view('mobile/kontenpelatihankompetensidasar',$data);
        $this->load->view('mobile/pelbawahan');
	}
	public function KeahlianKhusus(){		
		$this->load->view('mobile/pengatasan');
		$this->load->view('mobile/navbar_en');
		$data['pelatihankompetensikhusus_content'] = $this->HomeModel->KompetensikhususENG()->result();
        $this->load->view('mobile/kontenpelatihankompetensikhusus',$data);
        $this->load->view('mobile/pelbawahan');
	}
	public function Pengamanan(){

		$this->load->view('mobile/pengatasan');
		$this->load->view('mobile/navbar_en');
		$data['pengamanan'] = $this->HomeModel->PengamananENG()->result();
        $this->load->view('mobile/kontenpengamanan',$data);
        $this->load->view('mobile/pelbawahan');
    }
	public function Pelatihan(){

		$this->load->view('mobile/atasan');
		$this->load->view('mobile/navbar_en');
		$data['pelatihan'] = $this->HomeModel->PelatihanENG()->result();
        $this->load->view('mobile/kontenpelatihan',$data);
        $this->load->view('mobile/bawahan');
	}
	public function Berita(){
		$this->load->view('mobile/atasan');
		$this->load->view('mobile/navbar_en');
		$data['berita'] = $this->HomeModel->BeritaENG()->result();
		$data['hotnews'] = $this->HomeModel->HotnewsENG()->result();
		$data['artikel'] = $this->HomeModel->ArtikelENG()->result();
        $this->load->view('mobile/kontennews',$data);
        $this->load->view('mobile/bawahan');
	}
	public function Iniberita(){
	    if(isset($_GET['id'])){
    	    $id = $_GET['id'];
    	    $data['beritahariini'] = $this->HomeModel->BeritahariiniENG($id)->result();
    	    $data["txt_header"] = "Article and News";
		    $this->load->view('mobile/atasan');
		    $this->load->view('mobile/navbar_en');
            $this->load->view('mobile/singglecontent',$data);
            $this->load->view('mobile/bawahan');
	    }
	}
	public function Iniartikel(){
	    if(isset($_GET['id'])){
    	    $id = $_GET['id'];
    	    $data['beritahariini'] = $this->HomeModel->ArtikelhariiniENG($id)->result();
    	    $data["txt_header"] = "Article and News";
		    $this->load->view('mobile/atasan');
		    $this->load->view('mobile/navbar_en');
            $this->load->view('mobile/singglecontent',$data);
            $this->load->view('mobile/bawahan');
	    }
	}
	public function Testimoni(){
		$this->load->view('mobile/atasan');
		$this->load->view('mobile/navbar_en');
		$data['testimoni'] = $this->HomeModel->TestimoniENG()->result();
        $this->load->view('mobile/kontentestimoni',$data);
        $this->load->view('mobile/bawahan');
	}
	public function Gallery(){
		$this->load->view('mobile/atasan');
		$this->load->view('mobile/navbar_en');
		$data['gallery'] = $this->HomeModel->GalleryENG()->result();
		$this->load->view('mobile/kontengallery',$data);
		$this->load->view('mobile/bawahan');
	}
	public function Karir(){
		$this->load->view('mobile/up');
		$this->load->view('mobile/navbar_en');
		$data['karir'] = $this->HomeModel->KarirENG()->result();
		$this->load->view('mobile/contentcareer',$data);
	}
	public function Contact(){
		$this->load->view('mobile/atasan');
        $this->load->view('mobile/navbar_en');
		$data['kontak'] = $this->HomeModel->ContactENG()->result();
        $this->load->view('mobile/kontencontact',$data);
        $this->load->view('mobile/bawahan');
	}

	
}