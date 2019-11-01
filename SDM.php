<head>
        <title>Sumber Daya Manusia</title>
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
                    <h2 style="padding: 10px;">Pendidikan</h2>
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
                    <li><a href="#konten-1" onclick="show('konten-1')">Profil Dosen</a></li>
                    <li><a href="#konten-2" onclick="show('konten-2')">Dosen Pembimbing Tugas Utama Akhir</a></li>
                    <li><a href="#konten-3" onclick="show('konten-3')">Ekuivalen Waktu Mengajar Penuh (EWMP) Dosen Tetap Perguruan Tinggi</a></li>
                    <li><a href="#konten-4" onclick="show('konten-4')">Dosen Tidak Tetap yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang Diakreditasi</a></li>
                    <li><a href="#konten-5" onclick="show('konten-5')">Dosen Industri / Praktisi</a></li>
                    <li><a href="#konten-6" onclick="show('konten-6')">Pengakuan / Rekognisi DTPS</a></li>
                    <li><a href="#konten-7" onclick="show('konten-7')">Penelitian DTPS</a></li>
                    <li><a href="#konten-8" onclick="show('konten-8')">Pengabdian kepada Masyarakat (PkM) DTPS</a></li>
                    <li><a href="#konten-9" onclick="show('konten-9')">Publikasi Ilmiah DTPS</a></li>
                    <li><a href="#konten-10" onclick="show('konten-10')">Pagelaran / Pameran / Presentasi / Publikasi Ilmiah DTPS</a></li>
                    <li><a href="#konten-11" onclick="show('konten-11')">Karya Ilmiah DTPS yang disitasi dalam 3 tahun terakhir</a></li>
                    <li><a href="#konten-12" onclick="show('konten-12')">Produk / jasa DTPS yang diadopse oleh industri / masyarakat</a></li>
                    <li><a href="#konten-13" onclick="show('konten-13')">Luaran Penelitian / PkM Lainnya oleh DTPS</a></li>
                </div>
            </ul>
        </div>
        <!--Konten Diisi di div dibawah sini, jangan lupa tambahkan kelas "konten" dan idnya masing-masing--> 
        <div class="konten" id="konten-1">
            <table>
                <thead>
                    <tr>
                        <td rowspan="2">
                            No
                        </td>
                        <td rowspan="2">
                            Nama Dosen
                        </td>
                        <td rowspan="2">
                            NIDM / NIDK
                        </td>
                        <td colspan="2">
                            Pendidikan Pasca Sarjana
                        </td>
                        <td rowspan="2">
                            Bidang Keahlian
                        </td>
                        <td rowspan="2">
                            Kesesuaian dengan Kompetensi Inti PS
                        </td>
                        <td rowspan="2">
                            Jabatan Akademik
                        </td>
                        <td rowspan="2">
                            Sertifikat Pendidik Profesional
                        </td>
                        <td rowspan="2">
                            Sertifikat Kompetensi / Profesi / Industri
                        </td>
                        <td rowspan="2">
                            Mata Kuliah yang Diampu pada PS yang Diakreditasi
                        </td>
                        <td rowspan="2">
                            Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu
                        </td>
                        <td rowspan="2">
                            Mata Kuliah yang Diampu pada PS Lain
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Magister / Magister Terapan / Spesialis
                        </td>
                        <td>
                            Doktor / Doktor Terapan / Spesialis
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <!-- php -->
                </tbody>
            </table>
        </div>
        <div class="konten" id="konten-2">
            <table>
                <thead>
                    <tr>
                        <td rowspan="3">
                            No
                        </td>
                        <td rowspan="3">
                            Nama Dosen
                        </td>
                        <td colspan="8">
                            Jumlah Mahasiswa yang Dibimbing
                        </td>
                        <td rowspan="3">
                            Rata-Rata Jumlah Bimbingan di Semua Program / Semester
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            Pada PS yang Diakreditasi
                        </td>
                        <td colspan="4">
                            Pada PS lain di PT
                        </td>
                    </tr>
                    <tr>
                        <td>
                            TS-2
                        </td>
                        <td>
                            TS-1
                        </td>
                        <td>
                            TS
                        </td>
                        <td>
                            Rata-Rata
                        </td>
                        <td>
                            TS-2
                        </td>
                        <td>
                            TS-1
                        </td>
                        <td>
                            TS
                        </td>
                        <td>
                            Rata-Rata
                        </td>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div class="konten" id="konten-3">
            <table>
                <thead>
                    <tr>
                        <td rowspan="3">
                            No
                        </td>
                        <td rowspan="3">
                            Nama Dosen (DT)
                        </td>
                        <td rowspan="3">
                            DTPS
                        </td>
                        <td colspan="6">
                            Ekuivalen Waktu Mengajar Penuh (EWMP) pada saat TS dalam satuan kredit semester (SKS)
                        </td>
                        <td rowspan="3">
                            Jumlah (SKS)
                        </td>
                        <td rowspan="3">
                            Rata-rata per Semester (SKS)
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            Pendidikan: Pembelajaran dan Pembimbingan
                        </td>
                        <td rowspan="2">
                            Penelitian
                        </td>
                        <td rowspan="2">
                            PkM
                        </td>
                        <td rowspan="2">
                            Tugas Tambahan dan / atau Penunjang
                        </td>
                    </tr>
                    <tr>
                        <td>
                            PS yang Diakreditasi
                        </td>
                        <td>
                            PS Lain di dalam PT
                        </td>
                        <td>
                            PS Lain di luar PT
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="konten" id="konten-4">
            <table>
                <thead>
                    <tr>
                        <td>
                            No
                        </td>
                        <td>
                            Nama Dosen
                        </td>
                        <td>
                            NIDN / NIDK
                        </td>
                        <td>
                            Pendidikan Pasca Sarjana
                        </td>
                        <td>
                            Bidang Keahlian
                        </td>
                        <td>
                            Jabatan Akademik
                        </td>
                        <td>
                            Sertifikat Pendidik Profesional
                        </td>
                        <td>
                            Sertifikat Profesi / Kompetensi / Industri
                        </td>
                        <td>
                            Mata Kuliah yang Diampu pada PS yang Diakreditasi
                        </td>
                        <td>
                            Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="konten" id="konten-5">
            <table>
                <thead>
                    <tr>
                        <td>
                            No
                        </td>
                        <td>
                            Nama Dosen Industri / Praktisi
                        </td>
                        <td>
                            NIDK
                        </td>
                        <td>
                            Perusahaan / Industri
                        </td>
                        <td>
                            Pendidikan Tertinggi
                        </td>
                        <td>
                            Bidang Keahlian
                        </td>
                        <td>
                            Sertifikat Profesi / Kompetensi / Industri
                        </td>
                        <td>
                            Mata Kuliah yang Diampu
                        </td>
                        <td>
                            Bobot Kredit (SKS)
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="konten" id="konten-6">
            <table>
                <thead>
                    <tr>
                        <td rowspan="2">
                            No
                        </td>
                        <td rowspan="2">
                            Nama Dosen
                        </td>
                        <td rowspan="2">
                            Bidang Keahlian
                        </td>
                        <td rowspan="2">
                            Rekognisi dan Bukti Pendukung
                        </td>
                        <td colspan="3">
                            Tingkat
                        </td>
                        <td rowspan="2">
                            Tahun
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Wilayah
                        </td>
                        <td>
                            Nasional
                        </td>
                        <td>
                            Internasional
                        </td>
                    </tr>
                </thead>
                <tbody>
                
                </tbody>
            </table>
        </div>
        <div class="konten" id="konten-7">
            <table>
                <thead>
                    <tr>
                        <td rowspan="2">
                            No
                        </td>
                        <td rowspan="2">
                            Sumber Pembiayaan
                        </td>
                        <td colspan="3">
                            Jumlah Judul
                        </td>
                        <td rowspan="2">
                            Jumlah
                        </td>
                    </tr>
                    <tr>
                        <td>
                            TS-2
                        </td>
                        <td>
                            TS-1
                        </td>
                        <td>
                            TS
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="konten" id="konten-8">
            <table>
                <thead>
                    <tr>
                        <td rowspan="2">
                            No
                        </td>
                        <td rowspan="2">
                            Sumber Pembiayaan
                        </td>
                        <td colspan="3">
                            Jumlah Judul
                        </td>
                        <td rowspan="2">
                            Jumlah
                        </td>
                    </tr>
                    <tr>
                        <td>
                            TS-2
                        </td>
                        <td>
                            TS-1
                        </td>
                        <td>
                            TS
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="konten" id="konten-9">
            <table>
                <thead>
                    <tr>
                        <td rowspan="2">
                            No
                        </td>
                        <td rowspan="2">
                            Media Publikasi
                        </td>
                        <td colspan="3">
                            Jumlah Judul
                        </td>
                        <td rowspan="2">
                            Jumlah
                        </td>
                    </tr>
                    <tr>
                        <td>
                            TS-2
                        </td>
                        <td>
                            TS-1
                        </td>
                        <td>
                            TS
                        </td>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div class="konten" id="konten-10">
            <table>
                <thead>
                    <tr>
                        <td rowspan="2">
                            No
                        </td>
                        <td rowspan="2"> 
                            Jenis
                        </td>
                        <td colspan="3">
                            Jumlah Judul
                        </td>
                        <td rowspan="2">
                            Jumlah
                        </td>
                    </tr>
                    <td>
                        <td>
                            TS-2
                        </td>   
                        <td>
                            TS-1
                        </td>   
                        <td>
                            TS
                        </td>              
                    </td>
                </thead>
                <tbody>
                
                </tbody>
            </table>
        </div>
        <div class="konten" id="konten-11">
            <table>
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Nama Dosen
                        </th>
                        <th>
                            Judul Artikel yang Disitasi (Jurnal / Buku, Volume, Tahun, Nomor, Halaman)
                        </th>
                        <th>
                            Jumlah Sitasi
                        </th>
                    </tr>
                </thead>
                <tbody>
                
                </tbody>
            </table>
        </div>
        <div class="konten" id="konten-12">
            <table>
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Nama Dosen
                        </th>
                        <th>
                            Nama Produk / Jasa
                        </th>
                        <th>
                            Deskripsi Produk / Jasa
                        </th>
                        <th>
                            Bukti
                        </th>
                    </tr>
                </thead>
                <tbody>
                
                </tbody>
            </table>
        </div>
        <div class="konten" id="konten-13">
            <table>
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Judul Luaran Penelitian / PkM
                        </th>
                        <th>
                            Tahun
                        </th>
                        <th>
                            Keterangan
                        </th>
                    </tr>
                </thead>
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
            function show(id) {
                close();
                document.getElementById(id).style.display = "block";
            }
        </script>
</body>