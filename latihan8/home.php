<?php
session_start();
if(!isset($_SESSION['login'])){
    header("location:login.php");
    exit;
}

echo "<h1>Anda berhasil memasuki sistem!</h1>";
echo "Session disimpan di server, Cookies di browser";
?>

<html><a href="logout.php">Logout</a></html>