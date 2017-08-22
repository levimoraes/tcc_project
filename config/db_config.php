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

	echo "Connected successfullllly";

}


function adiciona_gestor($usuario,$senha){

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

	echo "Connected successfullllly";


	$sql = "INSERT INTO Gestor (usuario, senha)
	VALUES ('$usuario','$senha')";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

}

?>