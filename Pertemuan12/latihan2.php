<?php

// koneksi ke MySQL
$con = mysqli_connect("localhost", "root", "");

// cek koneksi
if (!$con) {

    die('Could not connect: ' . mysqli_connect_error());

}

// memilih database
mysqli_select_db($con, "lat_dbase");

// query delete data
$sql = "DELETE FROM tbl_mhs 
WHERE LastName = 'Prabowo'";

// menjalankan query
if (mysqli_query($con, $sql)) {

    echo "Data berhasil dihapus";

} else {

    echo "Gagal menghapus data : " . mysqli_error($con);

}

// menutup koneksi
mysqli_close($con);

?>