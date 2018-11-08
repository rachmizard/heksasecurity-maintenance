<?php
	if (!defined('BASEPATH'))
	exit('No direct script access allowed');
	
	class AssetImageModel extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		public function getallData(){
			$this->db->select('*');
			return $query = $this->db->get('gambar')->result();
		}

		public function getDataById($id){
			$this->db->select('*');
			$this->db->where('id_gambar',$id);
			$query = $this->db->get('gambar')->result();
			return $query[0];
		}

		public function getId($newId){
			$this->db->select('Count(id_gallery) as val');
			$this->db->where('id_gallery LIKE \'%'.$newId.'%\'');
			$query = $this->db->get('gallery')->result();
			return $query[0]->val;
		}

		public function checkId($id){
			$this->db->select('*');
			$this->db->where('id_gallery',$id);
			$query = $this->db->get('gallery')->result();
			if($query) return "false";
			else return "true";
		}

		public function addAsset($data){
			if($data->_token){
				$input = array(
					'id_gambar' => $data->id_gambar,
					'lokasi_gambar' => $data->lokasi_gambar,
				);
				$query = $this->db->insert('gambar', $input);
				if($query) return 'success';
				else return 'failed';
			}else{
				return 'failed';
			}
		}

		public function deleteGallery($data){
			if($data->_token){
				$this->db->where('id_gallery', $data->id);
				$query = $this->db->delete('gallery');
				if($query) return 'success';
				else return 'failed';
			}else{
				return 'failed';
			}
		}

		public function setAktif($data){
			if($data->_token){
				$input = array(
					'status' => $data->statusContent
				);
				$this->db->where('id_gallery', $data->id);
				$query = $this->db->update('gallery', $input);
				if($query) return 'success';
				else return 'failed';
			}else{
				return 'failed';
			}
		}
	}