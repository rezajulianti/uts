<?php

// Class Spp (CRUD Spp)
class Model_spp{


    // Property
    private $db;
    var $con;
    var $query;
    var $data;
    var $result;

    var $id_spp;
    var $tahun;
    var $nominal;

    // Method Main Variabel
    function __construct()
    {
        // Membuat Object dari Class Database
        include_once '../Config/Database.php';
        $this->db = new Database();
        $this->con=$this->db->Connect();
    }


    // Method untuk memasukkan data spp ke dalam table
    function POST ($id_spp,$tahun,$nominal){
        mysqli_query($this->con,"insert into spp values(
            '".$id_spp."',
            '".$tahun."',
            '".$nominal."'
        )");
    }

    
    // Method untuk mengambil semua data spp dari table
    function GET(){

        // Perintah Get Data Kelas
        $this->query=mysqli_query($this->con,"select * from spp");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }


    // Method untuk mengambil data seleksi spp dari table
    function GET_Where ($id_spp){

        // Perintah Get Data
        $this->query=mysqli_query($this->con,"select * from spp where id_spp='$id_spp'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }


    // Method untuk memasukkan data spp ke dalam table
    function PUT ($id_spp,$tahun,$nominal){
        mysqli_query($this->con,"update spp set
        tahun='".$tahun."',
        nominal='".$nominal."'
        where id_spp='".$id_spp."'
        ");
    }

    // Method untuk menghapus data kelas dari table
    function DELETE ($id_spp){

        // perintah DELETE Data
        mysqli_query($this->con,"delete from spp where id_spp='$id_spp'");
    }
}

?>