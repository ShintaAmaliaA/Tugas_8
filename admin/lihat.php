<!DOCTYPE html>
<html>
<head>
    <title>Lihat Data Peserta Didik</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSB Online | Administrator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE81JT3GXWE0ngsV7Zt27NXFoaoApmYm811uXoPkF03wJ8ERdknLPHO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="content">
        <h2>Lihat Peserta Didik</h2>
        <div class="box">
            <table class="table-data" border="0">
                <thead>
                    <tr>
                        <td>NO</td>
                        <td>Jenis Pendaftaran</td>
                        <td>Tahun Ajaran</td>
                        <td>No Peserta Ujian</td>
                        <td>Apakah Pernah PAUD</td>
                        <td>Apakah Pernah TK</td>
                        <td>No SKHUN</td>
                        <td>Hobi</td>
                        <td>Cita-cita</td>
                        <td></td>
                    </tr>
                </thead>
            </table>
        </div>

        <div class="box">
            <table class="table-data" border="0">
                <thead>
                    <tr>
                        <td>Nama</td>
                        <td>Jenis Kelamin</td>
                        <td>NISN</td>
                        <td>NIK</td>
                        <td>Tanggal Lahir</td>
                        <td>Agama</td>
                        <td>Berkebutuhan Khusus</td>
                        <td>Alamat Jalan</td>
                        <td>RT</td>
                        <td>RW</td>
                        <td>Dusun</td>
                        <td>Kelurahan/Desa</td>
                        <td>Kecamatan</td>
                        <td>Kode POS</td>
                        <td>Tempat Tinggal</td>
                        <td>Transportasi</td>
                        <td>No HP</td>
                        <td>Email</td>
                        <td>Penerima KPS/KKS/PKH/KIP</td>
                        <td>No KPS/KKS/PKH/KIP</td>
                        <td>Kewarganegaraan</td>
                        <td>Negara</td>
                        <td></td>
                    </tr>
                </thead>
            </table>
        </div>

        <div class="box">
            <table class="table-data" border="0">
                <thead>
                    <tr>
                        <td>Nama Ayah Kandung</td>
                        <td>Tahun Lahir</td>
                        <td>Pendidikan</td>
                        <td>Pekerjaan</td>
                        <td>Penghasilan Bulan</td>
                        <td>Berkebutuhan Khusus</td>
                        <td></td>
                    </tr>
                </thead>
     <tbody>
        <?php
          // membuat koneksi ke database
            // membuat koneksi ke database
        $host = "localhost";
        $user = "root";
        $password = "";
        $dbname = "praktikum8";
        $koneksi = mysqli_connect($host, $user, $password, $dbname);

        // memeriksa apakah koneksi berhasil dibuat
        if (!$koneksi) {
          die("Koneksi gagal: " . mysqli_connect_error());
        }
        $query = "SELECT registrasi.jenis_pendaftaran, registrasi.tahun_ajaran, registrasi.noPesertaUjian, registrasi.apakah_pernah_paud, registrasi.apakah_pernah_tk, registrasi.noSKHUN, registrasi.noIJAZA, registrasi.hobi, registrasi.citaCita, data_pribadi.nama, data_pribadi.jenis_kelamin, data_pribadi.nisn, data_pribadi.nik, data_pribadi.tempat_lahir, data_pribadi.tanggal_lahir, data_pribadi.agama, data_pribadi.berkebutuhan_khusus, data_pribadi.alamat_jalan, data_pribadi.rt, data_pribadi.rw, data_pribadi.nama_dusun, data_pribadi.nama_kelurahan_desa, data_pribadi.kecamatan, data_pribadi.kode_pos, data_pribadi.tempat_tinggal, data_pribadi.moda_transportasi, data_pribadi.nomor_hp, data_pribadi.email, data_pribadi.penerima_kip, data_pribadi.no_kip, data_pribadi.kewarganegaraan, data_pribadi.negara, ayah_kandung.nama AS nama_ayah, ayah_kandung.tahun_lahir AS tahun_lahir_ayah, ayah_kandung.pendidikan AS pendidikan_ayah, ayah_kandung.pekerjaan AS pekerjaan_ayah, ayah_kandung.penghasilan_bulan AS penghasilan_bulan_ayah, ayah_kandung.berkebutuhan_khusus AS berkebutuhan_khusus_ayah, ibu_kandung.nama AS nama_ibu, ibu_kandung.tahun_lahir AS tahun_lahir_ibu, ibu_kandung.pendidikan AS pendidikan_ibu, ibu_kandung.pekerjaan AS pekerjaan_ibu, ibu_kandung.penghasilan_bulan AS penghasilan_bulan_ibu, ibu_kandung.berkebutuhan_khusus AS berkebutuhan_khusus_ibu
          FROM data_pribadi
          JOIN registrasi ON data_pribadi.id = registrasi.id";


          $result = mysqli_query($koneksi, $query);

          // menampilkan data pegawai ke dalam tabel
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<th>" . $row["jenis_pendaftaran"] . "</th>";
            echo "<td>" . $row["tahun_ajaran"] . "</td>";
            echo "<td>" . $row["noPesertaUjian"] . "</td>";
            echo "<td>" . $row["jenis_kelamin"] . "</td>";
            echo "<td>" . $row["apakah_pernah_paud"] . "</td>";
            echo "<td>" . $row["apakah_pernah_tk"] . "</td>";
            echo "<td>" . $row["noPesertaUjian"] . "</td>";
            echo "<td>" . $row["noSKHUN"] . "</td>";
            echo "<td>" . $row["noIJAZA"] . "</td>";
            echo "<td>
              <a href='lihat.php?id=".$row['id']."'>Ubah</a>
           </td>";
            echo "</tr>";
          }
            // menutup koneksi ke database
             mysqli_close($koneksi);
            ?>
          </tbody>
            </table>
        </div>      
</section>
                    
</body>
</html>