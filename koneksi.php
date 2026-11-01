<?php
// Konfigurasi koneksi PostgreSQL (Contoh untuk Neon)
$dsn = "pgsql:host=ep-muddy-mouse-b40b93ss-pooler.c-6.us-east-2.aws.neon.tech;port=5432;dbname=neondb;sslmode=require";
$username = "neondb_owner"; // Ganti dengan username Anda
$password = "npg_6mXwLiT5SpBa"; // Ganti dengan password Anda

$dsn = "pgsql:host=$host;port=5432;dbname=$dbname;sslmode=require";

try {
    $conn = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}
?>
