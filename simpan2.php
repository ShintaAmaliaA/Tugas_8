<?php
session_start();
include 'koneksi.php';

// Buat koneksi ke database (gunakan koneksi.php sesuai dengan pengaturan Anda)
$koneksi = mysqli_connect("localhost", "root", "", "praktikum8");
// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

// Tangkap data dari formulir
$nama = $_POST['nama'];
$jenisKelamin = $_POST['jenisKelamin'];
$nisn = $_POST['nisn'];
$nik = $_POST['nik'];
$tempatLahir = $_POST['tempatLahir'];
$tanggalLahir = $_POST['tglLahir'];
$agama = $_POST['agama'];
$berkebutuhanKhusus = $_POST['berkebutuhanKhusus'];
$alamatJalan = $_POST['jalan'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$namaDusun = $_POST['dusun'];
$namaKelurahanDesa = $_POST['desa'];
$kecamatan = $_POST['kecamatan'];
$kodePos = $_POST['pos'];
$tempatTinggal = $_POST['tinggal'];
$modaTransportasi = $_POST['transportasi'];
$nomorHP = $_POST['noHP'];
$email = $_POST['email'];
$penerimaKIP = $_POST['penerimah_KIP'];
$noKIP = $_POST['noKIP'];
$kewarganegaraan = $_POST['kewarganegaraan'];
$negara = $_POST['negara'];

// Query untuk memasukkan data ke tabel "data_pribadi"
$sql = "INSERT INTO data_pribadi (nama, jenis_kelamin, nisn, nik, tempat_lahir, tanggal_lahir, agama, berkebutuhan_khusus, alamat_jalan, rt, rw, nama_dusun, nama_kelurahan_desa, kecamatan, kode_pos, tempat_tinggal, moda_transportasi, nomor_hp, email, penerima_kip, no_kip, kewarganegaraan, negara)
        VALUES ('$nama', '$jenisKelamin', '$nisn', '$nik', '$tempatLahir', '$tanggalLahir', '$agama', '$berkebutuhanKhusus', '$alamatJalan', '$rt', '$rw', '$namaDusun', '$namaKelurahanDesa', '$kecamatan', '$kodePos', '$tempatTinggal', '$modaTransportasi', '$nomorHP', '$email', '$penerimaKIP', '$noKIP', '$kewarganegaraan', '$negara')";

// Jalankan query untuk memasukkan data
if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil disimpan.";
    // Mengarahkan ke halaman selanjutnya setelah 3 detik
    header("refresh:3; url=dataAyah.php");
    exit(); // Memastikan tidak ada output tambahan sebelum redirect
} else {
    echo "Terjadi kesalahan saat menyimpan data: " . $koneksi->error;
}


// Tutup koneksi
$koneksi->close();
?>
