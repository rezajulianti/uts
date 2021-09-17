<?php 

include '../Controllers/Controller_petugas.php';
 // Membuat Object dari Class petugas
$petugas = new Controller_petugas();
$GetPetugas = $petugas->GETDataPetugas_All();

// untuk mengecek di object $petugas ada berapa banyak Property
//echo var_dump($petugas);
?>


        <h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
        <h2>CRUD and CSRF</h2>
        <h3>Table Petugas</h3> <h3><a href="View_post_petugas.php">Add Data</a></h3>


        <table border="1">
            <tr>
                <th>No</th>
                <th>Id Petugas</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama Petugas</th>
            </tr>
            <?php
                // Decision validation variabel
                if(isset($GetPetugas))
                {
                        $no = 1;
                        foreach($GetPetugas as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['id_petugas']; ?></td>
                            <td><?php echo $Get['username']; ?></td>
                            <td><?php echo $Get['password']; ?></td>
                            <td><?php echo $Get['nama_petugas']; ?></td>
                            <td>
                                <a href="../Views/View_put_petugas.php?id_petugas=<?php echo $Get['id_petugas'] ?>">View</a>
                                <a href="../Config/Routes.php?function=delete_petugas&id_petugas=<?php echo $Get['id_petugas'] ?>">Delete</a>
                            </td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>