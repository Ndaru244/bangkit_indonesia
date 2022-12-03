<?php
session_start();

if($_SESSION['status']==="sudah_login"){
    //melakukan pengalihan
	header('location: ../admin/');
	exit();
} else { $_SESSION['status'] = "test"; ?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
</head>
<body>
	<center>
	<form action="login_proses.php" method="POST" style="margin-top: 200px;">
		<h1>Login</h1>
		<label>Username :</label>
		<input type="text" name="username" placeholder="masukkan username" required="" autofocus="">
		<br/>
		<br/>
		<label>Password :</label>
		<input type="password" name="password" placeholder="masukkan password" required="">
		<br>
		<br>
		<button type="submit">LOGIN</button>
	</form>
	<!-- Menampung jika ada pesan -->
	<?php if(isset($_GET['pesan'])) {  ?>
	<label style="color:red;"><?php echo $_GET['pesan']; ?></label>
	<?php } ?>	
	</center>
</body>
</html>
<?php }
?>