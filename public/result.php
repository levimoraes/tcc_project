<?php 

include '../config/db_config.php';

$usrname = $_POST["username"];
$password = $_POST["password"];
$email =$_POST["email"];


adiciona_gestor($usrname,$password,$email);


echo '<script>window.location.href = "cadastro.html";</script>';

?>