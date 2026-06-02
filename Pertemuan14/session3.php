<?php
/****************************************************
Halaman ini merupakan halaman logout, dimana kita menghapus session yang ada.
*****************************************************/
session_start();

if (isset($_SESSION['login'])) {
    // Perbaikan: Kosongkan array session, jangan unset($_SESSION) langsung
    $_SESSION = array();
    
    // Hancurkan session di server
    session_destroy();
    
    // Menampilkan pesan logout
    echo "<h1>Anda sudah berhasil LOGOUT</h1>";
    echo "<h2>Klik <a href='session1.php'>di sini</a> untuk LOGIN kembali</h2>";  
    echo "<h2>Anda sekarang tidak bisa masuk ke halaman <a href='session2.php'>session2.php</a> lagi</h2>";
} else {
    // Antisipasi jika pengguna langsung membuka halaman ini tanpa login
    header("Location: session1.php");
    exit();
}
?>
