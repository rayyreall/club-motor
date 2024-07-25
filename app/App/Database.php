<?php

namespace clubMotor\App;


/**
 * Memodelkan koneksi ke database dengan fungsi singleton
 * Agar koneksi ke database hanya dibuat sekali
 */
class Database
{
    /**
     * Konfigurasi untuk koneksi ke database
     * Sesuaikan dengan konfigurasi database Anda
     */
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "root";
    const DB_NAME = "db_clubmotor";

    /**
     * Instance dari kelas Database
     * @var Database | null
     */
    private static $instance = null;
    /**
     * Koneksi ke database
     * @var false|\mysqli
     */
    private $connection;

    /**
     * Membuat koneksi ke database dengan mysqli_connect
     */
    private function __construct()
    {
        $this->connection = mysqli_connect(self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_NAME);
    }

    /**
     * Mengambil connection di cek apakah instance sudah ada
     * Jika belum maka instance dibuat
     * @return Database|null
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    /**
     * Mendapatkan koneksi ke database
     * @return false|\mysqli
     */
    public function getConnection() {
        return $this->connection;
    }
}