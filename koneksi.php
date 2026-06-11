<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "universitas"; // Database yang kita buat di Git Bash tadi

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi ke database BERHASIL!";
}
?>