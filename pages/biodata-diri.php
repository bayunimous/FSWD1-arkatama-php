<!DOCTYPE html>
<html>
<head>
	<title>Data Diri - Bayu Nugraha - FSWD 1</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<?php
		// Data diri
		$nama = 'Bayu Nugraha';
		$tempat_lahir = 'Banjarmasin';
		$tanggal_lahir = '26 Juni 2001';
		$jenis_kelamin = 'Laki-laki';
		$alamat = 'Jl. Belitung Darat Gg. Bina Karya No. 43, Banjarmasin';
		$foto = 'assets/images/pass-photo.jpg';
		$pendidikan = 'S1 Teknik Informatika - Uniska Banjarmasin';
		$hobi = 'Programming, Design, Photography, Traveling, Reading, and etc.';

		// Tampilkan data diri
		echo '<h1>Data Diri</h1>';
		echo '<div class="container">';
        echo '<div class="photo"><img src="' . $foto . '" alt="Foto"></div>';
		echo '<div class="row"><span class="label">Nama:</span> <span class="value">' . $nama . '</span></div>';
		echo '<div class="row"><span class="label">Tempat/Tanggal Lahir:</span> <span class="value">' . $tempat_lahir . ', ' . $tanggal_lahir . '</span></div>';
		echo '<div class="row"><span class="label">Jenis Kelamin:</span> <span class="value">' . $jenis_kelamin . '</span></div>';
		echo '<div class="row"><span class="label">Alamat:</span> <span class="value">' . $alamat . '</span></div>';    
		echo '<div class="row"><span class="label">Pendidikan:</span> <span class="value">' . $pendidikan . '</span></div>';
		echo '<div class="row"><span class="label">Hobi:</span> <span class="value">' . $hobi . '</span></div>';
		echo '</div>';
	?>
</body>
</html>
