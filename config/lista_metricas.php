<?php 

include 'descricao_metricas.php';




function pega_metricas_loc($id){

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "dashboard";

	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM Metrica WHERE Projeto = $id && Metrica = 'LOC'";

	$result = $conn->query($sql);

	$LOC = array();
	$LOC_version = array();
	$number = rand(1,100);
	$metrica = "LOC";


	if($result->num_rows>0){
		while($row = $result->fetch_assoc()) {
			
			$versao = $row['Versao'];
			$id = $row['Metrica'];
			$valor = $row['Valor'];

			array_push($LOC, $valor);
			array_push($LOC_version, $versao);
				
			}

			criar_grafico(4,$LOC,$LOC_version,$number,$metrica);

		}

	
}

function pega_metricas_comentario($id){

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "dashboard";

	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM Metrica WHERE Projeto = $id && Metrica = 'Comentario'";

	$result = $conn->query($sql);

	$Comentario = array();
	$Comentario_version = array();
	$number = rand(1,100);
	$metrica = "COMENTARIO";

	if($result->num_rows>0){
		while($row = $result->fetch_assoc()) {
			
			$versao = $row['Versao'];
			$id = $row['Metrica'];
			$valor = $row['Valor'];
				
			array_push($Comentario, $valor);
			array_push($Comentario_version, $versao);

			}

			criar_grafico(2,$Comentario,$Comentario_version,$number,$metrica);

		}

	
}

function pega_metricas_issues($id){
	$metrica = "ISSUES";
	$array_issues = array();
	$number = rand(1,100);

	$array_issues['minor'] = pega_metricas_issues_minor(1);
	$array_issues['major'] = pega_metricas_issues_major(1);
	$array_issues['blocker'] = pega_metricas_issues_blocker(1);
	$array_issues['info'] = pega_metricas_issues_info(1);

	criar_grafico(3,$array_issues,1,$number,$metrica);

}


function pega_metricas_issues_minor($id){

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "dashboard";

	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM Metrica WHERE Projeto = $id && Metrica = 'Minor'";

	$result = $conn->query($sql);

	$array_issue = array();

	$number = rand(1,100);
	$metrica = "ISSUES_MINOR";

	if($result->num_rows>0){
		while($row = $result->fetch_assoc()) {
			
			$versao = $row['Versao'];
			$id = $row['Metrica'];
			$valor = $row['Valor'];

			$array_issue[$versao] = $valor;


				
			}
		return $array_issue;

		}


		//return [$issue_minor,$issue_minor_version];
	
}

function pega_metricas_issues_major($id){

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "dashboard";

	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM Metrica WHERE Projeto = $id && Metrica = 'Major'";

	$result = $conn->query($sql);

	$array_issue = array();

	$number = rand(1,100);
	$metrica = "ISSUES_MINOR";

	if($result->num_rows>0){
		while($row = $result->fetch_assoc()) {
			
			$versao = $row['Versao'];
			$id = $row['Metrica'];
			$valor = $row['Valor'];

			$array_issue[$versao] = $valor;


				
			}
		return $array_issue;

		}


		//return [$issue_minor,$issue_minor_version];
	
}

function pega_metricas_issues_blocker($id){

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "dashboard";

	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM Metrica WHERE Projeto = $id && Metrica = 'Blocker'";

	$result = $conn->query($sql);

	$array_issue = array();

	$number = rand(1,100);
	$metrica = "ISSUES_MINOR";

	if($result->num_rows>0){
		while($row = $result->fetch_assoc()) {
			
			$versao = $row['Versao'];
			$id = $row['Metrica'];
			$valor = $row['Valor'];

			$array_issue[$versao] = $valor;


				
			}
		return $array_issue;

		}


		//return [$issue_minor,$issue_minor_version];
	
}

