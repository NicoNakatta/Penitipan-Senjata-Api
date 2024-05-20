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
                <li><a href="../admin.php">Beranda</a></li>
                <li><a class="active" href="categories.php">Kategori</a></li>
                <li><a href="../client/client.php">Client</a></li>
                <li><a href="../logout.php">Log Out</a></li>
            </ul>
        </nav>
        <center>
    <div class="login">
    <h3>Hapus Categories</h3>
            <h4>Ingin Menghapus Data ?</h4>
            <form
              action="categories-proses.php"
              method="post"
              enctype="multipart/form-data"
            >
              <input type="hidden" name="id" value= " <?= $data['id_jk'] ?>" >
              <button type="submit" name="hapus" style= "margin-top : 20px;">
			Yes
		  </button>
		  <button type="submit" name="tidak">
			No
		  </button>
            </form>
          </div>
    </center>
    </body>
    