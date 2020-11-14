<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Hasil_model extends CI_Model
{
  public function getHarapanByCalon($idCalon)
  {
    return $this->db->get_where('harapan',['id_calon' => $idCalon])->result();
  }

  public function getNamaCalonAndCount()
  {
    $this->db->select('calon.nama, vote.*');
    $this->db->join('calon', 'vote.id_calon = calon.id_calon');
    return $this->db->get('vote')->result();
  }
}