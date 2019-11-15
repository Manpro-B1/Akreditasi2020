<?php
    	include "SQL.php";
        include "TableController.php";
?>
    <head>
        <title>Tata Pamong</title>
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
                    <h2 style="padding: 10px;">Tata Pamong, Tata Kelola dan Kerja Sama</h2>
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
                    <li><a href="#konten-1" onclick="show('konten-1')">Kerja Sama</a></li>
                </div>
            </ul>
        </div>
        <!--Konten Diisi di div dibawah sini, jangan lupa tambahkan kelas "konten" dan idnya masing-masing--> 
        <div class="konten" id="konten-1">
        <?php
                $sql = new SQL();
                $tController = new TableController($sql);
                // print_r($tController->getTabel3a2_DosenPembimbingUtamaTugasAkhir());
                $res = $tController->getTabelKerjasama();
                // print_r($res);
                echo "<br>";
                // print_r($res[0]["NamaDosen"]);
                echo "<table>";
                echo "<tr>";
                // echo "<td>No</td>";
                echo "<th>LembagaMitra</th>";
                echo "<th>Tingkat</th>";
                echo "<th>Judul/KegiatanKerjaSama</th>";
                echo "<th>Manfaat</th>";
                echo "<th>WaktuMulai</th>";
                echo "<th>WaktuBerakhir</th>";
                echo "<th>BuktiKerjaSama</th>";
                echo "</tr>";

                foreach($res as $tt=>$value){

                    echo "<tr>";
                    // echo "<td>".$value['No']."</td>";
                    echo "<td>".$value['LembagaMitra']."</td>";
                    echo "<td>".$value['Tingkat']."</td>";
                    echo "<td>".$value['JudulKegiatanKerjaSama']."</td>";
                    echo "<td>".$value['Manfaat']."</td>";

                    if($value['WaktuMulai'] != null ){
                        echo "<td>".$value['WaktuMulai']->format('Y-m-d H:i:s')."</td>";
                    }else{
                        echo "<td></td>";
                    }

                    if( $value['WaktuBerakhir'] != null){
                        echo "<td>".$value['WaktuBerakhir']->format('Y-m-d H:i:s')."</td>";
                    }else{
                        echo "<td></td>";
                    }
                    
 
                    echo "<td>".$value['BuktiKerjaSama']."</td>";
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