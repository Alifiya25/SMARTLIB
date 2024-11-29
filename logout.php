<?php
session_start();

// Hapus semua data sesi
session_unset();
session_destroy();

// Redirect ke halaman index.html
header("Location: index.html");
exit();
?>