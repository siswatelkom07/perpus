<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


include "header.php";
?>
<h2>Selamat datang <?= $_SESSION['nama_siswa'] ?> di website Perpus Online.</h2>
<?php
include "footer.php";
?>
