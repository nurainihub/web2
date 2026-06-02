<?php
// Memeriksa cookie 'username'
if (isset($_COOKIE['username'])) {
    // Perbaikan: Menambahkan htmlspecialchars untuk keamanan dan menutup tag <h1>
    echo "<h1>Cookie 'username' ada. Isinya : " . htmlspecialchars($_COOKIE['username']) . "</h1>";
} else {
    echo "<h1>Cookie 'username' TIDAK ada.</h1>";
}

// Memeriksa cookie 'namalengkap'
if (isset($_COOKIE['namalengkap'])) {
    // Perbaikan: Menambahkan htmlspecialchars untuk keamanan dan menutup tag <h1>
    echo "<h1>Cookie 'namalengkap' ada. Isinya : " . htmlspecialchars($_COOKIE['namalengkap']) . "</h1>";
} else {
    echo "<h1>Cookie 'namalengkap' TIDAK ada.</h1>";
}

// Perbaikan: Menyambung teks string HTML yang terputus agar rapi di browser
echo "<h2>Klik <a href='cookie1.php'>di sini</a> untuk penciptaan cookies</h2>";
echo "<h2>Klik <a href='cookie3.php'>di sini</a> untuk penghapusan cookies</h2>";
?>
