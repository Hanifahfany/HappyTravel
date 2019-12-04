<?php 
defined('BASEPATH') OR exit('No direct script allowed');

/**
* 
*/
class Wisata extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if ($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];

		}else{
			redirect('login','refresh');
		}
		

		$this->load->model('wisata_model');
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		
	}

	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('wisata_model');
		$data['wisata_object']= $this->wisata_model->getDataWisataQueryObject();
		$this->load->view('admin/beranda', $data);


	}

	public function Create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('namapaket', 'namapaket', 'trim|required');
		$this->form_validation->set_rules('rutewisata', 'rutewisata', 'trim|required');
		$this->form_validation->set_rules('fasilitas', 'fasilitas', 'trim|required');
		$this->form_validation->set_rules('harga', 'harga', 'trim|required');


		if ($this->form_validation->run()==FALSE) {
			$this->load->view('admin/tambah_wisata_view');
		}else{
				$this->wisata_model->insertWisata();
				$this->load->view('admin/tambah_wisata_sukses');
		}


	}

	public function Update($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('wisata_model');
		$this->form_validation->set_rules('namapaket', 'namapaket', 'trim|required');
		$this->form_validation->set_rules('rutewisata', 'rutewisata', 'trim|required');
		$this->form_validation->set_rules('fasilitas', 'fasilitas', 'trim|required');
		$this->form_validation->set_rules('harga', 'harga', 'trim|required');


		$data['paketwisata']=$this->wisata_model->getWisata($id);

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('admin/edit_wisata_view', $data);
		}else{
				$this->wisata_model->UpdateById($id);
				$this->load->view('admin/edit_wisata_sukses');
		}
		
		

	}

	public function delete($id)
	{
		$this->wisata_model->delete($id);
		$this->load->view('admin/hapus_wisata_sukses');
	}

	public function datatable( )
	{
		$data['wisata_object']=$this->wisata_model->getDataWisataQueryObject();
		$this->load->view('admin/wisata_datatable',$data);
	}

	public function datatable_ajax(){ 
  	$this->load->view('admin/wisata_datatable_ajax'); 
 	} 

 	public function data_server(){ 
 	 $this->load->library('Datatables'); 
  	 $this->datatables 
   		->select('id,namapaket,rutewisata,fasilitas,harga') 
   		->from('paketwisata'); 
   		echo $this->datatables->generate(); 
		 }

	public function  datawisata(){ 
  	$this->load->view('admin/wisata_datatable_ajax'); 
 	} 

}


?>