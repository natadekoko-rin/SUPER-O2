<?php
defined('BASEPATH') or exit('No direct script access allowed');

//load library 
require 'vendor/autoload.php';
require_once 'vendor/dompdf/dompdf/autoload.inc.php';


use Dompdf\Dompdf;
use Dompdf\Options;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class admin extends CI_Controller
{
    // var $template = 'template/index';

    public function __construct()
    {
        parent::__construct(); //untuk memanggil knstran di controller
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Admin_m');
        $this->load->model('pengantar_m');
        $this->load->model('nomor_m');
        $this->load->helper('url');
        $this->load->helper(array('url', 'download'));
    }

    function index()
    {
        if ($this->session->userdata('ar') == "") {
            echo "<script>alert('session anda telah berakhir!')</script>";
            redirect('auth/login');
        } else {
            $data['jumlah_penduduk'] = $this->Admin_m->get_jumlah_penduduk();
            $data['jumlah_pengantar'] = $this->Admin_m->get_jumlah_pengantar();
            $data['jumlah_admin'] = $this->Admin_m->get_jumlah_admin();

            $data['nama'] = $this->session->userdata['ar']->nama; //userdata bawaan
            if ($this->session->userdata['ar']->role == 1) {
                $data['role'] = 'Admin';
            }
            if ($this->session->userdata['ar']->role == 2) {
                $data['role'] = 'RT';
            }
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('admin/dashboard', $data);
            $this->load->view('template/footer');
        }
    }

    function list_penduduk()
    {

        if ($this->session->userdata('ar') == "") {
            echo "<script>alert('session anda telah berakhir!')</script>";
            redirect('auth/login');
        } else {
            $data['nama'] = $this->session->userdata['ar']->username; //userdata bawaan
            if (($this->session->userdata['ar']->role) == 1) {
                $data['role'] = "Admin";
            } else {
                $data['role'] = "RT";
            }
            $data['penduduk'] = $this->Admin_m->get_all_penduduk();
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('admin/list_penduduk', $data);
            $this->load->view('template/footer');
            // var_dump($data);
        }
    }
    function input_penduduk()
    {
        if ($this->session->userdata('ar') == "") {
            echo "<script>alert('session anda telah berakhir!')</script>";
            redirect('auth/login');
        } else {
            $data['nama'] = $this->session->userdata['ar']->nama; //userdata bawaan
            if ($this->session->userdata['ar']->role == 1) {
                $data['role'] = 'Admin';
            }
            if ($this->session->userdata['ar']->role == 2) {
                $data['role'] = 'RT';
            }
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('admin/input_penduduk', $data);
            $this->load->view('template/footer');
        }
    }
    function addPenduduk()
    {
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $jenis_kel = $this->input->post('jenis_kelamin');
        $tempat_lahir = $this->input->post('tempat');
        $tgl_lahir = date("d/m/Y", strtotime($this->input->post('tanggal')));
        $kewarganegaraan = $this->input->post('kewarganegaraan');
        $agama = $this->input->post('agama');
        $status = $this->input->post('status');
        $pendidikan_ter = $this->input->post('pendidikan');
        $pekerjaan = $this->input->post('pekerjaan');
        $alamat = $this->input->post('alamat');

        $this->Admin_m->add_penduduk($nama, $nik, $jenis_kel, $tempat_lahir, $tgl_lahir, $kewarganegaraan, $agama, $status, $pendidikan_ter, $pekerjaan, $alamat);
        $this->session->set_flashdata('sukses', "Penduduk Berhasil Ditambahkan");
        redirect('admin/input_penduduk');
    }
    function importPenduduk()
    {
        $data = array();
        // Load form validation library

        $this->form_validation->set_rules('fileURL', 'Upload File OLT', 'callback_checkFileValidation');
        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('gagal', 'Format tidak sesuai, harap download format yang ditentukan');
            // $this->template->load('admin/input_penduduk', 'olt/olt_form_import');
            redirect('admin/input_penduduk');
        } else {
            // If file uploaded
            if (!empty($_FILES['im-penduduk']['name'])) {

                //  // get file extension
                $extension = pathinfo($_FILES['im-penduduk']['name'], PATHINFO_EXTENSION);

                if ($extension == 'csv') {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                } elseif ($extension == 'xlsx') {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                } else {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                }

                // file path
                $spreadsheet = $reader->load($_FILES['im-penduduk']['tmp_name']);
                $allDataInSheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
                // array Count
                $arrayCount = count($allDataInSheet);

                $flag = 0;
                $createArray = array('Nama', 'NIK', 'Jenis Kelamin', 'Tempat Lahir', 'Tanggal Lahir', 'Kewarganegaraan', 'Agama', 'Status', 'Pendidikan Terakhir', 'Pekerjaan', 'Alamat'); //untuk validasi kolom
                $makeArray = array('Nama' => 'Nama', 'NIK' => 'NIK', 'Jenis Kelamin' => 'Jenis Kelamin', 'Tempat Lahir' => 'Tempat Lahir', 'Tanggal Lahir' => 'Tanggal Lahir', 'Kewarganegaraan' => 'Kewarganegaraan', 'Agama' => 'Agama', 'Status' => 'Status', 'Pendidikan Terakhir' => 'Pendidikan Terakhir', 'Pekerjaan' => 'Pekerjaan', 'Alamat' => 'Alamat');
                $SheetDataKey = array();
                foreach ($allDataInSheet as $dataInSheet) {
                    foreach ($dataInSheet as $key => $value) {
                        if (in_array(trim($value), $createArray)) {

                            $SheetDataKey[trim($value)] = $key;
                        }
                    }
                }

                $dataDiff = array_diff_key($makeArray, $SheetDataKey); //ceke yg diingin sama gk?
                if (empty($dataDiff)) {
                    $flag = 1;
                }
                // print_r($dataDiff);

                // match excel sheet column
                if ($flag == 1) {
                    for ($i = 2; $i <= $arrayCount; $i++) {
                        $nama = $SheetDataKey['Nama'];
                        $nik = $SheetDataKey['NIK'];
                        $jeni_kel = $SheetDataKey['Jenis Kelamin'];
                        $tempat_lahir = $SheetDataKey['Tempat Lahir'];
                        $tgl_lahir = $SheetDataKey['Tanggal Lahir'];
                        $kewarganegaraan = $SheetDataKey['Kewarganegaraan'];
                        $agama = $SheetDataKey['Agama'];
                        $status = $SheetDataKey['Status'];
                        $pendidikan_ter = $SheetDataKey['Pendidikan Terakhir'];
                        $pekerjaan = $SheetDataKey['Pekerjaan'];
                        $alamat = $SheetDataKey['Alamat'];

                        // pengecekan isi data html
                        $nama = filter_var(html_escape(trim($allDataInSheet[$i][$nama])), FILTER_SANITIZE_STRING);
                        $nik = filter_var(html_escape(trim($allDataInSheet[$i][$nik])), FILTER_SANITIZE_STRING);
                        $jeni_kel  = filter_var(html_escape(trim($allDataInSheet[$i][$jeni_kel])), FILTER_SANITIZE_STRING);
                        $tempat_lahir = filter_var(html_escape(trim($allDataInSheet[$i][$tempat_lahir])), FILTER_SANITIZE_STRING);
                        $tgl_lahir = filter_var(html_escape(trim($allDataInSheet[$i][$tgl_lahir])), FILTER_SANITIZE_STRING);
                        $kewarganegaraan = filter_var(html_escape(trim($allDataInSheet[$i][$kewarganegaraan])), FILTER_SANITIZE_STRING);
                        $agama = filter_var(html_escape(trim($allDataInSheet[$i][$agama])), FILTER_SANITIZE_STRING);
                        $status = filter_var(html_escape(trim($allDataInSheet[$i][$status])), FILTER_SANITIZE_STRING);
                        $pendidikan_ter = filter_var(html_escape(trim($allDataInSheet[$i][$pendidikan_ter])), FILTER_SANITIZE_STRING);
                        $pekerjaan = filter_var(html_escape(trim($allDataInSheet[$i][$pekerjaan])), FILTER_SANITIZE_STRING);
                        $alamat = filter_var(html_escape(trim($allDataInSheet[$i][$alamat])), FILTER_SANITIZE_STRING);

                        // $newSTO = $this->STO_model->getIDSTOByName($STO);
                        // $idSTO = $newSTO->idSTO;
                        // if (!empty($SPECIFICATION) or $SPECIFICATION != null) {
                        //     $newSpecOLT = $this->SpecOLT_model->getIDSpecOLTByName($SPECIFICATION);
                        //     $idSpecOLT = $newSpecOLT->idSpecOLT;
                        // }

                        // if dek ink dkk

                        $fetchData[] = array('nama' => $nama, 'NIK' => $nik, 'jenis_kel' => $jeni_kel, 'tempat_lahir' => $tempat_lahir, 'tgl_lahir' => $tgl_lahir, 'kewarganegaraan' => $kewarganegaraan, 'agama' => $agama, 'status' => $status, 'pendidikan_ter' => $pendidikan_ter, 'pekerjaan' => $pekerjaan, 'alamat' => $alamat);
                    }

                    $this->Admin_m->setPenduduk($fetchData);
                    $this->Admin_m->importPendudukDb();
                } else {
                    $this->session->set_flashdata('gagal', 'Format tidak sesuai, harap download format yang ditentukan');
                }
                redirect('Admin/input_penduduk');
            }
        }
    }

    // cek file
    public function checkFileValidation()
    {
        $file_mimes = array(
            'text/x-comma-separated-values',
            'text/comma-separated-values',
            'application/octet-stream',
            'application/vnd.ms-excel',
            'application/x-csv',
            'text/x-csv',
            'text/csv',
            'application/csv',
            'application/excel',
            'application/vnd.msexcel',
            'text/plain',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        );
        if (isset($_FILES['im-penduduk']['name'])) {
            // $arr_file = explode('.', $_FILES['fileURL']['name']);
            // $extension = end($arr_file);
            $extension = pathinfo($_FILES['im-penduduk']['name'], PATHINFO_EXTENSION);
            if (($extension == 'xlsx' || $extension == 'xls' || $extension == 'csv') && in_array($_FILES['im-penduduk']['type'], $file_mimes)) {
                return true;
            } else {
                $this->form_validation->set_message('checkFileValidation', 'Mohon memilih file yang sesuai dengan format.');

                return false;
            }
        } else {
            $this->form_validation->set_message('checkFileValidation', 'Please choose a file.');
            return false;
        }
    }

    function delete_penduduk($params = '')
    {
        $this->Admin_m->del_penduduk($params);
        $this->session->set_flashdata('sukses', "Data Penduduk Berhasil Di Hapus");
        return redirect('admin/list_penduduk');
    }
    function edit_penduduk()
    {
        $NIK = $this->input->post('NIK');
        $nama = $this->input->post('nama');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $kewarganegaraan = $this->input->post('kewarganegaraan');
        $agama = $this->input->post('agama');
        $status = $this->input->post('status');
        $pendidikan_ter = $this->input->post('pendidikan_ter');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');

        $ar = array(
            'NIK' =>  $NIK,
            'nama'  => $nama,
            'jenis_kel' => $jenis_kelamin,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' =>  $tgl_lahir,
            'kewarganegaraan'  => $kewarganegaraan,
            'agama' => $agama,
            'status' => $status,
            'pendidikan_ter' =>  $pendidikan_ter,
            'alamat'  => $alamat,
            'pekerjaan' => $pekerjaan
        );
        $this->Admin_m->ubah_penduduk($NIK, $ar);
        $this->Admin_m->ubah_pengantar($NIK, $tempat_lahir, $tgl_lahir, $jenis_kelamin, $kewarganegaraan, $agama, $status, $pendidikan_ter, $pekerjaan, $alamat);
        $this->session->set_flashdata('sukses2', "Data Penduduk Berhasil Diubah");
        return redirect('admin/list_penduduk');
    }

    function data_master()
    {
        if ($this->session->userdata('ar') == "") {
            echo "<script>alert('session anda telah berakhir!')</script>";
            redirect('auth/login');
        } else {
            $data['nama'] = $this->session->userdata['ar']->nama; //userdata bawaan
            if ($this->session->userdata['ar']->role == 1) {
                $data['role'] = 'Admin';
            }
            if ($this->session->userdata['ar']->role == 2) {
                $data['role'] = 'RT';
            }
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('admin/input_penduduk');
            $this->load->view('template/footer');
        }
    }
    function validasi_rt()
    {
        if ($this->session->userdata('ar') == "") {
            echo "<script>alert('session anda telah berakhir!')</script>";
            redirect('auth/login');
        } else {
            $data['nama'] = $this->session->userdata['ar']->nama; //userdata bawaan
            if ($this->session->userdata['ar']->role == 1) {
                $data['role'] = 'Admin';
            }
            if ($this->session->userdata['ar']->role == 2) {
                $data['role'] = 'RT';
            }

            $data['pengantar'] = $this->Admin_m->get_all_pengantar();
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('admin/validasi_rt', $data);
            $this->load->view('template/footer');
        }
    }

    function delete_pengantar($id)
    {
        $this->Admin_m->del_pengantar($id);
        $this->session->set_flashdata('sukses2', "Surat Pengantar Berhasil Di Hapus");
        return redirect('admin/validasi_rt');
    }
    function acc($id)
    {
        $this->db->query("UPDATE pengantar SET status_surat='Disetujui' WHERE id='$id'");
        $this->session->set_flashdata('sukses', "Surat Pengantar Telah Disetujui");
        redirect('admin/validasi_rt');
    }
    function del_acc($id)
    {
        $this->db->query("UPDATE pengantar SET status_surat='Proses' WHERE id='$id'");
        $this->session->set_flashdata('batal', "Surat Pengantar Batal Disetujui");
        redirect('admin/validasi_rt');
    }

    // menu admin
    function allAdmin()
    {
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
            $data['username'] = $this->session->userdata['ar']->username;
            $data['list_admin'] = $this->Admin_m->get_all_admin();
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('admin/list_admin', $data);
            $this->load->view('template/footer');
            // var_dump($this->session->userdata['ar']->username);
        }
    }
    // tambah admin
    function tambah_admin()
    {
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
            // echo  $data['jmlAdm'];
            $data['list_admin'] = $this->Admin_m->get_all_admin();
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('admin/tambah_admin', $data);
            $this->load->view('template/footer');
        }
    }

    // cetak
    public function tryPdf($id)
    {
        if ($this->session->userdata('ar') == "") {
            echo "<script>alert('session anda telah berakhir!')</script>";
            redirect('auth/login');
        } else {
            $this->load->library('dompdf_gen');
            // $data['pengantar2'] = $this->Admin_m->get_all_pengantar();
            $data['pengantar'] = $this->pengantar_m->get_pengantarId($id);
            $data['tanggal'] = $this->nomor_m->tanggal_indo(date("Y/m/d"));
            if ($data['pengantar']['status_surat'] == "Disetujui") {
                $data['validasi_ttd'] = '/assets4/image_me/tanda_tangan-remov.png';
                $data['validasi_stempel'] = '/assets4/image_me/stempel-remov.png';
            } elseif ($data['pengantar']['status_surat'] == "Proses") {
                $data['validasi_ttd'] = '/assets4/image_me/xstempel_luar.png';
                $data['validasi_stempel'] = '/assets4/image_me/xttd_luar.png';
            }
            if ($data['pengantar']['jenis_kelamin'] == "Perempuan") {
                $data['L'] = 'text-decoration:line-through;';
                $data['P'] = '';
            } else {
                $data['L'] = '';
                $data['P'] = 'text-decoration:line-through;';
            }
            $data['nama_rt'] = $this->pengantar_m->get_rt();

            // echo 'l' . $data['L'];
            // echo 'p' . $data['P'];

            // if ($data['pengantar']['status'] = "Belum Kawin") {
            //     $data['BK'] = '';
            //     $data['K'] = 'text-decoration:line-through;';
            //     $data['J'] = 'text-decoration:line-through;';
            //     $data['D'] = 'text-decoration:line-through;';
            // }
            // if ($data['pengantar']['status'] = "Kawin") {
            //     $data['BK'] = 'text-decoration:line-through;';
            //     $data['K'] = '';
            //     $data['J'] = 'text-decoration:line-through;';
            //     $data['D'] = 'text-decoration:line-through;';
            // }
            // if ($data['pengantar']['status'] = "Janda") {
            //     $data['BK'] = 'text-decoration:line-through;';
            //     $data['K'] = 'text-decoration:line-through;';
            //     $data['J'] = '';
            //     $data['D'] = 'text-decoration:line-through;';
            // }
            // if ($data['pengantar']['status'] = "Duda") {
            //     $data['BK'] = 'text-decoration:line-through;';
            //     $data['K'] = 'text-decoration:line-through;';
            //     $data['J'] = 'text-decoration:line-through;';
            //     $data['D'] = '';
            // }

            $this->load->view('admin/cetak_pengantar', $data);

            $options = new Options();
            $options->set('isRemoteEnabled', TRUE);
            $dompdf = new Dompdf($options);


            $paper_size = 'A4';
            $orientation = 'portrait';
            $html = $this->output->get_output();
            $test = '<h1>Welcome to CodexWorld.com</h1>';
            $dompdf->loadHTML($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
            $dompdf->stream("surat_pengantar.pdf", array('Attachment' => 0));
            // print_r($dompdf);
            // print_r($test);
        }
    }

    function tanggal_indo($tanggal)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $split = explode('/', $tanggal);
        return $split[0] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[2];
    }
    //untuk kalo rekap pdf
    // function rekap()
    // {
    //     if ($this->session->userdata('ar') == "") {
    //         echo "<script>alert('session anda telah berakhir!')</script>";
    //         redirect('auth/login');
    //     } else {
    //         $data['nama'] = $this->session->userdata['ar']->username; //userdata bawaan
    //         $a = $this->input->post('periode');

    //         if (empty($a)) {
    //             $data['pengantar'] = $this->Admin_m->get_all_pengantar();
    //             $data['cetak'] = '';
    //         } else {
    //             $data['pengantar'] = $this->Admin_m->get_pengantar_no($a);
    //             $data['cetak'] = $a;
    //         }

    //         if ($this->session->userdata['ar']->role == 1) {
    //             $data['role'] = 'Admin';
    //         }
    //         if ($this->session->userdata['ar']->role == 2) {
    //             $data['role'] = 'RT';
    //         }
    //         $data['no'] = $this->nomor_m->get_noPengantarRight();
    //         $this->load->view('template/header');
    //         $this->load->view('template/topbar');
    //         $this->load->view('admin/rekap', $data);
    //         $this->load->view('template/footer');
    //     }
    // }

    function rekap()
    {
        if ($this->session->userdata('ar') == "") {
            echo "<script>alert('session anda telah berakhir!')</script>";
            redirect('auth/login');
        } else {
            $data['nama'] = $this->session->userdata['ar']->username; //userdata bawaan
            $data['pengantar'] = $this->Admin_m->get_pengantarByStatus();

            if ($this->session->userdata['ar']->role == 1) {
                $data['role'] = 'Admin';
            }
            if ($this->session->userdata['ar']->role == 2) {
                $data['role'] = 'RT';
            }
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('admin/rekap', $data);
            $this->load->view('template/footer');
        }
    }


    function cetak_rekap()
    {
        $a = $this->input->post('cetak');
        if (empty($a)) {
            $data['pengantar'] = $this->Admin_m->get_all_pengantar();
        } else {
            $data['pengantar'] = $this->Admin_m->get_pengantar_no($a);
        }

        if ($this->session->userdata('ar') == "") {
            echo "<script>alert('session anda telah berakhir!')</script>";
            redirect('auth/login');
        } else {
            $this->load->library('dompdf_gen');
            $data['pengantar'] = $this->Admin_m->get_pengantar_no($a);
            // print_r($data['pengantar']);
            $data['tanggal'] = $this->nomor_m->tanggal_indo(date("Y/m/d"));
            $data['nama_rt'] = $this->pengantar_m->get_rt();

            $this->load->view('admin/cetak_rekap', $data);

            $options = new Options();
            $options->set('isRemoteEnabled', TRUE);
            $dompdf = new Dompdf($options);


            $paper_size = 'A4';
            $orientation = 'portrait';
            $html = $this->output->get_output();
            $test = '<h1>Welcome to CodexWorld.com</h1>';
            $dompdf->loadHTML($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
            $dompdf->stream("surat_pengantar" . " $a" . ".pdf", array('Attachment' => 0));
            // print_r($dompdf);
            // print_r($test);
        }
    }

    function download()
    {
        force_download('format/format.xlsx', NULL);
    }
}
