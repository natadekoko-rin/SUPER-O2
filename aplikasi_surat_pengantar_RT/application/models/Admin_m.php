<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_m extends CI_Model
{
    public function update($data, $id)
    {
        $this->db->where("id", $id);
        $this->db->update("admin", $data);

        return $this->db->affected_rows();
    }

    public function select($id = '')
    {
        if ($id != '') {
            $this->db->where('id', $id);
        }

        $data = $this->db->get('admin');

        return $data->row();
    }

    function get_all()
    {
        $data = $this->db->get('admin');
        return $data->num_rows();
    }
    // aku
    function get_jumlah_admin()
    {
        $data = $this->db->get('admin');
        return $data->num_rows();
    }

    // penduduk
    function get_jumlah_penduduk()
    {
        $data = $this->db->get('penduduk');
        return $data->num_rows();
    }
    function get_jumlah_pengantar()
    {
        $data = $this->db->get('pengantar');
        return $data->num_rows();
    }
    function get_all_penduduk()
    {
        return $this->db->get('penduduk')->result();
    }
    function add_penduduk($nama, $nik, $jenis_kel, $tempat_lahir, $tgl_lahir, $kewarganegaraan, $agama, $status, $pendidikan_ter, $pekerjaan, $alamat)
    {
        $hasil = $this->db->query("INSERT INTO penduduk(nama, NIK, jenis_kel, tempat_lahir, tgl_lahir, kewarganegaraan, agama, status, pendidikan_ter, pekerjaan, alamat) 
        VALUES ('$nama','$nik','$jenis_kel','$tempat_lahir','$tgl_lahir','$kewarganegaraan', '$agama', '$status', '$pendidikan_ter', '$pekerjaan', '$alamat')");
        return $hasil;
    }
    function del_penduduk($params = '')
    {
        $sql = "DELETE  FROM penduduk WHERE NIK = ? ";
        return $this->db->query($sql, $params);
    }
    function ubah_penduduk($NIK, $ar)
    {
        $this->db->where('NIK', $NIK);
        $this->db->update('penduduk', $ar);
    }
    function ubah_pengantar($NIK, $tempat_lahir, $tgl_lahir, $jenis_kelamin, $kewarganegaraan, $agama, $status, $pendidikan_ter, $pekerjaan, $alamat)
    {
        return $this->db->query("UPDATE pengantar SET tmp_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',kewarganegaraan='$kewarganegaraan' ,agama = '$agama', status='$status',pend_terakhir='$pendidikan_ter',pekerjaan='$pekerjaan',alamat='$alamat' WHERE nik=$NIK");
    }

    // pengantar
    function get_all_pengantar()
    {
        return $this->db->get('pengantar')->result();
    }
    function get_pengantarByStatus()
    {
        return $this->db->query("SELECT * FROM pengantar WHERE status_surat ='Disetujui'")->result();
    }
    function get_pengantar_no($a)
    {
        // $this->db->select('pengantar');
        // $this->db->where('status_rt', $status_rt);

        return $this->db->query("SELECT * FROM pengantar WHERE no_pengantar LIKE '%$a'")->result();
    }
    function del_pengantar($id)
    {
        $sql = "DELETE FROM pengantar WHERE id = $id";
        return $this->db->query($sql);
    }

    public function get_validasi($status_rt = '1')
    {

        $this->db->select('pengantar.*, penduduk.NIK AS NIK, penduduk.nama');
        $this->db->join('penduduk', 'pengantar.NIK = penduduk.NIK');
        $this->db->where('status_rt', $status_rt);
        $query = $this->db->get('pengantar');
        return $query->result();
    }

    // kelola admin
    function get_all_admin()
    {
        return $this->db->get('admin')->result();
    }
    function get_jml_adm()
    {
        $sql = "SELECT * FROM admin WHERE role = '2'";
        return $this->db->query($sql)->num_rows();
    }
    function get_detailAdminById($id)
    {
        return $this->db->query("SELECT * FROM admin WHERE id=$id")->row_array();
    }

    // import excel 
    private $varBatchImportOLT;
    public function setPenduduk($batchImportOLT) //set variabel data excel
    {
        $this->varBatchImportOLT = $batchImportOLT;
    }

    //import data to database
    public function importPendudukDb()
    {
        $data = $this->varBatchImportOLT;
        $this->db->insert_batch('penduduk', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('sukses', 'Data berhasil ditambahkan');
        }
    }
}
