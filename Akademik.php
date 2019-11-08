<?php
    	include "SQL.php";
        include "TableController.php";
?> 
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
                    <li><a href="#konten-1" onclick="show('konten-1')">Prestasi Akademik</a></li>
                    <li><a href="#konten-2" onclick="show('konten-2')">Prestasi Non Akademik</a></li>
                    <li><a href="#konten-3" onclick="show('konten-3')">Efektivitas dan Produktivitas Pendidikan</a></li>
                </div>
            </ul>
        </div>
        <!--Konten Diisi di div dibawah sini, jangan lupa tambahkan kelas "konten" dan idnya masing-masing--> 
        <div class="konten" id="konten-1">
        <?php
                $sql = new SQL();
                $tController = new TableController($sql);
                // print_r($tController->getTabel3a2_DosenPembimbingUtamaTugasAkhir());
                $res = $tController->getTabelPrestasiAkademik();
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
                foreach($res1 as $tt=>$value){

                    echo "<tr>";
                    echo "<td>".$i."</td>";
                    echo "<td>".$value['Kegiatan']."</td>";
                    echo "<td>".$value['Tahun']."</td>";

                    if(strtoupper($value['Tingkat']) == 'LOKAL'){
                        echo "<td> <i class='fas fa-check'></i> </td>";
                        echo "<td> &nbsp </td>";
                        echo "<td> &nbsp </td>";
                    } else  if(strtoupper($value['Tingkat']) == 'NASIONAL'){
                        echo "<td> &nbsp </td>";
                        echo "<td> <i class='fas fa-check'></i> </td>";
                        echo "<td> &nbsp </td>";
                    }else  if(strtoupper($value['Tingkat']) == 'INTERNASIONAL'){
                        echo "<td> &nbsp </td>";
                        echo "<td> &nbsp </td>";
                        echo "<td> <i class='fas fa-check'></i> </td>";
                    }

                    echo "<td>".$value['Prestasi']."</td>";

                    echo "</tr>";    
                    $i+=1;
                }

                echo "<tr>";   
                echo "<td colspan='3'><b>".$res[1][0]['Jumlah']."</b></td>";
                echo "<td ><b>".($res[1][0]['Lokal'])."</b></td>";
                echo "<td ><b>".($res[1][0]['Nasional'])."</b></td>";
                echo "<td ><b>".($res[1][0]['Internasional'])."</b></td>";
                echo "<td ></td>";
                echo "</tr>";    

                echo "</table>";
            ?>
        </div>
        <div class="konten" id="konten-2">
        <?php
               
                // print_r($tController->getTabel3a2_DosenPembimbingUtamaTugasAkhir());
                $res = $tController->getTabelPrestasiNonAkademik();
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
                foreach($res1 as $tt=>$value){

                    echo "<tr>";
                    echo "<td>".$i."</td>";
                    echo "<td>".$value['Kegiatan']."</td>";
                    echo "<td>".$value['Tahun']."</td>";

                    if(strtoupper($value['Tingkat']) == 'LOKAL'){
                        echo "<td> <i class='fas fa-check'></i> </td>";
                        echo "<td> &nbsp </td>";
                        echo "<td> &nbsp </td>";
                    } else  if(strtoupper($value['Tingkat']) == 'NASIONAL'){
                        echo "<td> &nbsp </td>";
                        echo "<td> <i class='fas fa-check'></i> </td>";
                        echo "<td> &nbsp </td>";
                    }else  if(strtoupper($value['Tingkat']) == 'INTERNASIONAL'){
                        echo "<td> &nbsp </td>";
                        echo "<td> &nbsp </td>";
                        echo "<td> <i class='fas fa-check'></i> </td>";
                    }

                    echo "<td>".$value['Prestasi']."</td>";

                    echo "</tr>";    
                    $i+=1;
                }

                echo "<tr>";   
                echo "<td colspan='3'><b>".$res[1][0]['Jumlah']."</b></td>";
                echo "<td ><b>".($res[1][0]['Lokal'])."</b></td>";
                echo "<td ><b>".($res[1][0]['Nasional'])."</b></td>";
                echo "<td ><b>".($res[1][0]['Internasional'])."</b></td>";
                echo "<td ></td>";
                echo "</tr>";    
                echo "</table>";
            ?>
        </div>
        <div class="konten" id="konten-3">
        <?php
              
                // print_r($tController->getTabel3a2_DosenPembimbingUtamaTugasAkhir());
                $res = $tController->getTabelMasaStudiLulusan();
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

                foreach($res[0] as $tt=>$value){

                    echo "<tr>";
                    echo "<td>TS".$value['ts_tahun_masuk']."</td>";
                    echo "<td>".$value['jumlah_diterima']."</td>";
                    echo "<td>".$value['TS_MIN_4']."</td>";
                    echo "<td>".$value['TS_MIN_3']."</td>";
                    echo "<td>".$value['TS_MIN_2']."</td>";
                    echo "<td>".$value['TS_MIN_1']."</td>";
                    echo "<td>".$value['TS']."</td>";
                    echo "<td>".$value['lulus_sd_TS']."</td>";

                    $strVal = (string)$value['rata_rata_Studi'];
                    $dotPos = strpos($strVal,".",1);

                    if($dotPos !== FALSE){
                        echo "<td>".substr($strVal,0,$dotPos).substr($strVal,$dotPos, $dotPos+2)."</td>";
                    }else{
                        echo "<td>".$strVal."</td>";
                    }
                    echo "</tr>";    
                }
                echo "</table>";
            ?>
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