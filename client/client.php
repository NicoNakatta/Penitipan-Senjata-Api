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
        <button class="databaru" onclick="location.href='client-entry.html'"><b>Data Baru</b></button>
        <table border="1" class="globel">
            <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis Keamanan</th>
                <th>Harga</th>
                <th>Tanggal</th>
                <th>Action</th>
            </tr>
            </thead>
            <tr>
                <td>Theodore</td>
                <td>Maximum Security</td>
                <td>5000000</td>
                <td>22-1-2024</td>
                <td><a href="#">Edit</a>|<button onclick="Peringatan()" class="hapus">Hapus</button></td>
                <script>
                    function Peringatan(){
                        let choose = confirm("Apakah Anda Yakin Ingin Menghapus?");
                        if (choose == true){
                            alert("Data Telah Dihapus");
                        } else{
                            alert("Data Tidak Jadi Dihapus");
                        }
                    }
                </script>
            </tr>
        </table>
    </div>
    </center>
    </body>
    