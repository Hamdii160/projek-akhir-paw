<?php
session_start();

if (isset($_POST["pesan-tiket"]) || isset($_POST["pembayaran"])) {
    if (empty($_SESSION["user"])) {
        header("Location: user/login.php");
        die;
    } else {
        echo $_SESSION["user"];
        header("Location: tiket/tiket.php");
    }
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gili Labak</title>
    <link rel="icon" type="image/png" href="img/logoGili.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-primary">
        <div class="container">
            <div class="logo">
                <img src="img/logoGili.png" alt="Gili Labak Logo">
                <a class="navbar-brand" href="index.php">Gili Labak</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php if(!empty($_SESSION["user"])) : ?>
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="tiket/tiket.php">Tiket</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Kontak</a></li>
                        <li class="nav-item"><a class="nav-link" href="report.php">Report</a></li>
                    </ul>
                <?php elseif(empty($_SESSION["user"])) : ?>
                    <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Kontak</a></li>
                        <li class="nav-item"><a class="nav-link" href="report.php">Report</a></li>
                    </ul>
                <?php endif; ?>
                <div class="d-flex align-items-center">
                    <span class="theme-icon me-3">🌙</span>
                <?php if(empty($_SESSION["user"])) : ?>
                    <a href="user/login.php" class="btn btn-outline-light">Login</a>
                <?php elseif(!empty($_SESSION["user"])) : ?>
                    <span id="user">Hallo <?= $_SESSION["user"] ?></span>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <div class="hero-section">
        <div class="container">
            <h3>Pulau Gili Labak</h3>
            <h1>Nikmati Salah Satu Keindahan di <br>Pulau Madura yang Menenangkan Jiwa</h1>
            <form action="" class="form-buttons" method="post">
                <button name="pesan-tiket" class="btn btn-light mt-4">Pesan Tiket</button>
                <button name="pembayaran" class="btn btn-light mt-4">Cek Pembayaran</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>