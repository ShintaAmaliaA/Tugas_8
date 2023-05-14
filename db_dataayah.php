<?php
session_start();
include 'koneksi.php';

// Buat koneksi ke database (gunakan koneksi.php sesuai dengan pengaturan Anda)
$koneksi = new mysqli("localhost", "root", "", "praktikum8");

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

// Membuat tabel ayah_kandung
$sql = "CREATE TABLE ayah_kandung (
	id int(10) NOT NULL,
    nama VARCHAR(255) NOT NULL,
    tahun_lahir YEAR,
    pendidikan VARCHAR(50),
    pekerjaan VARCHAR(50),
    penghasilan_bulan INT(1),
    berkebutuhan_khusus VARCHAR(50)
)";

if ($koneksi->query($sql) === TRUE) {
    echo "Tabel ayah_kandung berhasil dibuat.";
} else {
    echo "Terjadi kesalahan saat membuat tabel: " . $koneksi->error;
}

$koneksi->close();
?>
