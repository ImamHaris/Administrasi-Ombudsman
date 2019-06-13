<?php
class Suratmu_model extends CI_Model {

  function suratmu_list(){
		$hasil=$this->db->get('surat_masuk_umum');
		return $hasil->result();
	}

	function save_suratmu(){
		$data = array(
				'id_surat' 	=> $this->input->post('id_surat'),
				'no_surat' 	=> $this->input->post('no_surat'),
				'tgl_surat' => $this->input->post('tgl_surat'),
                'pengirim' => $this->input->post('pengirim'),
                'perihal' => $this->input->post('perihal')
			);
		$result=$this->db->insert('surat_masuk_umum',$data);
		return $result;
	}

  function tambah_suratmu($id_surat,$no_surat,$tgl_surat,$pengirim,$perihal,$file){
    $data = array(
      'id_surat' 	=> $id_surat,
      'no_surat' 	=> $no_surat,
      'tgl_surat' => $tgl_surat,
      'pengirim' => $pengirim,
      'perihal' => $perihal,
      'file' => $file
    );
    $result = $this->db->insert('surat_masuk_umum',$data);
    return $result;
  }

	function update_referensi(){
    $id_referensi=$this->input->post('id_referensi');
		$judul_ta=$this->input->post('judul_ta');
		$penulis=$this->input->post('penulis');
    $tahun=$this->input->post('tahun');
    $asal_referensi=$this->input->post('asal_referensi');
    $id_admin=$this->input->post('id_admin');
   
		$this->db->set('Judul_TA', $judul_ta);
		$this->db->set('Penulis', $penulis);
		$this->db->set('Tahun', $tahun);
    $this->db->set('Asal_Referensi', $asal_referensi);
    $this->db->set('Id_admin', $id_admin);
    $this->db->where('Id_Referensi', $id_referensi);
		$result=$this->db->update('referensi');
		return $result;
	}

	function delete_referensi(){
		$id_referensi=$this->input->post('id_referensi');
		$this->db->where('Id_referensi', $id_referensi);
		$result=$this->db->delete('referensi');
		return $result;
	}



}
