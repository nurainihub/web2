<?php

// koneksi ke MySQL
$con = mysqli_connect("localhost", "root", "");

// cek koneksi
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

// memilih database
mysqli_select_db($con, "lat_dbase");

// query insert data
$sql = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES
(
    '$_POST[firstname]',
    '$_POST[lastname]',
    '$_POST[age]'
)";

// menjalankan query
if (!mysqli_query($con, $sql)) {

    die('Error: ' . mysqli_error($con));

}

// pesan berhasil
echo "1 record added";

// menutup koneksi
mysqli_close($con);

?>