<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Nomor_m extends CI_Model
{
    //var $db;
    //var $table = "pengantar";
    function __construct()
    {
        parent::__construct();
    }

    public function PNTR()
    {
        //         SELECT LEFT(pengantar.no_pengantar,4) as x FROM pengantar 
        // ORDER BY pengantar.no_pengantar DESC LIMIT 1 
        $this->db->SELECT('LEFT(pengantar.no_pengantar,4) as kode', FALSE);
        $this->db->order_by('no_pengantar', 'DESC');
        $this->db->limit(1);

        $query_ = $this->db->get('pengantar');
        if ($query_->num_rows() <> 0) {
            $data_ = $query_->row();
            $kode_ = intval($data_->kode) + 1;
        } else {
            $kode_ = 1;
        }
        $tahun = date("Y");
        $bulan = date("m");
        $kode_max_ = str_pad($kode_, 4, "0", STR_PAD_LEFT);
        // $kode_jadi = "PNTR-" . $tahun . '-' . $kode_max_;
        $kode_jadi = $kode_max_ . '/04.III/' . $bulan . '/' . $tahun;
        return $kode_jadi;
    }

    function get_noPengantarRight()
    {
        // $query = 'SELECT DISTINCT RIGHT(no_pengantar,7) as no_pengantar FROM pengantar';
        // return $this->db->query("SELECT RIGHT(no_pengantar,7) as no_pengantar FROM pengantar")->array();
        return $this->db->query("SELECT DISTINCT RIGHT(no_pengantar,7) as no_pengantar FROM pengantar")->result();
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
        return $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];
    }
}
