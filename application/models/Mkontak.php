<?php

class mkontak extends CI_Model{

            function ambil_data(){
if(get_cookie('lang_is') === 'en'){$this->db->where('bahasa','ENG');}else{$this->db->where('bahasa','IDN');}
                        return $this->db->get('kontak');

            }

}