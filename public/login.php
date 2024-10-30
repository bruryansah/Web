<?php
// Konfigurasi database
$servername = "127.0.0.1";
$username = "root";
$password = ""; // Ganti dengan password jika ada
$dbname = "rpl"; // Pastikan ini sesuai dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$email = $_POST['email'];
$password = $_POST['password'];

// Validasi input
if (empty($email) || empty($password)) {
    header("Location: login.html?error=Semua field harus diisi.");
    exit();
}

// Siapkan dan jalankan query
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

// Cek apakah pengguna ditemukan
// Cek apakah pengguna ditemukan
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    // Verifikasi password
    if (password_verify($password, $user['password'])) {
        // Set session user_id
        session_start();
        $_SESSION['user_id'] = $user['id']; // Ganti 'id' sesuai dengan kolom ID di database Anda
        
        // Jika login berhasil, redirect ke halaman index
        header("Location: index.html");
        exit();
    } else {
        header("Location: login.php?error=Password salah.");
    }
} else {
    header("Location: login.php?error=Email tidak ditemukan.");
}


// Tutup koneksi
$stmt->close();
$conn->close();
?>
