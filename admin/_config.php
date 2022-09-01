<?php
$con = mysqli_connect('localhost', 'root', '', 'bangkit_indonesia');
if (!$con) {
    echo 'Gagal terhubung ke database';
    die;
}
