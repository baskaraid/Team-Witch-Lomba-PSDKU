<!DOCTYPE html>
<html lang="en">
<head>
    <?php

    include 'koneksi.php';
?>
	<meta charset="UTF-8">
	<title>TEAM WITCH</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" class="text-white ">SELAMAT DATANG</a>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
        <li class="nav-item">
						<a class="nav-link active" href="../login_admin/login.php">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="makanan.php">Makanan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../team/team.php">Team</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../contact/contact.php">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
      </div>
      <br> 
      <br>
      <br>
      <h1 class="text-center">Makanan Yang Berada Di Madiun</h1>
    <div class="row ">
  <br>
      <?php
            $no=0;
            $result = mysqLi_query($koneksi,"SELECT * FROM donasi ORDER BY admin ASC");
            while($row = mysqli_fetch_array($result)){
                $no++
            ?>
            <br>
<div class="card" style="width: 1000px;">
  <div class="row no-gutters">
    <div class="col-md-4">
<br>
                            <img src="../admin/share/image/<?php echo $row['foto']; ?>" border="0" width="300px" height="300px"/>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['nama'];?></h5>
        <p class="card-text"><?php echo $row['deskripsi'];?></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
      <?php } ?>  
</div>
      </div>
    </div>
  </div>
  <body>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>