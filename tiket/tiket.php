<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gili Labak</title>
    <link rel="icon" type="image/png" href="../img/logoGili.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../style/style.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding-top: 100px;
        }

        .navbar {
            background-color: #004c8c;
        }

        .hero-section {
            background-image: url('../img/backgroundGili.png');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero-section h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .ticket-section {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-top: 100px;
        }

        .ticket-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 30%;
            text-align: center;
        }

        .ticket-card h4 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .ticket-card p {
            font-size: 1rem;
            margin-bottom: 10px;
        }

        .ticket-card .price {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .ticket-card button {
            background-color: #004c8c;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            font-size: 1rem;
        }

        .user-profile {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 25%;
        }

        .user-profile h5 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .user-profile input,
        .user-profile select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .user-profile button {
            background-color: #004c8c;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            font-size: 1rem;
        }

        .btn-light {
            background-color: #ffffff;
            color: #004c8c;
            border: 2px solid #004c8c;
            padding: 10px 20px;
            font-size: 1rem;
            margin: 10px 5px;
            border-radius: 5px;
        }

        .theme-icon {
            font-size: 1.5rem;
        }

        @media (max-width: 768px) {
            .ticket-section {
                flex-direction: column;
                align-items: center;
            }

            .ticket-card {
                width: 100%;
                margin-bottom: 20px;
            }

            .user-profile {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
        <div class="container">
            <div class="logo">
                <img src="img/logoGili.png" alt="Gili Labak Logo" style="width: 50px; height: auto;">
                <a class="navbar-brand" href="index.php">Gili Labak</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tiket</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="report.php">Report</a></li>
                </ul>
                <div class="d-flex align-items-center">
                    <span class="theme-icon me-3">🌙</span>
                    <a href="#" class="btn btn-outline-light">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Ticket Section -->
    <div class="container ticket-section">
        <div class="ticket-card">
            <h4>Tiket Masuk</h4>
            <p>Tiket Masuk ke Gili Labak</p>
            <div class="price">Rp 110.000</div>
            <button>Pesan Tiket</button>
        </div>
        <div class="ticket-card">
            <h4>Tiket VIP</h4>
            <p>Tiket VIP termasuk Parkir, Sewa Perahu, dan Snorkeling</p>
            <div class="price">Rp 250.000</div>
            <button>Pesan Tiket</button>
        </div>
        <div class="ticket-card">
            <h4>Tiket VVIP</h4>
            <p>Tiket VVIP termasuk semua fasilitas VIP plus Kuliner</p>
            <div class="price">Rp 400.000</div>
            <button>Pesan Tiket</button>
        </div>
    </div>
    <!-- User Profile Section -->
    <div class="container mt-5">
        <div class="user-profile">
            <h5>Pemesanan Tiket</h5>
            <form>
                <label for="Nama">Nama</label>
                <input type="text" placeholder="Nama" name="Nama" required>
                <label for="Nomor Telp">Nomor Telp</label>
                <input type="number" placeholder="Nomor Telp" name="Nomor Telp">
                <label for="date">Tgl Booking</label>
                <input type="date" placeholder="Tgl booking" name="date">
                <label for="tipe tiket">Tipe Tiket</label>
                <select>
                    <option>Pilih tipe tiket</option>
                    <option value="tiket-masuk">Tiket Masuk</option>
                    <option value="tiket-vip">Tiket VIP</option>
                    <option value="tiket-vvip">Tiket VVIP</option>
                </select>
                <button type="submit" name="pesan-tiket">Pesan</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
