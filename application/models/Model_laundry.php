<?php 

class Model_laundry extends CI_Model
{

    function cek_login($table,$where)
    {
        return $this -> db -> get_where($table,$where);
    }

    function get_data($table)
    {
        return $this -> db -> get($table);
    }

    function insert_data($data,$table)
    {
        $this -> db -> insert($table,$data);
    }

    function edit_data($where,$table)
    {
        return $this -> db -> get_where($table,$where);
    }

    function update_data($where,$data,$table)
    {
        $this -> db -> where($where);
        $this -> db -> update($table,$data);
    }

    function delete_data($where,$table)
    {
        $this -> db -> where($where);
        $this -> db -> delete($table);
    }

    function getallpelanggan()
    {
        $query = $this -> db -> query("SELECT id_pelanggan , nama_pelanggan FROM pelanggan") ;
        return $query -> result();
    }

     function getallpakaian()
    {
        $query = $this -> db -> query("SELECT id_pelanggan , id_pakaian FROM pakaian") ;
        return $query -> result();
    }

     function getalltransaksi()
    {
        $query = $this -> db -> query("SELECT id_pelanggan , id_pakaian ,tanggal_masuk , tanggal_selesai, harga FROM transaksi") ;
        return $query -> result();
    }
}

?>