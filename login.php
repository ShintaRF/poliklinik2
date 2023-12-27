<?php
session_start();

// Ganti ini dengan validasi login yang sesuai, misalnya dari database
$validUsernameAdmin = 'admin';
$validPasswordAdmin = 'admin123';
$validUsernameDokter = 'dokter';
$validPasswordDokter = 'dokter123';

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

if ($role === 'admin' && $username === $validUsernameAdmin && $password === $validPasswordAdmin) {
    $_SESSION['role'] = 'admin';
    header('Location: admin_dashboard.php'); // Ganti dengan halaman admin
    exit;
} elseif ($role === 'dokter' && $username === $validUsernameDokter && $password === $validPasswordDokter) {
    $_SESSION['role'] = 'dokter';
    header('Location: dokter_dashboard.php'); // Ganti dengan halaman dokter
    exit;
} else {
    // Login gagal, tampilkan pesan kesalahan
    echo "Login gagal. Periksa kembali username dan password.";
}
?>
