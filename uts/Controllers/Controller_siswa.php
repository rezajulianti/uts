<?php

// Class siswa (CRUD Siswa)
class Controller_siswa{
    
    // Property
    var $db;
    var $con;
    var $query;
    var $data;
    var $result;
    
    var $MSiswa;

    var $nisn;
    var $nis;
    var $nama; 
    var $id_kelas;
    var $alamat; 
    var $no_telp; 
    var $id_spp;

    
    // Method main variabel
        function __construct()
        {
           // Membuat Object dari Class Module siswa
           include '../Models/Model_siswa.php';
           $this->MSiswa = new Model_siswa(); 
        }

    
    
    // Method untuk memasukkan data ke dalam table
    function POSTDataSiswa ($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp){

        // Perintah Post Data Siswa
        $this->MSiswa->POST($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp);
    }


    // Method untuk mengambil semua data dari table
    function GETDataSiswa_All(){

        // Perintah Get Data Siswa
        return $this->MSiswa->GET();
    }


    // Method untuk mengambil data seleksi dari table
    function GETDataSiswa_Where ($nisn){

        // Perintah Get Data Where
        return $this->MSiswa->GET_Where($nisn);
    }


    // Method untuk memasukkan data siswa ke dalam table
    function PUTDataSiswa ($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp){

        // Perintah PUT Data Siswa
        $this->MSiswa->PUT($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp);
    }


    
    // Method untuk menghapus data siswa dari table
    function DELETEDataSiswa ($nisn){

        //Perintah Delete Data Siswa
        $this->MSiswa->DELETE($nisn);
    }
}
?>