<?php

// Class pembayaran (CRUD pembayaran)
class Controller_pembayaran{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

     var $MPembayaran;

     var $id_pembayaran;
     var $id_petugas;
     var $nisn;
     var $tgl_bayar;
     var $bulan_dibayar;
     var $tahun_dibayar;
     var $id_spp;
     var $jumlah_bayar;
     

     

     // Method main variabel
        function __construct()
        {
            // Membuat Object dari Class Module pembayaran
            include '../Models/Model_Pembayaran.php';
            $this->MPembayaran = new Model_pembayaran();
        }




    // Method untuk memasukan data ke dalam table
    function POSTData ($id_pembayaran,$id_petugas,$nisn,$tgl_bayar,$bulan_dibayar,$tahun_dibayar,$id_spp,$jumlah_bayar){

        // perintah POST data
        $this->MSiswa->POST($id_pembayaran,$id_petugas,$nisn,$tgl_bayar,$bulan_dibayar,$tahun_dibayar,$id_spp,$jumlah_bayar);

    }



    
    // Method untuk mengambil semua data dari table
    function GetDataPembayaran_All(){

        // perintah GET data
        return $this->MPembayaran->GET();
        

    }


    // Method untuk mengambil data seleksi dari table
    function GetDataPembayaran_Where ($id_pembayaran){

        // perintah GET data Where
        return $this->MPembayaran->GET_Where($id_pembayaran);
    }




    // Method untuk memasukan data ke dalam table
    function PUTData ($id_pembayaran,$id_petugas,$nisn,$tgl_bayar,$bulan_dibayar,$tahun_dibayar,$id_spp,$jumlah_bayar){

        // perintah PUT data
        $this->MSiswa->PUT($id_pembayaran,$id_petugas,$nisn,$tgl_bayar,$bulan_dibayar,$tahun_dibayar,$id_spp,$jumlah_bayar);
    }




    // Method untuk menghapus data dari table
    function DELETEData ($id_pembayaran){

        // perintah DELETE data
        $this->MPembayaran->DELETE($id_pembayaran);

    }


 


}


?>