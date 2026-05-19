<?php

// koneksi ke MySQL
$conn = mysqli_connect("localhost", "root", "");

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// memilih database
mysqli_select_db($conn, "lat_dbase");

// query mengambil data
$hasil = mysqli_query($conn, "SELECT * FROM tbl_mhs");

// menghitung jumlah record
$hit = mysqli_num_rows($hasil);

// menampilkan jumlah record
echo "Jumlah record : $hit";

// menutup koneksi
mysqli_close($conn);

?>