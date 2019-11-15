<?php
    include "SQL.php";
    include "TableController.php";
?>
<head>
        <title>Pengabdian Pada Masyarakat</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <style>
            table, th, td {
            border: 2px solid black;
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
                    <h2 style="padding: 10px;">Pengabdian Pada Masyarakat</h2>
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
                    <li><a href="#konten-1" onclick="show('konten-1')">PkM DTPS melibatkan Mahasiswa</a></li>
                </div>
            </ul>
        </div>
        <!--Konten Diisi di div dibawah sini, jangan lupa tambahkan kelas "konten" dan idnya masing-masing--> 
        <div class="konten" id="konten-1">
            <div id="tabelPKM">
            <table>
            <tr>
                <td>No</td>
                <td>Nama Dosen</td>
                <td>Tema PkM sesuai Roadmap</td>
                <td>Nama Mahasiswa</td>
                <td>Judul Kegiatan</td>
                <td>Tahun</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            </tr>
            
            <?php
                $db = new SQL();
                $con = new TableController($db);
                $result = $con->getTabel7_PKMDTPSMahasiswa();
                $no = 1;
                for($x=0; $x<sizeof($result[0]); $x++){
                    echo "<tr>";
                    echo "<td>".$no."</td>";
                    echo "<td>".$result[0][$x]['namaDosen']."</td>";
                    echo "<td>".$result[0][$x]['temaPKM']."</td>";
                    echo "<td>".$result[0][$x]['namaMahasiswa']."</td>";
                    echo "<td>".$result[0][$x]['judulKegiatan']."</td>";
                    echo "<td>".$result[0][$x]['tahun']."</td>";
                    echo "</tr>";
                    $no += 1; 
                }
            ?>
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
        </script>
</body>