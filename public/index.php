<?php
session_start(); // Memulai session

// Cek apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Index</title>
    <!-- Your other head elements -->
</head>
<body>
    <!-- Your body content -->
</body>
</html>
