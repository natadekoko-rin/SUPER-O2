<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    var $template = 'template/index';
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_m');
        $this->load->model('Admin_m');
    }

    public function index()
    {
        $session = $this->session->userdata('status');

        if ($session == '') {
            // $this->session->set_flashdata('tragis', "maaf sesi anda telah berakhir");
            $this->load->view('admin/login');
        } else {
            redirect('admin');
        }
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[15]');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

            $data = $this->Auth_m->login($username, $password);

            if ($data == false) {
                $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');

                redirect('Auth');
            } else {
                $session = [
                    'ar' => $data,
                    'status' => "Loged in"
                ];
                // $session = array(
                //     'ar' => $data,
                //     'status' => "Loged in"
                // );
                // $session->result_array();
                $this->session->set_userdata($session);
                // var_dump($this->session);
                // print($this->session->userdata['userdata']);

                // var_dump($session);
                // $a = $this->session->userdata['ar']->username; //userdata bawaan
                // print($a);
                redirect('admin');
            }
        } else {
            $this->session->set_flashdata('result_login', '<br>Username Dan Password Harus Diisi.');
            redirect('Auth');
        }
    }

    function registration()
    {
        // print_r($_POST['username']);
        $this->load->library('form_validation');
        // nama view- nama alias
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[admin.username]');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules(
            'passconf',
            'Konfirmasi Password',
            'required|matches[password]',
            array('matches' => '%s tidak sesuai dengan Password')
        );
        // $this->form_validation->set_rules('role', 'Status Admin', 'required');
        $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi !!!');
        $this->form_validation->set_message('is_unique', '{field} sudah dipakai, silahkan ganti !!!');
        $this->form_validation->set_message('min_length', '{field} minimal 5 karakter !!!');

        if ($this->form_validation->run() == FALSE) {
            if ($this->session->userdata('ar') == "") {
                echo "<script>alert('session anda telah berakhir!')</script>";
                redirect('auth/login');
            } else {
                $data['nama'] = $this->session->userdata['ar']->username; //userdata bawaan

                if ($this->session->userdata['ar']->role == 1) {
                    $data['role'] = 'Admin';
                }
                if ($this->session->userdata['ar']->role == 2) {
                    $data['role'] = 'RT';
                }

                $this->load->view('template/header');
                $this->load->view('template/topbar');
                $this->load->view('admin/tambah_admin', $data);
                $this->load->view('template/footer');
            }
            // echo 'dadal';
        } else {
            // sukses
            $username = $this->input->post('username');
            $nama = $this->input->post('nama');
            $password = md5($this->input->post('password'));
            $role = $this->input->post('role');
            $this->Auth_m->add($username, $nama, $password, $role);
            // $this->session->set_flashdata('message', '<div class="alert alert-success col-md-6" role="alert"> Admin berhasil diitambahkan!
            //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //         <span aria-hidden="true">&times;</span>
            //     </button>
            // </div>');
            $this->session->set_flashdata('sukses', 'Admin Berhasil Ditambahkan');
            redirect('admin/tambah_admin');
            // var_dump($role);
        }
    }

    function detailAdmin($id)
    {
        if ($this->form_validation->run() == FALSE) {
            if ($this->session->userdata('ar') == "") {
                echo "<script>alert('session anda telah berakhir!')</script>";
                redirect('auth/login');
            } else {
                $data['nama'] = $this->session->userdata['ar']->username; //userdata bawaan

                if ($this->session->userdata['ar']->role == 1) {
                    $data['role'] = 'Admin';
                }
                if ($this->session->userdata['ar']->role == 2) {
                    $data['role'] = 'RT';
                }
                $data['jmlAdm'] = $this->Admin_m->get_jml_adm();
                $data['admin'] = $this->Admin_m->get_detailAdminById($id);
                $this->load->view('template/header');
                $this->load->view('template/topbar');
                $this->load->view('admin/editAdmin', $data);
                $this->load->view('template/footer');
            }
        }
    }

    function updateAdmin()
    {
        // print_r($_POST['username']);
        $this->load->library('form_validation');
        // nama view- nama alias
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[admin.username]');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules(
            'passconf',
            'Konfirmasi Password',
            'required|matches[password]',
            array('matches' => '%s tidak sesuai dengan Password')
        );
        // $this->form_validation->set_rules('role', 'Status Admin', 'required');
        $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi !!!');
        $this->form_validation->set_message('is_unique', '{field} sudah dipakai, silahkan ganti !!!');
        $this->form_validation->set_message('min_length', '{field} minimal 5 karakter !!!');

        if ($this->form_validation->run() == FALSE) {
            if ($this->session->userdata('ar') == "") {
                echo "<script>alert('session anda telah berakhir!')</script>";
                redirect('auth/login');
            } else {
                $data['nama'] = $this->session->userdata['ar']->username; //userdata bawaan

                if ($this->session->userdata['ar']->role == 1) {
                    $data['role'] = 'Admin';
                }
                if ($this->session->userdata['ar']->role == 2) {
                    $data['role'] = 'RT';
                }

                $this->load->view('template/header');
                $this->load->view('template/topbar');
                $this->load->view('admin/detailAdmin/', $data);
                $this->load->view('template/footer');
            }
            // echo 'dadal';
        } else {
            $username = $this->input->post('username');
            $nama = $this->input->post('nama');
            $password = md5($this->input->post('password'));
            $role = $this->input->post('role');
            echo $username;
            echo $nama;
            echo $password;
            echo $role;
        }

        // else {
        //     // sukses
        //     $username = $this->input->post('username');
        //     $nama = $this->input->post('nama');
        //     $password = md5($this->input->post('password'));
        //     $role = $this->input->post('role');
        //     $this->Auth_m->add($username, $nama, $password, $role);
        //     // $this->session->set_flashdata('message', '<div class="alert alert-success col-md-6" role="alert"> Admin berhasil diitambahkan!
        //     //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //     //         <span aria-hidden="true">&times;</span>
        //     //     </button>
        //     // </div>');
        //     $this->session->set_flashdata('sukses', 'Admin Berhasil Ditambahkan');
        //     redirect('admin/tambah_admin');
        //     // var_dump($role);
        // }
    }

    function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('sukses', 'Anda Telah Keluar dari Sistem Informasi');
        redirect('Auth');
    }
    function deleteAdmin($id)
    {
        $this->Auth_m->delAdmin($id);
        $this->session->set_flashdata('sukses', "Admin Berhasil Di Hapus");
        return redirect('admin/allAdmin');
    }
}
/* End of file Login.php */
/* Location: ./application/controllers/Login.php */