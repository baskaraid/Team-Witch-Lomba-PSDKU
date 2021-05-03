<?php
    error_reporting(0);
    include 'koneksi.php';

    if(isset($_GET["id"])){
        $id = ($_GET["id"]);

        $result = mysqli_query($koneksi, "SELECT * FROM donasi WHERE admin ='$id'");

        while($row = mysqli_fetch_array($result)){
            $admin = $row["admin"];
            $nama = $row["nama"];
            $deskripsi = $row["deskripsi"];
            $foto = $row["foto"];
        }
    }else{
    header("location:share.php");
    }
?>

<!doctype html>
<html lang="en">
  <head>
      
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <title>TEAM WITCH</title>
  </head>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand" href="#">SELAMAT DATANG ADMINS | <b>TEAM WITCH</b></a>
          <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
    </nav>
<div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
  <li class="nav-item">
      <a class="nav-link active text-white" href="index.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="">
        </li>
  <li class="nav-item">
      <a class="nav-link text-white" href="share.php"><i class="fas fa-share-alt-square mr-2"></i> Share Konten</a><hr class="">
        </li>
  <li class="nav-item">
      <a class="nav-link text-white" href="#"><i class="fas fa-users mr-2"></i> Daftar Admins</a><hr class="">
        </li>
  <li class="nav-item">
      <a class="nav-link text-white" href="#"><i class="fas fa-inbox mr-2"></i> Pesan Masuk</a><hr class="">
        </li>
</ul>
  </div>
      <div class="col-md-10 p-5 pt-2" >
          <h3><i class="fas fa-folder-plus mr-2"></i>Edit</h3><hr>
                <div class="col-md-10 p-5 pt-2" >
  <div class="row">
      <div class="col-lg-12">
	  <div class="card-body">
<form action="prosesedit.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <div class="form-group">
                <label>Admin</label>
	    		<input class="form-control" name="admin" type="text" id="admin"  value="<?php echo $admin ?>"/>
	    	</div>

            <div class="form-group">
                <label>Nama</label>
	    		<input class="form-control" name="nama" type="text" id="nama"  value="<?php echo $nama ?>"/>
	    	</div>

            <div class="form-group">
                <label>Deskripsi</label>
	    		<input class="form-control" name="deskripsi" type="text" id="deskripsi"  value="<?php echo $deskripsi ?>"/>
	    	</div>
            <tr>
                <td>Foto</td>
                <td>:</td>
                <td>
                    <input type="file" name="foto" id="foto"/>
                    <?php echo $foto; ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="edit" id="edit" value="Edit" /></td>
            </tr>
        </table>

</form>
</body>
</html>