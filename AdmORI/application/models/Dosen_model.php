<?php
class Dosen_model extends CI_Model
{

  function dosen_list()
  {
    $hasil = $this->db->get('dosen');
    return $hasil->result();
  }

  function save_dosen()
  {

    $data = array(
      'id_user'   => $this->input->post('id_user'),
      'Nama'   => $this->input->post('nama'),
      'password' => MD5($this->input->post('password')),
      'Email' => $this->input->post('email'),
      'No_telepon' => $this->input->post('no_telepon'),
      'Alamat' => $this->input->post('alamat'),
    );
    $result = $this->db->insert('dosen', $data);
    return $result;
  }

  function update_dosen()
  {
    $id_user = $this->input->post('id_user');
    $nama = $this->input->post('nama');
    $password = MD5($this->input->post('password'));
    $email = $this->input->post('email');
    $no_telepon = $this->input->post('no_telepon');
    $alamat = $this->input->post('alamat');

    $this->db->set('Nama', $nama);
    $this->db->set('password', $password);
    $this->db->set('Email', $email);
    $this->db->set('No_telepon', $no_telepon);
    $this->db->set('Alamat', $alamat);
    $this->db->where('id_user', $id_user);
    $result = $this->db->update('dosen');
    return $result;
  }

  function delete_dosen()
  {
    $id_user = $this->input->post('id_user');
    $this->db->where('id_user', $id_user);
    $result = $this->db->delete('dosen');
    return $result;
  }

  function update_profile($id_user, $nama, $email, $no_telepon, $alamat, $foto)
  {
    $this->db->set('Nama', $nama);
    $this->db->set('Email', $email);
    $this->db->set('No_telepon', $no_telepon);
    $this->db->set('Alamat', $alamat);
    $this->db->set('foto', $foto);
    $this->db->where('id_user', $id_user);
    $this->db->update('dosen');
    return $this->db->affected_rows();
  }

  function get_dosen($id_user)
  {
    $query = $this->db->get_where('dosen', array('id_user' => $id_user));
    return $query;
  }

  function cek_pw_lama($pw)
  {
    $pw = MD5($pw);
    $query = $this->db->get_where('dosen', array('password' => $pw));
    return $query;
  }

  function updatePassword($new_password, $id_user)
  {
    $this->db->set('password', MD5($new_password));
    $this->db->where('id_user', $id_user);
    $result = $this->db->update('dosen');
    return $result;
  }

}
