<?php

defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('login_model', 'login');
  }


  public function index()
  {
    $this->load->view('user/userLogin');
  }

  public function admin()
  {
    $this->load->view('admin/adminLogin');
  }

  public function userLogin()
  {
    $pin = htmlspecialchars($this->input->post('varPin'));

    $cekLogin = $this->login->authUser($pin);

    if ($cekLogin) {
      foreach ($cekLogin as $row) {
        $this->session->set_userdata('id_pemilih', $row->id_pemilih);
        $this->session->set_userdata('user', $row->pin);

        redirect('user/vote');
      }
    } else {
      $this->session->set_flashdata('pesan', 'PIN salah atau sudah pernah digunakan');
      redirect('login');
    }
  }

  public function adminLogin()
  {
    $uname = htmlspecialchars($this->input->post('varUname'));
    $pass = htmlspecialchars(md5($this->input->post('varPass')));

    $cekLogin = $this->login->authAdmin($uname, $pass);

    if ($cekLogin) {
      foreach ($cekLogin as $row) {
        $this->session->set_userdata('id_admin', $row->id_admin);
        $this->session->set_userdata('user', $row->username);

        redirect('admin/dashboard');
      }
    } else {
      $this->session->set_flashdata('pesan', 'Wrong Username and Password combination.');
      redirect('login/admin');
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    echo "
                <script>
                    alert('You are logged out.');
                    window.location = '" . base_url() . "';
                </script>
            ";
  }
}
  
  /* End of file loginUser.php */
