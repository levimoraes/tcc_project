<?php 

function connect_db(){

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "dashboard";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

}


function adiciona_gestor($usuario,$senha,$email){

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "dashboard";

	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}



	$sql = "INSERT INTO Gestor (usuario, senha, email)
	VALUES ('$usuario','$senha', '$email')";

		if ($conn->query($sql) === TRUE) {
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

}

function checa_login($usuario,$senha){
	

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "dashboard";

	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	

	$sql = "SELECT * FROM Gestor WHERE usuario = '$usuario' && senha='$senha'";

	$result = $conn->query($sql);


	if($result->num_rows>0){
		
		echo '<script>window.location.href = "../public/home.html";</script>';
	}else{
		echo "Login ou Senha Incorreto";
		echo "</br><a href=../public/index.html> REALIZAR LOGIN NOVAMENTE </a>";

	}


}


?>