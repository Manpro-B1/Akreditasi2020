<head>
    <title>Capaian</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="capaian.css">
</head>

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
        asd
    </div>
    <div class="konten" id="konten-2">
        dsa
    </div>
    <div class="konten" id="konten-4">
        <div style="text-align:center; font-weight: bold; font-size: 17px">
            <p>Berikut merupakan tabel informasi yang diisi oleh pengusul dari Program Studi pada program Diploma
                Tiga/Sarjana/Sarjana Terapan.</p>
        </div>

        <!-- Diploma 3 -->
        <div>
            <p>Tabel 8.1) Waktu Tunggu Lulusan</p>
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
                    <td>TS-1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>

        <!-- Sarjana -->
        <div>
            <p>Tabel 8.1) Waktu Tunggu Lulusan</p>
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
                    <td>TS-1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
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
        function show(id) {
            close();
            document.getElementById(id).style.display = "block";
        }
    </script>
</body>