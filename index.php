<?php

//include & require

include_once("config.php");

//untuk menggunakan query di php menggunakan mysqli_query();
$result = mysqli_query($mysqli, "SELECT * FROM  users ORDER BY id DESC");
                                 //ORDER BY = DIURUTKAN BERDASARKAN DATA TERBARU(DESC) KALO TERLAMA (ASC)
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Belajar CRUD</title>
    </head>
    <body>
            <table border = "1">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nama</th>
                        <th>umur</th>
                        <th>alamat</th>
                        <!-- biar ngapus sama update -->
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    //intinya selama data masih ada maka akan di tampilkan
                    while($res = mysqli_fetch_array($result)) {?>
                        <tr>
                        <!--buat nampilin id dari database-->
                            <td> <?php echo $res['id'] ?> </td>
                            <td> <?php echo $res['nama'] ?> </td>
                            <td> <?php echo $res['umur'] ?> </td>
                            <td> <?php echo $res['alamat'] ?> </td>
                            <td>
                            <a href="edit.php?id=<?php echo $res['id'] ?>">Edit</a>
                            <a href="delete.php?id=<?php echo $res['id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
    </body>
</html>
                       
