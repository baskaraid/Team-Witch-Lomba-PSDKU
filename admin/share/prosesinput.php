<?php
error_reporting(0);
include 'koneksi.php';

if (isset($_POST['simpan'])){

    $admin = $_POST['admin'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path ="image/".$foto;

    if (move_uploaded_file($tmp, $path)) {
        $query = "INSERT INTO donasi VALUES ('$admin','$nama','$deskripsi','$foto')";
        $result = mysqli_query($koneksi, $query);
        if (!$result) {
            die("Query Gagal dijalankan : " . mysqli_errno($koneksi)." - ". mysqli_error($koneksi));        
        }
        else
        {
            echo "<script>
            alert('Data Berhasil Ditambah');window.location.href='share.php'</script>";
        }
        
    }
}

 ?>