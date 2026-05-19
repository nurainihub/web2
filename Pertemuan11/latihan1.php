<?php
// hostname
$servername = "localhost";

// username dan password
$dbusername = "root";
$dbpassword = "";

// koneksi
$link = mysqli_connect($servername, $dbusername, $dbpassword);

// cek koneksi
if (!$link) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "ok....koneksi berhasil";
?>