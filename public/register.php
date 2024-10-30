<?php
// Konfigurasi database
$servername = "127.0.0.1";
$username = "root";
$password = ""; // Ganti dengan password jika ada
$dbname = "rpl";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Validasi input
if (empty($email) || empty($username) || empty($password)) {
    echo "Semua field harus diisi.";
    exit();
}

// Hash password untuk keamanan
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Siapkan dan jalankan query
$sql = "INSERT INTO users (email, username, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $email, $username, $hashed_password);

if ($stmt->execute()) {
    header("Location: login.html");
    exit(); // Pastikan untuk menghentikan eksekusi script setelah pengalihan
} else {
    echo "Error: " . $stmt->error;
}


// Tutup koneksi
$stmt->close();
$conn->close();
?>
