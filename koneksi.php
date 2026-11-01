<?php
// Konfigurasi koneksi PostgreSQL (Neon)
$host = "ep-muddy-mouse-b40b93ss-pooler.c-6.us-east-2.aws.neon.tech";
$dbname = "neondb";
$username = "neondb_owner";
$password = "npg_6mXwLiT5SpBa";

$dsn = "pgsql:host=$host;port=5432;dbname=$dbname;sslmode=require";

try {
    $conn = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}
?>
