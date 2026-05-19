<?php

// koneksi database
$conn = mysqli_connect("localhost", "root", "", "db_bukutamu");

// jumlah data per halaman
$batas = 5;

// menangkap halaman aktif
$halaman = isset($_GET['halaman']) ? $_GET['halaman'] : 1;

// menentukan data awal
$halaman_awal = ($halaman - 1) * $batas;

// query tampil data
$query = mysqli_query(
    $conn,
    "SELECT * FROM buku_tamu LIMIT $halaman_awal, $batas"
);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Buku Tamu</title>
</head>

<body>

<h2>Data Buku Tamu</h2>

<table border="1" cellpadding="10">

<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Pesan</th>
    <th>Tanggal</th>
</tr>

<?php

$no = 1;

while ($data = mysqli_fetch_array($query)) {

?>

<tr>

    <td><?php echo $no++; ?></td>

    <td><?php echo $data['nama']; ?></td>

    <td><?php echo $data['email']; ?></td>

    <td><?php echo $data['pesan']; ?></td>

    <td><?php echo $data['tanggal']; ?></td>

</tr>

<?php } ?>

</table>

<br>

<?php

// menghitung total data
$data_total = mysqli_query($conn, "SELECT * FROM buku_tamu");

$jumlah_data = mysqli_num_rows($data_total);

// menghitung jumlah halaman
$total_halaman = ceil($jumlah_data / $batas);

// menampilkan nomor halaman
for ($i = 1; $i <= $total_halaman; $i++) {

    echo "<a href='tampil_bukutamu.php?halaman=$i'>$i </a>";

}

?>

</body>
</html>