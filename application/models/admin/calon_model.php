<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Calon_model extends CI_Model
{

  public function getCalon()
  {
    return $this->db->get('calon')->result();
  }

  public function getVoteCalon()
  {
    $this->db->select('*');
     $this->db->from('calon');
     $this->db->join('vote','vote.id_calon = calon.id_calon');
     $query = $this->db->get();
     return $query->result();
  }

  public function showCalon($id)
  {
    return $this->db->get_where('calon', array('id_calon' => $id))->result();
  }

  public function storeCalon($upload)
  {
    $data = array(
      'no_urut' => $this->input->post('varNoUrut'),
      'nama' => $this->input->post('varNama'),
      'kelas' => $this->input->post('varKelas'),
      'visimisi' => $this->input->post('varVisiMisi'),
      'foto' => $upload['file']['file_name'],
    );

    $this->db->insert('calon', $data);
  }

  public function editCalon($upload, $id)
  {
    $data = array(
      'no_urut' => $this->input->post('varNoUrut'),
      'nama' => $this->input->post('varNama'),
      'kelas' => $this->input->post('varKelas'),
      'visimisi' => $this->input->post('varVisiMisi'),
      'foto' => $upload['file']['file_name'],
    );

    $this->db->where('id_calon', $id);
    $this->db->update('calon', $data);
  }

  public function deleteCalon($id)
  {
    $this->db->where('id_calon', $id);
    $this->db->delete('calon');
  }

  public function countCalon()
  {
    return $this->db->count_all('calon');
  }

  public function upload()
  {
    $config['upload_path'] = './assets/uploads/calon/';
    $config['allowed_types'] = 'jpg|png|jpeg';

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('varImg')) {
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    } else {
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }

  private function _deleteImage($id)
  {
    $data = $this->showCalon($id);
    $filename = $data->img;
    unlink(FCPATH . "assets/uploads/calon/" . $filename);
  }
}

/* End of file calon_model.php */
