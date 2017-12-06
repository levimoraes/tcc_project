<?php 

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

include 'descricao_metricas.php';

function sugere_metricas($metrica1,$valor1,$metrica2,$valor2,$metrica3,$valor3){
	$name = 'arquivo.py';
	$text = "dataset={
			'Excesso': {'DUPLICACAO': 3.0, 
							'COMENTARIO': 3.5,
							'SEGURANCA': 4.0,
							'COMPATIBILIDADE': 0.5,
							'CODIGO_NAO_UTILIZADO': 5,
							'LINHAS_DE_CODIGO': 5.0,
							'VULNERABILIDADE': 5.0,
							'ERROR': 1.0},

			'Novato': {'DUPLICACAO': 4.5, 
							'COMENTARIO': 5.0,
							'SEGURANCA': 5.0, 
							'BUGS': 3.0},

			'Minimo': {'ERROR': 2.0, 
								'SEGURANCA': 2.5,
								'CODIGO': 3.0,
								'DEBITO': 3.0,
								'PERFORMANCE': 4.0,
								'CODIGO_NAO_UTILIZADO': 3.0,
								'LINHAS_DE_CODIGO': 2.0,
								'VULNERABILIDADE': 4.5,
								'ISSUES': 3.5},

			'Ingenuo': {'COMENTARIO': 2.5, 
							'ERROR': 3.5,
							'PERFORMANCE': 1.5,
							'VULNERABILIDADE':3.0},
							
			'Usuario':{'$metrica1': $valor1,
							'$metrica2': $valor2,
							'$metrica3': $valor3} 
			}";
	$file = fopen($name, 'w');
	fwrite($file, $text);
	fclose($file);
}



function sorteia_metrica(){
	$vetor_metrica = ['DUPLICACAO', 'COMENTARIO', 'COMPATIBILIDADE', 'ERROR_PHONE', 'SEGURANCA', 'ESTILO_DE_CODIGO', 'PERFORMANCE', 'CODIGO_NAO_UTILIZADO',  'BUGS', 'VULNERABILIDADE', 'DEBITO_TECNICO', 'CODE_SMELLS', 'LINHAS_DE_CODIGO'];

	$number = rand(0,12);
	return $vetor_metrica[$number];

}

function pega_metricas_projeto($id){

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "dashboard";

	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM Projeto WHERE Id = $id";

	$result = $conn->query($sql);
	

	if($result->num_rows>0){
		while($row = $result->fetch_assoc()) {
			
			$metrica = $row['Metricas'];

		}
	}

		return $metrica;	
}

function pega_metricas_generico($id,$metrica){

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "dashboard";

	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM Metrica WHERE Projeto = $id && Metrica = '$metrica'";

	$result = $conn->query($sql);

	$LOC = array();
	$LOC_version = array();
	$number = rand(1,100);
	


	if($result->num_rows>0){
		while($row = $result->fetch_assoc()) {
			
			$versao = $row['Versao'];
			$id = $row['Metrica'];
			$valor = $row['Valor'];

			array_push($LOC, $valor);
			array_push($LOC_version, $versao);
				
			}
			return $LOC; 

		}	
}


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

function pega_metrica_im($projeto_id){
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "dashboard";

	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM Metrica WHERE Projeto = $projeto_id && Metrica = 'IM'";

	$result = $conn->query($sql);

	$LOC = array();
	$LOC_version = array();
	$number = rand(1,100);
	$metrica = "Indíce de Manutenabilidade";


	if($result->num_rows>0){
		while($row = $result->fetch_assoc()) {
			
			$versao = $row['Versao'];
			$id = $row['Metrica'];
			$valor = $row['Valor'];

			array_push($LOC, $valor);
			array_push($LOC_version, $versao);
				
			}

			criar_grafico(5,$LOC,$LOC_version,$number,$metrica);

		}
}


