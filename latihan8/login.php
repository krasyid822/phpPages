<!DOCTYPE html>
<?php 
session_start();
if(isset($_SESSION['login'])){
    header("location:home.php");
    exit;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Here</title>
</head>
<body>
    <form action="proseslogin.php" method="post" name="input">
        <h2><center>Login Here...</center></h2>
        <table align="center">
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" size="50"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" size="50"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="login" value="Login">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>