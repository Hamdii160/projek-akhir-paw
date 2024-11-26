<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'db.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $query->execute([$username, $password]);
    $user = $query->fetch();

    if ($user) {
        $_SESSION['user'] = $user['username'];
        header('Location: index.php');
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
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <form action="" method="post">
                    <button name="kembali" class="btn btn-secondary">Kembali</button>
                </form>
                <p class="text-center mt-3">Belum punya akun? <a href="register.php">Daftar sekarang</a></p>
            </div>
        </div>
    </div>
</body>
</html>
