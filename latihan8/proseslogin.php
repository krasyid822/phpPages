<?php
session_start();
if(isset($_SESSION['login'])){
    header("location:home.php");
    exit;
}

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user ==  "rasyid" && $pass == "1234") {
        echo '<script>';
        echo 'alert("Login Berhasil");';
        echo '</script>';

        $_SESSION['login'] = true;
        header("location:home.php");
        exit;
    }
    else {
        echo '<script>';
        echo 'alert("Login Gagal");';
        echo '</script>';
        include ("login.php");
    }
}
?>