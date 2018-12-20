<?php 

class Admin_dashboard extends CI_Controller
{

        function __construct()
        {

            parent:: __construct();
            $this -> load -> model('model_laundry');
            $this -> load -> helper('url');

            if($this -> session -> userdata('status') != "login"){
            redirect(base_url().'welcome/index');
        }

        }

        function index()
        {

        	$data['transaksi'] = $this -> db -> query("SELECT * FROM transaksi ORDER BY id_transaksi DESC LIMIT 10 ") -> result(); 

            $this -> load -> view('dashboard/header');
            $this -> load -> view('dashboard/index',$data);
        }

        function transaksi()
        {

        	$data['transaksi'] = $this -> db -> query("SELECT * FROM transaksi T, pelanggan P, pakaian K WHERE T.id_pelanggan=P.id_pelanggan AND T.id_pakaian=K.id_pakaian") -> result();
             
        	$this -> load -> view('dashboard/header');
        	$this -> load -> view('transaksi/view_data_transaksi',$data);
        	$this -> load -> view('dashboard/footer');
        }

        function input_transaksi()
        {
            $data['pelanggan'] = $this -> model_laundry -> getallpelanggan();
            $data['pakaian'] = $this -> model_laundry -> getallpakaian();
        	$this -> load -> view('dashboard/header');
        	$this -> load -> view('transaksi/form_input_transaksi', $data);
        }

        function aksi_tambah_transaksi()
        {

        	$id_transaksi = $this -> input -> post('id_transaksi');
            $id_pelanggan = $this -> input -> post('id_pelanggan');
            $id_pakaian = $this -> input -> post('id_pakaian');
        	$tanggal_masuk = $this -> input -> post('tanggal_masuk');
            $tanggal_selesai = $this -> input -> post('tanggal_selesai');
            $harga = $this -> input -> post('harga');
        	$status_transaksi = $this -> input -> post('status_transaksi');

            
        	$data = array('id_transaksi' => $id_transaksi ,
                            'id_pelanggan' => $id_pelanggan ,
                            'id_pakaian' => $id_pakaian ,
        					'tanggal_masuk' => $tanggal_masuk ,
                            'tanggal_selesai' => $tanggal_selesai ,
                            'harga' => $harga ,
        					'status_transaksi' => $status_transaksi
        				);
        	$this -> model_laundry -> insert_data($data , 'transaksi');
            


        	redirect(base_url().'admin_dashboard/transaksi/');
        }

        function pelanggan()
        {
        	$data['pelanggan'] = $this -> model_laundry -> get_data('pelanggan') -> result();
        	$this -> load -> view('dashboard/header');
        	$this -> load -> view('pelanggan/view_data_pelanggan',$data);
        	$this -> load -> view('dashboard/footer');
        }

        function pakaian()
        {
           
            $data['pelanggan'] = $this -> model_laundry -> get_data('pelanggan') -> result();
            $data['pakaian'] = $this -> model_laundry -> get_data('pakaian') -> result();
            $this -> load -> view('dashboard/header');
            $this -> load -> view('pakaian/view_data_pakaian',$data);
            $this -> load -> view('dashboard/footer');
        }

        function input_pakaian()
        {
            $data['pelanggan'] = $this -> model_laundry -> getallpelanggan();

            $this -> load -> view('dashboard/header');
            $this -> load -> view('pakaian/form_input_pakaian',$data);
            $this -> load -> view('dashboard/footer');
        }

        
       
        
}

?>