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

    <div class="konten" id="konten-6">
        <div>
            <p>Tabel 8.f.1) Publikasi Ilmiah mahasiswa</p>
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
                <tr style="background-color: #ffff">
                    <td>TS-1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div>
            <p>Tabel 8.f.1) Pagelaran/pameran/presentasi/publikasi Ilmiah mahasiswa</p>
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
                <tr style="background-color: #ffff">
                    <td>TS-1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div>
            <p>Tabel 8.f.2) Karya ilmiah mahasiswa yang disitasi</p>
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
                    <td colspan="2">Jumlah</td>
                    <td></td>
                    <td></td>


                </tr>
            </table>
        </div>
    </div>

    <div>
        <p>Tabel 8.f.3) Produk/jasa yang dihasilkan mahasiswa yang diadopsi oleh industri/masyarakat</p>
        <p><u>Diisi oleh pengusul dari Program Studi pada program Sarjana Terapan/Magister Terapan/Doktor Terapan.</u>
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
                <td colspan="2">...</td>
                <td></td>
                <td style="background-color: darkgrey"></td>
                <td style="background-color: darkgrey"></td>

            </tr>
        </table>
    </div>
    </div>
    <script>
        close();
        document.getElementById(id).style.display = "block";
    </script>
</body>