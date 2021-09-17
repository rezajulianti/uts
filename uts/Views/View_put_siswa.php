<?php 

  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');

include '../Controllers/Controller_siswa.php';
// Membuat Object dari Class siswa
$siswa = new Controller_siswa();
$GetSiswa = $siswa->GetDataSiswa_Where($_GET['nisn']);

?>

<?php
    foreach($GetSiswa as $Get){
?>

<form action="../Config/Routes.php?function=put_siswa" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
        <input type="hidden" name="nisn" value="<?php echo $Get['nisn']; ?>">
    <tr>
        <td>NIS</td>
        <td><input type="text" name="nis" value="<?php echo $Get['nis']; ?>"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?php echo $Get['nama']; ?>"></td>
    </tr>
    <tr>
        <td>Jenis Kelas</td>
        <td><input type="text" name="id_kelas" value="<?php echo $Get['id_kelas']; ?>">
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" value="<?php echo $Get['alamat']; ?>">
    </td>
    </tr>
    <tr>
        <td>No Telp</td>
        <td><input type="text" name="no_telp" value="<?php echo $Get['no_telp']; ?>">
    </td>
    </tr>
    <tr>
        <td>ID SPP</td>
        <td><input type="text" name="id_spp" value="<?php echo $Get['id_spp']; ?>">
    </td>
    </tr>
    <tr>
        <td colspan="2" align="right">
            <input type="submit" name="proses" value="Create">
            <input type='button' onclick=location.href='View_siswa.php' value='Batal'>
        </td>
    </tr>
</table
</form>

<?php
    }
?>