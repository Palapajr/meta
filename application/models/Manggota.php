<?php

class Manggota extends CI_Model {

    function get_list(){
    	$data = $this->db->query("SELECT * FROM anggota");
        return $data->result();
    }

    function insert_anggota($data){
        return $this->db->insert('anggota', $data);
    }

}

?>