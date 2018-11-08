<?php

class mbh extends CI_Model{

            function ambil_data(){
                if(get_cookie('lang_is') === 'en'){
                    $this->db->where('bahasa','ENG');
                }else{
                    $this->db->where('bahasa','IDN');
                }
                
                return $this->db->get('beritahariini');
            }
            
            function ambil_data_berita($id){
                if(get_cookie('lang_is') === 'en'){
                    $this->db->where('bahasa','ENG');
                }else{
                    $this->db->where('bahasa','IDN');
                }
                $this->db->where('no_konten',$id);
                return $this->db->get('beritahariini');

            }
             function ambil_data_artikel($id){
                if(get_cookie('lang_is') === 'en'){
                    $this->db->where('bahasa','ENG');
                }else{
                    $this->db->where('bahasa','IDN');
                }
                $this->db->where('no_konten',$id);
                return $this->db->get('artikel');

            }

}