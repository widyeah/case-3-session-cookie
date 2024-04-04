<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Session</title>
</head>
<body>
    <h2>Informasi Session</h2>
    <?php
    // Memulai session
    session_start();

    // Memeriksa apakah session email tersedia
    if (isset($_SESSION['email'])) {
        echo "<p>Email yang disimpan dalam session: " . $_SESSION['email'] . "</p>";
    } else {
        echo "<p>Tidak ada informasi session tersedia.</p>";
    }
    ?>
</body>
</html>
