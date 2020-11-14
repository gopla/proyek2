<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admin_model extends CI_Model
{

  public function getAdmin()
  {
    return $this->db->get('admin')->result();
  }

  public function showAdmin($id)
  {
    return $this->db->get_where('admin', array('id_admin' => $id))->result();
  }

  public function storeAdmin()
  {
    $data = array(
      'username' => $this->input->post('varUname', true),
      'password' => md5($this->input->post('varPass', true)),
    );
    return $this->db->insert('admin', $data);
  }

  public function updateAdmin($id)
  {
    $data = array(
      'username' => $this->input->post('varUname', true),
      'password' => md5($this->input->post('varPass', true)),
    );
    $this->db->where('id_admin', $id);
    $this->db->update('admin', $data);
  }

  public function destroyAdmin($id)
  {
    $this->db->where('id_admin', $id);
    $this->db->delete('admin');
  }

  public function countAdmin()
  {
    return $this->db->count_all('admin');
  }
}

/* End of file admin_model.php */
