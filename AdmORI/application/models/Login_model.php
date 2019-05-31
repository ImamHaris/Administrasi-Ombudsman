<?php
class Login_model extends CI_Model
{

  function cek_admin($username, $password)
  {
    $query = $this->db->query("SELECT * FROM admin WHERE username='$username' AND password=MD5('$password') LIMIT 1");
    return $query;
  }

  function cek_dosen($username, $password)
  {
    $query = $this->db->query("SELECT * FROM user WHERE email='$username' AND password=MD5('$password') LIMIT 1");
    return $query;
  }

  
}
