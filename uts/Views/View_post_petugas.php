<?php
  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');
?>
<form action="../Config/Routes.php?function=create_petugas" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
    <tr>
        <td>ID PETUGAS</td>
        <td><input type="text" name="id_petugas"></td>
    </tr>
    <tr>
        <td>Username</td>
        <td><input type="text" name="username"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="text" name="password"></td>
    </tr>
    <tr>
        <td>Nama Petugas</td>
        <td><input type="text" name="nama_petugas"></td>
    <tr>
        <td colspan="2" align="right">
        <input type="submit" name="submit" value="Create">
        <input type='button' onclick=location href='View_petugas.php' value='Batal'>
        </td>
    </tr>
</table>
</form>