function pega_metrica_debito($projeto_id){
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "dashboard";

	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM Metrica WHERE Projeto = $projeto_id && Metrica = 'DEBITO_TECNICO'";

	$result = $conn->query($sql);

	$LOC = array();
	$LOC_version = array();
	$number = rand(1,100);
	$metrica = "DEBITO_TECNICO";


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

function pega_metrica_bugs($projeto_id){
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "dashboard";

	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM Metrica WHERE Projeto = $projeto_id && Metrica = 'BUGS'";

	$result = $conn->query($sql);

	$LOC = array();
	$LOC_version = array();
	$number = rand(1,100);
	$metrica = "BUGS";


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

function pega_metrica_code_smells($projeto_id){
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "dashboard";

	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM Metrica WHERE Projeto = $projeto_id && Metrica = 'CODE_SMELLS'";

	$result = $conn->query($sql);

	$LOC = array();
	$LOC_version = array();
	$number = rand(1,100);
	$metrica = "CODE_SMELLS";


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

	$sql = "SELECT * FROM Metrica WHERE Projeto = $id && Metrica = 'COMENTARIOS'";

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

			 criar_grafico(1,$Comentario,$Comentario_version,$number,$metrica);

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

	$sql = "SELECT * FROM Metrica WHERE Projeto = $id && Metrica = 'DUPLICACAO'";

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
		echo"
		<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.min.js'></script>
		<div class='col-md-6 col-sm-6 col-xs-12'>
                <div class='x_panel'>
                  <div class='x_title'>
                    <h2><a href='#' data-toggle='tooltip' title='".descricao($metrica)."' >$metrica</a></h2>
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
                    <canvas class='myChart$number'></canvas>
                  </div>
                </div>
              </div>
             ";
              
             grafico_barras($valor,$versao,$number);



     }
     
     //GRAFICO RADAR
     if ($opcao==2) {
     	echo "
     	<div class='col-md-6 col-sm-6 col-xs-12'>
                <div class='x_panel'>
                  <div class='x_title'>
                    <h2><a href='#' data-toggle='tooltip' title='".descricao($metrica)."' >$metrica</a></h2>
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
                    <canvas id='canvasRadar'></canvas>
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
                    <h2><a href='#' data-toggle='tooltip' title='".descricao($metrica)."' >$metrica</a></h2>
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
                    <canvas class='pieChart$number' style='width:100%; height:220px; '></canvas>
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
                    <h2><a href='#' data-toggle='tooltip' title='".descricao($metrica)."' >$metrica</a></h2></small></h2>
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
                    <canvas class='lineChart$number'></canvas>
                  </div>
                </div>
              </div>
				
              ";

              grafico_linha($valor,$versao,$number);
     }

     if ($opcao==5){

     	echo "
			<div class='col-md-6 col-sm-6 col-xs-12'>
                <div class='x_panel'>
                  <div class='x_title'>
                    <h2><a href='#' data-toggle='tooltip' title='".descricao($metrica)."' >$metrica</a></h2></small></h2>
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
                     <div id='echart_gauge' style='height:280px;'></div>
                  </div>
                </div>
              </div>


				
              ";

              grafico_gauge($valor,$number);
     }
	
}


function grafico_barras($valor,$versao,$number){
	echo "<script type='text/javascript'>
		var ctx = document.getElementsByClassName('myChart$number');
        var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
        labels: [
        "; 

        for($i=0; $i<count($versao);$i++){
			echo "'$versao[$i]',";
		}
          
          echo "],
          datasets: [{
          label: '%',
          backgroundColor: ['#26B99A', '#9B59B6','#26B99A', '#9B59B6','#26B99A', '#9B59B6','#26B99A', '#9B59B6'],
          data: [
          ";


        for($i=0; $i<count($versao);$i++){
			echo "'$valor[$i]',";
		}

          echo "]
          },]
        },

        options: {
          scales: {
          yAxes: [{
            ticks: {
            beginAtZero: true
            }
          }]
          }
        }
        });
		</script>";
}

function grafico_pizza($valor,$versao,$number){
	echo "<script type='text/javascript'>
			var ctx = document.getElementsByClassName('pieChart$number');
				  var data = {
					datasets: [{
					  data: [" .$valor['major']['2.2']."," .$valor['minor']['2.2'].", " .$valor['blocker']['2.2'].", " .$valor['info']['2.2']."],





					  backgroundColor: [
						'#455C73',
						'#9B59B6',
						'#BDC3C7',
						'#26B99A',
						'#3498DB'
					  ],
					  label: 'My dataset' // for legend
					}],
					labels: [
					  'Major',
					  'Minor',
					  'Blocker',
					  'Info'
					]
				  };

				  var pieChart = new Chart(ctx, {
					data: data,
					type: 'pie',
					otpions: {
					  legend: false
					}
				  });
				</script>";
}

