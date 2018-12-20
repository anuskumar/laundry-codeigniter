<?php 

class Pakaian extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this -> load -> model('model_laundry');
		$this -> load -> helper('url');
		$this -> load -> database();
	
	}

	function aksi_tambah_pakaian()
	{	
		$id_pakaian = $this -> input -> post('id_pakaian');
		$id_pelanggan = $this -> input -> post('id_pelanggan');
		$jenis_pakaian = $this -> input -> post('jenis_pakaian');
		$jumlah_pakaian = $this -> input -> post('jumlah_pakaian');
		$berat_pakaian = $this -> input -> post('berat_pakaian');

		$data = array(
						'id_pakaian' => $id_pakaian ,
						'id_pelanggan' => $id_pelanggan ,
						'jenis_pakaian' => $jenis_pakaian ,
						'jumlah_pakaian' => $jumlah_pakaian ,
						'berat_pakaian' => $berat_pakaian );
		


		$this -> model_laundry -> insert_data($data ,'pakaian');
		redirect(base_url().'admin_dashboard/pakaian/');

	}
}

 ?>