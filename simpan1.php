<?php
session_start();

include 'koneksi.php';
$koneksi = mysqli_connect("localhost", "root", "", "praktikum8");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Proses simpan data ke dalam tabel "registrasi"
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jenis_pendaftaran = $_POST["jenis_pendaftaran"];
    $tahun_ajaran = $_POST["tahun_ajaran"];
    $noPesertaUjian = $_POST["noPesertaUjian"];
    $apakah_pernah_paud = $_POST["apakah_pernah_paud"];
    $apakah_pernah_tk = $_POST["apakah_pernah_tk"];
    $noSKHUN = $_POST["noSKHUN"];
    $noIJAZA = $_POST["noIJAZA"];
    $hobi = $_POST["hobi"];
    $citaCita = $_POST["citaCita"];

    // Query untuk menyimpan data ke dalam tabel
    $query = "INSERT INTO registrasi (jenis_pendaftaran, tahun_ajaran, noPesertaUjian, apakah_pernah_paud, apakah_pernah_tk, noSKHUN, noIJAZA, hobi, citaCita)
              VALUES ('$jenis_pendaftaran', '$tahun_ajaran', '$noPesertaUjian', '$apakah_pernah_paud', '$apakah_pernah_tk', '$noSKHUN', '$noIJAZA', '$hobi', '$citaCita')";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika simpan data berhasil, bisa tambahkan tindakan atau pesan yang diinginkan
        echo "Data berhasil disimpan.";
        // Mengarahkan ke halaman selanjutnya setelah 3 detik
        header("refresh:3; url=dataPribadi.php");
    } else {
        // Jika simpan data gagal, bisa tambahkan tindakan atau pesan yang diinginkan
        echo "Terjadi kesalahan saat menyimpan data: " . mysqli_error($koneksi);
    }
}

// Menutup koneksi database
mysqli_close($koneksi);
?>
