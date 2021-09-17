<?php

// Class petugas (CRUD petugas)
class Controller_petugas{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

     var $MPetugas;

     var $id_petugas;
     var $username;
     var $password;
     var $nama_petugas;
     
     

     // Method main variabel
        function __construct()
        {
            // Membuat Object dari Class Module petugas
            include '../Models/Model_petugas.php';
            $this->MPetugas = new Model_petugas();
        }




    // Method untuk memasukan data ke dalam table
    function POSTDataPetugas ($id_petugas,$username,$password,$nama_petugas){

        // perintah POST data
        $this->MPetugas->POST($id_petugas,$username,$password,$nama_petugas);

    }



    
    // Method untuk mengambil semua data dari table
    function GetDataPetugas_All(){

        // perintah GET data
        return $this->MPetugas->GET();
        

    }


    // Method untuk mengambil data seleksi dari table
    function GetDataPetugas_Where ($id_petugas){

        // perintah GET data Where
        return $this->MPetugas->GET_Where($id_petugas);
    }




    // Method untuk memasukan data ke dalam table
    function PUTDataPetugas ($id_petugas,$username,$password,$nama_petugas){

        // perintah PUT data
        $this->MPetugas->PUT($id_petugas,$username,$password,$nama_petugas);

    }




    // Method untuk menghapus data dari table
    function DELETEDataPetugas ($id_petugas){

        // perintah DELETE data
        $this->MPetugas->DELETE($id_petugas);

    }


 


}


?>