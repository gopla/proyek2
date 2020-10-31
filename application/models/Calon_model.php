<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Calon_model extends CI_Model {

    public function getCalon($id_calon = null){

        if($id_calon === null){
        $this->db->select('calon');
            return $this->db->get('calon')->result();
        }else{
            return $this->db->get_where('calon', ['id_calon' => $id_calon])->result();
        }
    }

    public function deleteCalon($id_calon){
        $this->db->delete('calon', ['id_calon' => $id_calon]);
        return $this->db->affected_rows();
    }

    public function createCalon($data){
        $this->db->insert('calon', $data );
        return $this->db->affected_rows();
    }

    public function updateCalon($data, $id_calon){
        $this->db->update('calon', $data ,['id_calon'=>$id_calon]) ;
        return $this->db->affected_rows();
    }
}    