<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
session_start();
if(isset($_SESSION['login'])){
    header("location:home.html");
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
        header("location:home.html");
        exit;
    }
    else {
        echo '<script>';
        echo 'alert("Login Gagal");';
        echo '</script>';
        include ("login.html");
    }
}
?>
</body>
</html>