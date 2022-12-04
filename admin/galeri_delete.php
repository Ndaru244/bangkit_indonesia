<?php
include '_config.php';
session_start();

$id = $_GET['id'];

$query = mysqli_query($con,"SELECT * FROM gallery WHERE id='$id' ");
$data = mysqli_fetch_assoc($query);
unlink('img_gallery/' . $data['gambar']);

$delete = mysqli_query($con, "DELETE FROM gallery WHERE id = $id");

if ($delete) {
    $_SESSION['sukses'] = "Data berhasil dihapus.";
    echo "<script>window.location='page_galeri.php';</script>";
} else {
    $_SESSION['gagal'] = "Data gagal dihapus.";
    echo "<script>window.location='page_galeri.php';</script>";
}