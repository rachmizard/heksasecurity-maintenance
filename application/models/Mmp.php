<?php

class mmp extends CI_Model{

    public $table = 'mitrapengamanan';
    public $id = 'id';
    public $order = 'DESC';
            function ambil_data(){
						$this->db->select('mitrapengamanan.*, filter_mitra.*'); //mengambil semua data dari tabel data_users dan users
    					$this->db->from('mitrapengamanan'); //dari tabel data_users
    					$this->db->join('filter_mitra', 'filter_mitra.id = mitrapengamanan.filter_content', 'left'); //menyatukan tabel users menggunakan left join
    					$data = $this->db->get(); //mengambil seluruh data
    					return $data->result(); //mengembalikan data

            }

    // get data by id
    function get_by_id($id)
    {
        
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('logo', $q);
	$this->db->or_like('caption', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('logo', $q);
	$this->db->or_like('caption', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }


}