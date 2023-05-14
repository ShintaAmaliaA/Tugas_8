<?php
session_start();

include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSB Online | Administrator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE81JT3GXWE0ngsV7Zt27NXFoaoApmYm811uXoPkF03wJ8ERdknLPHO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
<form action="simpan1.php" method="POST">
    <section class="content">
        <h2>Registrasi Peserta Didik</h2>
        <div class="box">
            <table class="table-data" border="0">
                <p>Tanggal : <?php echo date('d F Y'); ?></p>
                <tr>
                    <td>Jenis Pendaftaran</td>
                    <td>:</td>
                    <td>
                        <div class="mt-2">
                            <select class="form-control" name="jenis_pendaftaran">
                                <option value="baru">Siswa Baru</option>
                                <option value="pindahan">Siswa Pindahan</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Masuk Sekolah</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tahun_ajaran">
                    </td>
                </tr>
                <tr>
                    <td>NIS</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nis" class="form-control" placeholder="Masukkan NIS">
                    </td>
                </tr>
                <tr>
                    <td>Nomor Peserta Ujian</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="noPesertaUjian" class="form-control" placeholder="Masukkan noPesertaUjian">
                        <br><span class="input-description" style="font-size: 12px;">Nomor peserta ujian adalah 20 digit yang tertera dalam sertifikat <span style="color: red;">SKHUN SD</span>, diisi bagi peserta didik jenjang SMP</span>
                    </td>
                </tr>
                <tr>
                    <td>Apakah pernah PAUD</td>
                    <td>:</td>
                    <td>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="apakah_pernah_paud" value="ya" checked> Ya
                            </label>
                            <label class="btn btn-secondary">
                                <input type="radio" name="apakah_pernah_paud" value="tidak"> Tidak
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Apakah pernah TK</td>
                    <td>:</td>
                    <td>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="apakah_pernah_tk" value="ya" checked> Ya
                            </label>
                            <label class="btn btn-secondary">
                                <input type="radio" name="apakah_pernah_tk" value="tidak"> Tidak
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>No. Seri SKHUN sebelumnya</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="noSKHUN" class="form-control" placeholder="Masukkan noSKHUN">
                    </td>
                </tr>
                 <tr>
                    <td>No. Seri ijaza sebelumnya</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="noIJAZA" class="form-control" placeholder="Masukkan noIJAZA">
                    </td>
                </tr>               
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td>
                        <select name="hobi" class="form-control">
                            <option value="olahraga">Olahraga</option>
                            <option value="kesenian">Kesenian</option>
                            <option value="membaca">Membaca</option>
                            <option value="menulis">Menulis</option>
                            <option value="traveling">Traveling</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Cita-cita</td>
                    <td>:</td>
                    <td>
                        <select name="citaCita" class="form-control">
                            <option value="pns">PNS</option>
                            <option value="tni/polri">TNI/POLRI</option>
                            <option value="guru/dosen">Guru/Dosen</option>
                            <option value="dokter">Dokter</option>
                            <option value="politikus">Politikus</option>
                            <option value="wiraswasta">Wiraswasta</option>
                            <option value="seni">Seni/Lukis/Artis/sejenisnya</option>
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
</form>
</body>
</html>
