<?php
session_start();
require "include/conn.php";
$name = $_POST['name'];
$password = $_POST['password'];
// $x = $db->query($sql);
// var_dump($x);
$query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
$result = mysqli_query($conn, $query);

if ($result) {
    $_SESSION['success'] = "Registrasi berhasil, silahkan login.";
    header("Location: login.php");
} else {
    $_SESSION['error'] = "Registrasi gagal.";
    header("Location: index.php");
}
?>




