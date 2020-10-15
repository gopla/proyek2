<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class admin extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
 
  public function dashboard()
  {
    $this->load->view('dashboard');
    // $this->load->helper('url');
  }
 
}