<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class editdata extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'admin/editdata';
		$this->load->view('admin/template', $isi);
	}
}
