<?php
session_start();
include '_config.php';

$stmt = $con->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $_POST['username']);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($_POST['password'], $user['password'])) {
    $_SESSION['user_id'] = $user['id_user'];
    $_SESSION['user_name'] = $user['nama_user'];
    $_SESSION['status'] = "sudah_login";
    header('location: ../admin/');
    exit;
} else {
  echo "Invalid login";
}
$stmt->close();
