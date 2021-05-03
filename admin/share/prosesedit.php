<?php
error_reporting(0);
include 'koneksi.php';

if(isset($_POST['edit'])){
	$admin = $_POST['admin'];
	$nama = $_POST['nama'];
	$deskripsi = $_POST['deskripsi'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$path = "image/" .$foto;

	if(empty($foto)){
		$query = "UPDATE donasi set nama = '$nama', deskripsi = '$deskripsi' where admin = '$admin' ";
	}else{
		$file = mysqli_query($koneksi, "SELECT foto FROM donasi where admin ='$admin'");
		$hasil = mysqli_fetch_array($file);
		$foto_lama=$hasil['foto'];
		unlink("image/" .$foto_lama);

		if(move_uploaded_file($tmp, $path)){
			$query = "UPDATE donasi set nama ='$nama', deskripsi='$deskripsi', foto = '$foto' where admin = '$admin'";
		}
	}

	$result = mysqli_query ($koneksi, $query);

	if (!$result){
		die("Data gagal di ubah; ".mysqli_errno($koneksi).mysqli_error($koneksi));
	}
	else{
		echo "<script>alert('Data Berhasil Diubah');window.location.href='share.php'</script>";
	}
}
?>