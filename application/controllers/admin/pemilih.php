<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pemilih extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/pemilih_model', 'pemilih');
    $this->load->library('Excel'); //load librari excel
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

    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/pemilih/add');
    $this->load->view('admin/template/footer');
  }

  public function importExcel(){
    $fileName = $_FILES['varPemilih']['name'];
      
    $config['upload_path'] = './assets/'; //path upload
    $config['file_name'] = $fileName;  // nama file
    $config['allowed_types'] = 'xls|xlsx|csv'; //tipe file yang diperbolehkan
    $config['max_size'] = 10000; // maksimal sizze

    $this->load->library('upload'); //meload librari upload
    $this->upload->initialize($config);
      
    if(! $this->upload->do_upload('varPemilih') ){
        echo $this->upload->display_errors();exit();
    }
          
    $inputFileName = './assets/'.$fileName;

    try {
      $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
      $objReader = PHPExcel_IOFactory::createReader($inputFileType);
      $objPHPExcel = $objReader->load($inputFileName);
    } catch(Exception $e) {
      die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
    }

    $sheet = $objPHPExcel->getSheet(0);
    $highestRow = $sheet->getHighestRow();
    $highestColumn = $sheet->getHighestColumn();

    for ($row = 2; $row <= $highestRow; $row++){   //  Read a row of data into an array                 
        $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                        NULL,
                                        TRUE,
                                        FALSE);   
        $data = array(
          "nama"=> $rowData[0][0],
          "email"=> $rowData[0][1],
          'pin' => strtoupper(random_string('alnum', 6)),
      );
      $this->db->insert("pemilih",$data);    
    }
    $this->session->set_flashdata('add', 'Pemilih generated');
    redirect('admin/pemilih');
  }
}
  
  /* End of file pemilih.php */
