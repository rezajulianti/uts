<?php

// Class Pembayaran (CRUD Pembayaran)
class Model_pembayaran{


    // Property
    private $db;
    var $con;
    var $query;
    var $data;
    var $result;

    var $id_pembayaran;
    var $id_petugas;
    var $nisn;
    var $tgl_bayar;
    var $bulan_dibayar;
    var $tahun_dibayar;
    var $id_spp;
    var $jumlah_bayar;
     

    // Method Main Variabel
    function __construct()
    {
        // Membuat Object dari Class Database
        include_once '../Config/Database.php';
        $this->db = new Database();
        $this->con=$this->db->Connect();
    }


    // Method untuk memasukkan data kelas ke dalam table
    function POST ($id_pembayaran,$id_petugas,$nisn,$tgl_bayar,$bulan_dibayar,$tahun_dibayar,$id_spp,$jumlah_bayar){
        mysqli_query($this->con,"insert into pembayaran values(
            '".$id_pembayaran."',
            '".$id_petugas."',
            '".$nisn."',
            '".$tgl_bayar."',
            '".$bulan_dibayar."',
            '".$tahun_dibayar."',
            '".$jumlah_bayar."'
        )");
    }

    
    // Method untuk mengambil semua data kelas dari table
    function GET(){

        // Perintah Get Data Pembayaran
        $this->query=mysqli_query($this->con,"select * from pembayaran");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }


    // Method untuk mengambil data seleksi kelas dari table
    function GET_Where ($id_pembayaran){

        // Perintah Get Data
        $this->query=mysqli_query($this->con,"select * from pembayaran where id_pembayaran='$id_pembayaran'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }


    // Method untuk memasukkan data kelas ke dalam table
    function PUT ($id_pembayaran,$id_petugas,$nisn,$tgl_bayar,$bulan_dibayar,$tahun_dibayar,$id_spp,$jumlah_bayar){
        mysqli_query($this->con,"update pembayaran set
        id_petugas='".$id_petugas."',
        nisn='".$nisn."'
        tgl_bayar='".$tgl_bayar."'
        bulan_dibayar='".$bulan_dibayar."'
        tahun_dibayar='".$tahun_dibayar."'
        id_spp='".$id_spp."'
        jumlah_bayar'".$jumlah_bayar."'
        where id_pembayaran='".$id_pembayaran."'
        ");
    }

    // Method untuk menghapus data kelas dari table
    function DELETE ($id_kelas){

        // perintah DELETE Data
        mysqli_query($this->con,"delete from pembayaran where id_pembayaran='$id_pembayaran'");
    }
}

?>