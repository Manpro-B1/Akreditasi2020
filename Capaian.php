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
            <div>
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
            <img src="./img/tridharma-5.6/jumlahlulusan.JPG" class="center" alt="">
            <img src="./img/tridharma-5.6/ipkmin.JPG" class="center" alt="">
            <img src="./img/tridharma-5.6/ratarata.JPG" class="center" alt="">
            <img src="./img/tridharma-5.6/maksipk.JPG" class="center" alt="">
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
                        echo "<td>V</td>";
                        echo "<td> &nbsp </td>";
                        echo "<td> &nbsp </td>";
                    } else  if (strtoupper($value['Tingkat']) == 'NASIONAL') {
                        echo "<td> &nbsp </td>";
                        echo "<td>V</td>";
                        echo "<td> &nbsp </td>";
                    } else  if (strtoupper($value['Tingkat']) == 'INTERNASIONAL') {
                        echo "<td> &nbsp </td>";
                        echo "<td> &nbsp </td>";
                        echo "<td>V</td>";
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
            <img src="./img/tridharma-5.6/jumlahprestasiakademik.JPG" class="center" alt="">
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
                        echo "<td>V</td>";
                        echo "<td> &nbsp </td>";
                        echo "<td> &nbsp </td>";
                    } else  if (strtoupper($value['Tingkat']) == 'NASIONAL') {
                        echo "<td> &nbsp </td>";
                        echo "<td>V</td>";
                        echo "<td> &nbsp </td>";
                    } else  if (strtoupper($value['Tingkat']) == 'INTERNASIONAL') {
                        echo "<td> &nbsp </td>";
                        echo "<td> &nbsp </td>";
                        echo "<td>V</td>";
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
            <img src="./img/tridharma-5.6/jumlahprestasinon.JPG" class="center" alt="">

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
            <img src="./img/tridharma-5.6/perbandinganditerimalulus.JPG" class="center" alt="">
            <img src="./img/tridharma-5.6/rataratastudi.JPG" class="center" alt="">

        </div>
    </div>
    <div class="konten" id="konten-4">
        <div style="text-align:center; font-weight: bold; font-size: 17px">
            <p>Berikut merupakan tabel informasi yang diisi oleh pengusul dari Program Studi pada program Diploma
                Tiga/Sarjana/Sarjana Terapan.</p>
        </div>

        <!-- Diploma 3 -->
        <div>
            <p>Tabel 8.d.1) Waktu Tunggu Lulusan</p>
            <p><u>Diisi oleh pengusul dari Program Studi Diploma Tiga</u></p>
            <table id="tbl-konten">
                <tr style="background-color: darkgrey">
                    <th rowspan="2">Tahun Lulus</th>
                    <th rowspan="2">Jumlah Lulusan</th>
                    <th rowspan="2">Jumlah Lulusan yang Terlacak</th>
                    <th rowspan="2">Jumlah Lulusan yang Dipesan Sebelum Lulus</th>
                    <th colspan="3">Jumlah Lulusan dengan Waktu Tunggu Mendapatkan Pekerjaan</th>
                </tr>
                <tr style="background-color: darkgrey">
                    <th>WT &lt; 3 bulan</th>
                    <th>3 &le; WT &le; 6 bulan</th>
                    <th>WT &gt; 6 bulan</th>
                </tr>
                <tr style="background-color: darkgrey">
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                </tr>
                <tr style="background-color: #ffff">
                    <td>TS-4</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="background-color: #ffff">
                    <td>TS-3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="background-color: #ffff">
                    <td>TS-2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>

        <br />
        <br />
        <br />

        <!-- Sarjana -->
        <div>
            <p>Tabel 8.d.2) Waktu Tunggu Lulusan</p>
            <p><u>Diisi oleh pengusul dari Program Studi Sarjana</u></p>
            <table id="tbl-konten">
                <tr style="background-color: darkgrey">
                    <th rowspan="2">Tahun Lulus</th>
                    <th rowspan="2">Jumlah Lulusan</th>
                    <th rowspan="2">Jumlah Lulusan yang Terlacak</th>
                    <th rowspan="2">Jumlah Lulusan yang Dipesan Sebelum Lulus</th>
                    <th colspan="3">Jumlah Lulusan dengan Waktu Tunggu Mendapatkan Pekerjaan</th>
                </tr>
                <tr style="background-color: darkgrey">
                    <th>WT &lt; 3 bulan</th>
                    <th>3 &le; WT &le; 6 bulan</th>
                    <th>WT &gt; 6 bulan</th>
                </tr>
                <tr style="background-color: darkgrey">
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                </tr>
                <tr style="background-color: #ffff">
                    <td>TS-4</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="background-color: #ffff">
                    <td>TS-3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="background-color: #ffff">
                    <td>TS-2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>

        <br />
        <br />
        <br />

        <!-- Sarjana Terapan -->
        <div>
            <p>Tabel 8.d.3) Waktu Tunggu Lulusan</p>
            <p><u>Diisi oleh pengusul dari Program Studi Sarjana Terapan</u></p>
            <table id="tbl-konten">
                <tr style="background-color: darkgrey">
                    <th rowspan="2">Tahun Lulus</th>
                    <th rowspan="2">Jumlah Lulusan</th>
                    <th rowspan="2">Jumlah Lulusan yang Terlacak</th>
                    <th rowspan="2">Jumlah Lulusan yang Dipesan Sebelum Lulus</th>
                    <th colspan="3">Jumlah Lulusan dengan Waktu Tunggu Mendapatkan Pekerjaan</th>
                </tr>
                <tr style="background-color: darkgrey">
                    <th>WT &lt; 3 bulan</th>
                    <th>3 &le; WT &le; 6 bulan</th>
                    <th>WT &gt; 6 bulan</th>
                </tr>
                <tr style="background-color: darkgrey">
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                </tr>
                <tr style="background-color: #ffff">
                    <td>TS-4</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="background-color: #ffff">
                    <td>TS-3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="background-color: #ffff">
                    <td>TS-2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <br>
        <div style="text-align:center; font-weight: bold; font-size: 17px">
            <h3>Berikut merupakan tabel informasi yang diisi oleh pengusul dari Program Studi pada <br> program Diploma
                Tiga/Sarjana/Sarjana Terapan/Magister/Magister Terapan.</h3>
        </div>
        <div>
            <p>Tabel 8.d.4) Kesesuaian Bidang Kerja Lulusan</p>
            <p><u>Diisi oleh pengusul dari Program Studi Diploma Tiga</u></p>
            <table id="tbl-konten">
                <tr style="background-color: darkgrey">
                    <th rowspan="2">Tahun Lulus</th>
                    <th rowspan="2">Jumlah Lulusan</th>
                    <th rowspan="2">Jumlah Lulusan yang Terlacak</th>
                    <th rowspan="2">Jumlah Lulusan yang Dipesan Sebelum Lulus</th>
                    <th colspan="3">Jumlah Lulusan dengan Waktu Tunggu Mendapatkan Pekerjaan</th>
                </tr>
                <tr style="background-color: darkgrey">
                    <th>Rendah</th>
                    <th>Sedang</th>
                    <th>Tinggi</th>
                </tr>
                <tr style="background-color: darkgrey">
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                </tr>
                <tr style="background-color: #ffff">
                    <td>TS-4</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="background-color: #ffff">
                    <td>TS-3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="background-color: #ffff">
                    <td>TS-2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <div class="keterangan">
                <p>Keterangan:</p>
                <ol>
                    <li>
                        Jenis pekerjaan/posisi jabatan dalam pekerjaan tidak sesuai atau kurang sesuai
                        dengan profil lulusan yang direncanakan dalam dokumen kurikulum.
                    </li>
                    <li>
                        Jenis pekerjaan/posisi jabatan dalam pekerjaan cukup sesuai dengan profil lulusan
                        yang direncanakan dalam dokumen kurikulum.
                    </li>
                    <li>
                        Jenis pekerjaan/posisi jabatan dalam pekerjaan sesuai atau sangat sesuai dengan
                        profil lulusan yang direncanakan dalam dokumen kurikulum.
                    </li>
                </ol>
                <br>
            </div>
        </div>
    </div>
    <div class="konten" id="konten-5">
        <!-- Tempat Kinerja Lulusan -->
        <div>
        <div style="text-align:center; font-weight: bold; font-size: 17px">
            <h3>Berikut merupakan tabel informasi yang diisi oleh pengusul dari Program Studi pada <br> program Diploma
                Tiga/Sarjana/Sarjana Terapan/Magister/Magister Terapan.</h3>
          </div>
            <p>Tabel 8.e.1) Tempat Kerja Lulusan</p>
            <table id="tbl-konten">
                <tr style="background-color: darkgrey;border: 1px solid black">
                    <th style="border: 1px solid black;color: black" rowspan="2">Tahun Lulus</th>
                    <th style="border: 1px solid black;color: black" rowspan="2">Jumlah Lulusan</th>
                    <th style="border: 1px solid black;color: black" rowspan="2">Jumlah Lulusan yang Terlacak</th>
                    <th style="border: 1px solid black;color: black" colspan="3">Jumlah Lulusan Terlacak yang Bekerja
                        berdasarkan Tingkat/Ukuran Tempat Kerja/Berwirausaha</th>
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
                    <td style="border: 1px solid black;color: black;">7</td>
                    <td style="border: 1px solid black;color: black;">8</td>
                    <td style="border: 1px solid black;color: black;">9</td>
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
        <div>
            <p>Tabel 8.e.2) Tingkat Kompetensi Lulusan</p>
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
                    <td style="border: 1px solid black;color: black" colspan="2"><strong>Jumlah</strong></td>
                    <td style="border: 1px solid black;color: black"></td>
                    <td style="border: 1px solid black;color: black"></td>
                    <td style="border: 1px solid black;color: black"></td>
                    <td style="border: 1px solid black;color: black"></td>
                    <td style="border: 1px solid black;color: black;background-color: darkgrey"></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="konten" id="konten-6">
        <div>
        <div style="text-align:center; font-weight: bold; font-size: 17px">
            <h3>Berikut merupakan tabel informasi yang diisi oleh pengusul dari Program Studi pada <br> program Sarjana/Magister/Doktor.</h3>
        </div>
            <p>Tabel 8.f.1) Publikasi Ilmiah Mahasiswa</p>
            <p><u>Diisi oleh pengusul dari Program Studi pada program Sarjana/Magister/Doktor.</u></p>
            <table id="tbl-konten">
                <tr style="background-color: darkgrey">
                    <th rowspan="2">No.</th>
                    <th rowspan="2">Media Publikasi</th>
                    <th colspan="3">Jumlah Judul</th>
                    <th rowspan="2">Jumlah</th>
                </tr>
                <tr style="background-color: darkgrey">
                    <td>TS-2</td>
                    <td>TS-1</td>
                    <td>TS</td>
                </tr>
                <tr style="background-color: darkgrey">
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
                <?php
                    $result = $con->getTabel8f1_partJurnalMahasiswa();
                    for($x=0; $x<sizeof($result[0]); $x++){
                        $nomor = $x+1;
                        echo "<tr style='background-color: white'>";
                        if($nomor <= 4){
                            echo "<td>".$nomor."</td>";
                            echo "<td>".$result[0][$x]['jenisPublikasi']."</td>";
                            echo "<td>".$result[0][$x]['ts2']."</td>";
                            echo "<td>".$result[0][$x]['ts1']."</td>";
                            echo "<td>".$result[0][$x]['ts']."</td>";
                            echo "<td>".$result[0][$x]['jumlah']."</td>";
                        }
                        else{
                            echo "<td colspan='2'><strong>Jumlah</strong></td>";
                            echo "<td>".$result[0][$x]['ts2']."</td>";
                            echo "<td>".$result[0][$x]['ts1']."</td>";
                            echo "<td>".$result[0][$x]['ts']."</td>";
                            echo "<td>".$result[0][$x]['jumlah']."</td>";
                        }
                        echo "<tr>";
                    }
                ?>
            </table>
            <img src="./img/tridharma-5.6/tabel1.png" class="center" alt="">
        </div>
        <br />
        <br />
        <br />
        <div>
            <p>Tabel 8.f.1) Pergelaran Seminar Ilmiah Mahasiswa</p>
            <p><u>Diisi oleh pengusul dari Program Studi pada program Sarjana Terapan/Magister Terapan/Doktor
                    Terapan.</u></p>
            <table id="tbl-konten">
                <tr style="background-color: darkgrey">
                    <th rowspan="2">No.</th>
                    <th rowspan="2">Jenis</th>
                    <th colspan="3">Jumlah Judul</th>
                    <th rowspan="2">Jumlah</th>
                </tr>
                <tr style="background-color: darkgrey">
                    <td>TS-2</td>
                    <td>TS-1</td>
                    <td>TS</td>
                </tr>
                <tr style="background-color: darkgrey">
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
                <?php
                    $result = $con->getTabel8f1_partSeminarMahasiswa();
                    for($x=0; $x<sizeof($result[0]); $x++){
                        $nomor = $x+1;
                        echo "<tr style='background-color: white'>";
                        if($nomor < 4){
                            echo "<td>".$nomor."</td>";
                            echo "<td>".$result[0][$x]['jenisPublikasi']."</td>";
                            echo "<td>".$result[0][$x]['ts2']."</td>";
                            echo "<td>".$result[0][$x]['ts1']."</td>";
                            echo "<td>".$result[0][$x]['ts']."</td>";
                            echo "<td>".$result[0][$x]['jumlah']."</td>";
                        }
                        else{
                            echo "<td colspan='2'><strong>Jumlah</strong></td>";
                            echo "<td>".$result[0][$x]['ts2']."</td>";
                            echo "<td>".$result[0][$x]['ts1']."</td>";
                            echo "<td>".$result[0][$x]['ts']."</td>";
                            echo "<td>".$result[0][$x]['jumlah']."</td>";
                        }
                        echo "<tr>";
                    }
                ?>
            </table>
        </div>
        <br />
        <br />
        <br />
        <div>
            <p>Tabel 8.f.4) Luaran Penelitian/PkM yang Dihasilkan Mahasiswa</p>
            <table id="tbl-konten">
                <tr style="background-color: darkgrey">
                    <th>No</th>
                    <th>Judul Luaran Penelitian/PKM</th>
                    <th>Tahun</th>
                    <th>Keterangan</th>
                </tr>
                <tr style="background-color: darkgrey">
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
                <?php
                    $result = $con->getTabel8f3_LuaranPenelitianPKMLainnyaMahasiswa();
                    for($x=0; $x<sizeof($result[0]); $x++){
                        $length = sizeOf($result[0]);
                        $nomor = $x+1;
                        echo "<tr style='background-color: white'>";
                        if($nomor < 8){
                            echo "<td>".$nomor."</td>";
                            echo "<td>".$result[0][$x]['JudulLuaran']."</td>";
                            if($result[0][$x]['tahun'] == NULL){
                                echo "<td>-</td>";
                            }
                            else{
                                echo "<td>".$result[0][$x]['tahun']."</td>";
                            }
                            if($result[0][$x]['keterangan'] == ""){
                                echo "<td>-</td>";
                            }
                            else{
                                echo "<td>".$result[0][$x]['keterangan']."</td>";
                            }
                        }
                        else{
                            echo "<td colspan='3'><strong>Jumlah</strong></td>";
                            echo "<td>".$result[0][$x]['tahun']."</td>";
                        }
                        echo "<tr>";
                    }
                ?>
            </table>
        </div>
        <br />
        <br />
        <br />
        <div>
            <p>Tabel 8.f.2) Karya ilmiah Mahasiswa yang Disitasi</p>
            <p><u>Diisi oleh pengusul dari Program Studi pada program Sarjana Terapan/Magister Terapan/Doktor
                    Terapan.</u></p>
            <table id="tbl-konten">
                <tr style="background-color: darkgrey">
                    <th>No</th>
                    <th>Nama Mahasiswa</th>
                    <th>Judul Artikel yang Disitasi (Jurnal/Buku, Volume, Tahun, Nomor, Halaman)</th>
                    <th>Jumlah Sitasi</th>
                </tr>
                <tr style="background-color: darkgrey">
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>

                </tr>
                <tr style="background-color: #ffff">
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="background-color: #ffff">
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="background-color: #ffff">
                    <td>3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="background-color: #ffff">
                    <td colspan="2"><strong>Jumlah</strong></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <img src="./img/tridharma-5.6/tabel2.png" class="center" alt="">
        </div>
        <br />
        <br />
        <br />
        <div>
            <p>Tabel 8.f.3) Produk/jasa yang dihasilkan mahasiswa yang diadopsi oleh industri/masyarakat</p>
            <p><u>Diisi oleh pengusul dari Program Studi pada program Sarjana Terapan/Magister Terapan/Doktor
                    Terapan.</u>
            </p>
            <table id="tbl-konten">
                <tr style="background-color: darkgrey">
                    <th>No</th>
                    <th>Nama Mahasiswa</th>
                    <th>Nama Produk/Jasa</th>
                    <th>Deskripsi Produk/Jasa</th>
                    <th>Bukti</th>
                </tr>
                <tr style="background-color: darkgrey">
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>

                </tr>
                <tr style="background-color: #ffff">
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="background-color: #ffff">
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="background-color: #ffff">
                    <td>3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="background-color: #ffff">
                    <td colspan="2"><strong>Jumlah</strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <img src="./img/tridharma-5.6/tabel3.png" class="center" alt="">
        </div>
    </div>
    <script>
        close();
        function close() {
            var x = document.getElementsByClassName("konten");
            for (var i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
        }
        function show(id) {
            close();
            document.getElementById(id).style.display = "block";
        }
    </script>
</body>
