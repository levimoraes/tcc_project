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
		return 0;
		// echo '<script>window.location.href = "../public/home.html";</script>';
	}else{
		return 1;
		// echo "Login ou Senha Incorreto";
		// echo "</br><a href=../public/index.html> REALIZAR LOGIN NOVAMENTE </a>";

	}


}


function adiciona_projeto($projeto_nome,$projeto_desc,$projeto_data_inicio,$projeto_data_fim,$projeto_linguagem,$projeto_metricas){
	
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

	$sql = "INSERT INTO Projeto (Nome, Descricao, Gestor, Linguagem, Data_Inicio, Data_Fim, Metricas)
	VALUES ('$projeto_nome','projeto_desc', 1 , '$projeto_linguagem', '$projeto_data_inicio', '$projeto_data_fim', '$projeto_metricas')";

		if ($conn->query($sql) === TRUE) {
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

}

function pega_projetos($id_gestor){

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "dashboard";

	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	

	$sql = "SELECT * FROM Projeto WHERE Gestor = '$id_gestor'";

	$result = $conn->query($sql);


	if($result->num_rows>0){
		while($row = $result->fetch_assoc()) {
			echo "<tr>
                          <td>#</td>
                          <td>
                            <a>".$row['Nome']."</a>
                            <br />
                            <small>Created ".$row['Data_Inicio'] ."</small>
                          </td>
                          
                          <td class='project_progress'>
                            <div class='progress progress_sm'>
                              <div class='progress-bar bg-green' role='progressbar' data-transitiongoal='57'></div>
                            </div>
                            <small>57% Complete</small>
                          </td>
                          <td>
                            <button type='button' class='btn btn-success btn-xs'>Success</button>
                          </td>
                          <td>
                            <a href='#' class='btn btn-primary btn-xs'><i class='fa fa-folder'></i> View </a>
                            <a href='#' class='btn btn-info btn-xs'><i class='fa fa-pencil'></i> Edit </a>
                            <a href='#' class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i> Delete </a>
                          </td>
                        </tr>";
		}
		
		// echo '<script>window.location.href = "../public/home.html";</script>';
	}else{
		
		// echo "Login ou Senha Incorreto";
		// echo "</br><a href=../public/index.html> REALIZAR LOGIN NOVAMENTE </a>";

	}
}


?>