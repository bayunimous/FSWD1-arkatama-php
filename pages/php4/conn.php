<?php

$host = 'localhost';
$username = 'root';
$password = '';
$db = 'arkatama_store';

$conn = mysqli_connect($host, $username, $password, $db);

if (!$conn) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}
// echo 'Koneksi berhasil';
// mysqli_close($conn);
