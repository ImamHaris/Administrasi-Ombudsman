<?php
class SuratMU extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('suratmu_model');
		//Start Untuk mengecek kalau yg akses adalah admin
		if($this->session->userdata('akses') != "Admin") {
			if($this->session->userdata('akses') == "Dosen") {// Jika Dosen berusaha akses maka akan di redirect ke halaman dosen
				$url = base_url('dosen/berandadosen');
				redirect($url);
			}else{// Jika Mahasiswa berusaha akses maka akan di redirect ke halaman mahasiswa
				$url = base_url('mahasiswa/berandamahasiswa');
				redirect($url);
			}
		}
		//END Untuk mengecek kalau yg akses adalahadmin
	}
	function index(){
		$isi['konten'] = 'admin/smu';
		$this->load->view('admin/template', $isi);
	}

	function lihat_smu(){
		$this->load->view('lihatsmu_view');
	}

	function smu_data(){
		$data=$this->smu_model->smu_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->suratmu_model->save_smu();
		echo json_encode($data);
	}

	function upload(){
		$config['upload_path']="./assets/upload/suratmu/"; //file yg diupload akan disimpan
		$config['allowed_types']='doc|docx|pdf'; // tipe file yang boleh di upload

		$this->load->library('upload',$config);
		if($this->upload->do_upload("file")){ //upload file
		$data = array('upload_data' => $this->upload->data()); //ambil nama file yang diupload

		$file= $data['upload_data']['file_name'];
		$id_surat=$this->input->post('id_surat');
		$no_surat=$this->input->post('no_surat');
		$tgl_surat=$this->input->post('tgl_surat');
    	$pengirim=$this->input->post('pengirim');
    	$perihal=$this->input->post('perihal');
    	$id_admin=$this->session->userdata('ses_id');

		$result= $this->suratmu_model->tambah_smu($id_surat,$no_surat,$tgl_surat,$pengirim,$perihal,$file,$id_admin);
		echo json_decode($result);
		}
	}

	function update(){
		$data=$this->suratmu_model->update_smu();
		echo json_encode($data);
	}

	function delete(){
		$data=$this->suratmu_model->delete_smu();
		echo json_encode($data);
	}

}
