<head>
        <link rel="stylesheet" href="style.css">
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
                <div id="main">
                        <button class="openbtn" onclick="openNav()"><img src="img/menu.png" style="width: 60px; height: 50px;"></button>
                </div>
                <div id="mySidebar" class="sidebar">
                        <a href="javascript:void(0)" 
                        class="closebtn" onclick="closeNav()">&times;</a>
                <div class="bar-container-side">
                    <a class="link-konten-slide" href="TataPamong.php">
                        <div class="bar-flex-side">
                            <img class="gambar-konten-side" src="img/kerjasama.png">
                        </div>
                    </a>
                    <a class="link-konten-slide" href="Mahasiswa.php">
                        <div class="bar-flex-side">
                            <img class="gambar-konten-side" src="img/mahasiswa.png">
                        </div>
                    </a>
                    <a class="link-konten-slide" href="SDM.php">
                        <div class="bar-flex-side">
                            <img class="gambar-konten-side" src="img/sdm.png">
                        </div>
                    </a>
                    <a class="link-konten-slide" href="Keuangan.php">
                        <div class="bar-flex-side">
                            <img class="gambar-konten-side" src="img/keuangan.png">
                        </div>
                    </a>        
                    <a class="link-konten-slide" href="Pendidikan.php">
                        <div class="bar-flex-side">
                            <img class="gambar-konten-side" src="img/akademik.png">
                        </div>
                    </a>
                    <a class="link-konten-slide" href="Penelitian.php">
                        <div class="bar-flex-side">
                            <img class="gambar-konten-side" src="img/penelitian.png">
                        </div>
                    </a>
                    <a class="link-konten-slide" href="Pengabdian.php">
                        <div class="bar-flex-side">
                            <img class="gambar-konten-side" src="img/pengmas.png">
                        </div>
                    </a>
                    <a class="link-konten-slide" href="Capaian.php">
                        <div class="bar-flex-side">
                            <img class="gambar-konten-side" src="img/pencapaian.png">
                        </div>
                    </a>
        </div>
</div>
        <script>
                function openNav() {
                    document.getElementById("mySidebar").style.width = "90px";
                    document.getElementById("main").style.marginLeft = "0px";
                }
            
                function closeNav() {
                    document.getElementById("mySidebar").style.width = "0";
                    document.getElementById("main").style.marginLeft = "0";
                }
        </script>
</body>