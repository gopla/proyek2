<?php

defined('BASEPATH') or exit('No direct script access allowed');

class hasil_model extends CI_Model
{
  public function getHarapanByCalon($idCalon)
  {
    return $this->db->get_where('harapan',['id_calon' => $idCalon])->result();
  }
}