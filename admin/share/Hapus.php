<?php
    error_reporting(0);
    include 'koneksi.php';

if (isset($_GET['id'])) {

    $admin = $_GET['id'];
    $file = mysqli_query($koneksi, "SELECT foto FROM donasi where admin = '$admin'");
    $hasil = mysqli_fetch_array($file);
    $foto_lama = $hasil['foto'];
    unlink("img/" . $foto_lama);

    $query = "DELETE FROM donasi where admin = '$admin'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) 
    {
        die("Data gagal di tambahkan;". mysqli_errno($koneksi).mysqli_error($koneksi));
    } 
    else 
    {
        echo "<script>
                alert('Data Berhasil Dihapus !');
                window.location.href='share.php';
              </script>";
    }
}
?>