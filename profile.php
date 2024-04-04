<?php
session_start();

// Pengecekan apakah pengguna sudah login, jika belum, redirect ke halaman login
if (!isset($_SESSION['email'])) {
    // Redirect ke halaman login dalam 2 detik
    header("refresh:2;url=login.php");
    exit();
}

// Jika checkbox Remember Me dicentang
if (isset($_POST['rememberMe']) && $_POST['rememberMe'] == 'on') {
    // Ambil nilai email dari session
    $email = $_SESSION['email'];

    // Set cookie email yang berlaku selama 24 jam
    $expire = time() + (24 * 3600); // 24 jam dalam detik
    setcookie('remembered_email', $email, $expire);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- Menggunakan Twitter Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Menggunakan file CSS terpisah -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <h2>Profile</h2>
        <!-- Isi halaman profil -->
        <p>Login Berhasil</p>
        <p>Selamat datang di profil anda!</p>
        <?php
         // Memeriksa apakah session email tersedia
        if (isset($_SESSION['email'])) {
             echo "<p>Email yang disimpan dalam session: " . $_SESSION['email'] . "</p>";
         } else {
            echo "<p>Tidak ada informasi session tersedia.</p>";
        }
        ?>
        <a href="logout.php" class="btn btn-danger btn-logout">Logout</a>
    </div>
</body>
</html>

