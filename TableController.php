<?php

/**
 * Kelas berisi fungsi untuk memanggil semua stored procedure yang ada pada Database Akreditasi2020
 */
class TableController
{
    /**
     * Constructor untuk kelas TableController
     * @param   SQL $connection  koneksi ke Server yang sudah dibuat
     */
    function __construct($connection)
    {
        $this->connection = $connection;
    }


    /**
     * Fungsi untuk mengambil data ) Dosen Tetap Perguruan Tinggi 
     * yang ditugaskan sebagai pengampu mata kuliah di Program Studi 
     * yang diakreditasi
     */
    function getTabel3a1_DosenTetapUPPS()
    {
        $query = "EXEC [Tabel3a1_DosenTetapUPPS];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    /**
     * Fungsi untuk mengambil data Dosen Pembimbing Utama Tugas Akhir
     */
    function getTabel3a2_DosenPembimbingUtamaTugasAkhir()
    {
        $query = "EXEC [Tabel3a2_DosenPembimbingUtamaTugasAkhir];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }


    /**
     *  Fungsi untuk mengambil data Ekuivalen Waktu Mengajar Penuh (EWMP) Dosen Tetap Perguruan Tinggi
     */
    function getTabel3a3_EWMPDosenTetapPerguruanTinggi()
    {
        $query = "EXEC [Tabel3a3_EWMPDosenTetapPerguruanTinggi];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    /**
     *  Fungsi untuk mengambil data Dosen Tidak Tetap yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang Diakreditasi
     */
    function getTabel3a4_DosenTidakTetapUPPS()
    {
        $query = "EXEC [Tabel3a4_DosenTidakTetapUPPS];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    /**
     * Fungsi untuk mengambil data pengakuan/rekognisi atas kepakaran/prestasi/kinerja DTPS yang diterima dalam 3 tahun terakhir
     */
    function getTabel3b1_RekognisiDTPS()
    {
        $query = "EXEC [Tabel3b1_RekognisiDTPS];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    /**
     * Fungsi untuk mengambil data Penelitian Dosen Tetap Program Studi
     */
    function getTabel3b2_PenelitianDTPS()
    {
        $query = "EXEC [Tabel3b2_PenelitianDTPS];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    /**
     * Fungsi untuk mengambil data Pengabdian kepada Masyarakat (PkM) yang dilaksanakan oleh DTPS
     */
    function getTabel3b3_PKMDTPS()
    {
        $query = "EXEC [Tabel3b3_PKMDTPS];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    /**
     * Fungsi untuk mengambil data jumlah publikasi ilmiah dengan judul yang relevan dengan bidang program
     * studi, yang dihasilkan oleh DTPS dalam 3 tahun terakhir (part Jurnal)
     */
    function getTabel3b4_PartJurnal()
    {
        $query = "EXEC [Tabel3b4_PartJurnal];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    /**
     * Fungsi untuk mengambil data jumlah publikasi ilmiah dengan judul yang relevan dengan bidang program
     * studi, yang dihasilkan oleh DTPS dalam 3 tahun terakhir (part Seminar)
     */
    function getTabel3b4_PartSeminar()
    {
        $query = "EXEC [Tabel3b4_PartSeminar];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    /**
     * Fungsi untuk mengambil data jumlah publikasi ilmiah dengan judul yang relevan dengan bidang program
     * studi, yang dihasilkan oleh DTPS dalam 3 tahun terakhir (part Tulisan)
     */
    function getTabel3b4_PartTulisan()
    {
        $query = "EXEC [Tabel3b4_PartTulisan];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    /**
     * Fungsi untuk mengambil data judul luaran penelitian atau judul luaran PkM 
     * yang dihasilkan DTPS dalam 3 tahun terakhir
     */
    function getTabel3b7_LuaranPenelitianPKMLainnya()
    {
        $query = "EXEC [Tabel3b7_LuaranPenelitianPKMLainnya];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }


    /**
     * Fungsi untuk mengambil data Karya ilmiah DTPS yang disitasi dalam 3 tahun terakhir
     */
    function getTabel3b5_KaryaIlmiahDisitasi()
    {
        $query = "EXEC [Tabel3b5_KaryaIlmiahDisitasi];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }


    /**
     * Fungsi untuk mengambil data  penggunaan dana yang dikelola oleh UPPS dan 
     * data penggunaan dana yang dialokasikan ke program studi yang
     * diakreditasi dalam 3 tahun terakhir 
     */
    function getTabel4_PenggunaanDana()
    {
        $query = "EXEC [Tabel4_PenggunaanDana];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    /**
     * 
     */
    function getTabel4_BiayaPenelitianPKMProdi()
    {
        $query = "EXEC [Tabel4_BiayaPenelitianPKMProdi];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }


    /**
     * Fungsi untuk mengambil data judul penelitian/PkM DTPS yang terintegrasi ke dalam pembelajaran/
     * pengembangan matakuliah dalam 3 tahun terakhir 
     */
    function getTabel5b_IntegrasiKegiatanPenelitianPkM()
    {
        $query = "EXEC [Tabel5b_IntegrasiKegiatanPenelitianPkM];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    /**
     * 
     */
    function getTabel6a_PenelitianDTPSMahasiswa_test()
    {
        $query = "EXEC [Tabel6a_PenelitianDTPSMahasiswa_test];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }


    /**
     * Fungsi untuk mengambil data penelitian DTPS yang dalam pelaksanaannya melibatkan mahasiswa
     * Program Studi pada TS-2 sampai dengan TS 
     */
    function getTabel6a_PenelitianDTPSMahasiswa()
    {
        $query = "EXEC [Tabel6a_PenelitianDTPSMahasiswa];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    /**
     * Fungsi untuk mengambil data pengabdian kepada masyarakat (PkM) DTPS yang dalam
     * pelaksanaannya melibatkan mahasiswa Program Studi pada TS-2 sampai dengan TS 
     */
    function getTabel7_PKMDTPSMahasiswa()
    {
        $query = "EXEC [Tabel7_PKMDTPSMahasiswa];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    /**
     * 
     */
    function getTabel7_PKMDTPSMahasiswa_test()
    {
        $query = "EXEC [Tabel7_PKMDTPSMahasiswa_test];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    /**
     * Fungsi untuk mengambil data jumlah publikasi ilmiah mahasiswa, yang dihasilkan secara mandiri atau
     * bersama DTPS, dalam 3 tahun terakhir (part jurnal)
     */
    function getTabel8f1_partJurnalMahasiswa()
    {
        $query = "EXEC [Tabel8f1_partJurnalMahasiswa];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    /**
     * Fungsi untuk mengambil data jumlah publikasi ilmiah mahasiswa, yang dihasilkan secara mandiri atau
     * bersama DTPS, dalam 3 tahun terakhir (part seminar)
     */
    function getTabel8f1_PartSeminarMahasiswa()
    {
        $query = "EXEC [Tabel8f1_PartSeminarMahasiswa];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    /**
     * Fungsi untuk mengambil data luaran penelitian dan luaran PkM yang dihasilkan mahasiswa, baik secara
     * mandiri atau bersama DTPS, dalam 3 tahun terakhir
     */
    function getTabel8f3_LuaranPenelitianPKMLainnyaMahasiswa()
    {
        $query = "EXEC [Tabel8f3_LuaranPenelitianPKMLainnyaMahasiswa];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    /**
     * 
     */
    function getRekapIntegrasiMataKuliah()
    {
        $query = "EXEC [RekapIntegrasiMataKuliah];";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }


    ########################################################################
    #       Tabel dari Database bukan Stored Procedure                     #
    ########################################################################


    /**
     * Fungsi untuk mengambil data kerjasama tridharma di Unit Pengelola Program Studi (UPPS) 
     * dalam 3 tahun terakhir
     */
    function getTabelKerjasama()
    {
        $query = "SELECT * FROM Kerjasama;";
        $result = $this->connection->executeSelectQuery($query, []);
        return $result;
    }

    /**
     * Fungsi untuk mengambil data prestasi akademik yang dicapai mahasiswa Program Studi 
     * dalam 5 tahun terakhir
     */
    function getTabelPrestasiAkademik()
    {
        $query = " SELECT * FROM prestasi_mhs WHERE prestasi_mhs.Akademik = 'Akademik';";
        $result[] = $this->connection->executeSelectQuery($query, []);

        $query = "SELECT
                        'Jumlah' AS Jumlah,
                        lokal.lokal AS Lokal,
                        nasional.nasional AS Nasional,
                        internasional.internasional as Internasional
                    FROM
                        (
                        SELECT 
                            '1' as id,
                            COUNT(Kegiatan) as lokal
                        FROM prestasi_mhs 
                        WHERE prestasi_mhs.Akademik = 'Akademik' AND prestasi_mhs.Tingkat LIKE 'Lokal'
                        ) AS lokal
                        JOIN 
                        (
                        SELECT 
                            '1' as id,
                            COUNT(Kegiatan) as nasional
                        FROM prestasi_mhs 
                        WHERE prestasi_mhs.Akademik = 'Akademik' AND prestasi_mhs.Tingkat LIKE 'Nasional'
                        ) AS nasional
                        ON  lokal.id = nasional.id
                        JOIN 
                        (
                        SELECT 
                            '1' as id,
                            COUNT(Kegiatan) as internasional
                        FROM prestasi_mhs 
                        WHERE prestasi_mhs.Akademik = 'Akademik' AND prestasi_mhs.Tingkat LIKE 'Internasional'
                        ) AS internasional
                        ON  lokal.id = internasional.id        
                        ";
        $result[] = $this->connection->executeSelectQuery($query, []);
        return $result;
    }

    /**
     * Fungsi untuk mengambil data prestasi nonakademik yang dicapai mahasiswa Program Studi 
     * dalam 5 tahun terakhir
     */
    function getTabelPrestasiNonAkademik()
    {
        $query = " SELECT * FROM prestasi_mhs WHERE prestasi_mhs.Akademik = 'Non-akademik';";
        $result[] = $this->connection->executeSelectQuery($query, []);

        $query = "SELECT
                        'Jumlah' AS Jumlah,
                        lokal.lokal AS Lokal,
                        nasional.nasional AS Nasional,
                        internasional.internasional as Internasional
                    FROM
                        (
                        SELECT 
                            '1' as id,
                            COUNT(Kegiatan) as lokal
                        FROM prestasi_mhs 
                        WHERE prestasi_mhs.Akademik = 'Non-akademik' AND prestasi_mhs.Tingkat LIKE 'Lokal'
                        ) AS lokal
                        JOIN 
                        (
                        SELECT 
                            '1' as id,
                            COUNT(Kegiatan) as nasional
                        FROM prestasi_mhs 
                        WHERE prestasi_mhs.Akademik = 'Non-akademik' AND prestasi_mhs.Tingkat LIKE 'Nasional'
                        ) AS nasional
                        ON  lokal.id = nasional.id
                        JOIN 
                        (
                        SELECT 
                            '1' as id,
                            COUNT(Kegiatan) as internasional
                        FROM prestasi_mhs 
                        WHERE prestasi_mhs.Akademik = 'Non-akademik' AND prestasi_mhs.Tingkat LIKE 'Internasional'
                        ) AS internasional
                        ON  lokal.id = internasional.id        
                        ";
        $result[] = $this->connection->executeSelectQuery($query, []);
        return $result;
    }

    /**
     * Fungsi untuk mengambil data kelulusan 3 tahun terakhir. 
     */
    function getTabelDataLulus()
    {
        $query = "SELECT * FROM Kelulusan_TD;";
        $result = $this->connection->executeSelectQuery($query, []);
        return $result;
    }

    /**
     * Fungsi untuk mengambil jumlah lulusan, rata-rata IPK lulusan, IPK minimal, dan IPK maksimum pada TS, TS-1, dan TS-2
     */
    function getLulusanByTS()
    {
        $queryTS = "SELECT 
                        'TS-2' AS tahunLulus,
                        COUNT(kelulusan.NPM) AS jumlah,
                        MIN(kelulusan.IPK) AS minIPK,
                        AVG(kelulusan.IPK) AS rataRata,
                        MAX(kelulusan.IPK) AS maxIPK
                    FROM
                        (
                        SELECT * 
                        FROM Kelulusan_TD 
                        WHERE Kelulusan_TD.Tgl_Yudisium < (SELECT CONCAT(YEAR(getdate())-2,'-08-01'))
                        AND Kelulusan_TD.Tgl_Yudisium > (SELECT CONCAT(YEAR(getdate())-3,'-07-30'))
                        )AS kelulusan;
                    ";

        $result[] = $this->connection->executeSelectQuery($queryTS, []);

        $queryTS = "SELECT 
                        'TS-1' AS tahunLulus,
                        COUNT(kelulusan.NPM) AS jumlah,
                        MIN(kelulusan.IPK) AS minIPK,
                        AVG(kelulusan.IPK) AS rataRata,
                        MAX(kelulusan.IPK) AS maxIPK
                    FROM
                        (
                        SELECT * 
                        FROM Kelulusan_TD 
                        WHERE Kelulusan_TD.Tgl_Yudisium < (SELECT CONCAT(YEAR(getdate())-1,'-08-01'))
                        AND Kelulusan_TD.Tgl_Yudisium > (SELECT CONCAT(YEAR(getdate())-2,'-07-30'))
                        )AS kelulusan;
                    ";

        $result[] = $this->connection->executeSelectQuery($queryTS, []);

        $queryTS = "SELECT 
                        'TS' AS tahunLulus,
                        COUNT(kelulusan.NPM) AS jumlah,
                        MIN(kelulusan.IPK) AS minIPK,
                        AVG(kelulusan.IPK) AS rataRata,
                        MAX(kelulusan.IPK) AS maxIPK
                    FROM
                        (
                        SELECT * 
                        FROM Kelulusan_TD 
                        WHERE Kelulusan_TD.Tgl_Yudisium < (SELECT CONCAT(YEAR(getdate()),'-08-01'))
                        AND Kelulusan_TD.Tgl_Yudisium > (SELECT CONCAT(YEAR(getdate())-1,'-07-30'))
                        )AS kelulusan;
                    ";

        $result[] = $this->connection->executeSelectQuery($queryTS, []);
        return $result;
    }

    /**
     * Fungsi untuk mengambil data lulusan pada TS, TS-1, dan TS-2
     */
    function getFullDataLulusanByTS()
    {
        $queryTS = "SELECT * FROM Kelulusan_TD WHERE Kelulusan_TD.Tgl_Yudisium < (SELECT CONCAT(YEAR(getdate()),'-08-01')) 
                    AND Kelulusan_TD.Tgl_Yudisium > (SELECT CONCAT(YEAR(getdate())-1,'-07-30'));";
        $result["TS"] = $this->connection->executeSelectQuery($queryTS, []);

        $queryTS1 = "SELECT * FROM Kelulusan_TD WHERE Kelulusan_TD.Tgl_Yudisium < (SELECT CONCAT(YEAR(getdate())-1,'-08-01')) 
                    AND Kelulusan_TD.Tgl_Yudisium > (SELECT CONCAT(YEAR(getdate())-2,'-07-30'));";

        $result["TS-1"] = $this->connection->executeSelectQuery($queryTS1, []);

        $queryTS2 = "SELECT * FROM Kelulusan_TD WHERE Kelulusan_TD.Tgl_Yudisium < (SELECT CONCAT(YEAR(getdate())-2,'-08-01')) 
                    AND Kelulusan_TD.Tgl_Yudisium > (SELECT CONCAT(YEAR(getdate())-3,'-07-30'));";

        $result["TS-2"] = $this->connection->executeSelectQuery($queryTS2, []);
        return $result;
    }

    /**
     * Fungsi untuk mengambil data Masa Studi Lulusan Program Studi 
     */
    function getTabelMasaStudiLulusan()
    {
        $query = "
        DECLARE  @arrayTahunMasuk TABLE (
            id INT  IDENTITY(1,1) PRIMARY KEY,
            tahunMasuk INT, 
            ts_tahun_masuk INT, 
            jumlah_diterima INT, 
            TS_MIN_4 INT, 
            TS_MIN_3 INT, 
            TS_MIN_2 INT,
            TS_MIN_1 INT,
            TS INT,
            lulus_sd_TS INT,
            rata_rata_Studi FLOAT
        );
        
        INSERT INTO 
            @arrayTahunMasuk(tahunMasuk, ts_tahun_masuk , jumlah_diterima)
                SELECT
                    *
                FROM
                    (
                        SELECT
                            tahun_masuk,
                            tahun_masuk -YEAR(getdate()) AS ts_tahun_masuk,
                            COUNT(id) as jumlahMhsDiterima
                        FROM
                            (
                                SELECT
                                    id,tahun_lulus, 
                                    CAST(SUBSTRING(npm,0,5) AS INT) AS tahun_masuk
                                    FROM
                                        data_lulus
                                    WHERE CAST(SUBSTRING(npm,0,5) AS INT) >= YEAR(getdate())-6
                            )AS dataTS
                        GROUP BY dataTS.tahun_masuk
                    ) AS countMasuk
        
        DECLARE @cnt INT = (SELECT MIN(tahunMasuk) FROM @arrayTahunMasuk);
        
        DECLARE @totalRow INT = (SELECT MAX(tahunMasuk) FROM @arrayTahunMasuk);
        
        WHILE @cnt <= @totalRow
        BEGIN
                   UPDATE @arrayTahunMasuk
                   SET TS_MIN_4  = result.jumlah
                   FROM
                   (
                       SELECT COUNT(data_lulus.id) AS jumlah
                       FROM data_lulus
                       WHERE data_lulus.tahun_lulus LIKE CAST((YEAR(getdate())-4) AS varchar(4))
                        AND CAST(SUBSTRING(npm,0,5) AS INT) = @cnt
                   ) AS result
            
                   WHERE tahunMasuk = @cnt;
        
                    UPDATE @arrayTahunMasuk
                   SET TS_MIN_3  = (
                       SELECT COUNT(data_lulus.id) AS jumlah
                       FROM data_lulus
                       WHERE data_lulus.tahun_lulus LIKE CAST((YEAR(getdate())-3) AS varchar(4))
                        AND CAST(SUBSTRING(npm,0,5) AS INT) = @cnt
                   ) 
                   WHERE tahunMasuk = @cnt;
        
                    UPDATE @arrayTahunMasuk
                   SET TS_MIN_2  = 
                   (
                       SELECT COUNT(data_lulus.id) AS jumlah
                       FROM data_lulus
                       WHERE data_lulus.tahun_lulus LIKE CAST((YEAR(getdate())-2) AS varchar(4))
                        AND CAST(SUBSTRING(npm,0,5) AS INT) = @cnt
                   ) 
                    WHERE tahunMasuk = @cnt;
        
                    UPDATE @arrayTahunMasuk
                   SET TS_MIN_1  = (
                       SELECT COUNT(data_lulus.id) AS jumlah
                       FROM data_lulus
                       WHERE data_lulus.tahun_lulus LIKE CAST((YEAR(getdate())-1) AS varchar(4))
                        AND CAST(SUBSTRING(npm,0,5) AS INT) = @cnt
                   )
                   WHERE tahunMasuk = @cnt;
        
                    UPDATE @arrayTahunMasuk
                   SET TS  = (
                       SELECT COUNT(data_lulus.id) AS jumlah
                       FROM data_lulus
                       WHERE data_lulus.tahun_lulus LIKE CAST((YEAR(getdate())) AS varchar(4))
                        AND CAST(SUBSTRING(npm,0,5) AS INT) = @cnt
                   )
                   WHERE tahunMasuk = @cnt;
        
                   UPDATE @arrayTahunMasuk
                   SET lulus_sd_TS = TS_MIN_4 + TS_MIN_3+TS_MIN_2+TS_MIN_1+TS;
        
                   UPDATE @arrayTahunMasuk
                   SET rata_rata_Studi = CAST(((TS_MIN_4*(YEAR(getdate())-5-tahunMasuk)) + 
                                        (TS_MIN_3*(YEAR(getdate())-4-tahunMasuk)) +
                                        (TS_MIN_2*(YEAR(getdate())-3-tahunMasuk)) +
                                        (TS_MIN_1*(YEAR(getdate())-2-tahunMasuk)) +
                                        (TS*(YEAR(getdate())-1-tahunMasuk)))AS FLOAT)/CAST(lulus_sd_TS AS FLOAT);
        
        
           SET @cnt = @cnt + 1;
        END;
        
        SELECT
                *
        FROM
            @arrayTahunMasuk
        
        ";

        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }
}
