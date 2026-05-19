<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "artikel_db";

// melakukan koneksi ke MySQL
$connection = mysqli_connect($dbhost, $dbuser, $dbpass);

// cek koneksi
if (!$connection) {

    echo "Tidak dapat terhubung dengan database : "
    . mysqli_connect_error();

    exit;

}

// memilih database
$pilih_db = mysqli_select_db($connection, $dbname);

// cek database
if (!$pilih_db) {

    echo "Tidak dapat memilih database";

    exit;

}

echo "Koneksi database berhasil";

?>