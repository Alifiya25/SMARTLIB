<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['NAMA'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Utama - Sistem Perpustakaan</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Include FontAwesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #e3f2fd, #dcedc8);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .header {
        background: #4caf50;
        color: white;
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .header .title {
        font-size: 22px;
        font-weight: bold;
    }

    .header .nav-buttons a {
        color: white;
        font-size: 16px;
        font-weight: bold;
        margin-left: 10px;
        text-decoration: none;
        padding: 8px 16px;
        border: 2px solid white;
        border-radius: 30px;
        transition: all 0.3s ease-in-out;
    }

    .header .nav-buttons a:hover {
        background-color: white;
        color: #4caf50;
    }

    .welcome-container {
        padding: 40px 20px;
        text-align: center;
        margin-bottom: 20px;
    }

    .welcome-container .welcome-message {
        background: white;
        padding: 20px 40px;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        font-size: 24px;
        color: #4caf50;
        font-weight: bold;
        display: inline-block;
    }

    .menu-container {
        flex: 1;
        padding: 20px;
        display: flex;
        justify-content: center;
    }

    .menu-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 30px;
        width: 100%;
        max-width: 1200px;
    }

    .menu-card {
        background: white;
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .menu-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .menu-card i {
        font-size: 40px;
        color: #4caf50;
        margin-bottom: 10px;
    }

    .menu-card h4 {
        font-size: 18px;
        color: #333;
        margin: 0;
    }

    .footer {
        background: #4caf50;
        color: white;
        text-align: center;
        padding: 10px 0;
        font-size: 14px;
        box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.2);
    }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div class="title">SMARTLIB</div>
        <div class="nav-buttons">
            <a href="profile.php"><i class="fas fa-user-circle"></i> Profile</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </div>

    <!-- Selamat Datang -->
    <div class="welcome-container">
        <div class="welcome-message">
            Selamat Datang di Sistem Perpustakaan, <br>
            <span><?php echo htmlspecialchars($_SESSION['NAMA'], ENT_QUOTES, 'UTF-8'); ?></span>
        </div>
    </div>

    <!-- Menu Utama -->
    <div class="menu-container">
        <div class="menu-grid">
            <a href="anggota.php" class="menu-card">
                <i class="fas fa-users"></i>
                <h4>Anggota</h4>
            </a>
            <a href="pustakawan.php" class="menu-card">
                <i class="fas fa-user-tie"></i>
                <h4>Pustakawan</h4>
            </a>
            <a href="buku.php" class="menu-card">
                <i class="fas fa-book"></i>
                <h4>Buku</h4>
            </a>
            <a href="denda.php" class="menu-card">
                <i class="fas fa-file-invoice-dollar"></i>
                <h4>Denda</h4>
            </a>
            <a href="peminjaman.php" class="menu-card">
                <i class="fas fa-book-open"></i>
                <h4>Peminjaman</h4>
            </a>
            <a href="pengembalian.php" class="menu-card">
                <i class="fas fa-undo-alt"></i>
                <h4>Pengembalian</h4>
            </a>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; 2024 Sistem Perpustakaan. All rights reserved.
    </div>

    <!-- Include Bootstrap JS -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>