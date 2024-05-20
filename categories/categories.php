<?php

session_start();
if($_SESSION['username'] == null) {
    header('location:login.php');
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
    <div class="tabel">
        <h3 class="kategori">KATEGORI</h3>
        <center>
        <button class="databaru" onclick="location.href='categories-entry.php'"><b>Data Baru</b></button>
        <table border="1" class="globel">
            <thead>
            <thead>
					<tr>
						<th>Jenis Keamanan</th>
						<th>Harga</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include '../koneksi.php';
					$sql = "SELECT * FROM tb_kategori order by harga ASC";
					$result = mysqli_query($koneksi, $sql);
					if (mysqli_num_rows($result) == 0) {
						echo "
			   <tr>
				<td colspan='5' align='center'>
                           Data Kosong
                        </td>
			   </tr>
				";
					}
					while ($data = mysqli_fetch_assoc($result)) {
						echo "
                    <tr>
                      <td>$data[jenis_keamanan]</td>
                      <td>$data[harga]</td>
                      <td >
                        <a class='btn-edit' href=categories-edit.php?id=$data[id_jk] style='margin:10px'>
                               Edit
                        </a> | 
                        <a class='hapus' href=categories-delete.php?id=$data[id_jk] style='margin:10px'> Hapus </a>                   
                      </td>
                    </tr>
                  ";
					}
					?>
				</tbody>
        </table>
    </div>
    </center>
    </body>
    