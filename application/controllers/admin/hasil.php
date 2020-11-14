<?php

defined('BASEPATH') or exit('No direct script access allowed');

class hasil extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/hasil_model', 'hasil');
    $this->load->model('admin/calon_model', 'calon');
  }

  public function index()
  {
    $data = array(
      "title" => "E-Vote WRI | Hasil",
      "contentTitle" => "Hasil",
      "tableDatas" => $this->calon->getVoteCalon(),
    );
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/hasil/index');
    $this->load->view('admin/template/footer');
  }
}
  
  /* End of file pemilih.php */
