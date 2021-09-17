<?php

// Class Kelas (CRUD Kelas)
class Model_kelas{


    // Property
    private $db;
    var $con;
    var $query;
    var $data;
    var $result;

    var $id_kelas;
    var $nama_kelas;
    var $kompetensi_keahlian;


    // Method Main Variabel
    function __construct()
    {
        // Membuat Object dari Class Database
        include_once '../Config/Database.php';
        $this->db = new Database();
        $this->con=$this->db->Connect();
    }


    // Method untuk memasukkan data kelas ke dalam table
    function POST ($id_kelas,$nama_kelas,$kompetensi_keahlian){
        mysqli_query($this->con,"insert into kelas values(
            '".$id_kelas."',
            '".$nama_kelas."',
            '".$kompetensi_keahlian."'
        )");
    }

    
    // Method untuk mengambil semua data kelas dari table
    function GET(){

        // Perintah Get Data Kelas
        $this->query=mysqli_query($this->con,"select * from kelas");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }


    // Method untuk mengambil data seleksi kelas dari table
    function GET_Where ($id_kelas){

        // Perintah Get Data
        $this->query=mysqli_query($this->con,"select * from kelas where id_kelas='$id_kelas'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }


    // Method untuk memasukkan data kelas ke dalam table
    function PUT ($id_kelas,$nama_kelas,$kompetensi_keahlian){
        mysqli_query($this->con,"update kelas set
        nama_kelas='".$nama_kelas."',
        kompetensi_keahlian='".$kompetensi_keahlian."'
        where id_kelas='".$id_kelas."'
        ");
    }

    // Method untuk menghapus data kelas dari table
    function DELETE ($id_kelas){

        // perintah DELETE Data
        mysqli_query($this->con,"delete from kelas where id_kelas='$id_kelas'");
    }
}

?>