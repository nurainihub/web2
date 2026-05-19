<!DOCTYPE html>
<html>

<head>
    <title>Form Buku Tamu</title>
</head>

<body>

    <h2>Form Buku Tamu</h2>

    <form action="simpan_bukutamu.php" method="post">

        Nama :
        <input type="text" name="nama" required>
        <br><br>

        Email :
        <input type="email" name="email" required>
        <br><br>

        Pesan :
        <br>
        <textarea name="pesan" rows="5" cols="30" required></textarea>
        <br><br>

        <input type="submit" value="Simpan">

    </form>

</body>

</html>