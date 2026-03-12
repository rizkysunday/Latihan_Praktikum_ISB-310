<?php
session_start();

// Username & Password Dummy (sementara tanpa database)
$valid_user = "admin";
$valid_pass = "12345";

$username = $_POST["username"];
$password = $_POST["password"];

if ($username === $valid_user && $password === $valid_pass) {

    $_SESSION["user"] = $username;

    // Jika centang remember me
    if (isset($_POST["remember"])) {
        setcookie("username", $username, time() + (86400 * 7), "/"); // 7 hari
    }

    header("Location: ../index.php");
    exit;

} else {
    echo "
        <script>
            alert('Username atau Password salah!');
            window.location='../login.php';
        </script>
    ";
}