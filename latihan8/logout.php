<?php
session_start();
$_SESSION=[];
session_unset();
session_destroy();
/* echo "<h1>Anda berhasil logout!</h1>"; */

include "login.php";