<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pemilih_model extends CI_Model
{

  public function getPemilih()
  {
    return $this->db->get('pemilih')->result();
  }

  public function storePemilih()
  {
    $val = $this->input->post('varPemilih');

    for ($i = 0; $i < $val; $i++) {
      $data = array(
        'pin' => strtoupper(random_string('alnum', 6)),
      );
      $this->db->insert('pemilih', $data);
    }
    return true;
  }

  public function changePemilih($pin)
  {
    $data = array(
      'isVote' => 'Y',   
    );

    $this->db->where('pin', $pin);
    $this->db->update('pemilih', $data);
  }

  public function countPemilih()
  {
    return $this->db->count_all('pemilih');
  }
  
  public function destroyPemilih()
  {
    $this->db->query('DELETE from pemilih');
  }

  public function getCountPemilih()
  {
    $sql = "SELECT COUNT(pin) AS Total, SUM(CASE WHEN isVote = 'Y' THEN 1 ELSE 0 END) AS Sudah, SUM(CASE WHEN isVote = 'N' then 1 ELSE 0 END) AS Belum from pemilih";

    return $this->db->query($sql)->result();
    
  }
}
  
  /* End of file pemilih_model.php */
