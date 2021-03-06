<?php 

include '../Controllers/Controller_siswa.php';
 // Membuat Object dari Class siswa
$siswa = new Controller_siswa();
$GetSiswa = $siswa->GETDataSiswa_All();

// untuk mengecek di object $siswa ada berapa banyak Property
//echo var_dump($siswa);
?>


        <h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
        <h2>CRUD and CSRF</h2>
        <h3>Table Siswa</h3> <h3><a href="View_post_siswa.php">Add Data</a></h3>


        <table border="1">
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jenis Kelas</th>
                <th>Alamat</th>
                <th>No Telpon</th>
                <th>ID SPP</th>
                <th>Tools</th>
            </tr>
            <?php
                // Decision validation variabel
                if(isset($GetSiswa))
                {
                        $no = 1;
                        foreach($GetSiswa as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['nisn']; ?></td>
                            <td><?php echo $Get['nis']; ?></td>
                            <td><?php echo $Get['nama']; ?></td>
                            <td><?php echo $Get['id_kelas']; ?></td>
                            <td><?php echo $Get['alamat']; ?></td>
                            <td><?php echo $Get['no_telp']; ?></td>
                            <td><?php echo $Get['id_spp']; ?></td>
                            <td>
                                <a href="View_put_siswa.php?nisn=<?php echo $Get['nisn'] ?>">View</a>
                                <a href="../Config/Routes.php?function=delete_siswa&nisn=<?php echo $Get['nisn'] ?>">Delete</a>
                            </td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>