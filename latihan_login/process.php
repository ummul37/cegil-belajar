<?php
session_start();

$user_form = $_POST['username'];
$pass_form = $_POST['password'];

if($user_form==''){
    $_SESSION['msg_user'] = "username tidak boleh kosong";
}

if($pass_form==''){
    $_SESSION['msg_pass'] = "password tidak boleh kosong";
}

if(isset($_SESSION['msg_user'])||isset($_SESSION['msg_pass'])){
    header('location:form_login.php');
    exit();
}

if($user_form!='admin'||$pass_form!='12345'){
    $_SESSION['msg_global'] = "data tidak ada terdaftar";
    header('location:form_login.php');
    exit();
}

$_SESSION['login'] = true;
header('location:beranda.php');