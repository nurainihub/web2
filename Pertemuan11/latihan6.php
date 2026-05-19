<?php

// koneksi ke MySQL
$conn = mysqli_connect("localhost", "root", "");

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// memilih database
mysqli_select_db($conn, "lat_dbase");

// mengambil data
$hasil = mysqli_query($conn, "SELECT * FROM tbl_mhs");

// menampilkan data
while ($data = mysqli_fetch_array($hasil)) {

    echo $data['FirstName'] . " ";
    echo $data['LastName'] . " ";
    echo $data['Age'] . "<br>";

}

// menutup koneksi
mysqli_close($conn);

?>