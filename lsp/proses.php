<?php
session_start();

if (!isset($_SESSION['user'])) {
    // $_SESSION['pesan'] = "Anda Belum Login";
    // header("Location:Login.html");

    $DB_HOST = "localhost";
    $DB_USER = "root";
    $DB_PASS = '';
    $DB_DB = 'lsp';

    $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_DB);

    $queri = mysqli_query($conn, "SELECT * FROM users where username = '" . $_POST['user'] . "'");
    $fetch = mysqli_fetch_assoc($queri);

    if (empty($fetch)) {
        $_SESSION['pesan'] = "Login Gagal";
        header("Location:Login.php");
    } else {
        $pass = $fetch['password'];
        if ($_POST['pass'] != $pass) {
            $_SESSION['pesan'] = "Login Gagal";
            header("Location:Login.php");
        } else {
            $_SESSION['user'] = $_POST['user'];
            echo "Login Sukses";
        }
    }
}
