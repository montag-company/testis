<?php
// Konfigurasi koneksi PostgreSQL (Contoh untuk Neon)
$host = "ep-xxx.ap-southeast-1.aws.neon.tech"; // Ganti dengan host Neon Anda
$dbname = "database"; // Ganti dengan nama database Anda
$username = "neondb_owner"; // Ganti dengan username Anda
$password = "password_anda"; // Ganti dengan password Anda

$dsn = "pgsql:host=$host;port=5432;dbname=$dbname;sslmode=require";

try {
    $conn = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}
?>
