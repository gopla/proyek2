<?php

defined('BASEPATH') or exit('No direct script access allowed');

class vote extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/calon_model', 'calon');
    $this->load->model('user/vote_model','vote');
    $this->load->model('admin/pemilih_model', 'pemilih');
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
    $pin = $this->input->post('pin');
    $cek = $this->vote->getVoteByCalon($id);

    $jml_vote = 0;
    if(count($cek) != 0){
      $jml_vote = $cek[0]->jml_vote;
    }

    $data = array(
      'id_calon' => $id,
      'jml_vote' => $jml_vote + 1,
    );  
   
    if(empty($cek)){
      $this->vote->add_data($data, 'vote');
    }else{
      $where = array('id_vote' => $cek[0]->id_vote);
      $this->vote->update_data($where,$data,'vote');
    }

    $this->pemilih->changePemilih($pin);
    $this->load->view('user/harapan/index', $data);
  }
}
  
  /* End of file vote.php */
