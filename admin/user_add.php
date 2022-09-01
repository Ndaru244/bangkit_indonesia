<?php
include '_config.php';

$nama = $_POST['nama_user'];
$username = $_POST['username'];
$password = $_POST['password'];


$query = "INSERT INTO user(nama_user, username, password) VALUES ('$nama', '$username', '$password')";
$result = mysqli_query($con, $query);

if ($result) { ?>
    <script>
        alert('Data berhasil ditambahkan!')
        location.href = 'page_user.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal ditambahkan!')
        location.href = 'page_user.php'
    </script>
<?php } ?>