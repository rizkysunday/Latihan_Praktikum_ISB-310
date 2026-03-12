<?php
session_start();

// Jika sudah login, redirect ke index
if (isset($_SESSION["user"])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Cibaduyut Shoes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark d-flex justify-content-center align-items-center vh-100">

<div class="card shadow-lg" style="width: 400px;">
    <div class="card-body">
        <h3 class="text-center mb-4 text-warning">LOGIN</h3>

        <form method="POST" action="controller/proses_login.php">
            
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" 
                       name="username" 
                       class="form-control"
                       value="<?php echo $_COOKIE['username'] ?? ''; ?>" 
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" 
                       name="password" 
                       class="form-control" 
                       required>
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" 
                       name="remember" 
                       class="form-check-input">
                <label class="form-check-label">
                    Remember Me
                </label>
            </div>

            <button type="submit" class="btn btn-warning w-100">
                Login
            </button>

            <div class="text-center mt-3">
                <a href="index.php">Kembali ke Beranda</a>
            </div>

        </form>
    </div>
</div>

</body>
</html>