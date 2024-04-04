<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Menggunakan Twitter Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Menggunakan file CSS terpisah -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center"> Silahkan Login</h2>
                    </div>
                    <div class="card-body">
                        <form id="loginForm" action="login_process.php" method="POST">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- HTML untuk modal dialog -->
<div id="errorModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="warning-icon">
            <i class="fas fa-exclamation-triangle"></i> <!-- Ikon peringatan -->
        </div>
        <p id="errorMessage">Password yang dimasukkan tidak valid</p>
    </div>
</div>

    <!-- Menggunakan jQuery untuk AJAX -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Mengambil file JavaScript terpisah -->
    <script src="login.js"></script>
</body>
</html>


