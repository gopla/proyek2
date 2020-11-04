<?php

defined('BASEPATH') or exit('No direct script access allowed');

class vote extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/calon_model', 'calon');
  }


  public function index()
  {
    $data = array(
      "tableDatas" => $this->calon->getCalon(),
    );
    $this->load->view('user/vote/index', $data);
  }
}
  
  /* End of file vote.php */
