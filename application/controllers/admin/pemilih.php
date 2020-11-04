<?php

defined('BASEPATH') or exit('No direct script access allowed');

class pemilih extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/pemilih_model', 'pemilih');
  }

  public function index()
  {
    $data = array(
      "title" => "E-Vote WRI | Pemilih",
      "contentTitle" => "Pemilih",
      "tableDatas" => $this->pemilih->getPemilih(),
    );
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/pemilih/index');
    $this->load->view('admin/template/footer');
  }

  public function add()
  {
    $data = array(
      "title" => "E-Vote WRI | Pemilih",
      "contentTitle" => "Add Pemilih"
    );

    $this->form_validation->set_rules('varPemilih', 'Jumlah Pemilih', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/template/header', $data);
      $this->load->view('admin/template/sidebar');
      $this->load->view('admin/pemilih/add');
      $this->load->view('admin/template/footer');
    } else {
      $this->pemilih->storePemilih();
      $this->session->set_flashdata('add', 'Pemilih generated');
      redirect('admin/pemilih');
    }
  }
}
  
  /* End of file pemilih.php */
