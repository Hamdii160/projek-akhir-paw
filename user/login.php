<?php
session_start();
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if(isset($_POST["login"])) {
    include '../db.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query ke database
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    // Cek hasil query
    if (mysqli_num_rows($result) > 0) {
        session_start();
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $user['username'];
        header('Location: ../index.php');
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/png" href="../img/logoGili.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/style_login.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-primary">
        <div class="logo">
            <img src="../img/logoGili.png" alt="Gili Labak Logo">
            <a class="navbar-brand" href="index.php">Gili Labak</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
            <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="../about.php">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="../contact.php">Kontak</a></li>
                <li class="nav-item"><a class="nav-link" href="../report.php">Report</a></li>
            </ul>
        </div>
    </nav>

    <div class="login-content">
        <div class="container">
            <div class="card">
                <h2>Login</h2>
                <?php if (isset($error)): ?>
                    <p class="error-message"><?= $error ?></p>
                <?php endif; ?>
                <form action="" method="POST">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" required>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                    <button name="kembali" class="btn btn-secondary">Kembali</button>
                </form>
                <p class="text-center mt-3">Belum punya akun? <a href="register.php">Daftar sekarang</a></p>
            </div>
        </div>
    </div>
</body>
</html>
