<?php
function cekUmur($umur) {
    if ($umur < 0) {
        // Sengaja melempar error jika umur minus
        throw new Exception("Umur tidak valid (tidak boleh minus).");
    }
    return "Umur Anda adalah $umur tahun.";
}

try {
    echo cekUmur(-5);
} catch (Exception $e) {
    // Menampilkan pesan error yang kita buat di atas
    echo "Peringatan: " . $e->getMessage();
}
?>