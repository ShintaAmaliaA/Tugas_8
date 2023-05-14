<!DOCTYPE html>
<html>
<head>
    <title>Data Peserta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE81JT3GXWE0ngsV7Zt27NXFoaoApmYm811uXoPkF03wJ8ERdknLPHO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="logout.php">Logout</a>
</nav>
<div class="tabel">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>NISN</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Jenis Pendaftaran</th>
          <th>Tahun Ajaran</th>
          <th>No Peserta Ujian</th>
          <th>No SKHUN</th>
          <th>No IJAZA</th>
          <th></th>
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

          $query = "SELECT data_pribadi.nisn, data_pribadi.nama, data_pribadi.jenis_kelamin, registrasi.jenis_pendaftaran, registrasi.tahun_ajaran, registrasi.noPesertaUjian, registrasi.noSKHUN, registrasi.noIJAZA
          FROM data_pribadi
          JOIN registrasi ON data_pribadi.id= registrasi.id";


          $result = mysqli_query($koneksi, $query);

          // menampilkan data pegawai ke dalam tabel
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["nisn"] . "</td>";
            echo "<td>" . $row["nama"] . "</td>";
            echo "<td>" . $row["jenis_kelamin"] . "</td>";
            echo "<td>" . $row["jenis_pendaftaran"] . "</td>";
            echo "<td>" . $row["tahun_ajaran"] . "</td>";
            echo "<td>" . $row["noPesertaUjian"] . "</td>";
            echo "<td>" . $row["noSKHUN"] . "</td>";
            echo "<td>" . $row["noIJAZA"] . "</td>";
            echo "<td>
           </td>";
            echo "</tr>";
          }
            // menutup koneksi ke database
             mysqli_close($koneksi);
            ?>
          </tbody>
        </table>
    </div>
  </div>
</body>
</html>