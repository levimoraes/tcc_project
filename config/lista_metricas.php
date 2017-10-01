<?php 






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


	if($result->num_rows>0){
		while($row = $result->fetch_assoc()) {
			
			$versao = $row['Versao'];
			$id = $row['Metrica'];
			$valor = $row['Valor'];

			array_push($LOC, $valor);
			array_push($LOC_version, $versao);


			// 	criar_grafico(1,1);
				
			 
			// if ($id == "Comentario"){
			// 	criar_grafico(2,1);
				
			}

			$c =  array_combine($LOC_version, $LOC);
			criar_grafico(1,$LOC,$LOC_version);

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

	$LOC = array();
	$LOC_version = array();


	if($result->num_rows>0){
		while($row = $result->fetch_assoc()) {
			
			$versao = $row['Versao'];
			$id = $row['Metrica'];
			$valor = $row['Valor'];

			array_push($LOC, $valor);
			array_push($LOC_version, $versao);
				
			}

			$c =  array_combine($LOC_version, $LOC);
			criar_grafico(2,$LOC,$LOC_version);

		}

	
}

function criar_grafico($opcao,$valor,$versao){
	
	//GRAFICO BARRA
	if($opcao==1){
		echo "<div class='row'></div>
		 <div class='col-md-6 col-sm-6 col-xs-12'>
                <div class='x_panel'>
                  <div class='x_title'>
                    <h2>LOC <small>Sessions</small></h2>
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
                    <div id='graph_bar$opcao' style='width:100%; height:280px;'></div>
                  </div>
                </div>
              </div>
              
              <div id='clearfix'></div>

              ";

              grafico_barras($valor,$versao);

     }
     
     //GRAFICO BARRA GRUPO
     if ($opcao==2) {
     	echo "<div class='row'>
     	<div class='col-md-6 col-sm-6 col-xs-12'>
                <div class='x_panel'>
                  <div class='x_title'>
                    <h2>COMMENT <small>Sessions</small></h2>
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
                    <div id='graph_bar_group$opcao' style='width:100%; height:280px;'></div>
                  </div>
                </div>
              </div>
              <div class='clearfix'></div>"; 

              grafico_barras_grupo($valor,$versao);        	
     

     }
     //GRAFICO DE PIZZA
     if($opcao==3){
     	echo"<div class='col-md-6 col-sm-6 col-xs-12'>
                <div class='x_panel'>
                  <div class='x_title'>
                    <h2>Pie Chart <small>Sessions</small></h2>
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
                    <div id='graph_donut' style='width:100%; height:300px;'></div>
                  </div>
                </div>
              </div> ";
              
     }

     //GRAFICO DE LINHAS
     if ($opcao==4){
     	echo "<div class='col-md-6 col-sm-6 col-xs-12'>
                <div class='x_panel'>
                  <div class='x_title'>
                    <h2>Line Graph <small>Sessions</small></h2>
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
                    <div id='graph_line' style='width:100%; height:300px;'></div>
                  </div>
                </div>
              </div>";
     }         


	
}


function grafico_barras($valor,$versao){
	echo "<script type='text/javascript'>
	Morris.Bar({
		element: 'graph_bar1',
		data: [
		";

		for($i=0; $i<count($versao);$i++){
			echo "{versao: '$versao[$i]', linhas: $valor[$i]},";
		}

		echo "],
		xkey: 'versao',
		ykeys: ['linhas'],
		labels: ['Linhas'],
		barRatio: 0.4,
		barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
		xLabelAngle: 35,
		hideHover: 'auto',
		resize: true
	});
</script>";

}

function grafico_barras_grupo($valor,$versao){
	echo "<script type='text/javascript'>
	Morris.Bar({
		element: 'graph_bar_group2',
		data: [";
		for($i=0; $i<count($versao);$i++){
			echo "{versao: '$versao[$i]', 'valor': '$valor[$i]', 'sorned': 0},";
		}		
		echo "],
		xkey: 'versao',
		barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
		ykeys: ['valor', 'sorned'],
		labels: ['Licensed', 'SORN'],
		hideHover: 'auto',
		xLabelAngle: 60,
		resize: true
	});
</script>";

}

function grafico_pizza($valor,$versao){
	echo "<script type='text/javascript'>
	Morris.Donut({
				  element: 'graph_donut',
				  data: [
					{label: 'Jam', value: 25},
					{label: 'Frosted', value: 40},
					{label: 'Custard', value: 25},
					{label: 'Sugar', value: 10}
				  ],
				  colors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
				  formatter: function (y) {
					return y + "%";
				  },
				  resize: true
				});
				</script>";
}

function grafico_linha($valor,$versao){
	echo "<script type='text/javascript'>
	Morris.Line({
				  element: 'graph_line',
				  xkey: 'year',
				  ykeys: ['value'],
				  labels: ['Value'],
				  hideHover: 'auto',
				  lineColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
				  data: [
					{year: '2012', value: 20},
					{year: '2013', value: 10},
					{year: '2014', value: 5},
					{year: '2015', value: 5},
					{year: '2016', value: 20}
				  ],
				  resize: true
				});

				$MENU_TOGGLE.on('click', function() {
				  $(window).resize();
				});
			</script>";
			
}



?>