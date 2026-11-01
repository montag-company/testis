<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>Selamat Datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>Anda berhasil login menggunakan database PostgreSQL (Neon).</p>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>
