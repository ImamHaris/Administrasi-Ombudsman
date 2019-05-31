<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwaldosen extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Start Untuk mengecek kalau yg akses adalah dosen
		if($this->session->userdata('akses') != "Dosen") {
			if($this->session->userdata('akses') == "Mahasiswa") { //Jika user lain coba akses akan di redirect ke halaman bersesuaian
				$url = base_url('mahasiswa/berandamahasiswa');
				redirect($url);
			}else{
				$url = base_url('admin/berandaadmin'); //Jika user lain coba akses akan di redirect ke halaman bersesuaian
				redirect($url);
			}
		}
		//END Untuk mengecek kalau yg akses adalah dosen
	}

	public function index()
	{
		$id_user = $this->session->userdata('ses_id'); //Mengambil nip dosen yang sedang login
		$this->load->model('mahasiswa_model');
		$isi['jumlah_konsul'] = $this->mahasiswa_model->jumlah_konsul($id_user); //Mengambil jumlah konsultasi mahasiswa bimbingan dosen yg login  yang belum diperiksa
		$isi['konten'] = 'dosen/jadwaldosen';
		$this->load->view('dosen/template', $isi);
	}

	
}
