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
      "isVote" => 'N',
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

    $dataPemilih = array(
      'isVote' => 'Y',
    );  

    if(count($cek) === 0){
      $pin = $this->session->user;
      $wherePin = array('pin' => $pin);
      $this->vote->add_data($data, 'vote');
      $this->vote->update_data($wherePin,$dataPemilih,'pemilih');
    }else{
      $pin = $this->session->user;
      $wherePin = array('pin' => $pin);
      $where = array('id_vote' => $cek[0]->id_vote);
      
      $this->vote->update_data($where,$data,'vote');
      $this->vote->update_data($wherePin,$dataPemilih,'pemilih');
    }

    $this->session->set_userdata('pilih', 'y');
    $this->session->set_userdata('id_calon', $id );

    redirect('user/vote');
  }

  public function harapan()
  {
    $id_calon = $this->session->id_calon;
    $id_pemilih = $this->session->id_pemilih;
    $data = array(
      'id_calon' => $id_calon,
      'id_pemilih' => $id_pemilih,
      'harapan' => $this->input->post('harapan')
    );

    $this->vote->add_data($data, 'harapan');
    $this->session->sess_destroy();
    redirect('/login');
  }
}
  
  /* End of file vote.php */
