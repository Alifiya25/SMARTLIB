<?php
// Memasukkan file koneksi
include 'connect.php';

// Ambil data buku dari database
$query = "SELECT * FROM buku";
if (isset($_GET['search']) && $_GET['search'] != "") {
    $search = $_GET['search'];
    $query .= " WHERE judul LIKE '%$search%' OR genre LIKE '%$search%'";
}

$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku - Sistem Perpustakaan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- FontAwesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #e3f2fd, #dcedc8);
        height: 100vh;
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

    .main-content {
        padding: 20px;
    }

    .main-content .welcome-text {
        font-size: 24px;
        font-weight: bold;
        text-align: left;
        margin-bottom: 20px;
    }

    .main-content .title {
        font-size: 28px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
    }

    .search-bar {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 20px;
    }

    .search-bar input {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-right: 10px;
    }

    .search-bar button {
        background: #4caf50;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 5px;
        cursor: pointer;
    }

    .search-bar button:hover {
        background: #45a049;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    table,
    th,
    td {
        border: 1px solid #ddd;
    }

    th,
    td {
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #4caf50;
        color: white;
    }

    .action-buttons {
        display: flex;
        justify-content: space-between;
    }

    .action-buttons a {
        text-decoration: none;
        padding: 10px 15px;
        background: #4caf50;
        color: white;
        border-radius: 5px;
        text-align: center;
    }

    .action-buttons a:hover {
        background: #45a049;
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

    <!-- Main Content -->
    <div class="main-content">
        <!-- Selamat Datang -->
        <div class="welcome-text">Selamat Datang!</div>
        <!-- Data Buku -->
        <div class="title">Data Buku</div>

        <!-- Search Bar -->
        <div class="search-bar">
            <form method="get" action="view_buku.php">
                <input type="text" name="search" placeholder="Cari Buku" value="">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>

        <!-- Tabel Data Buku -->
        <table>
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Judul</th>
                    <th>Genre</th>
                    <th>Tipe</th>
                    <th>Stok</th>
                    <th>Harga Pinjam</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data Buku akan ditampilkan di sini -->
            </tbody>
        </table>

        <!-- Action Buttons -->
        <div class="action-buttons">
            <a href="kosongkan.php">Kosongkan</a>
            <a href="edit.php">Edit</a>
            <a href="tambah.php">Tambah</a>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>