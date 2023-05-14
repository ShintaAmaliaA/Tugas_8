<?php
session_start();
include 'koneksi.php';

// Melakukan koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "praktikum8");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    $nama = $_POST['nama'];
    $thnLahir = $_POST['thnLahir'];
    $pendidikan = $_POST['pendidikan'];
    $pekerjaan = $_POST['pekerjaan'];
    $penghasilanBulan = $_POST['penghasilanBulan'];
    $berkebutuhanKhusus = $_POST['berkebutuhanKhusus'];

    // Menyiapkan pernyataan SQL untuk menyimpan data
    $sql = "INSERT INTO ibu_kandung (nama, tahun_lahir, pendidikan, pekerjaan, penghasilan_bulan, berkebutuhan_khusus) VALUES ('$nama', '$thnLahir', '$pendidikan', '$pekerjaan', '$penghasilanBulan', '$berkebutuhanKhusus')";

    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil disimpan.";
        exit();
    } else {
        echo "Terjadi kesalahan saat menyimpan data: " . mysqli_error($koneksi);
    }
}
?>
