<?php
// ini adalah komentar dalam satu baris
/* komentar dalam banyak baris 
   selesai setelah diakhiri dengan */
?>

<html>
<head>
<title>Test Penyisipan PHP pada HTML</title>
</head>
<body>
    Kapal Asing, Silahkan identifikasikan diri Anda!
    <br>
    <?php
    // inisiasi beberapa variabel
    $namad = "Jean";
    $namat = "Luc";
    $namab = "Picard";
    $nilai1 = 25;
    $nilai2 = 50;
    $hasil = $nilai1 * $nilai2;
    $a = 2;
    $b = 3;
    $hsl = pow($a, $b);
    ?>
    
    <b>ini adalah kapal Federasi Planet USS Enterprise<br></b>
    <?php
    echo "Saya $namab, $namad $namat $namab, kapten kapal.<br>";
    echo "$nilai1 x $nilai2 = $hasil<br>";
    echo "$a ^ $b = $hsl";
    ?>
</body>
</html>
