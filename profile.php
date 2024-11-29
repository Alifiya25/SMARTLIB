<?php
session_start();

// Periksa apakah pengguna telah login
if (!isset($_SESSION['ID_PUSTAKAWAN']) || !isset($_SESSION['NAMA'])) {
    header("Location: login.php");
    exit();
}

$id_pustakawan = $_SESSION['ID_PUSTAKAWAN'];
$nama = $_SESSION['NAMA'];
$id_role = $_SESSION['ID_ROLE'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Sistem Perpustakaan</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <style>
    body {
        background: #f0f4f7;
        font-family: Arial, sans-serif;
    }

    .container {
        margin-top: 50px;
        max-width: 600px;
        background: white;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .profile-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .profile-header h1 {
        color: #4caf50;
        font-size: 24px;
        margin: 0;
    }

    .profile-info {
        margin: 20px 0;
    }

    .profile-info .info-item {
        margin-bottom: 10px;
    }

    .profile-info .info-label {
        font-weight: bold;
        color: #555;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="profile-header">
            <h1>Profile</h1>
            <p>Informasi Akun Anda</p>
        </div>
        <div class="profile-info">
            <div class="info-item">
                <span class="info-label">ID Pustakawan:</span>
                <?php echo htmlspecialchars($id_pustakawan, ENT_QUOTES, 'UTF-8'); ?>
            </div>
            <div class="info-item">
                <span class="info-label">Nama:</span> <?php echo htmlspecialchars($nama, ENT_QUOTES, 'UTF-8'); ?>
            </div>
            <div class="info-item">
                <span class="info-label">Role:</span> <?php echo htmlspecialchars($id_role, ENT_QUOTES, 'UTF-8'); ?>
            </div>
        </div>
        <div class="text-center">
            <a href="menu_utama.php" class="btn btn-success">Kembali ke Menu Utama</a>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>