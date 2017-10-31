<?php


function leitura_metrica_codacy(){
	
	$lines = file_get_contents('../metricasCodacy.json');
	$lines;
	return json_decode($lines);

}

function leitura_metrica_sonar(){
	$lines = file_get_contents('../metricas.json');
	$lines;
	return json_decode($lines);
}

	
function adiciona_metrica_codacy_banco($id_projeto,$versao){

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


	foreach (leitura_metrica_codacy() as $key => $value) {
		$key = converter_portugues($key);
		$sql = "INSERT INTO Metrica (Metrica, Projeto, Valor, Versao)
		VALUES ('$key','$id_projeto', '$value', '$versao')";

		if ($conn->query($sql) === TRUE) {
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

}

function adiciona_metrica_sonar_banco($id_projeto,$versao){
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


	foreach (leitura_metrica_sonar() as $key => $value) {
		// $key = converter_portugues($key);
		$sql = "INSERT INTO Metrica (Metrica, Projeto, Valor, Versao)
		VALUES ('$key','$id_projeto', '$value', '$versao')";

		if ($conn->query($sql) === TRUE) {
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
}

function converter_portugues($metrica){
	if ($metrica == 'DOCUMENTATION') {
		return 'DOCUMENTACAO';
	}
	else if ($metrica == 'ERROR_PRONE'){
		return 'ERROR_PHONE';
	}
	else if ($metrica == 'CODE_STYLE'){
		return 'ESTILO_DE_CODIGO';
	}
	else if ($metrica == 'CODE_COMPLEXITY'){
		return 'COMPLEXIDADE_DE_CODIGO';
	}
	else if ($metrica == 'UNUSED_CODE'){
		return 'CODIGO_NAO_UTILIZADO';
	}
	else if ($metrica == 'PERFORMANCE'){
		return 'PERFORMANCE';
	}
	else if ($metrica == 'SECURITY'){
		return 'SEGURANCA';
	}
	else if ($metrica == 'COMPATIBILITY'){
		return 'COMPATIBILIDADE';
	}

}

adiciona_metrica_codacy_banco('1', '2.5');
adiciona_metrica_sonar_banco('1', '2.6');	



 

// ?>