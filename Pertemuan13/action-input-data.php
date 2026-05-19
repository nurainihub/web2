<?php
// 1. Cek apakah tombol Submit telah diklik
if ($_POST['Submit'] == "Submit") {
    
    // Mengambil data yang dikirim dari form
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nama         = $_POST['nama'];
    $jurusan      = $_POST['jurusan'];
    $alamat       = $_POST['alamat'];
    $telepon      = $_POST['telepon'];
    
    // 2. Validasi: Cek apakah ada data yang kosong
    if (empty($id_mahasiswa) || empty($nama) || empty($alamat) || empty($telepon)) {
        ?>
        <script language="JavaScript">
            alert('Data Harap Dilengkapi!');
            document.location='download-script-form-input-data.php';
        </script>
        <?php
    } 
    else {
        // Menyisipkan file koneksi database database
        include "../../koneksi-tutor.php";
        
        // 3. Validasi: Cek apakah NIM sudah terdaftar di database
        $query_cek = "SELECT id_mahasiswa FROM mahasiswa WHERE id_mahasiswa='$id_mahasiswa'";
        $cek       = mysql_num_rows(mysql_query($query_cek));
        
        if ($cek > 0) {
            ?>
            <script language="JavaScript">
                alert('NIM sudah dipakai!, silahkan ganti NIM yang lain');
                document.location='download-script-form-input-data.php';
            </script>
            <?php
        } 
        else {
            // 4. Proses Insert: Memasukkan data baru ke tabel mahasiswa
            $input = "INSERT INTO mahasiswa (id_mahasiswa, nama, jurusan, alamat, telepon) 
                      VALUES ('$id_mahasiswa', '$nama', '$jurusan', '$alamat', '$telepon')";
            
            $query_input = mysql_query($input);
            
            if ($query_input) {
                // Jika proses input berhasil
                ?>
                <script language="JavaScript">
                    alert('Input Data Mahasiswa Berhasil');
                    document.location='download-script-form-input-data.php';
                </script>
                <?php
            } 
            else {
                // Jika proses input gagal
                echo "Input Data Mahasiswa Gagal!, Silahkan diulangi!";
            }
            
            // Tutup koneksi engine MySQL
            mysql_close($Open);
        }
    }
}
?>