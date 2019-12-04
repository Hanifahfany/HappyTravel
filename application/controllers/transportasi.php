<?php 
defined('BASEPATH') OR exit('No direct script allowed');

/**
* 
*/
class Transportasi extends CI_Controller
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
		$la["tobject"]= $this->wisata_model->getDataTransportasiQueryObject();
		$this->load->view('admin/transportasi_datatable', $la);


	}

	public function Create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('tipepaket', 'tipepaket', 'trim|required');
		$this->form_validation->set_rules('durasipinjam', 'durasipinjam', 'trim|required');
		$this->form_validation->set_rules('fasilitas', 'fasilitas', 'trim|required');
		$this->form_validation->set_rules('harga', 'harga', 'trim|required');


		if ($this->form_validation->run()==FALSE) {
			$this->load->view('admin/tambah_transportasi_view');
		}else{
			$config['upload_path'] = './assets/upload/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']= 1000000000;
			$config['max_width']= 10240;
			$config['max_height']=7680;
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('tipemobil')){
				$error= array('error'=>$this->upload->display_errors());
				$this->load->view('admin/tambah_transportasi_view',$error);
			}else{
				$this->wisata_model->insertTransportasi();
				$this->load->view('admin/tambah_transportasi_sukses');
			}
		}


	}

	public function Update($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		//$this->form_validation->set_rules('id', 'id', 'trim|required');
		$this->form_validation->set_rules('tipepaket', 'tipepaket', 'trim|required');
		$this->form_validation->set_rules('durasipinjam', 'durasipinjam', 'trim|required');
		$this->form_validation->set_rules('fasilitas', 'fasilitas', 'trim|required');
		$this->form_validation->set_rules('harga', 'harga', 'trim|required');


		$data['pakettransportasi']=$this->wisata_model->getTransportasi($id);

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('admin/edit_transportasi_view', $data);
		}else{
			$config['upload_path'] = './assets/upload/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']= 1000000000;
			$config['max_width']= 10240;
			$config['max_height']=7680;
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('tipemobil')){
				$error= array('error'=>$this->upload->display_errors());
				$this->load->view('admin/edit_transportasi_view',$error);
			}else{
				$this->wisata_model->UpdateByIdTransport($id);
				$this->load->view('admin/edit_transportasi_sukses');
			}
		}
		
		

	}

	public function delete($id)
	{
		$this->wisata_model->deletetransport($id);
		$this->load->view('admin/hapus_transportasi_sukses');
	}

	public function datatable()
	{
		$data['tobject']=$this->wisata_model->getDataTransportasiQueryObject();
		$this->load->view('admin/transportasi_datatable',$data);
	}

	public function datatable_ajax(){ 
  	$this->load->view('admin/transportasi_datatable_ajax'); 
 	} 

 	public function data_server(){ 
 	 $this->load->library('Datatables'); 
  	 $this->datatables 
   		->select('id,tipepaket,tipemobil,durasipinjam,fasilitas,harga') 
   		->from('pakettransportasi'); 
   		echo $this->datatables->generate(); 
		 }

	public function  datatransportasi(){ 
  	$this->load->view('admin/transportasi_datatable_ajax'); 
 	} 

	

}


?>