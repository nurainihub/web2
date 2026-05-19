<?php

// koneksi ke MySQL
$con = mysqli_connect("localhost", "root", "");

// cek koneksi
if (!$con) {

    die('Could not connect: ' . mysqli_connect_error());

}

// memilih database
mysqli_select_db($con, "lat_dbase");

// query update data
$sql = "UPDATE tbl_mhs 
SET Age = '36'
WHERE FirstName = 'Karina' 
AND LastName = 'Suwandi'";

// menjalankan query
if (mysqli_query($con, $sql)) {

    echo "Data berhasil diupdate";

} else {

    echo "Gagal update data : " . mysqli_error($con);

}

// menutup koneksi
mysqli_close($con);

?>