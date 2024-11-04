<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location:form_login.php');
    exit();
}
?>

<h1 style='color: pink; background-color: black; text-align: center;'>Selamat Datang di Beranda</h1>
<a href="logout.php">Logout</a>