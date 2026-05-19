<?php

// koneksi ke MySQL
$con = mysqli_connect("localhost", "root", "");

// cek koneksi
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

// memilih database
mysqli_select_db($con, "lat_dbase");

// query insert data pertama
mysqli_query(
    $con,
    "INSERT INTO tbl_mhs (FirstName, LastName, Age)
    VALUES ('Karina', 'Suwandi', '29')"
);

// query insert data kedua
mysqli_query(
    $con,
    "INSERT INTO tbl_mhs (FirstName, LastName, Age)
    VALUES ('Glenn', 'Gandari', '32')"
);

// pesan berhasil
echo "Data berhasil ditambahkan";

// menutup koneksi
mysqli_close($con);

?>