<?php
    	include "SQL.php";
        include "TableController.php";
?>

<head>
        <title>Pendidikan</title>
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
                    <li><a href="#konten-1" onclick="show('konten-1')">konten 1</a></li>
                    <li><a href="#konten-2" onclick="show('konten-2')">konten 2</a></li>
                </div>
            </ul>
        </div>
        <!--Konten Diisi di div dibawah sini, jangan lupa tambahkan kelas "konten" dan idnya masing-masing--> 
        <div class="konten" id="konten-1">
            asdasd
        </div>
        <div class="konten" id="konten-2">
            <h1> Integrasi Kegiatan Penelitian/PkM dalam Pembelajaran</h1>
                <table>
                 <tr>
                    <th>No.</th>
                    <th>Judul Penelitian/PkM</th>
                    <th>Nama Dosen</th>
                    <th>Mata Kuliah</th>
                    <th>Bentuk Integrasi</th>
                 </tr>
                <?php
                    $db = new SQL();
                    $con = new TableController($db);
                    $result = $con->getTabel5b_IntegrasiKegiatanPenelitianPkM();
                    $counter = 0;
                    for($x=0; $x<sizeof($result[0]); $x++){
                        echo "<tr>";
                        echo "<td>".$result[0][$x]['idIntegrasi']."</td>";
                        $counter = $counter+1;
                        echo "<td>".$result[0][$x]['judul']."</td>";
                        $counter = $counter+1;
                        echo "<td>".$result[0][$x]['dosen']."</td>";
                        $counter = $counter+1;
                        echo "<td>".$result[0][$x]['namaMatakuliah']."</td>";
                        $counter = $counter+1;
                        echo "<td>".$result[0][$x]['bentukIntegrasi']."</td>";
                        $counter = $counter+1;
                    }
                ?>
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