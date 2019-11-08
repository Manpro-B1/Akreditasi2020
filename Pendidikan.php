<?php
    	include "SQL.php";
        include "TableController.php";
?> 
<head>
        <title>Pendidikan</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/4f75ac5aa8.js" crossorigin="anonymous"></script>
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
                    <li><a href="#konten-1" onclick="show('konten-1')">Prestasi Akademik</a></li>
                    <li><a href="#konten-2" onclick="show('konten-2')">Prestasi Non Akademik</a></li>
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
                foreach($res as $tt=>$value){

                    echo "<tr >";
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

                echo "</table>";
            ?>
        </div>
        <div class="konten" id="konten-2">
        <?php
                $sql = new SQL();
                $tController = new TableController($sql);
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
                foreach($res as $tt=>$value){

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

                echo "</table>";
            ?>
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