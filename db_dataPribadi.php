<?php
session_start();
include 'koneksi.php';

// Buat koneksi ke database (gunakan koneksi.php sesuai dengan pengaturan Anda)
$koneksi = new mysqli("localhost", "root", "", "praktikum8");

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

// Query untuk membuat tabel "data_pribadi"
$sql = "CREATE TABLE IF NOT EXISTS data_pribadi (
    id int(10) NOT NULL,
    nama VARCHAR(255) NOT NULL,
    jenis_kelamin ENUM('lakiLaki', 'perempuan') NOT NULL,
    nisn VARCHAR(10) NOT NULL,
    nik VARCHAR(16) NOT NULL,
    tempat_lahir VARCHAR(255) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    agama VARCHAR(255) NOT NULL,
    berkebutuhan_khusus VARCHAR(255) NOT NULL,
    alamat_jalan VARCHAR(255) NOT NULL,
    rt VARCHAR(3) NOT NULL,
    rw VARCHAR(3) NOT NULL,
    nama_dusun VARCHAR(255) NOT NULL,
    nama_kelurahan_desa VARCHAR(255) NOT NULL,
    kecamatan VARCHAR(255) NOT NULL,
    kode_pos VARCHAR(5) NOT NULL,
    tempat_tinggal VARCHAR(255) NOT NULL,
    moda_transportasi VARCHAR(255) NOT NULL,
    nomor_hp VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    penerima_kip ENUM('ya', 'tidak') NOT NULL,
    no_kip VARCHAR(255) NOT NULL,
    kewarganegaraan ENUM('ya', 'tidak') NOT NULL,
    negara VARCHAR(255)
)";

// Jalankan query untuk membuat tabel
if ($koneksi->query($sql) === TRUE) {
    echo "Tabel data_pribadi berhasil dibuat.";
} else {
    echo "Terjadi kesalahan saat membuat tabel: " . $koneksi->error;
}

// Tutup koneksi
$koneksi->close();
?>
