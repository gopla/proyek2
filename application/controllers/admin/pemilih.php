<?php
ini_set('max_execution_time', 0); 
ini_set('memory_limit','2048M');
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
      "countPemilih" => $this->pemilih->countPemilih(),
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

  public function importExcel()
  {
    $theFile = $_FILES['varPemilih']['name'];
    $extFile = strrpos($theFile, '.');
    $fileName = substr($theFile, 0, $extFile) . date('YmdHis') . substr($theFile, $extFile);

    $config['upload_path'] = './assets/uploads/excel/'; //path upload
    $config['file_name'] = $fileName;  // nama file
    $config['allowed_types'] = 'xls|xlsx|csv'; //tipe file yang diperbolehkan
    $config['max_size'] = 10000; // maksimal sizze

    $this->load->library('upload'); //meload librari upload
    $this->upload->initialize($config);
      
    if(! $this->upload->do_upload('varPemilih') ){
        echo $this->upload->display_errors();exit();
    }
          
    $inputFileName = './assets/uploads/excel/'.$fileName;

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

  public function send()
  {
    $dataPemilih = $this->pemilih->getPemilih();
        
    $config = [
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.gmail.com',
      'smtp_port' => 465,
      'smtp_timeout' => 120,
      'smtp_user' => 'teswri@gmail.com',
      'smtp_pass' => 'tesWRI-123',
      'mailtype' => 'html',
      'charset' => 'utf-8',
      'wordwrap' => TRUE,
      'crlf'    => "\r\n",
      'newline' => "\r\n"
    ];

    $this->load->library('email', $config);

    foreach($dataPemilih as $pemilih){
      $this->email->clear(TRUE);
      
      $this->email->from('wri@polinema.ac.id', 'Workshop Riset Informatika');
      $this->email->to($pemilih->email);
      $this->email->subject('PIN untuk Vote Ketua Umum WRI 2020/2021');
      $this->email->message("<p style='text-align: center; line-height: 1.2; word-break: break-word; mso-line-height-alt: 14px; margin: 0;'>Hai, <strong>$pemilih->nama<br/></strong></p><p style='text-align: center; line-height: 1.2;'>Jangan lupa ikut pemilihan ketua umum ya!<br/><br/>Login ke aplikasi pakai PINmu dibawah ini<br/><br/><span style='font-size: 28px;'><strong>$pemilih->pin</strong></span><br/><br/></p><p style='text-align: center;'>Terima kasih partisipasinya~!</p>");
      $sent = $this->email->send();
    };
      

    if ($sent) {
      $this->session->set_flashdata('add', 'All PIN sent!');
      redirect('admin/pemilih');
    } else {
      show_error($this->email->print_debugger());
      echo 'Error! email tidak dapat dikirim.';
    }
  }

  public function delete()
  {
    $this->pemilih->destroyPemilih();
    $this->session->set_flashdata('delete', 'Pemilih deleted');
    redirect('admin/pemilih');
  }
}
  
  /* End of file pemilih.php */
