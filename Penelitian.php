<?php
include "SQL.php";
include "TableController.php";
?>

<head>
        <title>Penelitian</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <style>
            table,th,td{
                border:1px solid black;
            }
        </style>
    </head>
    <body style="height: 100%">
        <div class="judul-block">
            <div class="judul-kontainer">
                <div>
                    <img class="unpar-side" src="img/unpar.png" alt="">
                </div>
                <div>
                    <h2 style="padding: 10px;">Penelitian</h2>
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
            <h1>Penelitian DTPS yang Melibatkan Mahasiswa</h1>
            <table>
                <tr>
                    <th>
                        Nomor
                    </th>
                    <th>
                        Nama Dosen
                    </th>
                    <th>
                        Tema Penelitian sesuai Roadmap
                    </th>
                    <th>
                        Nama Mahasiswa
                    </th>
                    <th>
                        Judul Kegiatan
                    </th>
                    <th>
                        Tahun
                    </th>
                </tr>
            <?php
                $db = new SQL();
                $con = new TableController($db);
                $result = $con->getTabel6a_PenelitianDTPSMahasiswa();
                $nomor = 1;
                for($x=0; $x<sizeof($result); $x++){
                    $counter = 1;
                    echo "<tr>";
                    echo "<td>".$nomor."</td>";
                    $nomor++;
                    for($y=0;$y<5;$y++){
                        echo "<td>".$result[$x][$counter]."</td>";
                        $counter++;
                    }
                }
            ?>
            </table>
        </div>
        <div class="konten" id="konten-2">
            <h1>Penelitian DTPS yang Menjadi Rujukan Tema Tesis/Disertasi</h1>
            <table>
                <tr>
                    <th>
                        Nomor
                    </th>
                    <th>
                        Nama Dosen
                    </th>
                    <th>
                        Tema Penelitian sesuai Roadmap
                    </th>
                    <th>
                        Nama Mahasiswa
                    </th>
                    <th>
                        Judul Thesis / Disertasi
                    </th>
                    <th>
                        Tahun
                    </th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td colspan='5'>Jumlah</td>
                    <td>-</td>
                </tr>
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