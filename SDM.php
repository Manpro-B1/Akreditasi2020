<?php
    include "SQL.php";
    include "TableController.php";

    $sql = new SQL();
    $tController = new TableController($sql);
?>

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
                    <h2 style="padding: 10px;">Sumber Daya Manusia</h2>
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
                    <li><a href="#konten-12" onclick="show('konten-12')">Produk / jasa DTPS yang diadopsi oleh industri / masyarakat</a></li>
                    <li><a href="#konten-13" onclick="show('konten-13')">Luaran Penelitian / PkM Lainnya oleh DTPS</a></li>
                </div>
            </ul>
        </div>
        <!--Konten Diisi di div dibawah sini, jangan lupa tambahkan kelas "konten" dan idnya masing-masing--> 
        <div class="konten" id="konten-1">
            <table>
                <thead>
                    <tr>
                        <th rowspan="2">
                            No
                        </th>
                        <th rowspan="2">
                            Nama Dosen
                        </th>
                        <th rowspan="2">
                            NIDM / NIDK
                        </th>
                        <th colspan="2">
                            Pendidikan Pasca Sarjana
                        </th>
                        <th rowspan="2">
                            Bidang Keahlian
                        </th>
                        <th rowspan="2">
                            Kesesuaian dengan Kompetensi Inti PS
                        </th>
                        <th rowspan="2">
                            Jabatan Akademik
                        </th>
                        <th rowspan="2">
                            Sertifikat Pendidik Profesional
                        </th>
                        <th rowspan="2">
                            Sertifikat Kompetensi / Profesi / Industri
                        </th>
                        <th rowspan="2">
                            Mata Kuliah yang Diampu pada PS yang Diakreditasi
                        </th>
                        <th rowspan="2">
                            Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu
                        </th>
                        <th rowspan="2">
                            Mata Kuliah yang Diampu pada PS Lain
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Magister / Magister Terapan / Spesialis
                        </th>
                        <th>
                            Doktor / Doktor Terapan / Spesialis
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- php -->
                    <?php 
                        $res = $tController->getTabel3a1_DosenTetapUPPS();
                        $i = 1;

                        foreach ($res as $tt=>$value) {
                            echo '<tr>';
                            echo '<td>'.$i++.'</td>';
                            echo '<td>'.$value['NamaDosen'].'</td>';
                            echo '<td>'.$value['NIDN'].'</td>';
                            echo '<td>'.$value['Pendidikan'].'</td>';

                            if ($value['Pendidikan_doctor'] != NULL) {
                                echo '<td>'.$value['Pendidikan_doctor'].'</td>';
                            } else {
                                echo '<td>-</td>';
                            }

                            echo '<td>'.$value['BidangKeahlian'].'</td>';
                            echo '<td>'.$value['KesesuaianKompetensi'].'</td>';
                            echo '<td>'.$value['JabatanAkademik'].'</td>';
                            echo '<td>'.$value['SertifikatPendidik'].'</td>';
                            
                            if ($value['SertifikatKompetensi'] != NULL) {
                                echo '<td>'.$value['SertifikatKompetensi'].'</td>';
                            } else {
                                echo '<td>-</td>';
                            }

                            echo '<td>'.$value['MataKuliahPSYangDiampu'].'</td>';
                            echo '<td>'.$value['KesesuaianBidangKeahlian'].'</td>';
                            
                            if ($value['MataKuliahLuarPSYangDiampu'] != NULL) {
                                echo '<td>'.$value['MataKuliahLuarPSYangDiampu'].'</td>';
                            } else {
                                echo '<td>-</td>';
                            }
                        } 
                    ?>
                </tbody>
            </table>
        </div>
        <div class="konten" id="konten-2">
            <table>
                <thead>
                    <tr>
                        <th rowspan="3">
                            No
                        </th>
                        <th rowspan="3">
                            Nama Dosen
                        </th>
                        <th colspan="8">
                            Jumlah Mahasiswa yang Dibimbing
                        </th>
                        <th rowspan="3">
                            Rata-Rata Jumlah Bimbingan di Semua Program / Semester
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4">
                            Pada PS yang Diakreditasi
                        </th>
                        <th colspan="4">
                            Pada PS lain di PT
                        </th>
                    </tr>
                    <tr>
                        <th>
                            TS-2
                        </th>
                        <th>
                            TS-1
                        </th>
                        <th>
                            TS
                        </th>
                        <th>
                            Rata-Rata
                        </th>
                        <th>
                            TS-2
                        </th>
                        <th>
                            TS-1
                        </th>
                        <th>
                            TS
                        </th>
                        <th>
                            Rata-Rata
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $res = $tController->getTabel3a2_DosenPembimbingUtamaTugasAkhir();

                        foreach ($res as $tt=>$value) {
                            echo '<tr>';
                            echo '<td>'.$value['Nomor'].'</td>';
                            echo '<td>'.$value['NamaDosen'].'</td>';
                            echo '<td>'.$value['TS-2'].'</td>';
                            echo '<td>'.$value['TS-1'].'</td>';
                            echo '<td>'.$value['TS'].'</td>';
                            echo '<td>'.number_format($value['Rata2'], 2).'</td>';
                            echo '<td>'.$value['TS-2b'].'</td>';
                            echo '<td>'.$value['TS-1b'].'</td>';
                            echo '<td>'.$value['TSb'].'</td>';
                            echo '<td>'.number_format($value['Rata2b'], 2).'</td>';
                            echo '<td>'.number_format($value['Rata2_semua'], 2).'</td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="konten" id="konten-3">
            <table>
                <thead>
                    <tr>
                        <th rowspan="3">
                            No
                        </th>
                        <th rowspan="3">
                            NIK
                        </th>
                        <th rowspan="3">
                            Nama Dosen (DT)
                        </th>
                        <th rowspan="3">
                            DTPS
                        </th>
                        <th colspan="6">
                            Ekuivalen Waktu Mengajar Penuh (EWMP) pada saat TS dalam satuan kredit semester (SKS)
                        </th>
                        <th rowspan="3">
                            Jumlah (SKS)
                        </th>
                        <th rowspan="3">
                            Rata-rata per Semester (SKS)
                        </th>
                    </tr>
                    <tr>
                        <th colspan="3">
                            Pendidikan: Pembelajaran dan Pembimbingan
                        </th>
                        <th rowspan="2">
                            Penelitian
                        </th>
                        <th rowspan="2">
                            PkM
                        </th>
                        <th rowspan="2">
                            Tugas Tambahan dan / atau Penunjang
                        </th>
                    </tr>
                    <tr>
                        <th>
                            PS yang Diakreditasi
                        </th>
                        <th>
                            PS Lain di dalam PT
                        </th>
                        <th>
                            PS Lain di luar PT
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $res = $tController->getTabel3a3_EWMPDosenTetapPerguruanTinggi();
                        $i = 1;
                        foreach ($res as $tt=>$value) {
                            echo '<tr>';
                            echo '<td>'.$i++.'</td>';
                            echo '<td>'.$value['NIK'].'</td>';
                            echo '<td>'.$value['Nama'].'</td>';
                            
                            if ($value['isDTPS'] == 1) {
                                echo '<td>V</td>';
                            } else {
                                echo '<td>-</td>';
                            }

                            echo '<td>'.$value['PembelajaranPS'].'</td>';
                            echo '<td>'.$value['PembelajaranPSLain'].'</td>';
                            echo '<td>'.$value['PembelajaranPSLuar'].'</td>';
                            echo '<td>'.$value['Penelitian'].'</td>';
                            echo '<td>'.$value['Pkm'].'</td>';
                            echo '<td>'.$value['Tambahan'].'</td>';
                            echo '<td>'.$value['Jumlah'].'</td>';
                            echo '<td>'.$value['Rata2'].'</td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="konten" id="konten-4">
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
                            NIDN / NIDK
                        </th>
                        <th>
                            Pendidikan Pasca Sarjana
                        </th>
                        <th>
                            Bidang Keahlian
                        </th>
                        <th>
                            Jabatan Akademik
                        </th>
                        <th>
                            Sertifikat Pendidik Profesional
                        </th>
                        <th>
                            Sertifikat Profesi / Kompetensi / Industri
                        </th>
                        <th>
                            Mata Kuliah yang Diampu pada PS yang Diakreditasi
                        </th>
                        <th>
                            Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $res = $tController->getTabel3a4_DosenTidakTetapUPPS();

                        foreach ($res as $tt=>$value) {
                            echo '<tr>';
                            echo '<td>'.$value['Nomor'].'</td>';
                            echo '<td>'.$value['NamaDosen'].'</td>';
                            
                            if ($value['NIDN'] != NULL) {
                                echo '<td>'.$value['NIDN'].'</td>';
                            } else {
                                echo '<td>-</td>';
                            }

                            echo '<td>'.$value['Pendidikan'].'</td>';
                            echo '<td>'.$value['BidangKeahlian'].'</td>';
                            
                            if ($value['JabatanAkademik'] != NULL) {
                                echo '<td>'.$value['JabatanAkademik'].'</td>';
                            } else {
                                echo '<td>-</td>';
                            }

                            if ($value['SertifikatPendidik'] != NULL) {
                                echo '<td>'.$value['SertifikatPendidik'].'</td>';
                            } else {
                                echo '<td>-</td>';
                            }

                            if ($value['SertifikatKompetensi'] != NULL) {
                                echo '<td>'.$value['SertifikatKompetensi'].'</td>';
                            } else {
                                echo '<td>-</td>';
                            }

                            echo '<td>'.$value['MataKuliahPSYangDiampu'].'</td>';

                            if ($value['KesesuaianBidangKeahlian'] != NULL) {
                                echo '<td>V</td>';
                            } else {
                                echo '<td>-</td>';
                            }
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="konten" id="konten-5">
            <table>
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Nama Dosen Industri / Praktisi
                        </th>
                        <th>
                            NIDK
                        </th>
                        <th>
                            Perusahaan / Industri
                        </th>
                        <th>
                            Pendidikan Tertinggi
                        </th>
                        <th>
                            Bidang Keahlian
                        </th>
                        <th>
                            Sertifikat Profesi / Kompetensi / Industri
                        </th>
                        <th>
                            Mata Kuliah yang Diampu
                        </th>
                        <th>
                            Bobot Kredit (SKS)
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    /*
                        $res = $tController->getTabel3a5_DosenPraktisi();
                        $i = 1;

                        // Glitched

                        foreach ($res as $tt=>$value) {
                            echo '<tr>';
                            echo '<td>'.$i++.'</td>';
                            echo '<td>'.$value['NamaDosen'].'</td>';
                            echo '<td>'.$value['NIDK'].'</td>';
                            echo '</tr>';
                        }
                        */
                    ?>
                </tbody>
            </table>
        </div>
        <div class="konten" id="konten-6">
            <table>
                <thead>
                    <tr>
                        <th rowspan="2">
                            No
                        </th>
                        <th rowspan="2">
                            Nama Dosen
                        </th>
                        <th rowspan="2">
                            Bidang Keahlian
                        </th>
                        <th rowspan="2">
                            Rekognisi dan Bukti Pendukung
                        </th>
                        <th colspan="3">
                            Tingkat
                        </th>
                        <th rowspan="2">
                            Tahun
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Wilayah
                        </th>
                        <th>
                            Nasional
                        </th>
                        <th>
                            Internasional
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $res = $tController->getTabel3b1_RekognisiDTPS();

                        foreach ($res as $tt=>$value) {
                            echo '<tr>';
                            echo '<td>'.$value['Nomor'].'</td>';
                            echo '<td>'.$value['NamaDosen'].'</td>';
                            echo '<td>'.$value['Bidang Keahlian'].'</td>';
                            echo '<td>'.$value['Rekognisi'].'</td>';
                            echo '<td>'.$value['Wilayah'].'</td>';
                            echo '<td>'.$value['Nasional'].'</td>';
                            echo '<td>'.$value['Internasional'].'</td>';
                            echo '<td>'.$value['Tahun'].'</td>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="konten" id="konten-7">
            <table>
                <thead>
                    <tr>
                        <th rowspan="2">
                            No
                        </th>
                        <th rowspan="2">
                            Sumber Pembiayaan
                        </th>
                        <th colspan="3">
                            Jumlah Judul
                        </th>
                        <th rowspan="2">
                            Jumlah
                        </th>
                    </tr>
                    <tr>
                        <th>
                            TS-2
                        </th>
                        <th>
                            TS-1
                        </th>
                        <th>
                            TS
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $res = $tController->getTabel3b2_PenelitianDTPS();
                        $i = 1;

                        foreach ($res as $tt=>$value) {
                            echo '<tr>';
                            echo '<td>'.$i++.'</td>';
                            echo '<td>'.$value['sumberPembiayaan'].'</td>';
                            echo '<td>'.$value['ts2'].'</td>';
                            echo '<td>'.$value['ts1'].'</td>';
                            echo '<td>'.$value['ts'].'</td>';
                            echo '<td>'.$value['jumlah'].'</td>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="konten" id="konten-8">
            <table>
                <thead>
                    <tr>
                        <th rowspan="2">
                            No
                        </th>
                        <th rowspan="2">
                            Sumber Pembiayaan
                        </th>
                        <th colspan="3">
                            Jumlah Judul
                        </th>
                        <th rowspan="2">
                            Jumlah
                        </th>
                    </tr>
                    <tr>
                        <th>
                            TS-2
                        </th>
                        <th>
                            TS-1
                        </th>
                        <th>
                            TS
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $res = $tController->getTabel3b3_PKMDTPS();
                        $i = 1;

                        foreach ($res as $tt=>$value) {
                            echo '<tr>';
                            echo '<td>'.$i++.'</td>';
                            echo '<td>'.$value['sumberPembiayaan'].'</td>';
                            echo '<td>'.$value['ts2'].'</td>';
                            echo '<td>'.$value['ts1'].'</td>';
                            echo '<td>'.$value['ts'].'</td>';
                            echo '<td>'.$value['jumlah'].'</td>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="konten" id="konten-9">
            <table>
                <thead>
                    <tr>
                        <th rowspan="2">
                            No
                        </th>
                        <th rowspan="2">
                            Media Publikasi
                        </th>
                        <th colspan="3">
                            Jumlah Judul
                        </th>
                        <th rowspan="2">
                            Jumlah
                        </th>
                    </tr>
                    <tr>
                        <th>
                            TS-2
                        </th>
                        <th>
                            TS-1
                        </th>
                        <th>
                            TS
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $res = $tController->getTabel3b4_PartJurnal();
                        $i = 1;

                        foreach ($res as $tt=>$value) {
                            echo '<tr>';
                            echo '<td>'.$i++.'</td>';
                            echo '<td>'.$value['jenisPublikasi'].'</td>';
                            echo '<td>'.$value['ts2'].'</td>';
                            echo '<td>'.$value['ts1'].'</td>';
                            echo '<td>'.$value['ts'].'</td>';
                            echo '<td>'.$value['jumlah'].'</td>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="konten" id="konten-10">
            <table>
                <thead>
                    <tr>
                        <th rowspan="2">
                            No
                        </th>
                        <th rowspan="2"> 
                            Jenis
                        </th>
                        <th colspan="3">
                            Jumlah Judul
                        </th>
                        <th rowspan="2">
                            Jumlah
                        </th>
                    </tr>
                    <tr>
                        <th>
                            TS-2
                        </th>   
                        <th>
                            TS-1
                        </th>   
                        <th>
                            TS
                        </th>              
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $res = $tController->getTabel3b4_PartSeminar();

                        $i = 1;

                        foreach ($res as $tt=>$value) {
                            echo '<tr>';
                            echo '<td>'.$i++.'</td>';
                            echo '<td>'.$value['jenisPublikasi'].'</td>';
                            echo '<td>'.$value['ts2'].'</td>';
                            echo '<td>'.$value['ts1'].'</td>';
                            echo '<td>'.$value['ts'].'</td>';
                            echo '<td>'.$value['jumlah'].'</td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>

            <table>
                <thead>
                    <tr>
                        <th rowspan="2">
                            No
                        </th>
                        <th rowspan="2"> 
                            Jenis
                        </th>
                        <th colspan="3">
                            Jumlah Judul
                        </th>
                        <th rowspan="2">
                            Jumlah
                        </th>
                    </tr>
                    <tr>
                        <th>
                            TS-2
                        </th>   
                        <th>
                            TS-1
                        </th>   
                        <th>
                            TS
                        </th>              
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 1;

                        $res = $tController->getTabel3b4_PartTulisan();

                        foreach ($res as $tt=>$value) {
                            echo '<tr>';
                            echo '<td>'.$i++.'</td>';
                            echo '<td>'.$value['jenisPublikasi'].'</td>';
                            echo '<td>'.$value['ts2'].'</td>';
                            echo '<td>'.$value['ts1'].'</td>';
                            echo '<td>'.$value['ts'].'</td>';
                            echo '<td>'.$value['jumlah'].'</td>';
                            echo '</tr>';
                        }
                    ?>
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
                    <?php
                        $res = $tController->getTabel3b5_KaryaIlmiahDisitasi();
                        $i = 1;

                        foreach ($res as $tt=>$value) {
                            echo '<tr>';
                            echo '<td>'.$i++.'</td>';
                            echo '<td>'.$value['NamaDosen'].'</td>';
                            echo '<td>'.$value['JudulArtikel'].'</td>';
                            echo '<td>'.$value['JumlahSitasi'].'</td>';
                            echo '</tr>';
                        }
                    ?>
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
                <tbody>
                    <?php
                        $res = $tController->getTabel3b7_LuaranPenelitianPKMLainnya();

                        foreach ($res as $tt=>$value) {
                            echo '<tr>';
                            echo '<td>'.$value['Nomor'].'</td>';
                            echo '<td>'.$value['JudulLuaran'].'</td>';
                            
                            if ($value['tahun'] != NULL) {
                                echo '<td>'.$value['tahun'].'</td>';
                            }

                            if ($value['keterangan'] != NULL) {
                                echo '<td>'.$value['keterangan'].'</td>';
                            } else {
                                echo '<td></td>';
                            }
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <script>
            close();
            show('konten-1');
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