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

// fungsi untuk memasukkan data kategori ke dalam database
function insertCategory($conn, $id, $name, $created_at, $updated_at)
{
    $sql = "INSERT INTO categories (id, name, created_at, updated_at)
            VALUES ('$id', '$name', '$created_at', '$updated_at')";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}
