<?php
session_start();
include 'koneksi.php';

// Buat koneksi ke database (gunakan koneksi.php sesuai dengan pengaturan Anda)
$koneksi = new mysqli("localhost", "root", "", "praktikum8");

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

// Query untuk membuat tabel "registrasi"
$sql = "CREATE TABLE IF NOT EXISTS registrasi (
    id int(10) NOT NULL,
    jenis_pendaftaran ENUM('baru', 'pindahan') NOT NULL,
    tahun_ajaran DATE NOT NULL,
    noPesertaUjian int(50) NOT NULL,
    apakah_pernah_paud ENUM('ya', 'tidak') NOT NULL,
    apakah_pernah_tk ENUM('ya', 'tidak') NOT NULL,
    noSKHUN int(50) NOT NULL,
    noIJAZA int(50) NOT NULL,
    hobi VARCHAR(200) NOT NULL,
    citaCita VARCHAR(200) NOT NULL
)";

// Jalankan query untuk membuat tabel
if ($koneksi->query($sql) === TRUE) {
    echo "Tabel registrasi berhasil dibuat.";
} else {
    echo "Terjadi kesalahan saat membuat tabel: " . $koneksi->error;
}

// Tutup koneksi
$koneksi->close();
?>
