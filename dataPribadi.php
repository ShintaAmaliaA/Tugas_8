<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA PRIBADI</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE81JT3GXWE0ngsV7Zt27NXFoaoApmYm811uXoPkF03wJ8ERdknLPHO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
<form action="simpan2.php" method="POST">
    <section class="content">
        <h2>DATA PRIBADI</h2>
        <div class="box">

            <table class="table-data" border="0">
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
                    </td>
                </tr>
                <tr>
                    <td>Jenis kelamin</td>
                    <td>:</td>
                    <td>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="jenisKelamin" value="lakiLaki" checked> Laki-laki
                            </label>
                            <label class="btn btn-secondary">
                                <input type="radio" name="jenisKelamin" value="perempuan"> Perempuan
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nisn" class="form-control" placeholder="Masukkan NISN">
                    </td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK">
                    </td>
                </tr>  
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempatLahir" class="form-control" placeholder="Masukkan tempatLahir">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tglLahir">
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama" class="form-control">
                            <option value="Islam">islam</option>
                            <option value="Kristen/Protestan">Kristen/Protestan</option>
                            <option value="Katholik">Khatolik</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                            <option value="khongHuChu">Khong Hu Chu</option>
                            <option value="lainnya">Lainnya</option>
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
                <tr>
                    <td>Alamat Jalan</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="jalan" class="form-control" placeholder="Masukkan Alamat Jalan">
                    </td>
                </tr>
                 <tr>
                    <td>RT</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="rt" class="form-control" placeholder="Masukkan RT">
                    </td>
                </tr>                                           
                 <tr>
                    <td>RW</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="rw" class="form-control" placeholder="Masukkan RW">
                    </td>
                </tr> 
                <tr>
                    <td>Nama Dusun</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="dusun" class="form-control" placeholder="Masukkan NamaDusun">
                    </td>
                </tr>
                 <tr>
                    <td>Nama Kelurahan/Desa</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="desa" class="form-control" placeholder="Masukkan Nama Desa">
                    </td>
                </tr>                                            
                 <tr>
                    <td>Kecamatan</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="kecamatan" class="form-control" placeholder="Masukkan Kecamatan">
                    </td>
                </tr> 
                 <tr>
                    <td>Kode Pos</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="pos" class="form-control" placeholder="Masukkan kodePos">
                    </td>
                </tr>
                <tr>
                    <td>Tempat Tinggal</td>
                    <td>:</td>
                    <td>
                        <select name="tinggal" class="form-control">
                            <option value="orangTua">Orang Tua</option>
                            <option value="wali">Wali</option>
                            <option value="kos">Kos</option>
                            <option value="asrama">Asrama</option>
                            <option value="pantiasuhan">Panti Asuhan</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </td>
                </tr>                
                <tr>
                    <td>Moda Transportasi</td>
                    <td>:</td>
                    <td>
                        <select name="transportasi" class="form-control">
                            <option value="jalanKaki">Jalan kaki</option>
                            <option value="kendaraanPribadi">Kendaraan Pribadi</option>
                            <option value="kendaraanUmum">Kendaraan Umum</option>
                            <option value="jemputanSekolah">Jemputan Sekolah</option>
                            <option value="keretaApi">Kereta Api</option>
                            <option value="Ojek">Ojek</option>
                            <option value="perahu">Perahu/Rakit/etek</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </td>
                </tr>   
                <tr>
                    <td>Nomor HP</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="noHP" class="form-control" placeholder="Masukkan Nomor Hp">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="email" class="form-control" placeholder="Masukkan Email">
                    </td>
                </tr>                                            
                <tr>
                    <td>Penerimah KPS/PKH/KIP</td>
                    <td>:</td>
                    <td>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="penerimah_KIP" value="ya" checked> Ya
                            </label>
                            <label class="btn btn-secondary">
                                <input type="radio" name="penerimah_KIP" value="tidak"> Tidak
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>No. KPS/KKS/PKH/KIP</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="noKIP" class="form-control" placeholder="Masukkan No. KPS/KKS/PKH/KIP">
                        <br><span class="input-description" style="font-size: 12px;"><i>*Apabila menerima</i></span>
                    </td>
                </tr>
                <tr>
                  <td>Kewarganegaraan</td>
                  <td>:</td>
                  <td>
                    <div class="btn-group" data-toggle="buttons">
                      <label class="btn btn-primary active">
                        <input type="radio" name="kewarganegaraan" value="ya" checked> Indonesia
                      </label>
                      <label class="btn btn-secondary">
                        <input type="radio" name="kewarganegaraan" value="tidak" onclick="toggleNegaraField()"> Asing (WNA)
                      </label>
                    </div>
                  </td>
                </tr>

                <!-- Tambahkan elemen input untuk menampilkan nama negara -->
                <tr id="negaraField" style="display: none;">
                  <td>Nama Negara</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="negara" placeholder="Masukkan nama negara">
                  </td>
                </tr>

                <script>
                  function toggleNegaraField() {
                    var negaraField = document.getElementById("negaraField");
                    var radio = document.querySelector('input[name="kewarganegaraan"]:checked');

                    if (radio.value === "tidak") {
                      negaraField.style.display = "table-row";
                    } else {
                      negaraField.style.display = "none";
                    }
                  }
                </script>
                               
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
