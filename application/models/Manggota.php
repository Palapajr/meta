<?php

class Manggota extends CI_Model {

    function get_list(){
    	$result = $this->db->query("SELECT * FROM anggota");
        return $result;
    }

    function get_barang_by_kode($kobar){
        $hsl=$this->db->query("SELECT * FROM anggota WHERE id_anggota='$kobar'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'npk' => $data->npk,
                    'nama' => $data->nama,
                    'jabatan' => $data->jabatan,
                    'unit' => $data->unit,
                    'pendidikan' => $data->pendidikan,
                    'gender' => $data->gender,
                    'nope' => $data->nope,
                    'agama' => $data->agama,
                    'hobi' => $data->hobi,
                    'tmt_kerja' => $data->tmt_kerja,
                    );
            }
        }
        return $hasil;
    }

}

?>