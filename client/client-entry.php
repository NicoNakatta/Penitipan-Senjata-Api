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
                <li><a href="client.php">Back</a></li>
            </ul>
        </nav>
        <center>
        <main>
            <div class="login" style="height : 300px">
                <form action="client-proses.php" method="post" enctype="multipart/form-data">
                    <h3 class="textlogin">Masukkan Client Baru</h3>
                    <input class="input" type="text" name="client" id="" placeholder="Nama Client">
                    <br>
                    <select name="kategori" id="kategori">
                    <?php
					include '../koneksi.php';
					$sql = "SELECT * FROM tb_kategori";
					$result = mysqli_query($koneksi, $sql);
					if (mysqli_num_rows($result) == 0) {
						echo "
                            ";
                                }
                                while ($data = mysqli_fetch_assoc($result)) {
                                    echo "
                                    <option value='$data[id_jk]'>$data[jenis_keamanan]--$data[harga]</option>
                            ";
					}
					?>
                    </select>
                    <br>
                    <input class="input" type="date" name="date" id="">
                    <br>
                    <input class="input" type="file" name="photo" id="" placeholder="">
                    <button class="submit"type="submit" name="simpan">Submit</button>
                </form>
            </div>
        </main>
        </center>
    </body>