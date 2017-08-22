<?php 

include '../config/db_config.php';

// connect_db();





$usrname = $_POST["username"];
$password = $_POST["password"];
$email =$_POST["email"];
echo $usrname." ".$password." ".$email;

adiciona_gestor($usrname,$password);

?>