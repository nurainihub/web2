<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Form Mahasiswa</title>
</head>

<body>

    <h2>Form Input Mahasiswa</h2>

    <form action="insert3.php" method="post">

        <label>Firstname :</label>
        <input type="text" name="firstname" required>
        <br><br>

        <label>Lastname :</label>
        <input type="text" name="lastname" required>
        <br><br>

        <label>Age :</label>
        <input type="number" name="age" required>
        <br><br>

        <input type="submit" value="Simpan">

    </form>

</body>

</html>