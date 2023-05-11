<?php
// Memanggil atau membutuhkan file function.php
require 'function.php';

// Mengambil data dari id dengan fungsi get
$id = $_GET['id'];

// Mengambil data dari table user dari id yang tidak sama dengan 0
$siswa = query("SELECT * FROM siswa WHERE id = $id")[0];

// Jika fungsi ubah lebih dari 0/data terubah, maka munculkan alert dibawah
if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data User berhasil diubah!');
                document.location.href = 'index.php';
            </script>";
    } else {
        // Jika fungsi ubah dibawah dari 0/data tidak terubah, maka munculkan alert dibawah
        echo "<script>
                alert('Data User gagal diubah!');
            </script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Own CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Ubah Data</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
        <div class="container">
            <a class="navbar-brand" href="index.php">CRUD Ubah Data</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Close Navbar -->

    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="fw-bold text-uppercase"><i class="bi bi-pencil-square"></i>&nbsp;Ubah Data User</h3>
            </div>
            <hr>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="gambarLama" value="<?= $siswa['gambar']; ?>">
                    <div class="mb-3">
                        <label for="id" class="form-label">ID</label>
                        <input type="number" class="form-control w-50" id="id" value="<?= $siswa['id']; ?>" name="id" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control w-50" id="nama" value="<?= $siswa['nama']; ?>" name="nama" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="tmpt_Lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control w-50" id="tmpt_Lahir" value="<?= $siswa['tmpt_Lahir']; ?>" name="tmpt_Lahir" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_Lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control w-50" id="tgl_Lahir" value="<?= $siswa['tgl_Lahir']; ?>" name="tgl_Lahir" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control w-50" id="email" placeholder="Masukkan Email" name="email" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select w-50" id="role" name="role">
                            <option disabled selected value>--------------------------------------------Pilih Role--------------------------------------------</option>
                            <option value="Admin" <?php if ($siswa['role'] == 'Admin') { ?> selected='' <?php } ?>>Admin</option>
                            <option value="Staff" <?php if ($siswa['role'] == 'Staff') { ?> selected='' <?php } ?>>Staff</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar <i>(Saat ini)</i></label> <br>
                        <img src="img/<?= $siswa['gambar']; ?>" width="50%" style="margin-bottom: 10px;">
                        <input class="form-control form-control-sm w-50" id="gambar" name="gambar" type="file">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control w-50" id="alamat" rows="5" name="alamat" autocomplete="off"><?= $siswa['alamat']; ?></textarea>
                    </div>
                    <hr>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-warning" name="ubah">Ubah</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Close Container -->



    <!-- Footer -->
    <div class="container-fluid">
        <div class="row bg-dark text-white">
            <div class="col-md-6 my-2">
                <h4 class="fw-bold text-uppercase">About</h4>
                <p>Bayu Nugraha - 4142663 - Task 19 PHP 4</p>
            </div>
            <div class="col-md-6 my-2 text-center link">
                <h4 class="fw-bold text-uppercase">Account Links</h4>
                <a href="https://web.facebook.com/bayunimous.7/" target="_blank"><i class="bi bi-facebook fs-3"></i></a>
                <a href="https://github.com/bayunimous" target="_blank"><i class="bi bi-github fs-3"></i></a>
                <a href="https://www.instagram.com/bayu.ngrhaa/" target="_blank"><i class="bi bi-instagram fs-3"></i></a>
                <a href="https://twitter.com/baaayyys" target="_blank"><i class="bi bi-twitter fs-3"></i></a>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white text-center" style="padding: 5px;">
        <p>Created with <i class="bi bi-suit-heart-fill" style="color: red;"></i> by <a href="https://instagram.com/bayu.ngrhaa" target="_blank" style="color: #fff;">Bayu Nugraha</a></p>
    </footer>
    <!-- Close Footer -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>