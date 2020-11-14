<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/admin_model', 'admin');
  }


  public function index()
  {
    $data = array(
      "title" => "E-Vote WRI | Admin",
      "contentTitle" => "Admin",
      "tableDatas" => $this->admin->getAdmin(),
    );
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/admin/index');
    $this->load->view('admin/template/footer');
  }

  public function add()
  {
    $data = array(
      "title" => "E-Vote WRI | Admin",
      "contentTitle" => "Add Admin"
    );

    $this->form_validation->set_rules('varUname', 'Username', 'required');
    $this->form_validation->set_rules('varPass', 'Password', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/template/header', $data);
      $this->load->view('admin/template/sidebar');
      $this->load->view('admin/admin/add');
      $this->load->view('admin/template/footer');
    } else {
      $this->admin->storeAdmin();
      $this->session->set_flashdata('add', 'New Admin added');
      redirect('admin/admin');
    }
  }

  public function edit($id)
  {
    $data = array(
      "title" => "E-Vote WRI | Admin",
      "contentTitle" => "Edit Admin",
      "adminData" => $this->admin->showAdmin($id)
    );

    $this->form_validation->set_rules('varUname', 'Username', 'required');
    $this->form_validation->set_rules('varPass', 'Password', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/template/header', $data);
      $this->load->view('admin/template/sidebar');
      $this->load->view('admin/admin/edit');
      $this->load->view('admin/template/footer');
    } else {
      $this->admin->updateAdmin($id);
      $this->session->set_flashdata('edit', 'Admin data edited');
      redirect('admin/admin');
    }
  }

  public function delete($id)
  {
    $this->admin->destroyAdmin($id);
    $this->session->set_flashdata('delete', 'Admin deleted');
    redirect('admin/admin');
  }
}

/* End of file admin.php */
