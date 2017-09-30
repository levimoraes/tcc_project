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


function adiciona_projeto($projeto_nome,$projeto_desc,$projeto_data_inicio,$projeto_data_fim,$projeto_linguagem,$projeto_metricas,$widget){
	
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

	$sql = "INSERT INTO Projeto (Nome, Descricao, Gestor, Linguagem, Data_Inicio, Data_Fim, Metricas,Modelo_widget)
	VALUES ('$projeto_nome','$projeto_desc', 1 , '$projeto_linguagem', '$projeto_data_inicio', '$projeto_data_fim', '$projeto_metricas',$widget)";

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
				<a href='form_wizards.html' class='btn btn-info btn-xs'><i class='fa fa-pencil'></i> Edit </a>
				<button onclick='myFunction()' class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i> Delete </button>
			</td>
		</tr>";
	}

	
	

		// echo '<script>window.location.href = "../public/home.html";</script>';
}else{

		// echo "Login ou Senha Incorreto";
		// echo "</br><a href=../public/index.html> REALIZAR LOGIN NOVAMENTE </a>";

}
}

function cria_widget($id_gestor){
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
			if ($row["Modelo_widget"] == 1) {
				echo "<div class='col-md-3 col-xs-12 widget widget_tally_box'>
				<div class='x_panel fixed_height_390'>
					<div class='x_title'>
						<h2><a href='projeto.php'>".$row['Nome']."</a></h2>
						<div class='clearfix'></div>
					</div>
					<div class='x_content'>

						<div style='text-align: center; margin-bottom: 17px'>
							<ul class='verticle_bars list-inline'>
								<li>
									<div class='progress vertical progress_wide bottom'>
										<div class='progress-bar progress-bar-dark' role='progressbar' data-transitiongoal='65'></div>
									</div>
								</li>
								<li>
									<div class='progress vertical progress_wide bottom'>
										<div class='progress-bar progress-bar-gray' role='progressbar' data-transitiongoal='85'></div>
									</div>
								</li>
								<li>
									<div class='progress vertical progress_wide bottom'>
										<div class='progress-bar progress-bar-info' role='progressbar' data-transitiongoal='45'></div>
									</div>
								</li>
								<li>
									<div class='progress vertical progress_wide bottom'>
										<div class='progress-bar progress-bar-success' role='progressbar' data-transitiongoal='75'></div>
									</div>
								</li>
							</ul>
						</div>
						<div class='divider'></div>

						<ul class='legend list-unstyled'>
							<li>
								<p>
									<span class='icon'><i class='fa fa-square dark'></i></span> <span class='name'>LOC</span>
								</p>
							</li>
							<li>
								<p>
									<span class='icon'><i class='fa fa-square grey'></i></span> <span class='name'>WMC</span>
								</p>
							</li>
							<li>
								<p>
									<span class='icon'><i class='fa fa-square blue'></i></span> <span class='name'>IRA</span>
								</p>
							</li>
							<li>
								<p>
									<span class='icon'><i class='fa fa-square green'></i></span> <span class='name'>MOC</span>
								</p>
							</li>
						</ul>

					</div>
				</div>
			</div>";
			}
			if ($row["Modelo_widget"] == 2) {
			echo "<div class='col-md-3 col-xs-12 widget widget_tally_box'>
			<div class='x_panel ui-ribbon-container fixed_height_390'>
				<div class='ui-ribbon-wrapper'>

				</div>
				<div class='x_title'>
					<h2><a href='projeto.php'>".$row['Nome']."</a></h2>
					<div class='clearfix'></div>
				</div>
				<div class='x_content'>

					<div style='text-align: center; margin-bottom: 17px'>
						<span class='chart' data-percent='86'>
							<span class='percent'></span>
						</span>
					</div>

					<h3 class='name_title'>Projeto 2</h3>
					<p>".$row['Nome']."</p>

					<div class='divider'></div>

					<p>".$row['Descricao']."</p>

				</div>
			</div>
			</div>";
			}
			if ($row["Modelo_widget"] == 3) {
		echo "<div class='col-md-3 col-xs-12 widget widget_tally_box'>
		<div class='x_panel fixed_height_390'>
			<div class='x_title'>
				<h2><a href='projeto.php'>".$row['Nome']."</a></h2>
				
				<div class='clearfix'></div>
			</div>
			<div class='x_content'>

				<div style='text-align: center; overflow: hidden; margin: 10px 5px 0;'>
					<canvas id='canvas_line1' height='200'></canvas>
				</div>

				<div style='text-align: center; margin-bottom: 15px;'>
					<div class='btn-group' role='group' aria-label='First group'>
						<button type='button' class='btn btn-default btn-sm'>Day</button>
						<button type='button' class='btn btn-default btn-sm'>Month</button>
						<button type='button' class='btn btn-default btn-sm'>Year</button>
					</div>
				</div>

				<div>
					<ul class='list-inline widget_tally'>
						<li>
							<p>
								<span class='month'>12 December 2014 </span>
								<span class='count'>+12%</span>
							</p>
						</li>
						<li>
							<p>
								<span class='month'>29 December 2014 </span>
								<span class='count'>+12%</span>
							</p>
						</li>
						<li>
							<p>
								<span class='month'>16 January 2015 </span>
								<span class='count'>+12%</span>
							</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
			</div>";
			}
		}
	}
}

		





?>