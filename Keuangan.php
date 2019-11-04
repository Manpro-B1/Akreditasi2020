<?php
    include "SQL.php";
    include "TableController.php";
?>
<head>
        <title>Keuangan</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <style>
            table, th, td {
            border: 1px solid black;
            font-size: 14.5px;
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
                    <h2 style="padding: 10px;">Keuangan, Sarana dan Prasarana</h2>
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
            <h1>Penggunaan Dana</h1>
            <table>
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Jenis Penggunaan</th>
                    <th colspan="4">UPPS</th>
                    <th colspan="4">Program Studi</th>
                </tr>
                <tr>
                    <td>TS-2</td>
                    <td>TS-1</td>
                    <td>TS</td>
                    <td>Rata-rata</td>
                    
                    <td>TS-2</td>
                    <td>TS-1</td>
                    <td>TS</td>
                    <td>Rata-rata</td>
                </tr>
            <?php
                $db = new SQL();
                $con = new TableController($db);
                $result = $con->getTabel4_PenggunaanDana();
                $counter = 0;
                for($x=0; $x<sizeof($result[0]); $x++){
                    echo "<tr>";
                    echo "<td>".$result[0][$x]['Nomor']."</td>";
                    $counter = $counter+1;
                    echo "<td>".$result[0][$x]['jenisPenggunaan']."</td>";
                    $counter = $counter+1;
                    if($result[0][$x]['TS_2_UPPS'] == null){
                        echo "<td colspan='8'>".$result[0][$x]['TS_2_UPPS']."</td>";
                        $counter = 0;
                        echo "</tr>";
                    }
                    else{
                        echo "<td>".$result[0][$x]['TS_2_UPPS']."</td>";
                        $counter = $counter+1;
                        echo "<td>".$result[0][$x]['TS_1_UPPS']."</td>";
                        $counter = $counter+1;
                        echo "<td>".$result[0][$x]['TS_UPPS']."</td>";
                        $counter = $counter+0;
                        echo "<td>".$result[0][$x]['Rata_rata_UPPS']."</td>";
                        $counter = $counter+0;
                        echo "<td>".$result[0][$x]['TS_2_PS']."</td>";
                        $counter = $counter+0;
                        echo "<td>".$result[0][$x]['TS_1_PS']."</td>";
                        $counter = $counter+0;
                        echo "<td>".$result[0][$x]['TS_PS']."</td>";
                        $counter = $counter+0;
                        echo "<td>".$result[0][$x]['Rata_rata_PS']."</td>";
                        $counter = 0;
                        echo "</tr>";
                    }  
                }
            ?>
            </table>
        </div>
        <div class="konten" id="konten-2">
            dsa
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