<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $validUsername = "2120101748_rival";
    $validPassword = "password";

    if ($username == $validUsername && $password == $validPassword) {
        $_SESSION["username"] = $username;
        header("Location: produk.php");
        exit();
    } else {
        echo "<p>Login gagal. Periksa kembali username dan password anda.</p>";
    }
}
?>
