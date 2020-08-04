<?php
session_start();
session_destroy();
setcookie("username",$userpass[0],time()-3,"/");
header("location: ../Login/login.html");
?>