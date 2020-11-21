<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Hasil_model extends CI_Model
{
  public function getHarapanByCalon($idCalon)
  {
    return $this->db->get_where('harapan',['id_calon' => $idCalon])->result();
  }

  public function getHarapan()
  {
    $this->db->select('harapan.harapan, calon.nama');
    $this->db->join('pemilih', 'pemilih.id_pemilih = harapan.id_pemilih');
    $this->db->join('calon', 'calon.id_calon = harapan.id_calon');
    $this->db->order_by('harapan.id_calon ASC');
    return $this->db->get('harapan')->result();
  }

  public function getNamaCalonAndCount()
  {
    $this->db->select('calon.nama, vote.*');
    $this->db->join('calon', 'vote.id_calon = calon.id_calon');
    return $this->db->get('vote')->result();
  }

  public function getCountTidakPilih(){
    return $this->db->query("SELECT * FROM pemilih WHERE isVote='N'");
  }

  public function getCountPilih(){
    return $this->db->query("SELECT * FROM pemilih WHERE isVote='Y'");
  }
}