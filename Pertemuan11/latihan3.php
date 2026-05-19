<?php

// koneksi ke MySQL
$conn = mysqli_connect("localhost", "root", "");

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// memilih database
mysqli_select_db($conn, "lat_dbase");

// membuat tabel
$sql = "CREATE TABLE tbl_mhs (
    mhsID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(mhsID),
    FirstName VARCHAR(15),
    LastName VARCHAR(15),
    Age INT
)";

// menjalankan query create table
$create = mysqli_query($conn, $sql);

if ($create) {
    echo "Tabel berhasil dibuat <br>";
} else {
    echo "Gagal membuat tabel: " . mysqli_error($conn) . "<br>";
}

// input data
$input = mysqli_query(
    $conn,
    "INSERT INTO tbl_mhs(FirstName, LastName, Age)
    VALUES('Anjar','Prabowo',25)"
);

// cek insert data
if ($input) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Gagal menambahkan data: " . mysqli_error($conn);
}

// menutup koneksi
mysqli_close($conn);

?>