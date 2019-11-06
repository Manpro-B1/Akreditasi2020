<head>
    <title>Mahasiswa</title>
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
                <h2 style="padding: 10px;">Mahasiswa</h2>
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
    <h2>Data Tidak Tersedia</h2>
    <table style="width:100%">
        <tr>
            <th>Tahun Akademik</th>
            <th>Daya Tampung</th>
            <th colspan="2">Jumlah Calon Mahasiswa</th>
            <th colspan="2">Jumlah Mahasiswa Baru</th>
            <th colspan="2">Jumlah Mahasiswa Aktif</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Pendaftar</td>
            <td>Lulus Seleksi</td>
            <td>Reguler</td>
            <td>Transfer</td>
            <td>Reguler</td>
            <td>Transfer</td>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
        </tr>
        <tr>
            <td>TS-4</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>TS-3</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>TS-2</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>TS-1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>TS</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td> <font size="5">N</font>RTS = </td>
            <td> <font size="5">N</font>TTS = </td>
        </tr>
        <tr>
            <td colspan="2">Jumlah</td>
            <td><font size="5">N</font>A =</td>
            <td><font size="5">N</font>B =</td>
            <td><font size="5">N</font>C =</td>
            <td><font size="5">N</font>D =</td>
            <td colspan="2"><font size="5">N</font>M = <font size="5">N</font>RTS + <font size="5">N</font>TTS</td>
        </tr>
    </table>
    </div>
    <div class="konten" id="konten-2">
    <h2>Data Tidak Tersedia</h2>
    <table style="width:100%">
        <tr>
            <th>No</th>
            <th>Program Studi</th>
            <th colspan="3">Jumlah Mahasiswa Aktif</th>
            <th colspan="3">Jumlah Mahasiswa Asing Penuh Waktu (<i>Full Time</i>)</th>
            <th colspan="3">Jumlah Mahasiswa Asing Paruh Waktu (<i>Part Time</i>)</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>TS-2</td>
            <td>TS-1</td>
            <td>TS</td>
            <td>TS-2</td>
            <td>TS-1</td>
            <td>TS</td>
            <td>TS-2</td>
            <td>TS-1</td>
            <td>TS</td>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
        </tr>
        <tr>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>...</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2">Jumlah</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
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