function pega_metricas_issues_info($id){

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "dashboard";

	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM Metrica WHERE Projeto = $id && Metrica = 'Info'";

	$result = $conn->query($sql);

	$array_issue = array();

	$number = rand(1,100);
	$metrica = "ISSUES_INFO";

	if($result->num_rows>0){
		while($row = $result->fetch_assoc()) {
			
			$versao = $row['Versao'];
			$id = $row['Metrica'];
			$valor = $row['Valor'];

			$array_issue[$versao] = $valor;


				
			}
		return $array_issue;

		}


		//return [$issue_minor,$issue_minor_version];
	
}

function pega_metricas_duplicacao($id){

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "dashboard";

	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM Metrica WHERE Projeto = $id && Metrica = 'Duplicacao'";

	$result = $conn->query($sql);

	$Duplicacao = array();
	$Duplicacao_version = array();
	$number = rand(1,100);
	$metrica = "DUPLICACAO";

	if($result->num_rows>0){
		while($row = $result->fetch_assoc()) {
			
			$versao = $row['Versao'];
			$id = $row['Metrica'];
			$valor = $row['Valor'];

			array_push($Duplicacao, $valor);
			array_push($Duplicacao_version, $versao);
				
			}

			criar_grafico(1,$Duplicacao,$Duplicacao_version,$number,$metrica);

		}

	
}

function criar_grafico($opcao,$valor,$versao,$number,$metrica){
	
	//GRAFICO BARRA
	if($opcao==1){
		echo"<!-- bar chart -->
              <div class='col-md-6 col-sm-6 col-xs-12'>
                <div class='x_panel'>
                  <div class='x_title'>
                    <h2>$metrica <small><a href='#' data-toggle='tooltip' title='" ; echo descricao($metrica); echo "' > ?</a></small> </h2>
                    <ul class='nav navbar-right panel_toolbox'>
                      <li><a class='collapse-link'><i class='fa fa-chevron-up'></i></a>
                      </li>
                      <li class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'><i class='fa fa-wrench'></i></a>
                        <ul class='dropdown-menu' role='menu'>
                          <li><a href='#'>Settings 1</a>
                          </li>
                          <li><a href='#'>Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class='close-link'><i class='fa fa-close'></i></a>
                      </li>
                    </ul>
                    <div class='clearfix'></div>
                  </div>
                  <div class='x_content'>
                    <div id='graph_bar$number' style='width:100%; height:280px;'></div>
                  </div>
                </div>
              </div>
              <!-- /bar charts -->
              ";

              grafico_barras($valor,$versao,$number);

     }
     
     //GRAFICO BARRA GRUPO
     if ($opcao==2) {
     	echo "
     	<div class='col-md-6 col-sm-6 col-xs-12'>
                <div class='x_panel'>
                  <div class='x_title'>
                    <h2>$metrica <small><a href='#' data-toggle='tooltip' title='" ; echo descricao($metrica); echo "' > ?</a></small></h2>
                    <ul class='nav navbar-right panel_toolbox'>
                      <li><a class='collapse-link'><i class='fa fa-chevron-up'></i></a>
                      </li>
                      <li class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'><i class='fa fa-wrench'></i></a>
                        <ul class='dropdown-menu' role='menu'>
                          <li><a href='#'>Settings 1</a>
                          </li>
                          <li><a href='#'>Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class='close-link'><i class='fa fa-close'></i></a>
                      </li>
                    </ul>
                    <div class='clearfix'></div>
                  </div>
                  <div class='x_content1'>
                    <div id='graph_bar_group$number' style='width:100%; height:280px;'></div>
                  </div>
                </div>
              </div>
              "; 

              grafico_barras_grupo($valor,$versao,$number);        	
     

     }
     //GRAFICO DE PIZZA
     if($opcao==3){
     	echo"<div class='col-md-6 col-sm-6 col-xs-12'>
                <div class='x_panel'>
                  <div class='x_title'>
                    <h2>$metrica <small><a href='#' data-toggle='tooltip' title=' " ; echo descricao($metrica); echo "' > ?</a></small></h2>
                    <ul class='nav navbar-right panel_toolbox'>
                      <li><a class='collapse-link'><i class='fa fa-chevron-up'></i></a>
                      </li>
                      <li class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'><i class='fa fa-wrench'></i></a>
                        <ul class='dropdown-menu' role='menu'>
                          <li><a href='#'>Settings 1</a>
                          </li>
                          <li><a href='#'>Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class='close-link'><i class='fa fa-close'></i></a>
                      </li>
                    </ul>
                    <div class='clearfix'></div>
                  </div>
                  <div class='x_content2'>
                    <div id='graph_donut$number' style='width:100%; height:300px;'></div>
                  </div>
                </div>
              </div> 
             ";

              grafico_pizza($valor,$versao,$number);
              
     }

     //GRAFICO DE LINHAS
     if ($opcao==4){

     	echo "<div class='col-md-6 col-sm-6 col-xs-12'>
                <div class='x_panel'>
                  <div class='x_title'>
                    <h2>$metrica <small><a href='#' data-toggle='tooltip' title=' " ; echo descricao($metrica); echo "' > ?</a></small></h2>
                    <ul class='nav navbar-right panel_toolbox'>
                      <li><a class='collapse-link'><i class='fa fa-chevron-up'></i></a>
                      </li>
                      <li class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'><i class='fa fa-wrench'></i></a>
                        <ul class='dropdown-menu' role='menu'>
                          <li><a href='#'>Settings 1</a>
                          </li>
                          <li><a href='#'>Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class='close-link'><i class='fa fa-close'></i></a>
                      </li>
                    </ul>
                    <div class='clearfix'></div>
                  </div>
                  <div class='x_content2'>
                  	<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
  						<div id='curve_chart'></div>
                  </div>
                </div>
              </div>
				
              ";

              grafico_linha($valor,$versao,$number);
     }



	
}


