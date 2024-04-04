<?php
session_start();

// Fungsi untuk memeriksa apakah suatu string merupakan alamat email yang valid
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Fungsi untuk memeriksa apakah suatu string merupakan password yang valid
function isValidPassword($password) {
    // Panjang minimal 8 karakter
    // Mengandung setidaknya satu huruf kecil, satu huruf besar, satu angka, dan satu karakter khusus
    return strlen($password) >= 8 && preg_match('/[A-Z]+/', $password) && preg_match('/[a-z]+/', $password) && preg_match('/\d+/', $password) && preg_match('/[^A-Za-z0-9]+/', $password);
}

// Memeriksa apakah email dan password yang dikirimkan dari form sesuai dengan kriteria
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isValidEmail($email) && isValidPassword($password)) {
        // Jika email dan password memenuhi syarat, simpan email ke session
        $_SESSION['email'] = $email;
        echo 'success';
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}
?>
