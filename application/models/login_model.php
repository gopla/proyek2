<?php

defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Model
{

  public function authUser($pin)
  {
    $this->db->select('*');
    $this->db->from('pemilih');
    $this->db->where('pin', $pin);
    $this->db->where('isVote', 'N');
    $this->db->limit(1);
    $query = $this->db->get();
    if ($query->num_rows() == 0) {
      return false;
    } else {
      return $query->result();
    }
  }

  public function authAdmin($uname, $pass)
  {
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('username', $uname);
    $this->db->where('password', $pass);
    $this->db->limit(1);
    $query = $this->db->get();
    if ($query->num_rows() == 0) {
      return false;
    } else {
      return $query->result();
    }
  }
}
  
  /* End of file login_model.php */
