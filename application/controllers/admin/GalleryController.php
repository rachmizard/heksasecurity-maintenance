<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GalleryController extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('admin/GalleryModel');
	}

	public function index(){
		$data['content'] = 'admin/gallery/p_gallery';
		$this->load->view('layouts/main', $data);
	}

	public function getAllGallery(){
		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);
		if($request->_token){
			$data['data'] = $this->GalleryModel->getallData();
			$data['status'] = 'success';
			echo json_encode($data);
		}else {
			$data['status'] = 'failed';
			echo json_encode($data);
		}
	}

	public function saveGallery(){
		$request = new stdClass();
		foreach ($this->input->post() as $key => $value){
			$request->$key = $value;
		}

		if($request->_token){
			if(!$_FILES['file']){
				$data['status'] = 'failed';
				echo json_encode($data);
			}else {
				print_r($request);
				$filename = date('ymdHis').rand(0,9);
				$path = $_FILES['file']['name'];
				$ext = pathinfo($path, PATHINFO_EXTENSION);
				$config['upload_path'] = './public/img/gallery';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['file_name'] = $filename;
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('file')){
					if($request->judul_gallery == null || $request->judul_gallery == ''){
						$data['status'] = 'failed';
						echo json_encode($data);
					}else if($request->tahun == null || $request->tahun == '') {
						$data['status'] = 'failed';
						echo json_encode($data);
					}else {
						$newId = 'G';
						$newId .= $this->generateId(date('y-m-d'));
						$countId = $this->GalleryModel->getId($newId);
						$idNumber = $this->replaceId($countId);
						$checkId = $this->GalleryModel->checkId($newId.$idNumber);
						if($checkId == 'true') $request->id_gallery = $newId.$idNumber;
						else {
							while ($checkId != 'true') {
								$checkId = $this->GalleryModel->checkId($newId.$idNumber);
								if($checkId == 'false'){
									$countId++;
									$idNumber = $this->replaceId($countId);
								}
								$request->id_gallery = $newId.$idNumber;
							}
						}
						$request->path_gallery = 'public/img/gallery/'.$filename.'.'.$ext;

						// $data['status'] = $this->GalleryModel->addGallery($request);
						// echo json_encode($data);
					}
				}else {
					$data['status'] = 'failed';
					echo json_encode($data);
				}
			}
		}else {
			$data['status'] = 'failed';
			echo json_encode($data);
		}
	}

	public function editAboutUs(){
		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);
		if($request->_token){
			$data['data'] = $this->AboutUsModel->getDataById($request->id);
			$data['status'] = 'success';
			echo json_encode($data);
		}else {
			$data['status'] = 'failed';
			echo json_encode($data);
		}
	}

	public function deleteGallery(){
		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);
		if($request->_token){
			$data['data'] = $this->GalleryModel->getDataById($request->id);
			$filepath = $data['data']->path_gallery;
			if (file_exists($filepath)) {
				$unlink = unlink($filepath);
				if($unlink){
					$data['status'] = $this->GalleryModel->deleteGallery($request);
					echo json_encode($data);
				}else {
					$data['status'] = 'failed';
					echo json_encode($data);
				}
			}else {
				$data['status'] = $this->GalleryModel->deleteGallery($request);
				echo json_encode($data);
			}
		}else {
			$data['status'] = 'failed';
			echo json_encode($data);
		}
	}

	public function setAktifGallery(){
		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);
		if($request->_token){
			$data['status'] = $this->GalleryModel->setAktif($request);
			echo json_encode($data);
		}else {
			$data['status'] = 'failed';
			echo json_encode($data);
		}
	}

	public function generateId($dataDate){
		$val = explode("-",$dataDate);
		$length = count($val);
		$listStr = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$listlength = strlen($listStr);
		$id = '';
		for($i = 0; $i < $length; $i++){
			if($val[$i] > $listlength){
				$temp = $val[$i] - $listlength;
				$id .= $listStr[$temp];
			}else {
				$temp = $listlength - $val[$i];
				$id .= $listStr[$temp];
			}
		}
		return $id;
	}

	public function replaceId($dataId){
		$dataId++;
		if($dataId >= 0 && $dataId < 10){
			$val = '0000'.$dataId;
		}else if($dataId >= 10 && $dataId < 100){
			$val = '000'.$dataId;
		}else if($dataId >= 100 && $dataId < 1000){
			$val = '00'.$dataId;
		}else if($dataId >= 1000 && $dataId < 10000){
			$val = '0'.$dataId;
		}else {
			$val = $dataId;
		}
		return $val;
	}

	public function getAllAsset(){
		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);
		if($request->_token){
			$data['data'] = $this->GalleryModel->getAllAsset();
			$data['status'] = 'success';
			echo json_encode($data);
		}else {
			$data['status'] = 'failed';
			echo json_encode($data);
		}
	}

	public function saveAsset(){
		$request = new stdClass();
		foreach ($this->input->post() as $key => $value){
			$request->$key = $value;
		}

		if($request->_token){
			if(!$_FILES['file']){
				$data['status'] = 'failed';
				echo json_encode($data);
			}else {
				$filename = date('ymdHis').rand(0,9);
				$path = $_FILES['file']['name'];
				$ext = pathinfo($path, PATHINFO_EXTENSION);
				$config['upload_path'] = './public/img/assetImage';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['file_name'] = $filename;
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('file')){
						$newId = 'G';
						$newId .= $this->generateId(date('y-m-d'));
						$countId = $this->GalleryModel->getIdAsset($newId);
						$idNumber = $this->replaceId($countId);
						$checkId = $this->GalleryModel->checkIdAsset($newId.$idNumber);
						if($checkId == 'true') $request->id_gambar = $newId.$idNumber;
						else {
							while ($checkId != 'true') {
								$checkId = $this->GalleryModel->checkIdAsset($newId.$idNumber);
								if($checkId == 'false'){
									$countId++;
									$idNumber = $this->replaceId($countId);
								}
								$request->id_gambar = $newId.$idNumber;
							}
						}
						$request->path_gallery = 'public/img/assetImage/'.$filename.'.'.$ext;
						$data['status'] = $this->GalleryModel->addAsset($request);
						echo json_encode($data);
				}else {
					$data['status'] = 'failed';
					echo json_encode($data);
				}
			}
		}else {
			$data['status'] = 'failed';
			echo json_encode($data);
		}
	}

	public function deleteAsset(){
		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);
		if($request->_token){
			$data['data'] = $this->GalleryModel->getAssetById($request->id);
			$filepath = $data['data']->lokasi_gambar;
			if (file_exists($filepath)) {
				$unlink = unlink($filepath);
				if($unlink){
					$data['status'] = $this->GalleryModel->deleteAsset($request);
					echo json_encode($data);
				}else {
					$data['status'] = 'failed';
					echo json_encode($data);
				}
			}else {
				$data['status'] = $this->GalleryModel->deleteAsset($request);
				echo json_encode($data);
			}
		}else {
			$data['status'] = 'failed';
			echo json_encode($data);
		}
	}
}