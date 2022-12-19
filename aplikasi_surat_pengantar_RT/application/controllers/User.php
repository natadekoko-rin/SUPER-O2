<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct(); //untuk memanggil knstran di controller
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('nomor_m');
		$this->load->model('pengantar_m');
		$this->load->helper('url');
	}

	public function index()
	{
		// $data = array(
		// 	"content"=>'template/dashboard',
		// 	"nomor" => $this->nomor_m->PNTR()
		// );
		$data['nomor'] = $this->nomor_m->PNTR();
		$this->load->view('user/index', $data);
		// echo $data;
	}

	function get_nik()
	{
		$nik = $this->input->post('nik');
		$data = $this->pengantar_m->get_data_nik($nik);
		echo json_encode($data);
	}
	function get_status_surat()
	{
		$status_surat = $this->input->post('no_pengantar');
		$data = $this->pengantar_m->get_data_no_pengantar($status_surat);
		echo json_encode($data);
	}
	function search()
	{
		// $NIK = $this->input->get('NIK');
		// $data['content'] = 'search_view';
		// $data['data'] = $this->pengan_m->search_pengantar($NIK);
		// $this->load->view($this->template, $data);
	}

	function simpan_pengantar()
	{
		$nama = $this->input->post('nama');
		if ($nama == null) {
			$this->session->set_flashdata('error', "Data Anda Gagal Di Inputkan");
			redirect('user');
		} else {
			if ($this->input->post() == FALSE) {
				$this->session->set_flashdata('error', "Data Anda Gagal Di Inputkan");
				redirect('pengantar_c');
			} else {
				$no_pengantar = $this->input->post('no_pengantar');
				$keperluan = $this->input->post('keperluan');
				$lain_lain = $this->input->post('lain_lain');
				$nik = $this->input->post('nik');
				$tgl_pengantar = date("d/m/Y", strtotime($this->input->post('tgl')));
			}
			$this->pengantar_m->simpan($no_pengantar, $tgl_pengantar, $keperluan, $lain_lain, $nik);
			$this->session->set_flashdata('sukses', " Berhasil Dibuat");
			redirect('user');
		}
	}

	function simpan_pengantar_pendatang()
	{
		if ($this->input->post() == FALSE) {
			$this->session->set_flashdata('error', "Data Anda Gagal Di Inputkan");
			redirect('user');
		} else {
			$no_pengantar = $this->input->post('no_pengantar');
			$nik = $this->input->post('nik');
			$nama = $this->input->post('nama');
			$tempat = $this->input->post('tempat');
			$alamat = $this->input->post('alamat');
			$pekerjaan = $this->input->post('pekerjaan');
			$tanggal = date("d/m/Y", strtotime($this->input->post('tanggal')));
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$agama = $this->input->post('agama');
			$kewarganegaraan = $this->input->post('kewarganegaraan');
			$pendidikan = $this->input->post('pendidikan');
			$status = $this->input->post('status');
			$keperluan = $this->input->post('keperluan');
			$lain_lain = $this->input->post('lain_lain');
			$tgl_pengantar = $this->input->post('tgl');
			$this->pengantar_m->simpan_pendatang($no_pengantar, $tgl_pengantar, $nik, $nama, $tempat, $alamat, $pekerjaan, $tanggal, $jenis_kelamin, $agama, $kewarganegaraan, $pendidikan, $status, $keperluan, $lain_lain);
			$this->session->set_flashdata('sukses', " Berhasil Dibuat");
		}
		redirect('user');
	}
}