function grafico_barras($valor,$versao,$number){
	echo "<script type='text/javascript'>
	Morris.Bar({
		element: 'graph_bar$number',
		data: [
		";

		for($i=0; $i<count($versao);$i++){
			echo "{versao: '$versao[$i]', linhas: $valor[$i]},";
		}

		echo "],
		xkey: 'versao',
		ykeys: ['linhas'],
		labels: ['linhas'],
		barRatio: 0.4,
		barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
		xLabelAngle: 35,
		hideHover: 'auto',
		resize: true
	});
</script>";

}

function grafico_barras_grupo($valor,$versao,$number){
	echo "<script type='text/javascript'>
	Morris.Bar({
		element: 'graph_bar_group$number',
		data: [";
		for($i=0; $i<count($versao);$i++){
			echo "{versao: '$versao[$i]', 'valor': '$valor[$i]', 'sorned': 0},";
		}		
		echo "],
		xkey: 'versao',
		
		ykeys: ['valor'],
		labels: ['Comentario'],
		hideHover: 'auto',
		xLabelAngle: 60,
		resize: true
	});
</script>";

}

function grafico_pizza($valor,$versao,$number){
	echo "<script type='text/javascript'>
	Morris.Donut({
				  element: 'graph_donut$number',
				  data: [
					{label: 'Major', value:"; echo $valor['major']['2.2']; echo "},
					{label: 'Minor', value:"; echo $valor['minor']['2.2']; echo "},
					{label: 'Blocker', value:"; echo $valor['blocker']['2.2']; echo "},
					{label: 'Info', value:"; echo $valor['info']['2.2']; echo "},
				  ],
				  colors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
				  
				  resize: true
				});
				</script>";
}

function grafico_linha($valor,$versao,$number){

echo "<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
    <script type='text/javascript'>
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Versao', 'Linhas'],";
          
        for($i=0; $i<count($versao);$i++){
			echo "[ $versao[$i], $valor[$i] ],";
		}	

        echo "]);

        var options = {
          pointSize: 3,
		  colors: ['#26B99A','#34495E', '#ACADAC', '#3498DB'],        
          title: 'Número de Linhas',
          curveType: 'function',
          legend: { position: 'top' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }


      </script>";









		
			
}



?>