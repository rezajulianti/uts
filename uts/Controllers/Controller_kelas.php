<?php

// Class kelas (CRUD Kelas)
class Controller_kelas{
    
    // Property
    var $db;
    var $con;
    var $query;
    var $data;
    var $result;
    
    var $MKelas;

    var $id_kelas;
    var $nama_kelas;
    var $kompetensi_keahlian;

    
    // Method main variabel
        function __construct()
        {
           // Membuat Object dari Class Module Kelas
           include '../Models/Model_kelas.php';
           $this->MKelas = new Model_kelas(); 
        }

    
    
    // Method untuk memasukkan data ke dalam table
    function POSTDataKelas ($id_kelas,$nama_kelas,$kompetensi_keahlian){

        // Perintah Post Data Siswa
        $this->MKelas->POST($id_kelas,$nama_kelas,$kompetensi_keahlian);
    }


    // Method untuk mengambil semua data dari table
    function GETDataKelas_All(){

        // Perintah Get Data Kelas
        return $this->MKelas->GET();
    }


    // Method untuk mengambil data seleksi dari table
    function GETDataKelas_Where ($id_kelas){

        // Perintah Get Data Where
        return $this->MKelas->GET_Where($id_kelas);
    }


    // Method untuk memasukkan data siswa ke dalam table
    function PUTDataKelas ($id_kelas,$nama_kelas,$kompetensi_keahlian){

        // Perintah PUT Data Siswa
        $this->MKelas->PUT($id_kelas,$nama_kelas,$kompetensi_keahlian);
    }


    
    // Method untuk menghapus data Kelas dari table
    function DELETEDataKelas ($id_kelas){

        //Perintah Delete Data Siswa
        $this->MKelas->DELETE($id_kelas);
    }
}
?>