<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class M_admin extends CI_Model{
    public function save($data){
        return $this->db->insert('karyawan', $data);  
    }
    public function tampilkandata(){
        return $this->db->get_where('karyawan')->result_array();
    }

public function modelhapus($npm){
    $this->db->where('nip',$npm);
    return $this->db->delete('karyawan'); 
}
public function edit($data, $id){
    $this->db->where('nip', $id);
    $this->db->update('karyawan', $data);
}
}