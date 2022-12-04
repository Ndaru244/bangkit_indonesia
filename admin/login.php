<?php
session_start();
error_reporting(0);
if ($_SESSION['status'] === "sudah_login") {
	//melakukan pengalihan
	header('location: ../admin/');
	exit();
} else {
?>
	<!doctype html>
	<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
		<!-- Favicons -->
		<link href="../assets/img/favicon.png" rel="icon">
		<link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
		<!-- jquery -->
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
		<!-- Font Awesome Solid + Brands -->
		<link href="assets/fontawesome/css/fontawesome.css" rel="stylesheet">
		<link href="assets/fontawesome/css/brands.css" rel="stylesheet">
		<link href="assets/fontawesome/css/solid.css" rel="stylesheet">
		<!-- popperjs -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<!-- Bootstrap 4 -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

		<link rel="stylesheet" href="assets/fonts/icomoon/style.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">

		<!-- Style -->
		<link rel="stylesheet" href="assets/css/style.css">
		<title>Bangkitkan Semangat Indonesia</title>
	</head>

	<body>
		<div class="d-lg-flex half">
			<div class="col-lg-6 order-1 order-lg-2 text-center text-lg-start">
				<img src="assets/images/bela-negara.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
				<h2>Bangkitkan Semangat <span>Indonesia</span></h2>
			</div>
			<div class="contents order-2 order-md-1">

				<div class="container">
					<div class="row align-items-center justify-content-center">
						<div class="col-md-7">
							<h3>Login Page <strong>Bela Negara</strong></h3>
							<p class="mb-4">Selamat Datang di Administrator Web, Silahkan Login Terlebih Dahulu</p>
							<!-- Alert -->
							<?php if ($_SESSION['gagal']) {
								$message = $_SESSION['gagal'];
							?>
								<div class="alert alert-danger alert-dismissible fade show" id="alert" role="alert">
									<strong>Peringatan!</strong><br> <?= $message ?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							<?php unset($_SESSION['gagal']);
							} ?>
							<!-- ./Alert -->
							<form action="login_proses.php" method="post">
								<div class="form-group first">
									<label for="username">Username</label>
									<input type="text" class="form-control" placeholder="Masukkan Username" name="username" value="">
								</div>
								<div class="form-group last mb-3">
									<label for="password">Password</label>
									<div class="input-group-append">
										<input type="password" class="form-control" placeholder="Masukan Password" name="password" id="password">
										<div class="input-group-text" onclick="password_show_hide();">
											<i class="fa-solid fa-eye-slash" id="show_eye"></i>
											<i class="fa-solid fa-eye d-none" id="hide_eye"></i>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-block btn-danger">Log In</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="assets/js/main.js"></script>
		<!-- Show And Hide Password -->
		<script>
			$("#alert").fadeTo(2500, 500).fadeToggle(500, function() {
				$("#alert").slideUp(500);
			});

			function password_show_hide() {
				var x = document.getElementById("password");
				var show_eye = document.getElementById("show_eye");
				var hide_eye = document.getElementById("hide_eye");
				hide_eye.classList.remove("d-none");
				if (x.type === "password") {
					x.type = "text";
					show_eye.style.display = "none";
					hide_eye.style.display = "block";
				} else {
					x.type = "password";
					show_eye.style.display = "block";
					hide_eye.style.display = "none";
				}
			}
		</script>
	</body>

	</html>
<?php }

?>