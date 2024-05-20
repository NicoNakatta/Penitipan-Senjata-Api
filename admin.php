<?php

session_start();
if($_SESSION['username'] == null) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="assets/logo.jpg">
        <title>Penitipan Senjata Api</title>
        <link rel="stylesheet" href="css/style.css" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <nav>
            <div class="logo"><img src="assets/logo.jpg" alt=""/></div>
            <ul>
                <li><a class="active" href="admin.php">Beranda</a></li>
                <li><a href="categories/categories.php">Kategori</a></li>
                <li><a href="client/client.php">Client</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
        <header>
        <center>
        <?php
        echo "<h1 class='welcome'>Selamat Datang<br>".$_SESSION['username']."<br>^_^</h1>";
        ?>
        </center>
        </header>
</body>
    