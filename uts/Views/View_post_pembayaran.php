<?php
  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');
?>
<form action="../Config/Routes.php?function=create_siswa" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
    <tr>
        <td>ID PEMBAYARAN</td>
        <td><input type="text" name="id_pembayaran"></td>
    </tr>
    <tr>
        <td>Id Petugas</td>
        <td><input type="text" name="id_petugas"></td>
    </tr>
    <tr>
        <td>Nisn</td>
        <td><input type="text" name="nisn"></td>
    </tr>
    <tr>
        <td>Tgl Bayar</td>
        <td><input type="text" name="tgl_bayar"></td>
    <tr>
        <td>Bukan Dibayar</td>
        <td><input type="text" name="bulan_dibayar"></td>
    </tr>
    <tr>
        <td>Tahun Dibayar</td>
        <td><input type="text" name="tahun_dibayar"></td>
    </tr>
    <tr>
        <td>Id Spp</td>
        <td><input type="text" name="id_spp"></td>
    </tr>
    <tr>
        <td>Jumlah Bayar</td>
        <td><input type="text" name="jumlah_bayar"></td>
    </tr>
    <tr>
        <td colspan="2" align="right"
        ><input type="submit" name="proses" value="Create">
        <input type='button' onclick=location.href='View_pembayaran.php' value='Batal'>
        </td>
    </tr>
</table
</form>