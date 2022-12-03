<?php
include '_config.php';
session_start();

$id_user = $_GET['id_user'];

$delete = mysqli_query($con, "DELETE FROM users WHERE id_user = $id_user");

if ($delete) {
    $_SESSION['sukses'] = "Data berhasil dihapus.";
    echo "<script>window.location='page_user.php';</script>";
} else {
    $_SESSION['gagal'] = "Data gagal dihapus.";
    echo "<script>window.location='page_user.php';</script>";
}