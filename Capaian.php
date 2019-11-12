<?php
include_once  "SQL.php";
include_once "TableController.php";
$db = new SQL();
$con = new TableController($db);
?>

<head>
    <title>Capaian</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="capaian.css">
</head>
<style>
.center{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
    margin-top: 30px;
    margin-bottom: 100px;
}
</style>
<body>
    <div class="judul-block">
        <div class="judul-kontainer">
            <div>
                <img class="unpar-side" src="img/unpar.png" alt="">
            </div>
            <div>
                <h2 style="padding: 10px;">Luaran dan Capaian Tridharma</h2>
            </div>
            <div>
                <img class="if-side" src="img/logoIF.jpg" alt="">
            </div>
        </div>
    </div>
    <div>
        <ul>
            <div style="float: left">
                <?php
                include "Sidebar.php";
                ?>
            </div>
            <div>
                <!--Masukan id div konten kalian sesuai dengan format dibawah-->
                <li><a href="#konten-1" onclick="show('konten-1')">Capaian Pembelajaran</a></li>
                <li><a href="#konten-2" onclick="show('konten-2')">Prestasi Mahasiswa</a></li>
                <li><a href="#konten-3" onclick="show('konten-3')">Efektivitas dan Produktivitas Pendidikan</a></li>
                <li><a href="#konten-4" onclick="show('konten-4')">Daya Saing Lulusan</a></li>
                <li><a href="#konten-5" onclick="show('konten-5')">Kinerja Lulusan</a></li>
                <li><a href="#konten-6" onclick="show('konten-6')">Luaran Penelitian dan PkM Mahasiswa</a></li>
            </div>
        </ul>
    </div>
    <!--Konten Diisi di div dibawah sini, jangan lupa tambahkan kelas "konten" dan idnya masing-masing-->
    <div class="konten" id="konten-1">
        <div>
            <p>Tabel 8.a IPK Lulusan
            </p>
            <p><u>Diisi oleh pengusul dari Program Studi Diploma Tiga</u></p>

            <div>
            <?php
              
              // print_r($con->getTabel3a2_DosenPembimbingUtamaTugasAkhir());
              $res = $con->getLulusanByTS();
              echo "<br>";
              //print_r($res);
              echo "<table>";
              echo "<tr >";
              echo "<th rowspan='2' style='border:solid 2px; border-color:#026bc2; background-color:#026bc2;'>Tahun Lulus</th>";
              echo "<th rowspan='2'style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Jumlah Lulusan</th>";
              echo "<th colspan='3' style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Indeks Prestasi Kumulatif (IPK)</th>";
              echo "</tr>";
              echo "<tr >";
              echo "<th style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Min.</th>";
              echo "<th style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Rata-rata</th>";
              echo "<th style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Maks.</th>";
              echo "</tr>";
              // var_dump($res[0]);
              foreach($res as $tt=>$value){
                  echo "<tr>";
                  echo "<td>".$value[0]['tahunLulus']."</td>";
                  echo "<td>".$value[0]['jumlah']."</td>";

                  $strVal = (string)$value[0]['minIPK'];
                  $dotPos = strpos($strVal, ".", 1);
                  if ($dotPos !== FALSE) {
                      echo "<td>" . substr($strVal, 0, $dotPos) . substr($strVal, $dotPos, $dotPos + 2) . "</td>";
                  } else {
                      echo "<td>" . $strVal . "</td>";
                  }

                  $strVal = (string)$value[0]['rataRata'];
                  $dotPos = strpos($strVal, ".", 1);
                  if ($dotPos !== FALSE) {
                      echo "<td>" . substr($strVal, 0, $dotPos) . substr($strVal, $dotPos, $dotPos + 2) . "</td>";
                  } else {
                      echo "<td>" . $strVal . "</td>";
                  }

                  $strVal = (string)$value[0]['maxIPK'];
                  $dotPos = strpos($strVal, ".", 1);
                  if ($dotPos !== FALSE) {
                      echo "<td>" . substr($strVal, 0, $dotPos) . substr($strVal, $dotPos, $dotPos + 2) . "</td>";
                  } else {
                      echo "<td>" . $strVal . "</td>";
                  }

                
                  echo "</tr>";    
              }
              echo "</table>";
          ?>
            </div>

        </div>
    </div>
    <div class="konten" id="konten-2">
        <div>
            <p>Tabel 8.b.1) Prestasi Akademik </p>
            <div>
                <?php
                // print_r($con->getTabel3a2_DosenPembimbingUtamaTugasAkhir());
                $res = $con->getTabelPrestasiAkademik();
                // print_r($res);
                echo "<br>";
                // print_r($res[0]["NamaDosen"]);
                echo "<table>";
                echo "<tr style='border:solid 2px; border-color:#026bc2;'>";
                echo "<th rowspan='2' style='border:solid 2px; border-color:#026bc2; background-color:#026bc2;'>No</th>";
                echo "<th rowspan='2'style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Nama Kegiatan</th>";
                echo "<th rowspan='2' style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Tahun Perolehan</th>";
                echo "<th colspan='3' style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Tingkat</th>";
                echo "<th rowspan='2' style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Prestasi yang Dicapai</th>";
                echo "</tr>";
                echo "<tr style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>";
                echo "<th style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Lokal</th>";
                echo "<th style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Nasional</th>";
                echo "<th style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Internasional</th>";
                echo "</tr>";
                $i = 1;
                $res1 = $res[0];
                foreach ($res1 as $tt => $value) {
                    echo "<tr>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $value['Kegiatan'] . "</td>";
                    echo "<td>" . $value['Tahun'] . "</td>";
                    if (strtoupper($value['Tingkat']) == 'LOKAL') {
                        echo "<td> <i class='fas fa-check'></i> </td>";
                        echo "<td> &nbsp </td>";
                        echo "<td> &nbsp </td>";
                    } else  if (strtoupper($value['Tingkat']) == 'NASIONAL') {
                        echo "<td> &nbsp </td>";
                        echo "<td> <i class='fas fa-check'></i> </td>";
                        echo "<td> &nbsp </td>";
                    } else  if (strtoupper($value['Tingkat']) == 'INTERNASIONAL') {
                        echo "<td> &nbsp </td>";
                        echo "<td> &nbsp </td>";
                        echo "<td> <i class='fas fa-check'></i> </td>";
                    }
                    echo "<td>" . $value['Prestasi'] . "</td>";
                    echo "</tr>";
                    $i += 1;
                }
                echo "<tr>";
                echo "<td colspan='3'><b>" . $res[1][0]['Jumlah'] . "</b></td>";
                echo "<td ><b>" . ($res[1][0]['Lokal']) . "</b></td>";
                echo "<td ><b>" . ($res[1][0]['Nasional']) . "</b></td>";
                echo "<td ><b>" . ($res[1][0]['Internasional']) . "</b></td>";
                echo "<td ></td>";
                echo "</tr>";
                echo "</table>";
                ?>

            </div>
            <br>
            <br>

            <p>Tabel 8.b.2) Prestasi Non-Akademik </p>

            <div>
                <?php

                // print_r($con->getTabel3a2_DosenPembimbingUtamaTugasAkhir());
                $res = $con->getTabelPrestasiNonAkademik();
                //print_r($res);
                echo "<br>";
                // print_r($res[0]["NamaDosen"]);
                echo "<table>";
                echo "<tr style='border:solid 2px; border-color:#026bc2;'>";
                echo "<th rowspan='2' style='border:solid 2px; border-color:#026bc2; background-color:#026bc2;'>No</th>";
                echo "<th rowspan='2'style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Nama Kegiatan</th>";
                echo "<th rowspan='2' style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Tahun Perolehan</th>";
                echo "<th colspan='3' style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Tingkat</th>";
                echo "<th rowspan='2' style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Prestasi yang Dicapai</th>";
                echo "</tr>";
                echo "<tr style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>";
                echo "<th style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Lokal</th>";
                echo "<th style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Nasional</th>";
                echo "<th style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Internasional</th>";
                echo "</tr>";
                $i = 1;
                $res1 = $res[0];
                foreach ($res1 as $tt => $value) {
                    echo "<tr>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $value['Kegiatan'] . "</td>";
                    echo "<td>" . $value['Tahun'] . "</td>";
                    if (strtoupper($value['Tingkat']) == 'LOKAL') {
                        echo "<td> <i class='fas fa-check'></i> </td>";
                        echo "<td> &nbsp </td>";
                        echo "<td> &nbsp </td>";
                    } else  if (strtoupper($value['Tingkat']) == 'NASIONAL') {
                        echo "<td> &nbsp </td>";
                        echo "<td> <i class='fas fa-check'></i> </td>";
                        echo "<td> &nbsp </td>";
                    } else  if (strtoupper($value['Tingkat']) == 'INTERNASIONAL') {
                        echo "<td> &nbsp </td>";
                        echo "<td> &nbsp </td>";
                        echo "<td> <i class='fas fa-check'></i> </td>";
                    }
                    echo "<td>" . $value['Prestasi'] . "</td>";
                    echo "</tr>";
                    $i += 1;
                }
                echo "<tr>";
                echo "<td colspan='3'><b>" . $res[1][0]['Jumlah'] . "</b></td>";
                echo "<td ><b>" . ($res[1][0]['Lokal']) . "</b></td>";
                echo "<td ><b>" . ($res[1][0]['Nasional']) . "</b></td>";
                echo "<td ><b>" . ($res[1][0]['Internasional']) . "</b></td>";
                echo "<td ></td>";
                echo "</tr>";
                echo "</table>";
                ?>
            </div>

        </div>
    </div>

    <div class="konten" id="konten-3">
        <div>
            <p>Tabel 8.c. Masa Studi Lulusan Program Studi</p>
            <p><u>Diisi oleh pengusul dari Program Studi Diploma Tiga</u></p>

            <div>
                <?php

                // print_r($con->getTabel3a2_DosenPembimbingUtamaTugasAkhir());
                $res = $con->getTabelMasaStudiLulusan();
                echo "<br>";
                // print_r($res[0]["NamaDosen"]);
                echo "<table>";
                echo "<tr >";
                echo "<th rowspan='2' style='border:solid 2px; border-color:#026bc2; background-color:#026bc2;'>Tahun Masuk</th>";
                echo "<th rowspan='2'style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Jumlah Mahasiswa Diterima</th>";
                echo "<th colspan='5' style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Jumlah Mahasiswa yang Lulus pada</th>";
                echo "<th rowspan='2' style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Jumlah s.d. Akhir TS</th>";
                echo "<th rowspan='2' style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Rata-Rata Masa Studi</th>";
                echo "</tr>";
                echo "<tr >";
                echo "<th style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Akhir TS-4</th>";
                echo "<th style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Akhir TS-3</th>";
                echo "<th style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Akhir TS-2</th>";
                echo "<th style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Akhir TS-1</th>";
                echo "<th style='border:solid 2px; border-color:#026bc2;background-color:#026bc2;'>Akhir TS</th>";
                echo "</tr>";
                // var_dump($res[0]);
                foreach ($res[0] as $tt => $value) {
                    echo "<tr>";
                    echo "<td>TS" . $value['ts_tahun_masuk'] . "</td>";
                    echo "<td>" . $value['jumlah_diterima'] . "</td>";
                    echo "<td>" . $value['TS_MIN_4'] . "</td>";
                    echo "<td>" . $value['TS_MIN_3'] . "</td>";
                    echo "<td>" . $value['TS_MIN_2'] . "</td>";
                    echo "<td>" . $value['TS_MIN_1'] . "</td>";
                    echo "<td>" . $value['TS'] . "</td>";
                    echo "<td>" . $value['lulus_sd_TS'] . "</td>";
                    $strVal = (string) $value['rata_rata_Studi'];
                    $dotPos = strpos($strVal, ".", 1);
                    if ($dotPos !== FALSE) {
                        echo "<td>" . substr($strVal, 0, $dotPos) . substr($strVal, $dotPos, $dotPos + 2) . "</td>";
                    } else {
                        echo "<td>" . $strVal . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>

        </div>
    </div>
    <div class="konten" id="konten-4">
    </div>
		<div class="konten" id="konten-5">
             <!-- Tempat Kinerja Lulusan -->
            <div>
                <p>Tabel 8.e.1) Tempat Kerja Lulusan</p> -->
                <table id="tbl-konten">
                    <tr style="background-color: darkgrey;border: 1px solid black">
                        <th style="border: 1px solid black;color: black" rowspan="2">Tahun Lulus</th>
                        <th style="border: 1px solid black;color: black" rowspan="2">Jumlah Lulusan</th>
                        <th style="border: 1px solid black;color: black" rowspan="2">Jumlah Lulusan yang Terlacak</th>
                        <th style="border: 1px solid black;color: black" colspan="3">Jumlah Lulusan Terlacak yang Bekerja berdasarkan Tingkat/Ukuran Tempat Kerja/Berwirausaha</th>
                    </tr>
                    <tr style="background-color: darkgrey;border: 1px solid black;">
                        <th style="border: 1px solid black;color: black">Lokal/Wilayah Berwirausaha tidak Berizin</th>
                        <th style="border: 1px solid black;color: black">Nasional/Berwirausaha Berizin</th>
                        <th style="border: 1px solid black;color: black">Multinasional/Internasional</th>
                    </tr>
                    <tr style="background-color: darkgrey;border: 1px solid black;">
                        <td style="border: 1px solid black;color: black">1</td>
                        <td style="border: 1px solid black;color: black">2</td>
                        <td style="border: 1px solid black;color: black">3</td>
                        <td style="border: 1px solid black;color: black">4</td>
                        <td style="border: 1px solid black;color: black">5</td>
                        <td style="border: 1px solid black;color: black;">6</td>
                    </tr>
                    <tr style="background-color: #ffff;border: 1px solid black;">
                        <td style="border: 1px solid black;color: black">TS-4</td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                    </tr>
                    <tr style="background-color: #ffff;border: 1px solid black;">
                        <td style="border: 1px solid black;color: black">TS-3</td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                    </tr>
                    <tr style="background-color: #ffff;border: 1px solid black;">
                        <td style="border: 1px solid black;color: black">TS-2</td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                    </tr>
                    <tr style="background-color: #ffff;border: 1px solid black;border-top: 2px solid black;">
                        <td style="border: 1px solid black;color: black"><strong>Jumlah</strong></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                    </tr>
                </table>
            </div>
            <br />
            <br />
            <br />
            <br />
            <br />
            <div>
                <table id="tbl-konten">
                    <tr style="background-color: darkgrey;border: 1px solid black">
                        <th style="border: 1px solid black;color: black" rowspan="2">No.</th>
                        <th style="border: 1px solid black;color: black" rowspan="2">Jenis Kemampuan</th>
                        <th style="border: 1px solid black;color: black" colspan="4">Tingkat Kepuasan Pengguan (%)</th>
                        <th style="border: 1px solid black;color: black" rowspan="2">Rencana Tindak Lanjut oleh UPPS/PS</th>
                    </tr>
                    <tr style="background-color: darkgrey;border: 1px solid black;">
                        <th style="border: 1px solid black;color: black">Sangat Baik</th>
                        <th style="border: 1px solid black;color: black">Baik</th>
                        <th style="border: 1px solid black;color: black">Cukup</th>
                        <th style="border: 1px solid black;color: black">Kurang</th>
                    </tr>
                    <tr style="background-color: darkgrey;border: 1px solid black;">
                        <td style="border: 1px solid black;color: black">1</td>
                        <td style="border: 1px solid black;color: black">2</td>
                        <td style="border: 1px solid black;color: black">3</td>
                        <td style="border: 1px solid black;color: black">4</td>
                        <td style="border: 1px solid black;color: black">5</td>
                        <td style="border: 1px solid black;color: black">6</td>
                        <td style="border: 1px solid black;color: black">7</td>
                    </tr>
                    <tr style="background-color: #ffff;border: 1px solid black;">
                        <td style="border: 1px solid black;color: black">1</td>
                        <td style="border: 1px solid black;color: black">Etika</td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                    </tr>
                    <tr style="background-color: #ffff;border: 1px solid black;">
                        <td style="border: 1px solid black;color: black">2</td>
                        <td style="border: 1px solid black;color: black">Keahlian pada bidang ilmu(kompetensi utama)</td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                    </tr>
                    <tr style="background-color: #ffff;border: 1px solid black;">
                        <td style="border: 1px solid black;color: black">3</td>
                        <td style="border: 1px solid black;color: black">Kemampuan berbahas asing</td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                    </tr>
                    <tr style="background-color: #ffff;border: 1px solid black">
                        <td style="border: 1px solid black;color: black">4</td>
                        <td style="border: 1px solid black;color: black">Penggunaan teknologi informasi</td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                    </tr>
                    <tr style="background-color: #ffff;border: 1px solid black">
                        <td style="border: 1px solid black;color: black">5</td>
                        <td style="border: 1px solid black;color: black">Kemampuan berkomunikasi</td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                    </tr>
                    <tr style="background-color: #ffff;border: 1px solid black">
                        <td style="border: 1px solid black;color: black">6</td>
                        <td style="border: 1px solid black;color: black">Kerjasama tim</td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                    </tr>
                    <tr style="background-color: #ffff;border: 1px solid black">
                        <td style="border: 1px solid black;color: black">7</td>
                        <td style="border: 1px solid black;color: black">Pengembangan diri</td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                    </tr>
                    <tr style="background-color: #ffff;border: 1px solid black;border-top: 2px solid black;">
                        <td style="border: 1px solid black;color: black"  colspan="2"><strong>Jumlah</strong></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black"></td>
                        <td style="border: 1px solid black;color: black;background-color: darkgrey"></td>
                    </tr>
                </table>
            </div>
        <script>
            close();
            function close() {
                var x = document.getElementsByClassName("konten");
                for (var i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
            }
        }
        function show(id) {
            close();
            document.getElementById(id).style.display = "block";
        }
    </script>
</body>