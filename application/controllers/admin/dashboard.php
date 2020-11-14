<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/admin_model', 'admin');
    $this->load->model('admin/calon_model', 'calon');
    $this->load->model('admin/pemilih_model', 'pemilih');
    $this->load->model('admin/hasil_model','hasil');
  }

  public function index()
  {
    $data = array(
      "title" => "E-Vote WRI | Dashboard",
      "contentTitle" => "Dashboard",
      "adminCount" => $this->admin->countAdmin(),
      "calonCount" => $this->calon->countCalon(),
      "pemilihCount" => $this->pemilih->countPemilih(),
      "dataCalon" => $this->hasil->getNamaCalonAndCount(),
    );
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/dashboard/index');
    $this->load->view('admin/template/footer');
  }
}
  
  /* End of file dashboard.php */
