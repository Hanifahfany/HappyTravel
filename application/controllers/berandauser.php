<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
* 
*/
class Berandauser extends CI_Controller
{

	
	
	public function index()
	{
		$this->load->view('user/beranda');
	}
	public function login()
	{
		$this->load->view('login_view');
	}

	public function wisata()
	{
		$this->load->helper('url','form');
		$this->load->model('wisata_model');
		$data['wisata_object']= $this->wisata_model->getDataWisataQueryObject();
		$this->load->view('user/wisata_user', $data);


	}
	public function transportasi()
	{
		$this->load->helper('url','form');
		$this->load->model('wisata_model');
		$la["tobject"]= $this->wisata_model->getDataTransportasiQueryObject();
		$this->load->view('user/transportasi_user', $la);


	}
}