<?php
include 'conn.php';

function tambah_produk($id, $name, $description, $price, $status)
{
    global $conn;
    // query untuk menambahkan data produk
    $sql = "INSERT INTO products (id, name, description, price, status) VALUES ('$id', '$name', '$description', '$price', '$status')";

    if ($conn->query($sql) === true) {
        header('Location: index-products.php');
        exit();
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}


// ambil data dari form
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$status = $_POST['status'];

// panggil fungsi tambah_produk
echo tambah_produk($id, $name, $description, $price, $status);
