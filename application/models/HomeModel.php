<?php
	if (!defined('BASEPATH'))
	exit('No direct script access allowed');
	
	class HomeModel extends CI_Model{
		function __construct(){
			parent::__construct();
		}

        function HomeENG(){
		$this->db->where('bahasa = \'ENG\'');
		return $this->db->get('home');

        }
        function AboutENG(){
		$this->db->where('bahasa = \'ENG\'');
		return $this->db->get('about');

        }
        function ArtikelENG(){
		$this->db->where('bahasa = \'ENG\'');
		return $this->db->get('artikel');

        }
        function HotnewsENG(){
		$this->db->where('bahasa = \'ENG\'');
		return $this->db->get('hot_news');

        }
        function BeritaENG(){
		$this->db->where('bahasa = \'ENG\'');
		return $this->db->get('beritahariini');

        }
        function BeritahariiniENG($id){
		$this->db->where('bahasa = \'ENG\'');
		$this->db->where('no_konten',$id);
		return $this->db->get('beritahariini');

        }
        function ArtikelhariiniENG($id){
		$this->db->where('bahasa = \'ENG\'');
		$this->db->where('no_konten',$id);
		return $this->db->get('artikel');

        }
        function ContactENG(){
		$this->db->where('bahasa = \'ENG\'');
		return $this->db->get('kontak');

        }
        function GalleryENG(){
		return $this->db->get('gallery');

        }
        function KarirENG(){
		$this->db->where('bahasa = \'ENG\'');
		return $this->db->get('karir');

        }
        function LamarkerjaENG(){
		$this->db->where('bahasa = \'ENG\'');
		return $this->db->get('lamarkerja');

        }
        function MitraENG(){
		$this->db->where('bahasa = \'ENG\'');
		return $this->db->get('mitra');

        }
        function MitrapelatihanENG(){
		$this->db->where('bahasa = \'ENG\'');
		return $this->db->get('mitrapelatihan');

        }
        function MitrapengamananENG(){

		$this->db->where('bahasa = \'ENG\'');
		return $this->db->get('mitrapengamanan');

        }
        function PelatihanENG(){
		$this->db->where('bahasa = \'ENG\'');
		return $this->db->get('pelatihan');

        }
        function KompetensiDasarENG(){
		$this->db->where('bahasa = \'ENG\'');
		return $this->db->get('pelkomdasar');

        }
        function KompetensikhususENG(){
		$this->db->where('bahasa = \'ENG\'');
		return $this->db->get('pelatihankompetensikhusus_content');

        }
        function PengamananENG(){
		$this->db->where('bahasa = \'ENG\'');
		return $this->db->get('pengamanan');

        }
        function TestimoniENG(){
		$this->db->where('bahasa = \'ENG\'');
		return $this->db->get('testimoni');

        }

	}