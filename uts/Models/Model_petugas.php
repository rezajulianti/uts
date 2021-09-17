<?php

// Class Petugas (CRUD Petugas)
class Model_petugas{


    // Property
    private $db;
    var $con;
    var $query;
    var $data;
    var $result;

    var $id_petugas;
    var $username;
    var $password;
    var $nama_petugas;

    // Method Main Variabel
    function __construct()
    {
        // Membuat Object dari Class Database
        include_once '../Config/Database.php';
        $this->db = new Database();
        $this->con=$this->db->Connect();
    }


    // Method untuk memasukkan data kelas ke dalam table
    function POST ($id_petugas,$username,$password,$nama_petugas){
        mysqli_query($this->con,"insert into petugas values(
            '".$id_petugas."',
            '".$username."',
            '".$password."',
            '".$nama_petugas."'
        )");
    }

    
    // Method untuk mengambil semua data petugas dari table
    function GET(){

        // Perintah Get Data Kelas
        $this->query=mysqli_query($this->con,"select * from petugas");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }


    // Method untuk mengambil data seleksi petugas dari table
    function GET_Where ($id_petugas){

        // Perintah Get Data
        $this->query=mysqli_query($this->con,"select * from petugas where id_petugas='$id_petugas'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }


    // Method untuk memasukkan data kelas ke dalam table
    function PUT ($id_petugas,$username,$password,$nama_petugas){
        mysqli_query($this->con,"update petugas set
        username='".$nama_kelas."',
        password='".$kompetensi_keahlian."',
        nama_petugas='".$nama_petugas."',
        where id_petugas='".$id_petugas."'
        ");
    }

    // Method untuk menghapus data kelas dari table
    function DELETE ($id_petugas){

        // perintah DELETE Data
        mysqli_query($this->con,"delete from petugas where id_petugas='$id_petugas'");
    }
}

?>