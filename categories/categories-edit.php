<?php
  include '../koneksi.php';
  $id = $_GET['id'];
  if(!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'categories.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM tb_kategori WHERE id_jk = '$id'";
  $result = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($result);

	session_start();
	if($_SESSION['username'] == null) {
		header('location:../login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="../assets/logo.jpg">
        <title>Penitipan Senjata Api</title>
        <link rel="stylesheet" href="../css/style.css" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <nav>
            <div class="logo"><img src="../assets/logo.jpg" alt=""/></div>
            <ul>
                <li><a href="categories.php">Back</a></li>
            </ul>
        </nav>
        <center>
        <main>
            <div class="login">
            <h3 class="textlogin">Masukkan Kategori Baru</h3>
                <form 
                action="categories-proses.php"
                method="post"
                enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id" value="<?= $data['id_jk'] ?>">
                    <input class="input" type="text" name="categories" 
                    id="" placeholder="Nama Keamanan"
                    value="<?= $data['jenis_keamanan'] ?>">
                    <input class="input" type="number" name="price" 
                    id="" placeholder="Harga Keamanan"
                    value="<?= $data['harga'] ?>">
                    <button class="submit"type="submit" name="edit">Submit</button>
                </form>
            </div>
        </main>
        </center>
    </body>