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
    $this->load->library('excel');
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

  public function exportHasil()
  {
    $data = array(
      "dataCalon" => $this->hasil->getNamaCalonAndCount(),
      "jumlahTidakVote" => $this->hasil->getCountTidakPilih()->num_rows(),
      "jumlahVote" => $this->hasil->getCountPilih()->num_rows(),
      "dataPemilih" => $this->pemilih->getPemilih(),
    );
    // var_dump($data['dataCalon']);
			$spreadsheet = new PHPExcel();
			$sheet = $spreadsheet->getActiveSheet();
			$sheet->setCellValue('A1', 'No');
			$sheet->setCellValue('B1', 'Nama');
			$sheet->setCellValue('C1', 'Email');
      $sheet->setCellValue('D1', 'Status');
      $sheet->setCellValue('E1', 'Waktu Vote');
      $sheet->setCellValue('G1', 'Calon');
      $sheet->setCellValue('G5', 'Pin');
      $sheet->setCellValue('G6', 'Terpakai');
      $sheet->setCellValue('G7', 'Belum Terpakai');
      $sheet->setCellValue('G8', 'Total');
      $sheet->setCellValue('H1', 'Jumlah Vote');
      $sheet->setCellValue('H5', 'Jumlah');

			
      $pemilih = $data['dataPemilih'];
      $dataCalon = $data['dataCalon'];
			$no = 1;
      $x = 2;
			$y = 2;
    
			foreach($pemilih as $row)
			{
        $status = "";
        if($row->isVote == "Y"){
          $status = "Sudah";
        }else{
          $status = "Belum Memilih";
        }
				$sheet->setCellValue('A'.$x, $no++);
				$sheet->setCellValue('B'.$x, $row->nama);
				$sheet->setCellValue('C'.$x, $row->email);
        $sheet->setCellValue('D'.$x, $status);
        $sheet->setCellValue('E'.$x, $row->vote_time);
				$x++;
      }
      foreach($dataCalon as $row){
        $sheet->setCellValue('G'.$y, $row->nama);
        $sheet->setCellValue('H'.$y, $row->jml_vote);
        $y++;
      }
      
      $dataSeriesLabels1 = array(
        new PHPExcel_Chart_DataSeriesValues(
            'String',
            'Worksheet!$D$7',
            NULL,
            1),
      );

      $xAxisTickValues1 = array(
        new PHPExcel_Chart_DataSeriesValues(
            'String',
            'Worksheet!$G$2:$G$3',
            NULL,
            2)
      );

      $dataSeriesValues1 = array(
        new PHPExcel_Chart_DataSeriesValues(
            'Number',
            'Worksheet!$H$2:$H$3',
            NULL,
            2),
      );

      $series1 = new PHPExcel_Chart_DataSeries(
        PHPExcel_Chart_DataSeries::TYPE_PIECHART, // Tipe Chart
        NULL, // Grouping (Pie charts tidak ada grouping)
        range(0, count($dataSeriesValues1)-1), // Urutan Chart
        $dataSeriesLabels1, // Data Label
        $xAxisTickValues1,  // Data Sumbu X
        $dataSeriesValues1  // Nilai Data
      );
      $layout1 = new PHPExcel_Chart_Layout();
      $layout1->setShowVal(TRUE);
      $layout1->setShowPercent(TRUE);
      $plotArea1 = new PHPExcel_Chart_PlotArea(
          $layout1,
          array($series1)
      );
      $legend1 = new PHPExcel_Chart_Legend(
          PHPExcel_Chart_Legend::POSITION_RIGHT,
          NULL,
          false
      );
      $title1 = new PHPExcel_Chart_Title('Hasil Pemilihan');
      $chart1 = new PHPExcel_Chart(
          'nama-chartnya', // Nama chart
          $title1,    // Judul chart
          $legend1,   // Legend chart
          $plotArea1, // Area plot
          true, // plotVisibleOnly
          0,    // displayBlanksAs
          NULL, // Label sumbu X
          NULL  // Label sumbu Y - Diagram pie tidak ada sumbu Y
      );
      $chart1->setTopLeftPosition('J1');
      $chart1->setBottomRightPosition('P15');
      $sheet->addChart($chart1);
      $spreadsheet->setActiveSheetIndex(0);
      ob_clean();
      $writer = PHPExcel_IOFactory::createWriter($spreadsheet, 'Excel2007');
			$filename = 'Laporan-Pemilihan'.date('YmdHis');
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
			header('Cache-Control: max-age=0');
      $writer->setIncludeCharts(TRUE);	
			$writer->save('php://output');
  }

  public function exportHarapan()
  {
    $data = array(
      "harapan" => $this->hasil->getHarapan(),
    );
    // var_dump($data['dataCalon']);
			$spreadsheet = new PHPExcel();
			$sheet = $spreadsheet->getActiveSheet();
			$sheet->setCellValue('A1', 'No');
			$sheet->setCellValue('B1', 'Calon');
      $sheet->setCellValue('C1', 'Harapan');
			
      $pemilih = $data['harapan'];
      // var_dump($pemilih);
			$no = 1;
      $x = 2;
			foreach($pemilih as $row)
			{
				$sheet->setCellValue('A'.$x, $no++);
				$sheet->setCellValue('B'.$x, $row->nama);
				$sheet->setCellValue('C'.$x, $row->harapan);
				$x++;
      }

      $spreadsheet->setActiveSheetIndex(0);
      ob_clean();
      $writer = PHPExcel_IOFactory::createWriter($spreadsheet, 'Excel2007');
			$filename = 'Laporan-Harapan'.date('YmdHis');
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
			header('Cache-Control: max-age=0');
      $writer->setIncludeCharts(TRUE);	
			$writer->save('php://output');
  }
}
  
  /* End of file dashboard.php */
