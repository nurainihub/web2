<?php

// koneksi database
$conn = mysqli_connect("localhost", "root", "", "db_bukutamu");

// cek koneksi
if (!$conn) {
    die("Koneksi gagal : " . mysqli_connect_error());
}

// ambil data form
$nama  = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

// query insert
$sql = "INSERT INTO buku_tamu (nama, email, pesan)
VALUES ('$nama', '$email', '$pesan')";

// eksekusi query
if (mysqli_query($conn, $sql)) {

    echo "Data berhasil disimpan";

} else {

    echo "Gagal menyimpan data";

}

// tutup koneksi
mysqli_close($conn);

?>