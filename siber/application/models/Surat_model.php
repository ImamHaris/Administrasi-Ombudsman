<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function download($id_surat){
        $query = $this->db->get_where('surat_masuk_umum',array('id_surat'=>$id_surat));
        return $query->row_array();
       }

    //surat_masuk
    public function get_total_row_surat_masuk() {
        $query = $this->db->get('surat_masuk_umum');
        return $query->num_rows();
    }

    public function delete_surat_masuk($id_url) {
        $row = $this->db->where('id_surat',$id_url)->get('surat_masuk_umum')->row();
        unlink('assets/upload/surat_masuk_umum/'.$row->file);
        $this->db->where('id_surat', $id_url);
        $this->db->delete('surat_masuk_umum');
    }

    public function cari_surat_masuk_tgl($tglcari) {
        $this->db->like('tgl_surat', $tglcari);
        $this->db->order_by('id_surat', 'DESC');
        $query = $this->db->get('surat_masuk_umum');
        return $query->result();
    }

    public function cari_surat_masuk_key($cari) {
        $this->db->like('pengirim', $cari);
        $this->db->or_like('no_surat', $cari);
        $this->db->or_like('perihal', $cari);
        $this->db->order_by('id_surat', 'DESC');
        $query = $this->db->get('surat_masuk_umum');
        return $query->result();
    }

    public function cari_surat_masuk_tgl_key($tglcari, $cari) {
        $this->db->like('tgl_surat', $tglcari);
        $this->db->like('pengirim', $cari);
        $this->db->order_by('id_surat', 'DESC');
        $query = $this->db->get('surat_masuk_umum');
        return $query->result();
    }

    public function select_surat_masuk_id($id_url) {
        $this->db->where('id_surat', $id_url);
        $query = $this->db->get('surat_masuk_umum');
        return $query->row();
    }

    public function insert_surat_masuk_with_file($no_surat, $tgl_surat, $pengirim, $perihal, $up_data) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'pengirim' => $pengirim,
            'perihal' => $perihal,
            'file' => $up_data,
            'pengolah' => $this->session->user_id
        );
        $this->db->insert('surat_masuk_umum', $data);
    }

    public function insert_surat_masuk($no_surat, $tgl_surat, $pengirim, $perihal) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'pengirim' => $pengirim,
            'perihal' => $perihal,
            'pengolah' => $this->session->user_id
        );
        $this->db->insert('surat_masuk_umum', $data);
    }

    public function update_surat_masuk_with_file($no_surat, $tgl_surat, $pengirim, $perihal, $up_data, $id_surat) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'pengirim' => $pengirim,
            'perihal' => $perihal,
            'file' => $up_data
        );
        $this->db->where('id_surat', $id_surat);
        $this->db->update('surat_masuk_umum', $data);
    }

    public function update_surat_masuk($no_surat, $tgl_surat, $pengirim, $perihal, $id_surat) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'pengirim' => $pengirim,
            'perihal' => $perihal
        );
        $this->db->where('id_surat', $id_surat);
        $this->db->update('surat_masuk_umum', $data);
    }
    
    public function select_surat_masuk_limit($awal, $akhir) {
        $this->db->limit($akhir, $awal);
        $query = $this->db->get('surat_masuk_umum');
        return $query->result();
    }

        //surat_tugas
        
        public function get_total_row_surat_tugas() {
            $query = $this->db->get('surat_tugas');
            return $query->num_rows();
        }
    
        public function delete_surat_tugas($id_url) {
            $row = $this->db->where('id_surat',$id_url)->get('surat_tugas')->row();
            unlink('assets/upload/surat_tugas/'.$row->file);
            $this->db->where('id_surat', $id_url);
            $this->db->delete('surat_tugas');
        }
    
        public function cari_surat_tugas_tgl($tglcari) {
            $this->db->like('tgl_surat', $tglcari);
            $this->db->order_by('id_surat', 'DESC');
            $query = $this->db->get('surat_tugas');
            return $query->result();
        }
    
        public function cari_surat_tugas_key($cari) {
            $this->db->like('yang_diberi_tugas', $cari);
            $this->db->or_like('no_surat', $cari);
            $this->db->order_by('id_surat', 'DESC');
            $query = $this->db->get('surat_tugas');
            return $query->result();
        }
    
        public function cari_surat_tugas_tgl_key($tglcari, $cari) {
            $this->db->like('tgl_surat', $tglcari);
            $this->db->like('yang_diberi_tugas', $cari);
            $this->db->order_by('id_surat', 'DESC');
            $query = $this->db->get('surat_tugas');
            return $query->result();
        }
    
        public function select_surat_tugas_id($id_url) {
            $this->db->where('id_surat', $id_url);
            $query = $this->db->get('surat_tugas');
            return $query->row();
        }
    
        public function insert_surat_tugas_with_file($no_surat, $tgl_surat, $yang_diberi_tugas, $daerah_tugas, $keterangan, $up_data) {
            $data = array(
                'no_surat' => $no_surat,
                'tgl_surat' => $tgl_surat,
                'yang_diberi_tugas' => $yang_diberi_tugas,
                'daerah_tugas' => $daerah_tugas,
                'keterangan' => $keterangan,
                'file' => $up_data,
                'pengolah' => $this->session->user_id
            );
            $this->db->insert('surat_tugas', $data);
        }
    
        public function insert_tuags($no_surat, $tgl_surat, $yang_diberi_tugas, $daerah_tugas, $keterangan) {
            $data = array(
                'no_surat' => $no_surat,
                'tgl_surat' => $tgl_surat,
                'yang_diberi_tugas' => $yang_diberi_tugas,
                'daerah_tugas' => $daerah_tugas,
                'keterangan' => $keterangan,
                'file' => $up_data,
                'pengolah' => $this->session->user_id
            );
            $this->db->insert('surat_tugas', $data);
        }
    
        public function update_surat_tugas_with_file($no_surat, $tgl_surat, $yang_diberi_tugas, $daerah_tugas, $keterangan, $up_data, $id_surat) {
            $data = array(
                'no_surat' => $no_surat,
                'tgl_surat' => $tgl_surat,
                'yang_diberi_tugas' => $yang_diberi_tugas,
                'daerah_tugas' => $daerah_tugas,
                'keterangan' => $keterangan,
                'file' => $up_data
            );
            $this->db->where('id_surat', $id_surat);
            $this->db->update('surat_tugas', $data);
        }
    
        public function update_surat_tugas($no_surat, $tgl_surat, $yang_diberi_tugas, $daerah_tugas, $keterangan, $id_surat) {
            $data = array(
                'no_surat' => $no_surat,
                'tgl_surat' => $tgl_surat,
                'yang_diberi_tugas' => $yang_diberi_tugas,
                'daerah_tugas' => $daerah_tugas,
                'keterangan' => $keterangan
            );
            $this->db->where('id_surat', $id_surat);
            $this->db->update('surat_tugas', $data);
        }
    
        public function select_surat_tugas_limit($awal, $akhir) {
            $this->db->limit($akhir, $awal);
            $query = $this->db->get('surat_tugas');
            return $query->result();
        }

    //surat_keluar
    public function get_total_row_surat_keluar() {
        $query = $this->db->get('surat_keluar_umum');
        return $query->num_rows();
    }

    public function delete_surat_keluar($id_url) {
        $row = $this->db->where('id_surat',$id_url)->get('surat_keluar_umum')->row();
        unlink('assets/upload/surat_keluar_umum/'.$row->file);
        $this->db->where('id_surat', $id_url);
        $this->db->delete('surat_keluar_umum');
    }

    public function cari_surat_keluar_tgl($tglcari) {
        $this->db->like('tgl_surat', $tglcari);
        $this->db->order_by('id_surat', 'DESC');
        $query = $this->db->get('surat_keluar_umum');
        return $query->result();
    }

    public function cari_surat_keluar_key($cari) {
        $this->db->like('tujuan', $cari);
        $this->db->or_like('no_surat', $cari);
        $this->db->or_like('perihal', $cari);
        $this->db->order_by('id_surat', 'DESC');
        $query = $this->db->get('surat_keluar_umum');
        return $query->result();
    }

    public function cari_surat_keluar_tgl_key($tglcari, $cari) {
        $this->db->like('tgl_surat', $tglcari);
        $this->db->like('tujuan', $cari);
        $this->db->order_by('id_surat', 'DESC');
        $query = $this->db->get('surat_keluar_umum');
        return $query->result();
    }

    public function select_surat_keluar_id($id_url) {
        $this->db->where('id_surat', $id_url);
        $query = $this->db->get('surat_keluar_umum');
        return $query->row();
    }

    public function insert_surat_keluar_with_file($no_surat, $tgl_surat, $tujuan, $perihal, $up_data) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'tujuan' => $tujuan,
            'perihal' => $perihal,
            'file' => $up_data,
            'pengolah' => $this->session->user_id
        );
        $this->db->insert('surat_keluar_umum', $data);
    }

    public function insert_surat_keluar($no_surat, $tgl_surat, $tujuan, $perihal) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'tujuan' => $tujuan,
            'perihal' => $perihal,
            'pengolah' => $this->session->user_id
        );
        $this->db->insert('surat_keluar_umum', $data);
    }

    public function update_surat_keluar_with_file($no_surat, $tgl_surat, $tujuan, $perihal, $up_data, $id_surat) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'tujuan' => $tujuan,
            'perihal' => $perihal,
            'file' => $up_data
        );
        $this->db->where('id_surat', $id_surat);
        $this->db->update('surat_keluar_umum', $data);
    }

    public function update_surat_keluar($no_surat, $tgl_surat, $tujuan, $perihal, $id_surat) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'tujuan' => $tujuan,
            'perihal' => $perihal
        );
        $this->db->where('id_surat', $id_surat);
        $this->db->update('surat_keluar_umum', $data);
    }

    public function select_surat_keluar_limit($awal, $akhir) {
        $this->db->limit($akhir, $awal);
        $query = $this->db->get('surat_keluar_umum');
        return $query->result();
    }

    //surat_keluar_laporan
    public function get_total_row_surat_keluar_laporan() {
        $query = $this->db->get('surat_keluar_laporan');
        return $query->num_rows();
    }

    public function delete_surat_keluar_laporan($id_url) {
        $row = $this->db->where('id_surat',$id_url)->get('surat_keluar_laporan')->row();
        unlink('assets/upload/surat_keluar_laporan/'.$row->file);
        $this->db->where('id_surat', $id_url);
        $this->db->delete('surat_keluar_laporan');
    }

    public function cari_surat_keluar_laporan_tgl($tglcari) {
        $this->db->like('tgl_surat', $tglcari);
        $this->db->order_by('id_surat', 'DESC');
        $query = $this->db->get('surat_keluar_laporan');
        return $query->result();
    }

    public function cari_surat_keluar_laporan_key($cari) {
        $this->db->like('tujuan', $cari);
        $this->db->or_like('no_surat', $cari);
        $this->db->or_like('perihal', $cari);
        $this->db->order_by('id_surat', 'DESC');
        $query = $this->db->get('surat_keluar_laporan');
        return $query->result();
    }

    public function cari_surat_keluar_laporan_tgl_key($tglcari, $cari) {
        $this->db->like('tgl_surat', $tglcari);
        $this->db->like('tujuan', $cari);
        $this->db->order_by('id_surat', 'DESC');
        $query = $this->db->get('surat_keluar_laporan');
        return $query->result();
    }

    public function select_surat_keluar_laporan_div() {
        $query = $this->db->get('divisi');
        return $query->result();
    }

    public function select_surat_keluar_laporan_id($id_url) {
        $this->db->where('id_surat', $id_url);
        $query = $this->db->get('surat_keluar_laporan');
        return $query->row();
    }

    public function insert_surat_keluar_laporan_with_file($no_surat, $tgl_surat, $tujuan, $perihal, $up_data, $asisten) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'tujuan' => $tujuan,
            'perihal' => $perihal,
            'file' => $up_data,
            'pengolah' => $this->session->user_id,
            'asisten' => $asisten
        );
        $this->db->insert('surat_keluar_laporan', $data);
    }

    public function insert_surat_keluar_laporan($no_surat, $tgl_surat, $tujuan, $perihal, $asisten) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'tujuan' => $tujuan,
            'perihal' => $perihal,
            'pengolah' => $this->session->user_id,
            'asisten' => $asisten
        );
        $this->db->insert('surat_keluar_laporan', $data);
    }

    public function update_surat_keluar_laporan_with_file($no_surat, $tgl_surat, $tujuan, $perihal, $up_data, $id_surat, $asisten) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'tujuan' => $tujuan,
            'perihal' => $perihal,
            'file' => $up_data,
            'asisten' => $asisten
        );
        $this->db->where('id_surat', $id_surat);
        $this->db->update('surat_keluar_laporan', $data);
    }

    public function update_surat_keluar_laporan($no_surat, $tgl_surat, $tujuan, $perihal, $id_surat,$asisten) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'tujuan' => $tujuan,
            'perihal' => $perihal,
            'asisten' => $asisten
        );
        $this->db->where('id_surat', $id_surat);
        $this->db->update('surat_keluar_laporan', $data);
    }

    public function select_surat_keluar_laporan_limit($awal, $akhir) {
        $this->db->limit($akhir, $awal);
        $query = $this->db->get('surat_keluar_laporan');
        return $query->result();
    }

    //surat_klarifikasi_keluar
    public function get_total_row_surat_klarifikasi_keluar() {
        $query = $this->db->get('surat_klarifikasi_keluar');
        return $query->num_rows();
    }

    public function delete_surat_klarifikasi_keluar($id_url) {
        $row = $this->db->where('id_surat',$id_url)->get('surat_klarifikasi_keluar')->row();
        unlink('assets/upload/surat_klarifikasi_keluar/'.$row->file);
        $this->db->where('id_surat', $id_url);
        $this->db->delete('surat_klarifikasi_keluar');
    }

    public function cari_surat_klarifikasi_keluar_tgl($tglcari) {
        $this->db->like('tgl_surat', $tglcari);
        $this->db->order_by('id_surat', 'DESC');
        $query = $this->db->get('surat_klarifikasi_keluar');
        return $query->result();
    }

    public function cari_surat_klarifikasi_keluar_key($cari) {
        $this->db->like('tujuan', $cari);
        $this->db->or_like('no_surat', $cari);
        $this->db->or_like('perihal', $cari);
        $this->db->order_by('id_surat', 'DESC');
        $query = $this->db->get('surat_klarifikasi_keluar');
        return $query->result();
    }

    public function cari_surat_klarifikasi_keluar_tgl_key($tglcari, $cari) {
        $this->db->like('tgl_surat', $tglcari);
        $this->db->like('tujuan', $cari);
        $this->db->order_by('id_surat', 'DESC');
        $query = $this->db->get('surat_klarifikasi_keluar');
        return $query->result();
    }

    public function select_surat_klarifikasi_keluar_id($id_url) {
        $this->db->where('id_surat', $id_url);
        $query = $this->db->get('surat_klarifikasi_keluar');
        return $query->row();
    }

    public function insert_surat_klarifikasi_keluar_with_file($no_surat, $tgl_surat, $tujuan, $perihal, $up_data, $asisten) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'tujuan' => $tujuan,
            'perihal' => $perihal,
            'file' => $up_data,
            'pengolah' => $this->session->user_id,
            'Asisten' => $asisten
        );
        $this->db->insert('surat_klarifikasi_keluar', $data);
    }

    public function insert_surat_klarifikasi_keluar($no_surat, $tgl_surat, $tujuan, $perihal, $asisten) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'tujuan' => $tujuan,
            'perihal' => $perihal,
            'pengolah' => $this->session->user_id,
            'Asisten' => $asisten
        );
        $this->db->insert('surat_klarifikasi_keluar', $data);
    }

    public function update_surat_klarifikasi_keluar_with_file($no_surat, $tgl_surat, $tujuan, $perihal, $up_data, $id_surat,$asisten) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'tujuan' => $tujuan,
            'perihal' => $perihal,
            'file' => $up_data,
            'Asisten' => $asisten
        );
        $this->db->where('id_surat', $id_surat);
        $this->db->update('surat_klarifikasi_keluar', $data);
    }

    public function update_surat_klarifikasi_keluar($no_surat, $tgl_surat, $tujuan, $perihal, $id_surat, $asisten) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'tujuan' => $tujuan,
            'perihal' => $perihal,
            'Asisten' => $asisten
        );
        $this->db->where('id_surat', $id_surat);
        $this->db->update('surat_klarifikasi_keluar', $data);
    }

    public function select_surat_klarifikasi_keluar_limit($awal, $akhir) {
        $this->db->limit($akhir, $awal);
        $query = $this->db->get('surat_klarifikasi_keluar');
        return $query->result();
    }

    //surat_klarifikasi_keluar2
    public function get_total_row_surat_klarifikasi_keluar2() {
        $query = $this->db->get('surat_klarifikasi_keluar2');
        return $query->num_rows();
    }

    public function delete_surat_klarifikasi_keluar2($id_url) {
        $row = $this->db->where('id_surat',$id_url)->get('surat_klarifikasi_keluar2')->row();
        unlink('assets/upload/surat_klarifikasi_keluar2/'.$row->file);
        $this->db->where('id_surat', $id_url);
        $this->db->delete('surat_klarifikasi_keluar2');
    }

    public function cari_surat_klarifikasi_keluar2_tgl($tglcari) {
        $this->db->like('tgl_surat', $tglcari);
        $this->db->order_by('id_syrat', 'DESC');
        $query = $this->db->get('surat_klarifikasi_keluar2');
        return $query->result();
    }

    public function cari_surat_klarifikasi_keluar2_key($cari) {
        $this->db->like('tujuan', $cari);
        $this->db->or_like('no_surat', $cari);
        $this->db->or_like('perihal', $cari);
        $this->db->order_by('id_surat', 'DESC');
        $query = $this->db->get('surat_klarifikasi_keluar2');
        return $query->result();
    }

    public function cari_surat_klarifikasi_keluar2_tgl_key($tglcari, $cari) {
        $this->db->like('tgl_surat', $tglcari);
        $this->db->like('tujuan', $cari);
        $this->db->order_by('id_surat', 'DESC');
        $query = $this->db->get('surat_klarifikasi_keluar2');
        return $query->result();
    }

    public function select_surat_klarifikasi_keluar2_id($id_url) {
        $this->db->where('id_surat', $id_url);
        $query = $this->db->get('surat_klarifikasi_keluar2');
        return $query->row();
    }

    public function insert_surat_klarifikasi_keluar2_with_file($no_surat, $tgl_surat, $tujuan, $perihal, $up_data, $asisten) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'tujuan' => $tujuan,
            'perihal' => $perihal,
            'file' => $up_data,
            'pengolah' => $this->session->user_id,
            'asisten' => $asisten
        );
        $this->db->insert('surat_klarifikasi_keluar2', $data);
    }

    public function insert_surat_klarifikasi_keluar2($no_surat, $tgl_surat, $tujuan, $perihal,$asisten) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'tujuan' => $tujuan,
            'perihal' => $perihal,
            'pengolah' => $this->session->user_id,
            'asisten' => $asisten
        );
        $this->db->insert('surat_klarifikasi_keluar2', $data);
    }

    public function update_surat_klarifikasi_keluar2_with_file($no_surat, $tgl_surat, $tujuan, $perihal, $up_data,$id_surat, $asisten) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'tujuan' => $tujuan,
            'perihal' => $perihal,
            'file' => $up_data,
            'asisten' => $asisten
        );
        $this->db->where('id_surat', $id_surat);
        $this->db->update('surat_klarifikasi_keluar2', $data);
    }

    public function update_surat_klarifikasi_keluar2($no_surat, $tgl_surat, $tujuan, $perihal,$id_surat, $asisten) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'tujuan' => $tujuan,
            'perihal' => $perihal,
            'asisten' => $asisten
        );
        $this->db->where('id_surat', $id_surat);
        $this->db->update('surat_klarifikasi_keluar2', $data);
    }

    public function select_surat_klarifikasi_keluar2_limit($awal, $akhir) {
        $this->db->limit($akhir, $awal);
        $query = $this->db->get('surat_klarifikasi_keluar2');
        return $query->result();
    }

    //surat_klarifikasi_masuk
    public function get_total_row_surat_klarifikasi_masuk() {
        $query = $this->db->get('surat_klarifikasi_masuk');
        return $query->num_rows();
    }

    public function delete_surat_klarifikasi_masuk($id_url) {
        $row = $this->db->where('id_surat',$id_url)->get('surat_klarifikasi_masuk')->row();
        unlink('assets/upload/surat_klarifikasi_masuk/'.$row->file);
        $this->db->where('id_surat', $id_url);
        $this->db->delete('surat_klarifikasi_masuk');
    }

    public function cari_surat_klarifikasi_masuk_tgl($tglcari) {
        $this->db->like('tgl_surat', $tglcari);
        $this->db->order_by('id_surat', 'DESC');
        $query = $this->db->get('surat_klarifikasi_masuk');
        return $query->result();
    }

    public function cari_surat_klarifikasi_masuk_key($cari) {
        $this->db->like('pengirim', $cari);
        $this->db->or_like('no_surat', $cari);
        $this->db->or_like('perihal', $cari);
        $this->db->order_by('id_surat', 'DESC');
        $query = $this->db->get('surat_klarifikasi_masuk');
        return $query->result();
    }

    public function cari_surat_klarifikasi_masuk_tgl_key($tglcari, $cari) {
        $this->db->like('tgl_surat', $tglcari);
        $this->db->like('dari', $cari);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('surat_klarifikasi_masuk');
        return $query->result();
    }

    public function select_surat_klarifikasi_masuk_id($id_url) {
        $this->db->where('id_surat', $id_url);
        $query = $this->db->get('surat_klarifikasi_masuk');
        return $query->row();
    }
                                
    public function insert_surat_klarifikasi_masuk_with_file($no_surat, $tgl_surat, $pengirim, $perihal, $up_data) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'pengirim' => $pengirim,
            'perihal' => $perihal,
            'file' => $up_data,
            'pengolah' => $this->session->user_id
        );
        $this->db->insert('surat_klarifikasi_masuk', $data);
    }

    public function insert_surat_klarifikasi_masuk($no_surat, $tgl_surat, $pengirim, $perihal) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'pengirim' => $pengirim,
            'perihal' => $perihal,
            'pengolah' => $this->session->user_id
        );
        $this->db->insert('surat_klarifikasi_masuk', $data);
    }

    public function update_surat_klarifikasi_masuk_with_file($no_surat, $tgl_surat, $pengirim, $perihal, $up_data, $id_surat) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'pengirim' => $pengirim,
            'perihal' => $perihal,
            'file' => $up_data
        );
        $this->db->where('id_surat', $id_surat);
        $this->db->update('surat_klarifikasi_masuk', $data);
    }

    public function update_surat_klarifikasi_masuk($no_surat, $tgl_surat, $pengirim, $perihal, $id_surat) {
            $data = array(
                'no_surat' => $no_surat,
                'tgl_surat' => $tgl_surat,
                'pengirim' => $pengirim,
                'perihal' => $perihal
            );
            $this->db->where('id_surat', $id_surat);
            $this->db->update('surat_klarifikasi_masuk', $data);
    }

    public function select_surat_klarifikasi_masuk_limit($awal, $akhir) {
        $this->db->limit($akhir, $awal);
        $query = $this->db->get('surat_klarifikasi_masuk');
        return $query->result();
    }

    //surat_tembusan
    public function get_total_row_surat_tembusan() {
        $query = $this->db->get('surat_tembusan');
        return $query->num_rows();
    }

    public function delete_surat_tembusan($id_url) {
        $row = $this->db->where('id_surat',$id_url)->get('surat_tembusan')->row();
        unlink('assets/upload/surat_tembusan/'.$row->file);
        $this->db->where('id_surat', $id_url);
        $this->db->delete('surat_tembusan');
    }

    public function cari_surat_tembusan_tgl($tglcari) {
        $this->db->like('tgl_surat', $tglcari);
        $this->db->order_by('id_surat', 'DESC');
        $query = $this->db->get('surat_tembusan');
        return $query->result();
    }

    public function cari_surat_tembusan_key($cari) {
        $this->db->like('pengirim', $cari);
        $this->db->or_like('no_surat', $cari);
        $this->db->order_by('id_surat', 'DESC');
        $query = $this->db->get('surat_tembusan');
        return $query->result();
    }

    public function cari_surat_tembusan_tgl_key($tglcari, $cari) {
        $this->db->like('tgl_surat', $tglcari);
        $this->db->like('pengirim', $cari);
        $this->db->order_by('id_surat', 'DESC');
        $query = $this->db->get('surat_tembusan');
        return $query->result();
    }


    public function select_surat_tembusan_id($id_url) {
        $this->db->where('id_surat', $id_url);
        $query = $this->db->get('surat_tembusan');
        return $query->row();
    }

    public function insert_surat_tembusan_with_file($no_surat, $tgl_surat, $pengirim, $perihal, $up_data) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'pengirim' => $pengirim,
            'perihal' => $perihal,  
            'file' => $up_data,
            'pengolah' => $this->session->user_id
        );
        $this->db->insert('surat_tembusan', $data);
    }

    public function insert_surat_tembusan($no_surat, $tgl_surat, $pengirim, $perihal) {
        $data = array(
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'pengirim' => $pengirim,
            'perihal' => $perihal, 
            'pengolah' => $this->session->user_id
        );
        $this->db->insert('surat_tembusan', $data);
    }

    public function update_surat_tembusan_with_file($no_surat, $tgl_surat, $pengirim, $perihal, $up_data, $id_surat) {
        $data = array(
            'no_surat' => $no_surat,
            'pengirim' => $pengirim,
            'perihal' => $perihal,
            'file' => $up_data
        );
        $this->db->where('id_surat', $id_surat);
        $this->db->update('surat_tembusan', $data);
    }

    public function update_surat_tembusan($no_surat, $tgl_surat, $pengirim, $perihal, $id_surat) {
        $data = array(
            'no_surat' => $no_surat,
            'pengirim' => $pengirim,
            'perihal' => $perihal
        );
        $this->db->where('id_surat', $id_surat);
        $this->db->update('surat_tembusan', $data);
    }

    public function select_surat_tembusan_limit($awal, $akhir) {
        $this->db->limit($akhir, $awal);
        $query = $this->db->get('surat_tembusan');
        return $query->result();
    }

    //surat_disposisi
    public function get_total_row_surat_disposisi($id_url) {
        $this->db->where('id', $id_url);
        $query = $this->db->get('disposisi');
        return $query->num_rows();
    }

    public function counter_row_surat_disposisi() {
        return $this->db->count_all('disposisi');
    }

    public function get_isi_ringkas_surat_masuk($id_url) {
        $this->db->select('isi_ringkas');
        $this->db->where('id', $id_url);
        $query = $this->db->get('disposisi');
        return $query->row();
    }

    public function delete_disposisi($id_url) {
        $this->db->where('id', $id_url);
        $this->db->delete('disposisi');
    }

    public function get_disposisi_id($id_url) {
        $this->db->where('id', $id_url);
        $query = $this->db->get('disposisi');
        return $query->row();
    }

    public function insert_disposisi($id_surat, $kepada, $isi_disposisi, $sifat, $batas_waktu, $catatan) {
        $data = array(
            'id_surat' => $id_surat,
            'kepada' => $kepada,
            'isi_disposisi' => $isi_disposisi,
            'sifat' => $sifat,
            'batas_waktu' => $batas_waktu,
            'catatan' => $catatan
        );
        $this->db->insert('disposisi', $data);
    }

    public function update_disposisi($kepada, $isi_disposisi, $sifat, $batas_waktu, $catatan, $id_post) {
        $data = array(
            'kepada' => $kepada,
            'isi_disposisi' => $isi_disposisi,
            'sifat' => $sifat,
            'batas_waktu' => $batas_waktu,
            'catatan' => $catatan
        );
        $this->db->where('id', $id_post);
        $this->db->update('disposisi', $data);
    }

    public function get_disposisi_limit($id_url, $awal, $akhir) {
        $this->db->where('id_surat', $id_url);
        $this->db->limit($akhir, $awal);
        $query = $this->db->get('disposisi');
        return $query->result();
    }

    //get_klasifikasi
    public function get_klasifikasi($kode) {
        $this->db->select('id, kode, nama');
        $this->db->like('kode', $kode);
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get('klasifikasi');
        return $query->result();
    }

    //get_instansi_lain
    public function get_surat_masuk_group($kode) {
        $this->db->select('dari');
        $this->db->like('dari', $kode, 'after');
        $this->db->group_by("dari");
        $this->db->limit(10);
        $query = $this->db->get('surat_masuk_umum');
        return $query->result();
    }

    //kode surat
    public function get_klasifikasi_divisi($divisi) {
        $this->db->where('divisi', $divisi);
        $query = $this->db->get('klasifikasi');
        return $query->result();
    }
}
