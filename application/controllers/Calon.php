<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Calon extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost:8080/Proyek2/Calon";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    
    //menampilkan data
    public function index()
    {
        // $data['kategori'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Calon";
        $this->load->view('template/topbarsidebar',$data);
        
    }

    //menambah data
    public function post()
    {
        $data['title'] = "Tambah Data Calon";
        $this->load->view('Admin/template/header_admin',$data);
        $this->load->view('Admin/template/sidebar_admin');
        $this->load->view('Admin/kategori/post', $data, FALSE);
        $this->load->view('Admin/template/footer_admin');
    }

    //Proses Menambahkan data
    public function post_process()
    {
        $data = array(
            'nama_kategori'          => $this->input->post('nama_kategori'),
          
        );
        $insert =  $this->curl->simple_post($this->API, $data);
        if ($insert) {
            $this->session->set_flashdata('result', 'Data Calon Berhasil Ditambahkan');
            redirect('Calon');
        } else {
            $this->session->set_flashdata('result', 'Data Calon Gagal Ditambahkan');
        }
    }

    //Menghapus Data
    public function delete()
    {
        $params = array('id_calon' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Calon Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Calon Gagal');
        }
        redirect('KategoriClient');
    }
    
    //Mengedit Data Kategori
    public function put()
    {
        $params = array('id_calon' =>  $this->uri->segment(3));
        $data['calon'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "Edit Data Calon";
        $this->load->view('Admin/template/header_admin',$data);
        $this->load->view('Admin/template/sidebar_admin');
        $this->load->view('Admin/kategor/put', $data, FALSE);
        $this->load->view('template/topsidebar');
     }

     //Proses Edit Kategori
    public function put_process()
    {
        $data = array(
            'id_calon'          => $this->input->post('id_calon'),
            'no_urut'         => $this->input->post('no_urut'),
            'nama'          => $this->input->post('nama'),
            'kelas'         => $this->input->post('kelas'),
            'visimisi'          => $this->input->post('visimisi'),
            'foto'         => $this->input->post('foto'),
           
        );
        $update =  $this->curl->simple_put($this->API.'/Calon', $data, array(CURLOPT_BUFFERSIZE => 10)); 
        if($update)
        {
            $this->session->set_flashdata('hasil','Update Data Berhasil');
        }else
        {
           $this->session->set_flashdata('hasil','Update Data Gagal');
        }
        redirect('Calon/');
    }

    public function detail($id_kategori){
        $params = array('id_calon' =>  $this->uri->segment(3));
        $data['calon'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title']='Detail calon';
        $this->load->view('template/topsidebar', $data);
        $this->load->view('Calon/detail', $data);
    }
      
}    