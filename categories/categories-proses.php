<?php 
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $categories = $_POST['categories'];
    $price = $_POST['price'];

    var_dump($categories, $price);

    $sql = "INSERT INTO tb_kategori VALUES(NULL, '$categories', '$price')";

    if(empty($categories) || empty($price)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'categories-entry.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Categories Berhasil Ditambahkan');
                window.location = 'categories.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'categories-entry.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id         = $_POST['id'];
    $categories = $_POST['categories'];
    $price      = $_POST['price'];

    $sql = "UPDATE tb_kategori SET 
            jenis_keamanan = '$categories',
            harga = '$price'
            WHERE id_jk = '$id'
            ";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Categories Berhasil Diubah');
                window.location = 'categories.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'categories-edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM tb_kategori WHERE id_jk = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Categories Berhasil Dihapus');
                window.location = 'categories.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Categories Gagal Dihapus');
                window.location = 'categories.php';
            </script>
        ";
    }
}else {
    header('location: categories.php');
}
?>
