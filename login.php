<?php
// Mulai sesi
session_start();

// Include file koneksi database
include 'connect.php';

// Periksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $id_pustakawan = $_POST['ID_PUSTAKAWAN'];
    $nama = $_POST['NAMA'];

    // Validasi input
    if (!empty($id_pustakawan) && !empty($nama)) {
        // Query untuk memeriksa ID_PUSTAKAWAN dan NAMA
        $sql = "SELECT ID_ROLE FROM pustakawan WHERE ID_PUSTAKAWAN = ? AND NAMA = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $id_pustakawan, $nama);
        $stmt->execute();
        $result = $stmt->get_result();

        // Jika data ditemukan
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $_SESSION['ID_PUSTAKAWAN'] = $id_pustakawan;
            $_SESSION['NAMA'] = $nama;
            $_SESSION['ID_ROLE'] = $user['ID_ROLE'];

            // Redirect ke menu utama
            header("Location: menu_utama.php");
            exit();
        } else {
            // Set pesan kesalahan jika ID atau Nama salah
            $_SESSION['error_message'] = "ID Pustakawan atau Nama salah!";
        }
    } else {
        // Set pesan kesalahan jika form tidak lengkap
        $_SESSION['error_message'] = "Harap isi semua field!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartLib - Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <style>
    body {
        background-color: #d1ecd1;
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .login-container {
        background: #ffffff;
        padding: 30px 40px;
        border-radius: 12px;
        box-shadow: 0px 6px 12px #4caf50;
        max-width: 420px;
        width: 100%;
        text-align: center;
    }

    .login-header {
        margin-bottom: 25px;
    }

    .login-header h1 {
        color: #4caf50;
        font-size: 24px;
        font-weight: bold;
    }

    .login-header p {
        color: #6c757d;
        font-size: 14px;
        margin-top: 5px;
    }

    .form-group label {
        color: #4caf50;
        font-weight: bold;
        text-align: left;
        display: block;
    }

    .form-control {
        border: 2px solid #4caf50;
        border-radius: 8px;
    }

    .btn-login {
        background-color: #4caf50;
        color: white;
        border: none;
        padding: 10px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: bold;
        width: 100%;
        transition: background-color 0.3s ease-in-out;
    }

    .btn-login:hover {
        background-color: #45a049;
    }

    .footer-text {
        margin-top: 15px;
        font-size: 12px;
        color: #6c757d;
    }

    .error-message {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
        padding: 15px;
        margin-top: 20px;
        border-radius: 8px;
        font-size: 16px;
        text-align: center;
    }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-header">
            <h1>SMARTLIB</h1>
            <p>Login untuk mengakses sistem perpustakaan</p>
        </div>

        <!-- Menampilkan pesan kesalahan jika ada -->
        <?php
        if (isset($_SESSION['error_message'])) {
            echo '<div class="error-message">' . $_SESSION['error_message'] . '</div>';
            unset($_SESSION['error_message']); // Menghapus pesan kesalahan setelah ditampilkan
        }
        ?>

        <form action="login.php" method="POST" id="login-form">
            <div class="form-group mb-3">
                <label for="ID_PUSTAKAWAN">ID Pustakawan:</label>
                <input type="text" class="form-control" id="ID_PUSTAKAWAN" name="ID_PUSTAKAWAN"
                    placeholder="Masukkan ID Pustakawan" required>
            </div>
            <div class="form-group mb-3">
                <label for="NAMA">Nama:</label>
                <input type="text" class="form-control" id="NAMA" name="NAMA" placeholder="Masukkan Nama Anda" required>
            </div>
            <button type="submit" class="btn btn-login">Login</button>
        </form>
        <div class="footer-text">
            &copy; 2024 SmartLib. Semua hak cipta dilindungi.
        </div>
    </div>

    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>