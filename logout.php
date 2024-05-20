<?php
session_start();
if(isset($_SESSION['username'])){
    echo "<script>alert('Berhasil Logout')</script>";
    session_destroy();
    echo "<script>location.href='login.php'</script>";
}
else{
    echo "<script>location.href='login.php'</script>";
}
?>