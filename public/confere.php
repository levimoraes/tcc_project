<?php 

include '../config/db_config.php';

session_start();


$usrname = $_POST["username"];
$password = $_POST["password"];


if(checa_login($usrname,$password)==0){
	$_SESSION["login"] = $username;
	$_SESSION["senha"] = $password;
	header('location:../public/home.php');
	//echo "RETORNOU CORRETO";
	//echo '<script>window.location.href = "../public/home.php";</script>';
}
	else{
		echo "Login ou Senha Incorreto";
		echo "</br><a href=../public/index.html> REALIZAR LOGIN NOVAMENTE </a>";
	}





?>