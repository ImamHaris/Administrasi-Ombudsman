<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	//Do your magic here
	}
	
	public function get_data_dashboard(){
		$surat_masuk_umum = $this->db->select('count(*) as total_masuk')
								->get('surat_masuk_umum')
								->row();

		$surat_keluar_umum = $this->db->select('count(*) as total_keluar')
								->get('surat_keluar_umum')
								->row();

		return array(
					'surat_masuk_umum' => $surat_masuk_umum->total_masuk,
					'surat_keluar_umum' => $surat_keluar_umum->total_keluar
					);
	}

	public function get_surat_masuk_by_id($id_surat){
		return $this->db->where('id_surat' ,$id_surat)
		->get('surat_masuk')
		->row();
	}

	public function ubah_file_surat_masuk($file_surat){
		$data = array(
			'file_surat' => $file_surat['file_name']
		);

		$this->db->where('id_surat', $this->input->post('edit_file_surat'))
		->update('surat_masuk', $data);

		if($this->db->affected_rows() < 0){
			return TRUE;
		} else{
			return FALSE;
		}
	}
}

/* End of file surat_model.php */
/* Location: ./application/models/surat_model.php */