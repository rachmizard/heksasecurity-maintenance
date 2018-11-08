<?php

class martikel extends CI_Model{

            function ambil_data(){
if(get_cookie('lang_is') === 'en'){$this->db->where('bahasa','ENG');}else{$this->db->where('bahasa','IDN');}
                        return $this->db->get('berita');

            }
            
            function hotnews_data(){
                if(get_cookie('lang_is') === 'en'){
                    $this->db->where('bahasa','ENG');
                    
                }else{
                    $this->db->where('bahasa','IDN');
                    
                }
                return $this->db->get('hot_news');

            }
            function berita_data(){
                if(get_cookie('lang_is') === 'en'){
                    $this->db->where('bahasa','ENG');
                    
                }else{
                    $this->db->where('bahasa','IDN');
                    
                }
                return $this->db->get('beritahariini');

            }
            function artikel_data(){
                if(get_cookie('lang_is') === 'en'){
                    $this->db->where('bahasa','ENG');
                    
                }else{
                    $this->db->where('bahasa','IDN');
                    
                }
                return $this->db->get('artikel');

            }

}