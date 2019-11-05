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
                    <li><a href="#konten-1" onclick="show('konten-1')">Capaian Pembelajaran</a></li>
                    <li><a href="#konten-2" onclick="show('konten-2')">Prestasi Mahasiswa</a></li>
                    <li><a href="#konten-2" onclick="show('konten-2')">Efektivitas dan Produktivitas Pendidikan</a></li>
                    <li><a href="#konten-2" onclick="show('konten-2')">Daya Saing Lulusan</a></li>
                    <li><a href="#konten-2" onclick="show('konten-2')">Kinerja Lulusan</a></li>
                    <li><a href="#konten-2" onclick="show('konten-2')">Luaran Penelitian dan PkM Mahasiswa</a></li>
                </div>
            </ul>
        </div>
        <!--Konten Diisi di div dibawah sini, jangan lupa tambahkan kelas "konten" dan idnya masing-masing--> 
        <div class="konten" id="konten-1">
            asd
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