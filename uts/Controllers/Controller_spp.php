<?php

// Class spp (CRUD spp)
class Controller_spp{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

     var $MSpp;

     var $id_spp;
     var $tahun;
     var $nominal;
    
    

     // Method main variabel
        function __construct()
        {
            // Membuat Object dari Class Module spp
            include '../Models/Model_spp.php';
            $this->MSpp = new Model_spp();
        }




    // Method untuk memasukan data ke dalam table
    function POSTDataSpp ($id_spp,$tahun,$nominal){

        // perintah POST data
        $this->MSpp->POST($id_spp,$tahun,$nominal);

    }



    
    // Method untuk mengambil semua data dari table
    function GetDataSpp_All(){

        // perintah GET data
        return $this->MSpp->GET();
        

    }


    // Method untuk mengambil data seleksi dari table
    function GetDataSpp_Where ($id_spp){

        // perintah GET data Where
        return $this->MSpp->GET_Where($id_spp);
    }




    // Method untuk memasukan data ke dalam table
    function PUTDataSpp ($id_spp,$tahun,$nominal){

        // perintah PUT data
        $this->MSpp->PUT($id_spp,$tahun,$nominal);

    }




    // Method untuk menghapus data dari table
    function DELETEDataSpp ($id_spp){

        // perintah DELETE data
        $this->MSpp->DELETE($id_spp);

    }


 


}


?>