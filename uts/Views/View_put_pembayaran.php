<?php 

  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');

include '../Controllers/Controller_pembayaran.php';
// Membuat Object dari Class pembayaran
$pembayaran = new Controller_pembayaran();
$GetPembayaran = $GetPembayaran->GetDataPembayaran_Where($_GET['id_pembayaran']);
?>



<?php
    foreach($GetPembayaran as $Get){
?>

<form action="../Config/Routes.php?function=put_kelas" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
        <input type="hidden" name="id_pembayaran" value="<?php echo $Get['id_pembayaran']; ?>">
    <tr>
        <td>Id Petugas</td>
        <td><input type="text" name="id_petugas" value="<?php echo $Get['id_petugas']; ?>"></td>
    </tr>
    <tr>
        <td>Nisn</td>
        <td><input type="text" name="nisn" value="<?php echo $Get['nisn']; ?>"></td>
    </tr>
        td>Tgl Bayar</td>
        <td><input type="text" name="tgl_bayar" value="<?php echo $Get['tgl_bayar']; ?>"></td>
    </tr>
    td>Bulan Dibayar</td>
        <td><input type="text" name="bulan_dibayar" value="<?php echo $Get['bulan_dibayar']; ?>"></td>
    </tr>
    td>Tahun Dibayar</td>
        <td><input type="text" name="tahun_dibayar" value="<?php echo $Get['tahun_dibayar']; ?>"></td>
    </tr>
    td>Id Spp</td>
        <td><input type="text" name="id_spp" value="<?php echo $Get['id_spp']; ?>"></td>
    </tr>
    td>Jumlah Bayar</td>
        <td><input type="text" name="jumlah_bayar" value="<?php echo $Get['jumlah_bayar']; ?>"></td>
    </tr>
    <tr>
        <td colspan="2" align="right">
            <input type="submit" name="proses" value="Create">
            <input type='button' onclick=location.href='View_pembayaran.php' value='Batal'>
        </td>
    </tr>
</table
</form>

<?php
    }
?>