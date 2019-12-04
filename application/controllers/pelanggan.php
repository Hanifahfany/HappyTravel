<?php 
defined('BASEPATH') OR exit('No direct script allowed');

/**
* 
*/
class Pelanggan extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		

		$this->load->model('wisata_model');
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		
	}

	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('wisata_model');
		
		$data['pelanggan_object']= $this->wisata_model->getDataPelangganQueryObject();
		$this->load->view('admin/pelanggan_datatable', $data);


	}

	public function Create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('namapendaftar', 'namapendaftar', 'trim|required');
		$this->form_validation->set_rules('nomerhp', 'nomerhp', 'trim|required');
		$this->form_validation->set_rules('pilihanpaket', 'pilihanpaket', 'trim|required');
		$this->form_validation->set_rules('tipepaket', 'tipepaket', 'trim|required');
		$this->form_validation->set_rules('tglpemesanan', 'tglpemesanan', 'trim|required');
		$this->form_validation->set_rules('jumlahpenumpang', 'jumlahpenumpang', 'trim|required');
		$this->form_validation->set_rules('alamatjemput', 'alamatjemput', 'trim|required');
		
		if ($this->form_validation->run()==FALSE) {
			$data['namapaket']=$this->wisata_model->getpaket();
			$data['tipepaket']=$this->wisata_model->gettipepaket();
			
			$this->load->view('user/tambah_pelanggan_view',$data);
		}else{
				$this->wisata_model->insertPelanggan();
				$this->load->view('user/tambah_pelanggan_sukses');
		}


	}



	public function Update($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id', 'id', 'trim|required');
		$this->form_validation->set_rules('namapendaftar', 'namapendaftar', 'trim|required');
		$this->form_validation->set_rules('nomerhp', 'nomerhp', 'trim|required');
		$this->form_validation->set_rules('pilihanpaket', 'pilihanpaket', 'trim|required');
		$this->form_validation->set_rules('tglpemesanan', 'tglpemesanan', 'trim|required');
		$this->form_validation->set_rules('jumlahpenumpang', 'jumlahpenumpang', 'trim|required');
		$this->form_validation->set_rules('alamatjemput', 'alamatjemput', 'trim|required');

		$data['pelanggan']=$this->wisata_model->getPelanggan($id);

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('admin/edit_pelanggan_view', $data);
		}else{
				$this->wisata_model->UpdateByIdPelanggan($id);
				$this->load->view('admin/edit_pelanggan_sukses');
		}
		
		

	}

	public function delete($id)
	{
		$this->wisata_model->deletepelanggan($id);
		$this->load->view('admin/hapus_pelanggan_sukses');
	}

	public function datatable( )
	{
		$data['pelanggan_object']=$this->wisata_model->getDataPelangganQueryObject();
		$this->load->view('admin/pelanggan_datatable',$data);
	}

	public function datatable_ajax(){ 
  	$this->load->view('admin/pelanggan_datatable_ajax'); 
 	} 

 	public function data_server(){ 
 	 $this->load->library('Datatables'); 
  	 $this->datatables 
   		->select('id,namapendaftar,nomerhp,pilihanpaket,tipepaket,tglpemesanan,jumlahpenumpang,alamatjemput') 
   		->from('pelanggan'); 
   		echo $this->datatables->generate(); 
		 }

	public function datapelanggan(){ 
  	$this->load->view('admin/pelanggan_datatable_ajax'); 
 	} 

	

}


?>