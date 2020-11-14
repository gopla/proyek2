<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/hasil_model', 'hasil');
    $this->load->model('admin/calon_model', 'calon');
    $this->load->model('admin/hasil_model', 'hasil');
    
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

  public function show($idCalon)
  {
    $data = array(
      "title" => "E-Vote WRI | Harapan",
      "contentTitle" => "Harapan",
      "tableDatas" => $this->hasil->getHarapanByCalon($idCalon),
      "namaCalon" => $this->calon->showCalon($idCalon),
    );

    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/hasil/show');
    $this->load->view('admin/template/footer');
  }
}
  
  /* End of file pemilih.php */
