<?php 

include '../Controllers/Controller_pembayaran.php';
 // Membuat Object dari Class pembayaran
$siswa = new Controller_pembayaran();
$GetSiswa = $siswa->GETDataPembayaran_All();

// untuk mengecek di object $pembyaran ada berapa banyak Property
//echo var_dump($pembayaran);
?>


        <h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
        <h2>CRUD and CSRF</h2>
        <h3>Table Siswa</h3> <h3><a href="View_post_pembayaran.php">Add Data</a></h3>


        <table border="1">
            <tr>
                <th>No</th>
                <th>Id Pembayaran</th>
                <th>Id Petugas</th>
                <th>Nisn</th>
                <th>Tgl Bayar</th>
                <th>Bulan Dibayar</th>
                <th>Tahun Dibayar</th>
                <th>Id Spp</th>
                <th>Jumlah Bayar</th>
                <th>Tools</th>
            </tr>
            <?php
                // Decision validation variabel
                if(isset($GetPembayaran))
                {
                        $no = 1;
                        foreach($GetPembayaran as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['id_pembayaran']; ?></td>
                            <td><?php echo $Get['id_petugas']; ?></td>
                            <td><?php echo $Get['nisn']; ?></td>
                            <td><?php echo $Get['tgl_bayar']; ?></td>
                            <td><?php echo $Get['bulan_dibayar']; ?></td>
                            <td><?php echo $Get['tahun_dibayar']; ?></td>
                            <td><?php echo $Get['id_spp']; ?></td>
                            <td><?php echo $Get['jumlah_bayar']; ?></td>
                            <td>
                                <a href="View_put_pembayaran.php?nisn=<?php echo $Get['id_pembayaran'] ?>">View</a>
                                <a href="../Config/Routes.php?function=delete_pembayaran&id_pembayaran=<?php echo $Get['id_pembayaran'] ?>">Delete</a>
                            </td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>