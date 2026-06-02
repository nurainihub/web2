<?php
$value = 'rahadian';
$value2 = 'rahadi ramelan';

// Membuat cookie tanpa waktu kedaluwarsa (akan hilang saat browser ditutup)
setcookie("username", $value);

// Membuat cookie yang berlaku selama 1 jam (3600 detik)
setcookie("namalengkap", $value2, time() + 3600); 

echo "<h1>Ini halaman pengesetan cookie</h1>";
// Perbaikan: Menyambung string HTML yang terputus agar rapi
echo "<h2>Klik <a href='cookie2.php'>di sini</a> untuk pemeriksaan cookies</h2>";
?>
