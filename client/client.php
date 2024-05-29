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
                <li><a href="../categories/categories.php">Kategori</a></li>
                <li><a class="active" href="client.php">Client</a></li>
                <li><a href="../logout.php">Log Out</a></li>
            </ul>
        </nav>
    <div class="tabel">
        <h3 class="kategori">Client</h3>
        <center>
        <button class="databaru" onclick="location.href='client-entry.php'"><b>Data Baru</b></button>
        <button class="databaru" onclick="location.href='client-cetak.php'"><b>Cetak</b></button>
        <table border="1" class="globel">
        <thead>
               <tr>
                  <th>Nama</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th>Photo</th>
                  <th>Tanggal</th>
               </tr>
            </thead>
            <tbody>
               <?php
               include '../koneksi.php';
               $sql = "SELECT * FROM tb_client INNER JOIN tb_kategori 
               ON tb_client.id_jk = tb_kategori.id_jk";
               $result = mysqli_query($koneksi, $sql);
               if (mysqli_num_rows($result) == 0) {
                  echo "
                  <td colspan='5' align='center'>
                           Data Kosong
                        </td>
               ";
               } else {
                while ($data = mysqli_fetch_assoc($result)) {
                    echo "
                <tr>
                  <td>$data[nama_client]</td>
                  <td>$data[jenis_keamanan]</td>
                  <td>$data[harga]</td>
                  <td>
                  <img src='../img_client/$data[gambar]' width='100px'>
                  </td>
                  <td>$data[tanggal]</td>
                </tr>
              ";
                  }
               }
               ?>
            </tbody>
         </table>
    </div>
    </center>
    </body>
    