<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA AYAH KANDUNG</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE81JT3GXWE0ngsV7Zt27NXFoaoApmYm811uXoPkF03wJ8ERdknLPHO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
<form action="simpan3.php" method="POST">
    <section class="content">
        <h2>DATA AYAH KANDUNG</h2>
        <div class="box">

            <table class="table-data" border="0">
                <tr>
                    <td>Nama Ayah Kandung</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
                    </td>
                </tr>
                    <td>Tahun Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="year" name="thnLahir">
                    </td>
                </tr>
                <tr>
                    <td>Pendidikan</td>
                    <td>:</td>
                    <td>
                        <select name="pendidikan" class="form-control">
                            <option value="tdkSekolah">Tidak Sekolah</option>
                            <option value="putusSD">Putus SD</option>
                            <option value="SD">SD Sederajat</option>
                            <option value="SMP">SMP Sederajat</option>
                            <option value="SMA">SMA Sederajat</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4/S1">D4/S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>
                        <select name="pekerjaan" class="form-control">
                            <option value="tdkBekerja">Tidak Bekerja</option>
                            <option value="nelayan">Nelayan</option>
                            <option value="Petani">Petani</option>
                            <option value="Peternak">Peternak</option>
                            <option value="pns">PNS/TNI/POLRI</option>
                            <option value="karyawanSwasta">Karyawan Swasta</option>
                            <option value="pedagangKecil">Pedagang Kecil</option>
                            <option value="pedagangBesar">Pedagang Besar</option>
                            <option value="wiraswasta">Wiraswasta</option>
                            <option value="buruh">Buruh</option>
                            <option value="pensiunan">Pensiunan</option>
                            <option value="pensiunan">Pensiunan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Penghasilan Perbulan</td>
                    <td>:</td>
                    <td>
                        <select name="penghasilanBulan" class="form-control">
                            <option value="1"><500.000</option>
                            <option value="2"><500.000-999.999</option>
                            <option value="3">1 juta-1.999.999</option>
                            <option value="4">2 juta-4.999.999</option>
                            <option value="5">5 juta-20 juta</option>
                            <option value="6">lebih dari 20juta</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Berkebutuhan Khusus</td>
                    <td>:</td>
                    <td>
                        <select name="berkebutuhanKhusus" class="form-control">
                            <option value="tidak">Tidak</option>
                            <option value="Netra">Netra/Protestan</option>
                            <option value="Rungu">Rungu</option>
                            <option value="grahitaRingan">Grahita Ringan</option>
                            <option value="grahitaSedang">Grahita Sedang</option>
                            <option value="daksaRingan">Daksa Ringan</option>
                            <option value="daksasedang">Daksa sedang</option>
                            <option value="laras">Laras </option>
                            <option value="Wicara">Wicara</option>
                            <option value="TunaGanda">Tuna Ganda </option>
                            <option value="HiperAktif">Di</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </td>
                </tr>
                                
            </table>
        </div>
        <button type="submit" class="btn btn-primary" onclick="tampilkanPesan()">NEXT</button>
        <script>
        function tampilkanPesan() {
          var konfirmasi = confirm("Apakah Data yang Dimasukkan Sudah Benar?");
          if (konfirmasi) {
            alert("Data berhasil disimpan.");
          } else {
            alert("Silakan periksa kembali data Anda.");
          }
        }
        </script>
    </section>
</body>
</html>
