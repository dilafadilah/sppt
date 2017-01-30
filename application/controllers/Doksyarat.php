<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doksyarat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_izin','izin',true);
		$this->load->model('M_wilayah','wil',true);
		$this->load->model('M_izin','izin',true);
	}


	public function index()
	{
		$data = array(
			'konten'=>'dokumensyarat/Formdatasyarat');
		$this->load->view('template/Template',$data);
	}

}

/* End of file Doksyarat.php */
/* Location: ./application/controllers/persyaratan/Doksyarat.php */