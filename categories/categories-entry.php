<?php
    session_start();
    if ($_SESSION['username'] == null) {
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
                <form action="categories-proses.php" method="POST">
                    <h3 class="textlogin">Masukkan Kategori Baru</h3>
                    <input class="input" type="text" name="categories" id="" placeholder="Nama Keamanan">
                    <input class="input" type="number" name="price" id="" placeholder="Harga Keamanan">
                    <button class="submit"type="submit" name="simpan">Submit</button>
                </form>

            </div>
        </main>
        </center>
    </body>