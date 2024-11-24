<?php 
session_start();

if(isset($_POST["pesan-tiket"])) {
    if($_SESSION["user"] == null) {
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
    <nav class="navbar navbar-expand-sm fixed-top bg-primary">
        <div class="container">
            <h2 class="nav-item text-white" id="nama-wisata">Gili Labak</h2>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home </span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Review</a>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <div class="button">
                        <!-- <form action="" method="post"> -->
                        <a href="" class="btn btn-primary">Login</a>
                        <a href="" class="btn btn-primary">Sign Up</a>
                        <!-- </form> -->
                    </div>
                </form>
            </div>
        </div>
    </nav>
    
    <div class="hero-section">
        <div class="container text-white">
            <h3>Pulau Gili Labak</h3>
            <h1>Nikmati Salah Satu Keindahan di <br>Pulau Madura yang Menenangkan Jiwa</h1>
            <form action="" method="post">
                <button class=" rounded" type="submit" name="pesan-tiket">Pesan Tiket</button>
            </form>
        </div>
        
        <section class="content-section text-white text-center">
            <div class="content">
                <h2>Pulau Gili Labak</h2>
                <p>Gili labak adalah sebuah pulau kecil menawan yang terletak di selat madura, tepatnya disebelah Tenggara Pulau Madura yang termasuk ke dalam wilayah administrasi Kecamatan Talango Kabupaten Sumenep Madura Jawa Timur. Pulau Gili Labak memiliki luas sekitar 5 hektar</p>
                <p>Keindahan yang dimiliki pulau goli labak mulai tercium para traveller yang menyukai lokasi wisata terpencul serta alami dan jauh dari kebisingan kota</p>
            </div>
        </section>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>