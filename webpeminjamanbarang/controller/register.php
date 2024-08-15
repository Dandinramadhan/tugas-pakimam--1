<?php
session_start();
include '../config/config.php';

if (isset($_SESSION['email'])) {
    header("Location: ../ui/index.php");
    exit();
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password !== $cpassword) {
        echo "<script>alert('Password dan konfirmasi password tidak cocok!');</script>";
    } else {
        $hashedPassword = hash('sha256', $password);

        $stmt = $conn->prepare("SELECT * FROM user WHERE username=?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 0) {
            $stmt = $conn->prepare("INSERT INTO user (email, username, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $email, $username, $hashedPassword);
            $result = $stmt->execute();

            if ($result) {
                echo "<script>alert('Registrasi Berhasil, Yeyy!!')</script>";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Terjadi Kesalahan...')</script>";
            }
        } else {
            echo "<script>alert('User sudah Terdaftar, Ganti user!!')</script>";
        }
    }
}
?>
