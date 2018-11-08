<?php
	if (!defined('BASEPATH'))
	exit('No direct script access allowed');
	
	class login extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		function get_user($username){
			$this->db->select('*');
			$this->db->where('username', $username);
			return $query = $this->db->get('users')->result();
		}
	}