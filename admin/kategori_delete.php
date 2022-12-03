<?php
include '_config.php';
session_start();

$id_kategori = $_GET['id_kategori'];

$delete = mysqli_query($con, "DELETE FROM kategori WHERE id_kategori = $id_kategori");

if ($delete) {
    $_SESSION['sukses'] = "Data berhasil dihapus.";
    echo "<script>window.location='page_kategori.php';</script>";
} else {
    $_SESSION['gagal'] = "Data gagal dihapus.";
    echo "<script>window.location='page_kategori.php';</script>";
}