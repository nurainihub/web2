<?php

// koneksi ke MySQL
$conn = mysqli_connect("localhost", "root", "");

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// memilih database
mysqli_select_db($conn, "lat_dbase");

// mengambil data dari tabel
$hasil = mysqli_query($conn, "SELECT * FROM tbl_mhs");

// menampilkan data
while ($data = mysqli_fetch_row($hasil)) {

    echo $data[0] . " ";
    echo $data[1] . " ";
    echo $data[2] . " ";
    echo $data[3] . "<br>";

}

// menutup koneksi
mysqli_close($conn);

?>