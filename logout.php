<?php
session_start();

setcookie("email","",time()-3600);
setcookie("password","",time()-3600);
unset($_SESSION["ROLE"]);
unset($_SESSION["IS_LOGIN"]);

unset($_SESSION["ID"]);
unset($_SESSION["FIRSTNAME"]);
unset($_SESSION["LASTNAME"]);
unset($_SESSION["PASSWORD"]);
unset($_SESSION["DEPARTMENT"]);
unset($_SESSION["ROLE_NAME"]);

header("location:login.php");
die();
?>

