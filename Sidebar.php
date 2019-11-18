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
                    <div>
                        <a href="javascript:void(0)" 
                        class="closebtn" onclick="closeNav()">&times;</a>
                    </div>
                <div class="bar-container-side">
                <a id="home" class="link-konten-slide" href="Homepage.php">HOME</a>
                    <a class="link-konten-slide" href="TataPamong.php">
                        <div class="bar-flex-side">
                            <img class="gambar-konten-side" src="img/kerjasama.png"> <span class="labelMenu">Kerja sama</span>
                        </div>
                    </a>
                    <a class="link-konten-slide" href="Mahasiswa.php">
                        <div class="bar-flex-side">
                            <img class="gambar-konten-side" src="img/mahasiswa.png"> <span class="labelMenu">Mahasiswa</span>
                        </div>
                    </a>
                    <a class="link-konten-slide" href="SDM.php">
                        <div class="bar-flex-side">
                            <img class="gambar-konten-side" src="img/sdm.png"> <span class="labelMenu">Sumber Daya Manusia</span>
                        </div>
                    </a>
                    <a class="link-konten-slide" href="Keuangan.php">
                        <div class="bar-flex-side">
                            <img class="gambar-konten-side" src="img/keuangan.png"> <span class="labelMenu">Keuangan</span>
                        </div>
                    </a>        
                    <a class="link-konten-slide" href="Pendidikan.php">
                        <div class="bar-flex-side">
                            <img class="gambar-konten-side" src="img/akademik.png"> <span class="labelMenu">Akademik</span>
                        </div>
                    </a>
                    <a class="link-konten-slide" href="Penelitian.php">
                        <div class="bar-flex-side">
                            <img class="gambar-konten-side" src="img/penelitian.png"> <span class="labelMenu">Penelitian</span>
                        </div>
                    </a>
                    <a class="link-konten-slide" href="Pengabdian.php">
                        <div class="bar-flex-side">
                            <img class="gambar-konten-side" src="img/pengmas.png"> <span class="labelMenu">Pengabdian Masyarakat</span>
                        </div>
                    </a>
                    <a class="link-konten-slide" href="Capaian.php">
                        <div class="bar-flex-side">
                            <img class="gambar-konten-side" src="img/pencapaian.png"> <span class="labelMenu">Pencapaian</span>
                        </div>
                    </a>
        </div>
</div>
        <script>
                function openNav() {
                    document.getElementById("mySidebar").style.width = "25%";
                    document.getElementById("main").style.marginLeft = "0px";
                }
            
                function closeNav() {
                    document.getElementById("mySidebar").style.width = "0";
                    document.getElementById("main").style.marginLeft = "0";
                }
        </script>
</body>