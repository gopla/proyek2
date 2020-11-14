<?php

defined('BASEPATH') or exit('No direct script access allowed');

class calon extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/calon_model', 'calon');
  }

  public function index()
  {
    $data = array(
      "title" => "E-Vote WRI | Calon",
      "contentTitle" => "Calon",
      "tableDatas" => $this->calon->getCalon(),
    );
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/calon/index');
    $this->load->view('admin/template/footer');
  }

  public function add()
  {
    $data = array(
      "title" => "E-Vote WRI | Calon",
      "contentTitle" => "Calon",
    );

    $this->form_validation->set_rules('varNoUrut', 'Nomor Urut', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/template/header', $data);
      $this->load->view('admin/template/sidebar');
      $this->load->view('admin/calon/add');
      $this->load->view('admin/template/footer');
    } else {
      $upload = $this->calon->upload();
      if ($upload['result'] == 'success') {
        $this->calon->storeCalon($upload);
        $this->session->set_flashdata('add', 'New Calon added');
        redirect('admin/calon');
      } else {
        echo $upload['error'];
      }
    }
  }

  public function edit($id)
  {
    $data = array(
      "title" => "E-Vote WRI | Calon",
      "contentTitle" => "Calon",
      "calonData" => $this->calon->showCalon($id),
    );

    $this->form_validation->set_rules('varNoUrut', 'Nomor Urut', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/template/header', $data);
      $this->load->view('admin/template/sidebar');
      $this->load->view('admin/calon/edit');
      $this->load->view('admin/template/footer');
    } else {
      $upload = $this->calon->upload();
      if ($upload['result'] == 'success') {
        $this->calon->editCalon($upload, $id);
        $this->session->set_flashdata('edit', 'Calon data updated');
        redirect('admin/calon');
      } else {
        echo $upload['error'];
      }
    }
  }

  public function delete($id)
  {
    $this->admin->destroyCalon($id);
    $this->session->set_flashdata('delete', 'Calon deleted');
    redirect('calon/calon');
  }

  public function show($id)
  {
    $data = array(
      "title" => "E-Vote WRI | Calon",
      "contentTitle" => "Calon",
      "calonData" => $this->calon->showCalon($id),
    );

    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/calon/show');
    $this->load->view('admin/template/footer');
  }
}
  
  /* End of file calon.php */
