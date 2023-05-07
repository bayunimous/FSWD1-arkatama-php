<?php
include 'conn.php';

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

if (isset($_POST['submit'])) {
    // ambil nilai input dari form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $created_at = $_POST['created_at'];
    $updated_at = $_POST['updated_at'];

    // panggil fungsi insertCategory untuk memasukkan data ke dalam database
    $result = insertCategory($conn, $id, $name, $created_at, $updated_at);

    if ($result) {
        // jika berhasil, redirect ke halaman utama
        header('Location: index-categories.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
