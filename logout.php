<?php
// Hapus cookie 'remembered_email' jika ada
setcookie('remembered_email', '', time() - 3600, '/');
// Redirect kembali ke halaman login
header("Location: login.php");
exit();
?>
