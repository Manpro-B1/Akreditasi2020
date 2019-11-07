<head>
        <title>Capaian</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body style="height: 100%">
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
                        include("Sidebar.php");
                    ?>
                </div>  
                <div>
                    <!--Masukan id div konten kalian sesuai dengan format dibawah-->
                    <li><a href="#konten-1" onclick="show('konten-1')">Capaian Pembelajaran</a></li>
                    <li><a href="#konten-2" onclick="show('konten-2')">Prestasi Mahasiswa</a></li>
                    <li><a href="#efektivitas_dan_produktivitas" onclick="show('konten-efektivitas')">Efektivitas dan Produktivitas Pendidikan</a></li>
                    <li><a href="#konten-2" onclick="show('konten-2')">Daya Saing Lulusan</a></li>
                    <li><a href="#konten-2" onclick="show('konten-5')">Kinerja Lulusan</a></li>
                    <li><a href="#konten-2" onclick="show('konten-2')">Luaran Penelitian dan PkM Mahasiswa</a></li>
                </div>
            </ul>
        </div>
        <!--Konten Diisi di div dibawah sini, jangan lupa tambahkan kelas "konten" dan idnya masing-masing--> 
        <div class="konten" id="konten-1">
            asd
        </div>
        <div class="konten" id="konten-2">
            asd
        </div>
        <div class="konten" id="konten-efektivitas">
            <p>Tabel 8.c. Masa Studi Lulusan Program Studi</p>
            <table id="tbl-konten">
                <tr style="background-color: darkgrey;border: 1px solid black">
                    <th style="border: 1px solid black;color: black" rowspan="2">Tahun Masuk</th>
                    <th style="border: 1px solid black;color: black" rowspan="2">Jumlah Mahasiswa Diterima</th>
                    <th style="border: 1px solid black;color: black" colspan="5">Jumlah Mahasiswa yang Lulus pada</th>
                    <th style="border: 1px solid black;color: black" rowspan="2">Jumlah Lulusan s.d. Akhir TS</th>
                    <th style="border: 1px solid black;color: black" rowspan="2">Rata - rata Masa Studi</th>
                </tr>
                <tr style="background-color: darkgrey;border: 1px solid black;">
                    <th style="border: 1px solid black;color: black">Akhir TS-4</th>
                    <th style="border: 1px solid black;color: black">Akhir TS-3</th>
                    <th style="border: 1px solid black;color: black">Akhir TS-2</th>
                    <th style="border: 1px solid black;color: black">Akhir TS-1</th>
                    <th style="border: 1px solid black;color: black">Akhir TS</th>
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
                    <td style="border: 1px solid black;color: black"></td>
                    <td style="border: 1px solid black;color: black"></td>
                    <td style="border: 1px solid black;color: black"></td>
                </tr>
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
                        <td style="border: 1px solid black;