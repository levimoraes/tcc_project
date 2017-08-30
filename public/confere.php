<?php 

include '../config/db_config.php';




$usrname = $_POST["username"];
$password = $_POST["password"];
//$email =$_POST["email"];



checa_login($usrname,$password);





?>