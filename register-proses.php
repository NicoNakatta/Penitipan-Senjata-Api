<?php 

include 'koneksi.php';

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $confpass1 = $_POST["confpass"];
    $confpass2 = $_POST["password"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO tb_admin VALUES(NULL, '$email', '$password', '$username')";

    if(empty($email) || empty($username) || empty($confpass1) || empty($confpass2)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'register.php';
            </script>
        ";
    }elseif($confpass1 != $confpass2){
        echo "
            <script>
                alert('Password dan Konfirmasi Password Tidak Sama');
                window.location = 'register.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Registrasi Berhasil Silahkan login');
                window.location = 'login.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'register.php';
            </script>
        ";
    }
}

?>
