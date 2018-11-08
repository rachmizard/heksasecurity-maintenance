<?php
	if (!defined('BASEPATH'))
	exit('No direct script access allowed');
	
	class GalleryModel extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		public function getallData(){
			$this->db->select('*');
			return $query = $this->db->get('gallery')->result();
		}

		public function getDataById($id){
			$this->db->select('*');
			$this->db->where('id_gallery',$id);
			$query = $this->db->get('gallery')->result();
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

		public function addGallery($data){
			if($data->_token){
				$input = array(
					'id_gallery' => $data->id_gallery,
					'judul_gallery' => $data->judul_gallery,
					'path_gallery' => $data->path_gallery,
					'tahun_gallery' => $data->tahun,
					'status' => $data->status
				);
				$query = $this->db->insert('gallery', $input);
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

		public function getAllAsset(){
			$this->db->select('*');
			return $query = $this->db->get('gambar')->result();
		}

		public function getAssetById($id){
			$this->db->select('*');
			$this->db->where('id_gambar',$id);
			$query = $this->db->get('gambar')->result();
			return $query[0];
		}

		public function getIdAsset($newId){
			$this->db->select('Count(id_gambar) as val');
			$this->db->where('id_gambar LIKE \'%'.$newId.'%\'');
			$query = $this->db->get('gambar')->result();
			return $query[0]->val;
		}

		public function checkIdAsset($id){
			$this->db->select('*');
			$this->db->where('id_gambar',$id);
			$query = $this->db->get('gambar')->result();
			if($query) return "false";
			else return "true";
		}

		public function addAsset($data){
			if($data->_token){
				$input = array(
					'id_gambar' => $data->id_gambar,
					'lokasi_gambar' => $data->path_gallery
				);
				$query = $this->db->insert('gambar', $input);
				if($query) return 'success';
				else return 'failed';
			}else{
				return 'failed';
			}
		}

		public function deleteAsset($data){
			if($data->_token){
				$this->db->where('id_gambar', $data->id);
				$query = $this->db->delete('gambar');
				if($query) return 'success';
				else return 'failed';
			}else{
				return 'failed';
			}
		}
	}