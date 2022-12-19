<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Pengantar_m extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
    }

    public function get_all()
    {
        return $this->db->get('pengantar')->result();
    }

    public function get_pengantar($key)
    {
        $this->db->query("SELECT * FROM 'pengantar' WHERE 'no_pengantar'='$key'");
        return $this->db->get()->result();
    }

    function get_data_nik($NIK)
    {
        $hsl = $this->db->query("SELECT * FROM penduduk WHERE NIK='$NIK'");
        if ($hsl->num_rows() > 0) {
            foreach ($hsl->result() as $data) {
                $hasil = array(
                    'NIK' => $data->NIK,
                    'nama' => $data->nama,
                );
            }
        }
        return $hasil;
    }

    function get_data_no_pengantar($no_pengantar)
    {
        $hsl = $this->db->query("SELECT * FROM pengantar WHERE no_pengantar ='$no_pengantar'");
        if ($hsl->num_rows() > 0) {
            foreach ($hsl->result() as $data) {
                $hasil = array(
                    'no_pengantar' => $data->no_pengantar,
                    'status_surat' => $data->status_surat,
                );
            }
        }
        return $hasil;
    }

    function get_all_pengantar()
    {
        $query = $this->db->get('pengantar');
        return $query;
    }

    function search_pengantar($NIK)
    {
        $this->db->like('NIK', $NIK, 'both');
        $this->db->order_by('NIK', 'DESC');
        $this->db->limit(10);
        return $this->db->get('pengantar')->result();
    }
    function get_agama($nik)
    {
        return $this->db->query("SELECT agama FROM penduduk  WHERE nik=$nik")->row()->agama;
    }
    function get_jeniKelamin($nik)
    {
        return $this->db->query("SELECT jenis_kel FROM penduduk  WHERE nik=$nik")->row()->jenis_kel;
    }
    function get_tempatLahir($nik)
    {
        return $this->db->query("SELECT tempat_lahir FROM penduduk  WHERE nik=$nik")->row()->tempat_lahir;
    }
    function get_tanggalLahir($nik)
    {
        return $this->db->query("SELECT tgl_lahir FROM penduduk  WHERE nik=$nik")->row()->tgl_lahir;
    }
    function get_kewarganegaraan($nik)
    {
        return $this->db->query("SELECT kewarganegaraan FROM penduduk  WHERE nik=$nik")->row()->kewarganegaraan;
    }
    function get_status($nik)
    {
        return $this->db->query("SELECT status FROM penduduk  WHERE nik=$nik")->row()->status;
    }
    function get_pendidikan($nik)
    {
        return $this->db->query("SELECT pendidikan_ter FROM penduduk  WHERE nik=$nik")->row()->pendidikan_ter;
    }
    function get_pekerjaan($nik)
    {
        return $this->db->query("SELECT pekerjaan FROM penduduk  WHERE nik=$nik")->row()->pekerjaan;
    }
    function get_alamat($nik)
    {
        return $this->db->query("SELECT alamat FROM penduduk  WHERE nik=$nik")->row()->alamat;
    }
    function get_nama($nik)
    {
        return $this->db->query("SELECT nama FROM penduduk  WHERE nik=$nik")->row()->nama;
    }

    function simpan($no_pengantar, $tgl_pengantar, $keperluan, $lain_lain, $nik)
    {
        // if (is_integer($nik) == true) {
        //     echo 'k';
        // } else {
        //     echo 'l';
        // }
        $nama = $this->get_nama($nik);
        $tempat = $this->get_tempatLahir($nik);
        $tanggal = $this->get_tanggalLahir($nik);
        $jenis_kelamin = $this->get_jeniKelamin($nik);
        $kewarganegaraan = $this->get_kewarganegaraan($nik);
        $agama = $this->get_agama($nik);
        $status = $this->get_status($nik);
        $pendidikan = $this->get_pendidikan($nik);
        $pekerjaan = $this->get_pekerjaan($nik);
        $alamat = $this->get_alamat($nik);
        $hasil = $this->db->query("INSERT INTO pengantar(no_pengantar,tgl_pengantar, keperluan, lain_lain, nama, nik, tmp_lahir, tgl_lahir, jenis_kelamin, kewarganegaraan, agama, status, pend_terakhir, pekerjaan, alamat, status_surat) 
        VALUES ('$no_pengantar','$tgl_pengantar','$keperluan','$lain_lain','$nama','$nik','$tempat','$tanggal','$jenis_kelamin','$kewarganegaraan','$agama', '$status','$pendidikan','$pekerjaan', '$alamat','Proses')");
        return $hasil;
    }
    // ======gua
    function simpan_pendatang($no_pengantar, $tgl_pengantar, $nik, $nama, $tempat, $alamat, $pekerjaan, $tanggal, $jenis_kelamin, $agama, $kewarganegaraan, $pendidikan, $status, $keperluan, $lain_lain)
    {
        $hasil = $this->db->query("INSERT INTO pengantar(no_pengantar,tgl_pengantar, keperluan, lain_lain, nama, nik, tmp_lahir, tgl_lahir, jenis_kelamin, kewarganegaraan, agama, status, pend_terakhir, pekerjaan, alamat,status_surat) 
        VALUES ('$no_pengantar','$tgl_pengantar','$keperluan','$lain_lain','$nama','$nik','$tempat','$tanggal','$jenis_kelamin','$kewarganegaraan','$agama','$status','$pendidikan','$pekerjaan', '$alamat', 'Proses')");
        return $hasil;
    }

    public function get_pengantarId($key)
    {
        return $this->db->query("SELECT * FROM pengantar WHERE id=$key")->row_array();
        // return $hasil;
        // return $this->db->get()->result();
    }
    public function get_rt()
    {
        return $this->db->query("SELECT * FROM admin WHERE role=2")->row_array();
    }
}
