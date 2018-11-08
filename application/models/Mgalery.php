<?php

class mgalery extends CI_Model{

            function ambil_data(){

                        return $this->db->get('gallery');

            }
            

}