<?php
include_once "../SQL.php";

/**
 * Kelas berisi fungsi untuk memanggil semua stored procedure yang ada pada Database Akreditasi2020
 */
class TableController
{
    function __construct($connection)
    {
        $this->connection = $connection;
    }

    function getTabel3a2_DosenPembimbingUtamaTugasAkhir()
    {
        $query = "EXEC [Tabel3a2_DosenPembimbingUtamaTugasAkhir]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel3b5_LuaranPenelitianPKMLainnyaOld()
    {
        $query = "EXEC [Tabel3b5_LuaranPenelitianPKMLainnya.old]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel3b1_RekognisiDTPS()
    {
        $query = "EXEC [Tabel3b1_RekognisiDTPS]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel4_PenggunaanDana()
    {
        $query = "EXEC [Tabel4_PenggunaanDana]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel5b_IntegrasiKegiatanPenelitianPkM()
    {
        $query = "EXEC [Tabel5b_IntegrasiKegiatanPenelitianPkM]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel3a1_DosenTetapUPPS()
    {
        $query = "EXEC [Tabel3a1_DosenTetapUPPS]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel3a4_DosenTidakTetapUPPS()
    {
        $query = "EXEC [Tabel3a4_DosenTidakTetapUPPS]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel3a3_EWMPDosenTetapPerguruanTinggi()
    {
        $query = "EXEC [Tabel3a3_EWMPDosenTetapPerguruanTinggi]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel3b5_KaryaIlmiahDisitasi()
    {
        $query = "EXEC [Tabel3b5_KaryaIlmiahDisitasi]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel3b2_PenelitianDTPS()
    {
        $query = "EXEC [Tabel3b2_PenelitianDTPS]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel3b3_PKMDTPS()
    {
        $query = "EXEC [Tabel3b3_PKMDTPS]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel6a_PenelitianDTPSMahasiswa_test()
    {
        $query = "EXEC [Tabel6a_PenelitianDTPSMahasiswa_test]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel3b4_PartJurnal()
    {
        $query = "EXEC [Tabel3b4_PartJurnal]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel7_PKMDTPSMahasiswa_test()
    {
        $query = "EXEC [Tabel7_PKMDTPSMahasiswa_test]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel3b4_PartSeminar()
    {
        $query = "EXEC [Tabel3b4_PartSeminar]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel4_BiayaPenelitianPKMProdi()
    {
        $query = "EXEC [Tabel4_BiayaPenelitianPKMProdi]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel6a_PenelitianDTPSMahasiswa()
    {
        $query = "EXEC [Tabel6a_PenelitianDTPSMahasiswa]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel7_PKMDTPSMahasiswa()
    {
        $query = "EXEC [Tabel7_PKMDTPSMahasiswa]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel8f1_partJurnalMahasiswa()
    {
        $query = "EXEC [Tabel8f1_partJurnalMahasiswa]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel8f1_PartSeminarMahasiswa()
    {
        $query = "EXEC [Tabel8f1_PartSeminarMahasiswa]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel3b7_LuaranPenelitianPKMLainnya()
    {
        $query = "EXEC [Tabel3b7_LuaranPenelitianPKMLainnya]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel8f3_LuaranPenelitianPKMLainnyaMahasiswa()
    {
        $query = "EXEC [Tabel8f3_LuaranPenelitianPKMLainnyaMahasiswa]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getTabel3b4_PartTulisan()
    {
        $query = "EXEC [Tabel3b4_PartTulisan]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }

    function getRekapIntegrasiMataKuliah()
    {
        $query = "EXEC [RekapIntegrasiMataKuliah]";
        $result = $this->connection->executeStoredProcedure($query, []);
        return $result;
    }
}