function grafico_linha($valor,$versao,$number){
	echo "<script type='text/javascript'>
		var ctx = document.getElementsByClassName('lineChart$number');
			  var lineChart = new Chart(ctx, {
				type: 'line',
				data: {
				  labels: [
				  "; 

        for($i=0; $i<count($versao);$i++){
			echo "'$versao[$i]',";
		}
          
          echo "],
				  datasets: [{
					label: 'Linhas',
					backgroundColor: 'rgba(38, 185, 154, 0.31)',
					borderColor: '#9B59B6',
					pointBorderColor: 'rgba(38, 185, 154, 0.7)',
					pointBackgroundColor: '#9B59B6',
					pointHoverBackgroundColor: '#9B59B6',
					pointHoverBorderColor: '#9B59B6',
					pointBorderWidth: 1,
					data: [
			          ";


			        for($i=0; $i<count($versao);$i++){
						echo "'$valor[$i]',";
					}

			          echo "]
				  }, ]
				},
			  });

			  	</script>	";
}

function grafico_gauge($valor,$number){
	echo"
	<script type'text/javascript'>
    google.charts.load('current', {'packages':['gauge']});
    google.charts.setOnLoadCallback(drawGauge);

    var gaugeOptions = {min: 0, max: 280, yellowFrom: 200, yellowTo: 250,
      redFrom: 250, redTo: 280, minorTicks: 5};
    var gauge;

    function drawGauge() {
      gaugeData = new google.visualization.DataTable();
      gaugeData.addColumn('number', 'Engine');
      gaugeData.addColumn('number', 'Torpedo');
      gaugeData.addRows(2);
      gaugeData.setCell(0, 0, 120);
      gaugeData.setCell(0, 1, 80);

      gauge = new google.visualization.Gauge(document.getElementById('gauge_div'));
      gauge.draw(gaugeData, gaugeOptions);
    }

    function changeTemp(dir) {
      gaugeData.setValue(0, 0, gaugeData.getValue(0, 0) + dir * 25);
      gaugeData.setValue(0, 1, gaugeData.getValue(0, 1) + dir * 20);
      gauge.draw(gaugeData, gaugeOptions);
    }
  </script>
	";

}

function compara_valores($valor_ant,$valor_novo){
	if($valor_ant > $valor_novo){
		//echo "MAIOR ANTERIOR";
		return "<div class='icon'><i class='fa fa-arrow-down'></i></div>";
	}
	else if ($valor_ant < $valor_novo){
		//echo "MAIOR NOVO";
		return "<div class='icon'><i class='fa fa-arrow-up'></i></div>"; 
	}
	else if($valor_ant == $valor_novo){
		//echo "IGUAL";
		return "<div class='icon'><i class='fa fa-minus'></i></div>";
	}
}



function cria_widget_menor($id_projeto,$metrica1, $metrica2, $metrica3, $metrica4){
	$valor_metrica1 = pega_metricas_generico($id_projeto,$metrica1);
	$valor_metrica2 = pega_metricas_generico($id_projeto,$metrica2);
	$valor_metrica3 = pega_metricas_generico($id_projeto,$metrica3);
	$valor_metrica4 = pega_metricas_generico($id_projeto,$metrica4);
	 
	$tam_metrica1 = count($valor_metrica1);
	$tam_metrica2 = count($valor_metrica2);
	$tam_metrica3 = count($valor_metrica3);
	$tam_metrica4 = count($valor_metrica4);
	
	// echo "</br>";
	// compara_valores($valor_metrica2[$tam_metrica-2],$valor_metrica2[$tam_metrica-1]);
	// echo "</br>";
	// echo $valor_metrica2[0]."</br>";
	// echo $valor_metrica2[1]."</br>";

	echo "
	<div class='row'></div>
      <div class='row top_tiles'>
              <div class='animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                <div class='tile-stats'>".                  
                  compara_valores($valor_metrica1[$tam_metrica1-2],end($valor_metrica1))
                  ."<div class='count'>".end($valor_metrica1)."</div>
                  <h3><font size='4'><a href='#' data-toggle='tooltip' title='".descricao($metrica1)."' >$metrica1</a></font></h3>
                  <p></p>
                </div>
              </div>
              <div class='animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                <div class='tile-stats'>".
                  compara_valores($valor_metrica2[$tam_metrica2-2],end($valor_metrica2))
                  ."<div class='count'>".end($valor_metrica2)."</div>
                  <h3><font size='4'><a href='#' data-toggle='tooltip' title='".descricao($metrica2)."' >$metrica2</a</font></h3>
                  <p></p>
                </div>
              </div>
              <div class='animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                <div class='tile-stats'>". 
                  compara_valores($valor_metrica3[$tam_metrica3-2],end($valor_metrica3))
                  ."<div class='count'>".end($valor_metrica3)."</div>
                  <h3><font size='4'><a href='#' data-toggle='tooltip' title='".descricao($metrica3)."' >$metrica3</a></font></h3>
                  <p></p>
                </div>
              </div>
              <div class='animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                <div class='tile-stats'>".
                  compara_valores($valor_metrica4[$tam_metrica4-2],end($valor_metrica4))
                  ."<div class='count'>".end($valor_metrica4)."</div>
                  <h3><font size='4'><a href='#' data-toggle='tooltip' title='".descricao($metrica4)."' >$metrica4</a></font></h3>
                  <p></p>
                </div>
                </div>";
}




?>