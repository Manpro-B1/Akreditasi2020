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
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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
                    <li><a href="#profil-dosen" onclick="show('profil-dosen')">Profil Dosen</a></li>
                    <li><a href="#dosen-ta" onclick="show('dosen-ta')">Dosen Pembimbing Tugas Utama Akhir</a></li>
                    <li><a href="#ewmp" onclick="show('ewmp')">Ekuivalen Waktu Mengajar Penuh (EWMP) Dosen Tetap Perguruan Tinggi</a></li>
                    <li><a href="#dosen-tidak-tetap" onclick="show('dosen-tidak-tetap')">Dosen Tidak Tetap yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang Diakreditasi</a></li>
                    <li><a href="#dosen-industri" onclick="show('dosen-industri')">Dosen Industri / Praktisi</a></li>
                    <li><a href="#rekognisi-dtps" onclick="show('rekognisi-dtps')">Pengakuan / Rekognisi DTPS</a></li>
                    <li><a href="#penelitian-dtps" onclick="show('penelitian-dtps')">Penelitian DTPS</a></li>
                    <li><a href="#pkm-dtps" onclick="show('pkm-dtps')">Pengabdian kepada Masyarakat (PkM) DTPS</a></li>
                    <li><a href="#publikasi-dtps" onclick="show('publikasi-dtps')">Publikasi Ilmiah DTPS</a></li>
                    <li><a href="#pagelaran-dtps" onclick="show('pagelaran-dtps')">Pagelaran / Pameran / Presentasi / Publikasi Ilmiah DTPS</a></li>
                    <li><a href="#ki-dtps" onclick="show('ki-dtps')">Karya Ilmiah DTPS yang disitasi dalam 3 tahun terakhir</a></li>
                    <li><a href="#produk-dtps" onclick="show('produk-dtps')">Produk / jasa DTPS yang diadopsi oleh industri / masyarakat</a></li>
                    <li><a href="#luaran-dtps" onclick="show('luaran-dtps')">Luaran Penelitian / PkM Lainnya oleh DTPS</a></li>
                </div>
            </ul>
        </div>
        <!--Konten Diisi di div dibawah sini, jangan lupa tambahkan kelas "konten" dan idnya masing-masing--> 
        <div class="konten" id="profil-dosen">
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

                        $sesuai = 0;
                        $tidakSesuai = 0;

                        foreach ($res[0] as $tt=>$value) {
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

                            if (!empty($value['KesesuaianKompetensi'])) {
                                $sesuai++;
                            } else {
                                $tidakSesuai++;
                            }

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

                        $data = json_encode(array(
                            array(
                                "label" => "Sesuai",
                                "y" => $sesuai,
                            ),
                            array(
                                "label" => "Tidak Sesuai",
                                "y" => $tidakSesuai,
                            ),
                        ));
                    ?>

                </tbody>
            </table>

            <div id="chartContainer1"></div>

            <script>
                const chart1 = new CanvasJS.Chart("chartContainer1", {
	                animationEnabled: true,
	                exportEnabled: true,
	                theme: "light1", // "light1", "light2", "dark1", "dark2"
	                title:{
		                text: "Kesesuaian Kompetensi Dosen dengan Bidang yang diajar"
	                },
	                data: [{
		                type: "column", //change type to bar, line, area, pie, etc
		                indexLabelFontColor: "#5A5757",
		                indexLabelPlacement: "outside",   
		                dataPoints: <?= $data ?>,
	                },]
                });

                chart1.render();
                        
            </script>
        </div>
        <div class="konten" id="dosen-ta">
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

                        $psAkred = array(
                            'ts2' => 0,
                            'ts1' => 0,
                            'ts' => 0,
                        );

                        $psNonAkred = array(
                            'ts2' => 0,
                            'ts1' => 0,
                            'ts' => 0,
                        );

                        foreach ($res[0] as $tt=>$value) {
                            echo '<tr>';
                            echo '<td>'.$value['Nomor'].'</td>';
                            echo '<td>'.$value['NamaDosen'].'</td>';
                            echo '<td>'.$value['TS-2'].'</td>';
                            echo '<td>'.$value['TS-1'].'</td>';
                            echo '<td>'.$value['TS'].'</td>';

                            $psAkred['ts2'] += $value['TS-2'];
                            $psAkred['ts1'] += $value['TS-1'];
                            $psAkred['ts'] += $value['TS'];

                            echo '<td>'.number_format($value['Rata2'], 2).'</td>';
                            echo '<td>'.$value['TS-2b'].'</td>';
                            echo '<td>'.$value['TS-1b'].'</td>';
                            echo '<td>'.$value['TSb'].'</td>';

                            $psNonAkred['ts2'] += $value['TS-2b'];
                            $psNonAkred['ts1'] += $value['TS-1b'];
                            $psNonAkred['ts'] += $value['TSb'];

                            echo '<td>'.number_format($value['Rata2b'], 2).'</td>';
                            echo '<td>'.number_format($value['Rata2_semua'], 2).'</td>';
                            echo '</tr>';
                        }

                        $data1 = json_encode(array(
                            array(
                                "label" => "TS-2",
                                "y" => $psAkred['ts2'],
                                "indexLabel" => "Pada PS yang Diakreditasi",
                            ),
                            array(
                                "label" => "TS-1",
                                "y" => $psAkred['ts1'],
                                "indexLabel" => "Pada PS yang Diakreditasi"
                            ),
                            array(
                                "label" => "TS",
                                "y" => $psAkred['ts'],
                                "indexLabel" => "Pada PS yang Diakreditasi",
                            ),
                        ));

                        $data2 = json_encode(array(
                            array(
                                "label" => "TS-2",
                                "y" => $psNonAkred['ts2'],
                                "indexLabel" => "Pada PS Non Akreditasi",
                            ),
                            array(
                                "label" => "TS-1",
                                "y" => $psNonAkred['ts1'],
                                "indexLabel" => "Pada PS Non Akreditasi",
                            ),
                            array(
                                "label" => "TS",
                                "y" => $psNonAkred['ts'],
                                "indexLabel" => "Pada PS Non Akreditasi",
                            ),
                        ));
                    ?>


    
                </tbody>
            </table>

            <div id="chartContainer2"></div>

            <script>
                const chart2 = new CanvasJS.Chart("chartContainer2", {
                    animationEnabled: true,
                    exportEnabled: true,
                    theme: "light1", // "light1", "light2", "dark1", "dark2"
                    title:{
                        text: "Kesesuaian Kompetensi Dosen dengan Bidang yang diajar"
                    },
                    data: [{
                        type: "column", //change type to bar, line, area, pie, etc
                        indexLabelFontColor: "#5A5757",
                        indexLabelPlacement: "outside",   
                        dataPoints: <?= $data1 ?>,
                    },
                    {
                        type: "column", //change type to bar, line, area, pie, etc
                        indexLabelFontColor: "#5A5757",
                        indexLabelPlacement: "outside",   
                        dataPoints: <?= $data2 ?>,
                    },]
                });

                chart2.render();
            </script>
        </div>
        <div class="konten" id="ewmp">
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

                        $pembelajaranPS = 0;
                        $pembelajaranPSLain = 0;
                        $pembelajaranPSLuar = 0;

                        foreach ($res[0] as $tt=>$value) {
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

                            $pembelajaranPS += $value['PembelajaranPS'];
                            $pembelajaranPSLain += $value['PembelajaranPSLain'];
                            $pembelajaranPSLuar += $value['PembelajaranPSLuar'];
                        }

                        $data3 = json_encode(array(
                            array(
                                "label" => "Pembelajaran PS",
                                "y" => $pembelajaranPS,
                            ),
                            array(
                                "label" => "Pembelajaran PS Lain",
                                "y" => $pembelajaranPSLain,
                            ),
                            array(
                                "label" => "Pembelajaran PS Luar",
                                "y" => $pembelajaranPSLuar,
                            ),
                        ));
                    ?>
                </tbody>   
            </table>

            <div id="chartContainer3"></div>

            <script>
                const chart3 = new CanvasJS.Chart("chartContainer3", {
	                animationEnabled: true,
	                exportEnabled: true,
	                theme: "light1", // "light1", "light2", "dark1", "dark2"
	                title:{
		                text: "Ekuivalen Waktu Mengajar Penuh"
	                },
	                data: [{
		                type: "column", //change type to bar, line, area, pie, etc
		                indexLabelFontColor: "#5A5757",
		                indexLabelPlacement: "outside",   
		                dataPoints: <?= $data3 ?>,
	                },]
                });

                chart3.render();
            </script>
        </div>
        <div class="konten" id="dosen-tidak-tetap">
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
                        $sesuai = 0;
                        $tidakSesuai = 0;

                        foreach ($res[0] as $tt=>$value) {
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
                                $sesuai++;
                            } else {
                                $tidakSesuai++;
                                echo '<td>-</td>';
                            }
                            echo '</tr>';
                        }

                        echo '<tr>';
                        echo '<td colspan="6">NDTT</td>';
                        echo '<td>'.array_values($res[1][0])[0].'</td>';
                        echo '<td>'.array_values($res[2][0])[0].'</td>';
                        echo '<td></td>';
                        echo '<td>'.$sesuai.'</td>';
                        echo '</tr>';

                        $data4 = json_encode(array(
                            array(
                                "label" => "Sesuai",
                                "y" => $sesuai,
                            ),
                            array(
                                "label" => "Tidak Sesuai",
                                "y" => $tidakSesuai,
                            ),
                        ));
                    ?>
                </tbody>

                
            </table>

            <div id="chartContainer4"></div>

            <script>
                const chart4 = new CanvasJS.Chart("chartContainer4", {
	                animationEnabled: true,
	                exportEnabled: true,
	                theme: "light1", // "light1", "light2", "dark1", "dark2"
	                title: {
		                text: "Kesesuaian Bidang Keahlian"
	                },
	                data: [{
		                type: "column", //change type to bar, line, area, pie, etc
		                indexLabelFontColor: "#5A5757",
		                indexLabelPlacement: "outside",   
		                dataPoints: <?= $data ?>,
	                },]
                });

                chart4.render(); 
            </script>
        </div>
        <div class="konten" id="dosen-industri">
            Sedang dalam Maintenance
            <!--<table>
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
            </table>-->
        </div>
        <div class="konten" id="rekognisi-dtps">
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

                        $wilayah = 0;
                        $nasional = 0;
                        $internasional = 0;

                        foreach ($res[0] as $tt=>$value) {
                            echo '<tr>';
                            echo '<td>'.$value['Nomor'].'</td>';
                            echo '<td>'.$value['NamaDosen'].'</td>';
                            echo '<td>'.$value['Bidang Keahlian'].'</td>';
                            echo '<td>'.$value['Rekognisi'].'</td>';
                            echo '<td>'.$value['Wilayah'].'</td>';

                            if (!empty($value['Wilayah'])) {
                                $wilayah++;
                            }

                            echo '<td>'.$value['Nasional'].'</td>';

                            if (!empty($value['Nasional'])) {
                                $nasional++;
                            }

                            echo '<td>'.$value['Internasional'].'</td>';

                            if (!empty($value['Internasional'])) {
                                $internasional++;
                            }

                            echo '<td>'.$value['Tahun'].'</td>';
                            echo '</tr>';
                        }

                        echo '<tr>';
                        echo '<td colspan="4">Jumlah</td>';
                        echo '<td>'.$wilayah.'</td>';
                        echo '<td>'.$nasional.'</td>';
                        echo '<td>'.$internasional.'</td>';
                        echo '<td></td>';
                        echo '</tr>';

                        $data6 = json_encode(array(
                            array(
                                "label" => "Wilayah",
                                "y" => $wilayah,
                            ),
                            array(
                                "label" => "Nasional",
                                "y" => $nasional,
                            ),
                            array(
                                "label" => "Internasional",
                                "y" => $internasional,
                            ),
                        ));
                    ?>
                </tbody>
            </table>

            <div id="chartContainer6"></div>

            <script>
                const chart6 = new CanvasJS.Chart("chartContainer6", {
	                animationEnabled: true,
	                exportEnabled: true,
	                theme: "light1", // "light1", "light2", "dark1", "dark2"
	                title: {
		                text: "Pengakuan / Rekognisi DTPS"
	                },
	                data: [{
		                type: "column", //change type to bar, line, area, pie, etc
		                indexLabelFontColor: "#5A5757",
		                indexLabelPlacement: "outside",   
		                dataPoints: <?= $data ?>,
	                },]
                });

                chart6.render();    
            </script>
        </div>
        <div class="konten" id="penelitian-dtps">
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

                        $ts2 = 0;
                        $ts1 = 0;
                        $ts = 0;
                        $jumlah = 0;

                        foreach ($res[0] as $tt=>$value) {
                            echo '<tr>';
                            echo '<td>'.$i++.'</td>';
                            echo '<td>'.$value['sumberPembiayaan'].'</td>';
                            echo '<td>'.$value['ts2'].'</td>';
                            echo '<td>'.$value['ts1'].'</td>';
                            echo '<td>'.$value['ts'].'</td>';
                            echo '<td>'.$value['jumlah'].'</td>';

                            $ts2 += $value['ts2'];
                            $ts1 += $value['ts1'];
                            $ts += $value['ts'];
                            $jumlah += $value['jumlah'];
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="konten" id="pkm-dtps">
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

                        foreach ($res[0] as $tt=>$value) {
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
        <div class="konten" id="publikasi-dtps">
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

                        foreach ($res[0] as $tt=>$value) {
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
        <div class="konten" id="pagelaran-dtps">
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

                        foreach ($res[0] as $tt=>$value) {
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
                        $res = $tController->getTabel3b4_PartTulisan();
                        $i = 1;


                        foreach ($res[0] as $tt=>$value) {
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
        <div class="konten" id="ki-dtps">
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

                        $citation = 0;

                        foreach ($res[0] as $tt=>$value) {
                            echo '<tr>';
                            echo '<td>'.$i++.'</td>';
                            echo '<td>'.$value['NamaDosen'].'</td>';
                            echo '<td>'.$value['JudulArtikel'].'</td>';
                            echo '<td>'.$value['JumlahSitasi'].'</td>';

                            $citation += $value['JumlahSitasi'];

                            echo '</tr>';
                        }

                        echo '<tr>';
                        echo '<td colspan="3">Jumlah</td>';
                        echo '<td>'.$citation.'</td>';
                        echo '</tr>';
                    ?>
                </tbody>
            </table>
        </div>
        <div class="konten" id="produk-dtps">
            Sedang Dalam Maintenance
            <!--
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
            -->
        </div>
        <div class="konten" id="luaran-dtps">
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

                        foreach ($res[0] as $tt=>$value) {
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

            const content = window.location.hash;

            if (content) {
                show(content.substring(1));
            }

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