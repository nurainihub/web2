<?php

// koneksi ke MySQL
$conn = mysqli_connect("localhost", "root", "");

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// nama database
$dbname = "lat_dbase";

// query membuat database
$cek = mysqli_query($conn, "CREATE DATABASE $dbname");

// cek berhasil atau tidak
if ($cek) {
    echo "Database $dbname berhasil dibuat";
} else {
    echo "Database gagal dibuat: " . mysqli_error($conn);
}

?>