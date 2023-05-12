<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();
// Session dihapus dan logout

echo "<script>
alert('Berhasil Logout');
document.location.href = 'index.php';
</script>";
// kembali ke index.php