<?php
class Database
{

    var $host = "localhost";
    var $user = "root";
    var $pass = "";
    var $db = "toko";
    var $koneksi = "";

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }

    function input_barang($kd_barang, $nm_barang, $harga, $stok, $distributor, $ket, $foto_baru)
    {
        mysqli_query($this->koneksi, "insert into tbl_barang values ('$kd_barang','$nm_barang', '$harga', '$stok', '$distributor', '$ket', '$foto_baru')");
    }

    function data_barang()
    {
        $data_barang = mysqli_query($this->koneksi, "select * from tbl_barang");
        while ($row = mysqli_fetch_array($data_barang)) {
            $hasil_barang[] = $row;
        }
        return $hasil_barang;
    }


    // Distributor

    function input_distributor($kd_distributor, $nm_distributor, $alamat, $nohp, $pemilik, $tipe_produk)
    {
        mysqli_query($this->koneksi, "insert into tbl_distributor values ('$kd_distributor','$nm_distributor', '$alamat', '$nohp', '$pemilik', '$tipe_produk')");
    }

    function data_distributor()
    {
        $data_distributor = mysqli_query($this->koneksi, "select * from tbl_distributor");
        while ($row = mysqli_fetch_array($data_distributor)) {
            $hasil_distributor[] = $row;
        }
        return $hasil_distributor;
    }
}
