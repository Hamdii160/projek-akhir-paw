<?php 
session_start();

if(isset($_POST["pesan-tiket"]) || $_POST["history"] ) {
    if(empty($_SESSION["user"])) {
        header("Location: login.php");
    } else {
        header("Location: add_tiket.php");
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Tiket</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Gili Labak</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <form method="post" class="d-inline">
                            <button type="submit" name="history" class="btn nav-link">History</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Review</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="login.php" class="btn btn-light me-2">Login</a>
                    <a href="signup.php" class="btn btn-light">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    
    <div class="hero-section">
        <div class="container text-white">
            <h3>Pulau Gili Labak</h3>
            <h1>Nikmati Salah Satu Keindahan di <br>Pulau Madura yang Menenangkan Jiwa</h1>
            <form action="" method="post">
                <button class="p-2 px-3 rounded btn btn-light" type="submit" name="pesan-tiket">Pesan Tiket</button>
            </form>
        </div>        
    </div>

    <section class="content-section text-center">
        <div class="content-img flex-wrap">
            <div class="wrapper">
                <img src="img/wisata(1).webp" alt="">
            </div>
            <div class="wrapper">
                <img src="img/wisata(2).jpg" alt="">
            </div>
            <div class="wrapper">
                <img src="img/wisata.jpg" alt="">
            </div>
        </div>
        <div class="content">
            <h2>Pulau Gili Labak</h2>
            <p>Gili labak adalah sebuah pulau kecil menawan yang terletak di selat madura, tepatnya disebelah Tenggara Pulau Madura yang termasuk ke dalam wilayah administrasi Kecamatan Talango Kabupaten Sumenep Madura Jawa Timur. Pulau Gili Labak memiliki luas sekitar 5 hektar</p>
            <p>Keindahan yang dimiliki pulau goli labak mulai tercium para traveller yang menyukai lokasi wisata terpencul serta alami dan jauh dari kebisingan kota</p>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>