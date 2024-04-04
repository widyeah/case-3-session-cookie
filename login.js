$(document).ready(function(){
    $('#loginForm').submit(function(e){
        e.preventDefault();
        var email = $('#email').val();
        var password = $('#password').val();

        var emailValid = validateEmail(email);
        var passwordValid = validatePassword(password);

        // Validasi email dan password di sisi client
        if (!emailValid || !passwordValid) {
            if (!emailValid) {
                $('#errorMessage').text('Email tidak valid! Email harus mengandung "@" dan "." contoh: youremail@gmail.com');
            } 
            if (!passwordValid) {
                $('#errorMessage').text('Password anda tidak valid! Password harus memiliki minimal 8 karakter, menggunakan huruf kecil, huruf kapital, angka, dan simbol.');
            }
            $('#errorModal').css('display', 'block');
            return false;
        }

        // Jika validasi berhasil, kirim data ke server menggunakan AJAX
        $.ajax({
            type: 'POST',
            url: 'login_process.php',
            data: $('#loginForm').serialize(),
            success: function(response){
                if(response.trim() === 'success'){
                    // Redirect ke halaman profil
                    window.location.href = 'profile.php';
                } else {
                    // Menampilkan pesan error jika email atau password salah
                    $('#errorMessage').text('Invalid email or password.');
                    $('#errorModal').css('display', 'block');
                }
            }
        });
    });

    // Ketika tombol close di modal dialog diklik, sembunyikan modal
    $('.close').click(function(){
        $('#errorModal').css('display', 'none');
    });

    // Validasi email di sisi client
    function validateEmail(email) {
        var re = /\S+@\S+\.\S+/;
        var re2 = /.*@.*\./; // Syarat baru
        return re.test(email) && re2.test(email); // Menggabungkan syarat-syarat
    }

    // Validasi password di sisi client
    function validatePassword(password) {
        var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/;
        if (!re.test(password)) {
            return false;
        }
        return true;
    }
});
