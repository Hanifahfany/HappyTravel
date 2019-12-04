<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Wisata_model extends CI_Model
{
	
	public function __construct()
	{
		# code...
		parent::__construct();
	}

	public function insertWisata()
	{
		$object = array
		('id' => $this->input->post('id'),
		'namapaket' => $this->input->post('namapaket'),
		'rutewisata' => $this->input->post('rutewisata'),
		'fasilitas' => $this->input->post('fasilitas'),
		'harga' => $this->input->post('harga'),
	);
		$this->db->insert('paketwisata', $object);
	}

	public function getDataWisataQueryObject()
	{
		$query=$this->db->query('Select * from paketwisata');
		return $query->result();
	}

	public function getWisata($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('paketwisata');
		return $query->result();

	}
	public function UpdateById($id)
	{
		$data = array
		(
		'id' => $this->input->post('id'),
		'namapaket' => $this->input->post('namapaket'),
		'rutewisata' => $this->input->post('rutewisata'),
		'fasilitas' => $this->input->post('fasilitas'),
		'harga' => $this->input->post('harga')

		);
		$this->db->where('id', $id);
		$this->db->update('paketwisata',$data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('paketwisata');
	}


	//===========================================TRANSPORT======================================

	public function insertTransportasi()
	{
		$object = array
		('tipepaket' => $this->input->post('tipepaket'),
		'tipemobil' => $this->upload->data('file_name'),
		'durasipinjam' => $this->input->post('durasipinjam'),
		'fasilitas' => $this->input->post('fasilitas'),
		'harga' => $this->input->post('harga'),
	);
		$this->db->insert('pakettransportasi', $object);
	}

	public function getDataTransportasiQueryObject()
	{
		$query=$this->db->query('Select * from pakettransportasi');
		return $query->result();
	}

	public function getTransportasi($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('pakettransportasi');
		return $query->result();

	}
	public function UpdateByIdTransport($id)
	{
		$data = array
		(
		'tipepaket' => $this->input->post('tipepaket'),
		'tipemobil' => $this->upload->data('file_name'),
		'durasipinjam' => $this->input->post('durasipinjam'),
		'fasilitas' => $this->input->post('fasilitas'),
		'harga' => $this->input->post('harga'),

		);
		$this->db->where('id', $id);
		$this->db->update('pakettransportasi',$data);
	}

	public function deletetransport($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pakettransportasi');
	}

//=========================================PELANGGAN======================================

public function getpaket()
    {

            $this->db->select('namapaket');
            $this->db->from('paketwisata');

          
            $query = $this->db->get();
            if($query->num_rows() > 0){
            return $query->result();
        }
    }
public function gettipepaket()
    {

            $this->db->select('tipepaket');
            $this->db->from('pakettransportasi');

          
            $query = $this->db->get();
            if($query->num_rows() > 0){
            return $query->result();
        }
    }

public function insertPelanggan()
	{


		$object = array
		('id' => $this->input->post('id'),
		'namapendaftar' => $this->input->post('namapendaftar'),
		'nomerhp' => $this->input->post('nomerhp'),
		'pilihanpaket' => $this->input->post('pilihanpaket'),
		'tipepaket' => $this->input->post('tipepaket'),
		'tglpemesanan' => $this->input->post('tglpemesanan'),
		'jumlahpenumpang' => $this->input->post('jumlahpenumpang'),
		'alamatjemput' => $this->input->post('alamatjemput'),
	);
		$this->db->insert('pelanggan', $object);
	}

	public function getDataPelangganQueryObject()
	{
		$query=$this->db->query('Select * from pelanggan');
		return $query->result();
	}

	public function getPelanggan($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('pelanggan');
		return $query->result();

	}
	public function UpdateByIdPelanggan($id)
	{
		$data = array
		(
		'id' => $this->input->post('id'),
		'namapendaftar' => $this->input->post('namapendaftar'),
		'nomerhp' => $this->input->post('nomerhp'),
		'pilihanpaket' => $this->input->post('pilihanpaket'),
		'tipepaket' => $this->input->post('tipepaket'),
		'tglpemesanan' => $this->input->post('tglpemesanan'),
		'jumlahpenumpang' => $this->input->post('jumlahpenumpang'),
		'alamatjemput' => $this->input->post('alamatjemput'),
		);
		$this->db->where('id', $id);
		$this->db->update('pelanggan',$data);
	}

	public function deletepelanggan($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pelanggan');
	}


}


 ?>