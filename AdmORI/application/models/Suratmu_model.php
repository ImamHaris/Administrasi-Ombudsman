<?php
class SuratMU_model extends CI_Model {

  function smu_list(){
		$hasil=$this->db->get('suratmu');
		return $hasil->result();
	}

	function save_smu(){
		$data = array(
			'id_surat' 	=> $this->input->post('id_surat'),
			'no_surat' 	=> $this->input->post('no_surat'),
			'tgl_surat' => $this->input->post('tgl_surat'),
        	'pengirim' => $this->input->post('pengirim'),
        	'perihal' => $this->input->post('perihal'),
        	'Id_admin' => $this->session->userdata('ses_id')
		);
		$result=$this->db->insert('suratmu',$data);
		return $result;
	}

  function tambah_smu($id_surat,$no_surat,$tgl_surat,$pengirim,$perihal,$file,$id_admin){
    $data = array(
      'id_surat' 	=> $id_surat,
      'no_surat' 	=> $no_surat,
      'tgl_surat' => $tgl_surat,
      'pengirim' => $pengirim,
      'perihal' => $perihal,
      'file' => $file,
      'Id_admin' => $id_admin
    );
    $result = $this->db->insert('suratmu',$data);
    return $result;
  }

	function update_smu(){
    	$id_surat=$this->input->post('id_surat');
		$no_surat=$this->input->post('no_surat');
		$tgl_surat=$this->input->post('tgl_surat');
    	$pengirim=$this->input->post('pengirim');
    	$perihal=$this->input->post('perihal');
    	$id_admin=$this->input->post('id_admin');

		$this->db->set('perihal', $perihal);
		$this->db->set('no_surat', $no_surat);
		$this->db->set('tgl_surat', $tgl_surat);
    	$this->db->set('pengirim', $pengirim);
    	$this->db->set('Id_admin', $id_admin);
    	$this->db->where('id_surat', $id_surat);
		$result=$this->db->update('suratmu');
		return $result;
	}

	function delete_smu(){
		$id_referensi=$this->input->post('id_surat');
		$this->db->where('id_surat', $id_surat);
		$result=$this->db->delete('suratmu');
		return $result;
	}



}
