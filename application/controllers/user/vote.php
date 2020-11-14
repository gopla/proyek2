<?php

defined('BASEPATH') or exit('No direct script access allowed');

class vote extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/calon_model', 'calon');
    $this->load->model('vote_model');
  }


  public function index()
  {
    $data = array(
      "tableDatas" => $this->calon->getCalon(),
    );
    $this->load->view('user/vote/index', $data);
  }

  public function pilih()
  {
    $id = $this->input->post('id');
    $where = array('id_calon' => $id);
    $cek = $this->vote_model->select_data($where,'vote')->result();

    $jml_vote = 0;
    if(count($cek) != 0){
      $jml_vote = $cek[0]->jml_vote;
    }

    $data = array(
      'id_calon' => $id,
      'jml_vote' => $jml_vote + 1,
    );  

    if($cek === 0){
      $this->vote_model->add_data($data, 'vote');
    }else{
      $where = array('id_vote' => $cek[0]->id_vote);
      $this->vote_model->update_data($where,$data,'vote');
    }

    $this->load->view('user/harapan/index', $data);
  }
}
  
  /* End of file vote.php */
