<?php
session_start(); // Memulai session

// Hapus semua session
$_SESSION = array();

// Hancurkan session
session_destroy();

// Redirect ke halaman login
header("Location: login.php?logged_out=true");
exit();
?>
