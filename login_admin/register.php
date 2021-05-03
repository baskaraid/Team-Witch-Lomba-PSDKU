<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$level = $_POST['level'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
	if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, level, password)
					VALUES ('$username', '$email','$level', '$password')";
			$result = mysqli_query($conn, $sql);
	if ($result) {
				echo "<script>alert('Kamu telah Terdaftar.')</script>";
				$username = "";
				$email = "";
				$level ="";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
	} else {
				echo "<script>alert('ada kesalahan silahkan coba lagi.')</script>";
		}
	} else {
			echo "<script>alert(' Email Sudah di pakai yaa, silahkan buat lagi.')</script>";
		}
		
	} else {
		echo "<script>alert('Password tidak sama mohon di ulangi kembali.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS.css">

	<title>Register TEAM WITCH</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
						<select name="level" class="form-control" value="<?php echo $level; ?>" required>
							<option value="">Pilih Level User</option>
							<option value="Admin">Administrator</option>
							<option value="Pengguna">Pengguna</option>
						</select>
</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="anjay">Register</button>
			</div>
			<p class="login-register-text">Sudah Mempunyai Akun? <a href="login.php">Login Disini</a>.</p>
		</form>
	</div>
</body>
</html>