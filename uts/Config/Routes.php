<?php

// Memanggil fungsi dari CSRF
include('Csrf.php');

include '../Controllers/Controller_siswa.php';
include '../Controllers/Controller_kelas.php';
include '../Controllers/Controller_pembayaran.php';
include '../Controllers/Controller_petugas.php';
include '../Controllers/Controller_spp.php';

 // Membuat Object dari Class Siswa
$db = new Controller_siswa();

// Membuat variabel dari Get URL
$function = $_GET['function'];

// Decision Variabel Create Siswa
if($function == "create_siswa"){

    // Valridasi Token CSRF
    if(validation()==true)
    {
        $db->POSTDataSiswa(
            $_POST['nisn'],
            $_POST['nis'],
            $_POST['nama'],
            $_POST['id_kelas'],
            $_POST['alamat'],
            $_POST['no_telp'],
            $_POST['id_spp']
        );
    }
    header("location:../Views/View_siswa.php");
}

// Decision Variabel PUT Siswa
elseif($function == "put_siswa"){

    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTDataSiswa(
            $_POST['nisn'],
            $_POST['nis'],
            $_POST['nama'],
            $_POST['id_kelas'],
            $_POST['alamat'],
            $_POST['no_telp'],
            $_POST['id_spp']
        );
    }
    header("location:../Views/View_siswa.php");
}

// Decision Variabel Delete Siswa
elseif($function == "delete_siswa"){
    $db->DELETEDataSiswa($_GET['nisn']);
    header("location:../Views/View_siswa.php");
}


// Membuat Object dari Class Kelas
$db = new Controller_kelas();

// Decision Variabel Create Kelas
if($function == "create_kelas"){

    // Valridasi Token CSRF
    if(validation()==true)
    {
        $db->POSTDataKelas(
            $_POST['id_kelas'],
            $_POST['nama_kelas'],
            $_POST['kompetensi_keahlian']
        );
    }
    header("location:../Views/View_kelas.php");
}

// Decision Variabel PUT Kelas
elseif($function == "put_kelas"){

    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTDataKelas(
            $_POST['id_kelas'],
            $_POST['nama_kelas'],
            $_POST['kompetensi_keahlian']
        );
    }
    header("location:../Views/View_kelas.php");
}

// Decision Variabel Delete Kelas
elseif($function == "delete_kelas"){
    $db->DELETEDataKelas($_GET['id_kelas']);
    header("location:../Views/View_kelas.php");
}

// Membuat Object dari Class Kelas
$db = new Controller_pembayaran();

// Decision Variabel Create Kelas
if($function == "create_pembayaran"){

    // Valridasi Token CSRF
    if(validation()==true)
    {
        $db->POSTDataPembayaran(
            $_POST['id_pembayaran'],
            $_POST['id_petugas'],
            $_POST['nisn'],
            $_POST['tgl_bayar'],
            $_POST['bulan_dibayar'],
            $_POST['tahun_dibayar'],
            $_POST['id_spp'],
            $_POST['jumlah_bayar']
        );
    }
    header("location:../Views/View_pembayaran.php");
}

// Decision Variabel PUT Kelas
elseif($function == "put_pembayaran"){

    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTDataPembayaran(
            $_POST['id_pembayaran'],
            $_POST['id_petugas'],
            $_POST['nisn'],
            $_POST['tgl_bayar'],
            $_POST['bulan_dibayar'],
            $_POST['tahun_dibayar'],
            $_POST['id_spp'],
            $_POST['jumlah_bayar']
        );
    }
    header("location:../Views/View_pembayaran.php");
}

// Decision Variabel Delete Kelas
elseif($function == "delete_pembayaran"){
    $db->DELETEDataPembayaran($_GET['id_pembayaran']);
    header("location:../Views/View_pembayaran.php");
}

// Membuat Object dari Class Kelas
$db = new Controller_petugas();

// Decision Variabel Create Kelas
if($function == "create_petugas"){

    // Valridasi Token CSRF
    if(validation()==true)
    {
        $db->POSTDataPetugas(
            $_POST['id_petugas'],
            $_POST['username'],
            $_POST['password'],
            $_POST['nama_petugas']
        );
    }
    header("location:../Views/View_petugas.php");
}

// Decision Variabel PUT Kelas
elseif($function == "put_petugas"){

    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTDataPetugas(
            $_POST['id_petugas'],
            $_POST['username'],
            $_POST['password'],
            $_POST['nama_petugas']
        );
    }
    header("location:../Views/View_petugas.php");
}

// Decision Variabel Delete Kelas
elseif($function == "delete_petugas"){
    $db->DELETEDataPetugas($_GET['id_petugas']);
    header("location:../Views/View_petugas.php");
}

// Membuat Object dari Class Kelas
$db = new Controller_spp();

// Decision Variabel Create Kelas
if($function == "create_spp"){

    // Valridasi Token CSRF
    if(validation()==true)
    {
        $db->POSTDataSpp(
            $_POST['id_spp'],
            $_POST['tahun'],
            $_POST['nominal']
        );
    }
    header("location:../Views/View_spp.php");
}

// Decision Variabel PUT Kelas
elseif($function == "put_spp"){

    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTDataSpp(
            $_POST['id_spp'],
            $_POST['tahun'],
            $_POST['nominanl']
        );
    }
    header("location:../Views/View_spp.php");
}

// Decision Variabel Delete spp
elseif($function == "delete_spp"){
    $db->DELETEDataSpp($_GET['id_spp']);
    header("location:../Views/View_spp.php");
}

?>