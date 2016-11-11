<!DOCTYPE html>
<html>
    <head>
        <title>tambah data user</title>
    </head>
    <body>
            <form action = "add.php" method = "POST" > 
                <!--for buat link ke type nama -->
                  <!--  validasi = required cari pengertian nya -->
                <label for="nama">nama</label>
                <input type="text" name="nama"  > </br>

                <label for="umur">umur</label>
                <input type="text" name="umur"  > </br>

                <label for="alamat">alamat</label>
                <textarea name="alamat"></textarea  > </br>

                <input type="submit" name="submit" value="simpan"  > </br>                 

                        
            </form>


    </body>
        
     <?php
            //coba berhasil apa tidak
            //     echo "<pre>" .print_r($_POST, 1)."<pre>" ;

            include_once("config.php");
            //jika ada yang $post submit data
            if(isset($_POST['submit'])) {
                $nama = $_POST['nama'] ;
                $umur = $_POST['umur'] ;
                $alamat = $_POST['alamat'] ;
                if(empty($nama) || empty($umur) || empty($alamat)){
                    // jika error atau data tidak di isi
                    echo "harus di isi semua inputan" ;
                } else {
                    // kalo data di isi
                     mysqli_query($mysqli, "INSERT INTO users(nama, umur, alamat) VALUES('$nama','$umur','$alamat')") ;
                     header("location:index.php") ;
                }
            }
     ?>


</html>