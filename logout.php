<?php
session_start();
$ident = $_SESSION['ident'];
if(isset($_SESSION['ident'])){
    echo "<script>alert('Berhasil Logout')</script>";
    session_destroy();
    echo "<script>location.href='login.php'</script>";
}
else{
    echo "<script>location.href='login.php'</script>";
}
?>